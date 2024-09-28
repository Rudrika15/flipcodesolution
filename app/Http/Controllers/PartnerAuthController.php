<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use App\Models\Salon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use Mail;
use App\Mail\DemoMail;
use Carbon\Carbon;
use Illuminate\Support\Facades\URL;


class PartnerAuthController extends Controller
{
    /**
     * Create Partner (Salon Salon User)
     * @param Request $request
     * @return Partner
     */
    public function createPartner(Request $request)
    {
        try {
            // Validated input
            $validateUser = Validator::make(
                $request->all(),
                [
                    'name' => 'required',
                    'email' => 'required|email|unique:partners,email',
                    'password' => 'required'
                ]
            );

            if ($validateUser->fails()) {
                return response()->json([
                    'status' => false,
                    'message' => 'validation error',
                    'errors' => $validateUser->errors()
                ], 401);
            }

            $partner = Partner::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password)
            ]);
            $currentDate = Carbon::now()->toDateString();
            $salon = Salon::create([
                'salon_name' => $request->name,
                'partner_id' => $partner->id,
                'salon_legal_name' => $request->name,
                'email_verification_time' => $currentDate
            ]);

            $mailData = [
                'title' => 'Mail from Comber.com',
                'body' => 'This is for testing email using smtp.',
                'url' => '<a href="' . route('veryfiedEmail', $partner->id) . '" style="background-color:green;padding:10px;text-decoration:none;color:white"><b>Verified You Email Address </b><a>'
            ];
            if ($partner->email) {
                Mail::to($partner->email)->send(new DemoMail($mailData));
            }
            return response()->json([
                'status' => true,
                'data' => $partner,
                'partner_id' => $salon->id,
                'token' => $partner->createToken("mobile", ['role:partner'])->plainTextToken,
                'message' => 'Partner created successfully'
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage()
            ], 500);
        }
    }

    /**
     * Login Partner User
     * @param Request $request
     * @return Partner
     */
    public function loginPartner(Request $request)
    {
        try {
            // Validated input
            $request->validate([
                'email' => 'required|email',
                'password' => 'required',
            ]);

            $partner = Partner::where('email', $request->email)->first();
            if (!$partner || !Hash::check($request->password, $partner->password)) {
                throw ValidationException::withMessages([
                    'email' => ['The provided credentials are incorrect.'],
                ]);
            }
            $salon = Salon::where('partner_id', $partner->id)->where('email_verified', '=', 'true')->first();
            if ($salon) {
                return response()->json([
                    'status' => true,
                    'partner' => $partner,
                    'partner_id' => $salon->id,
                    'token' => $partner->createToken('mobile', ['role:partner'])->plainTextToken,
                    'message' => 'Login successfully'
                ]);
            } else {
                return response()->json([
                    'status' => false,
                    'message' => 'Please Verified Email'
                ], 200);
            }
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage()
            ], 500);
        }
    }
    public function veryfiedEmail($id)
    {
        try {
            $partner = Partner::find($id);
            if ($partner->id) {
                $salon = Salon::where('partner_id', $partner->id)->first();
                if ($salon->email_verification_time >= Carbon::now()->toDateString()) {
                    $salon->email_verified = 'true';
                    $salon->save();
                    return response()->json([
                        'status' => true,
                        'message' => 'Email Verified Successfully',
                        'data' => $salon
                    ], 200);
                } else {
                    return response()->json([
                        'status' => true,
                        'message' => 'Email Expired Verified'
                    ], 200);
                }

                // $salon->email_verified = 'true';
                // $salon->save();
                // return response()->json([
                //     'status' => true,
                //     'message' => 'Email Verified Successfully',
                //     'data' => $salon
                // ], 200);
            } else {
                return response()->json([
                    'status' => false,
                    'message' => 'Partner Not Verified successfully',
                    'data' => $partner
                ], 200);
            }
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage()
            ], 500);
        }
    }
}

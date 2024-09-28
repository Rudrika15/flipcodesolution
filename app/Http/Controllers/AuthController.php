<?php

namespace App\Http\Controllers;

use App\Helpers\Utils;
use App\Models\Partner;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{

    public function createUser(Request $request)
    {
        try {
            request()->validate([
                'name' => 'required',
                'email' => 'required|email|unique:users,email',
                'password' => 'required',
                'gender' => ['required', 'regex:/^.*(male|Male|female|Female).*$/']
            ]);

            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'phone' => $request->phone,
                'email_verified_at' => $request->email_verified_at,
                'profile_pic_url' => $request->profile_pic,
                'gender' => $request->gender,
                'referral_code' => $request->referral_code,
                'latitude' => $request->latitude,
                'longitude' => $request->longitude,
                'social_media_login_provider' => $request->social_media_login_provider,
                'social_media_token' => $request->social_media_token,
                'language' => $request->language ?? 'en',
                'status' => $request->status ?? 'pending',
                'status_changed' => $request->status_changed,
                'status_changed_by' => $request->status_changed_by
            ]);

            return Utils::successResponse([
                'customer' => $user,
                'token' => $user->createToken('mobile', ['role:user'])->plainTextToken
            ]);
        } catch (ValidationException $ex) {
            return Utils::invalidInputErrorResponse($ex);
        } catch (Exception $ex) {
            return Utils::generalErrorResponse($ex);
        }
    }

    public function loginUser(Request $request)
    {
        try {
            // Validated input
            $request->validate([
                'email' => 'required|email',
                'password' => 'required',
            ]);

            $user = User::where('email', $request->email)->first();
            if (!$user || !Hash::check($request->password, $user->password)) {
                throw ValidationException::withMessages([
                    'email' => ['The provided credentials are incorrect.'],
                ]);
            }

            return Utils::successResponse([
                'user' => $user,
                'token' => $user->createToken('mobile', ['role:user'])->plainTextToken,
                'message' => 'Login successfully'
            ]);
        } catch (ValidationException $ex) {
            return Utils::invalidInputErrorResponse($ex);
        } catch (Exception $ex) {
            return Utils::generalErrorResponse($ex);
        }
    }
}

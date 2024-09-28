<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class AdminAuthController extends Controller
{
    /**
     * Create Admin (Admin User)
     * @param Request $request
     * @return Admin
     */
    public function createAdmin(Request $request)
    {
        try {
            // Validated input
            $validateUser = Validator::make($request->all(),
            [
                'name' => 'required',
                'email' => 'required|email|unique:admins,email',
                'password' => 'required'
            ]);

            if($validateUser->fails()) {
                return response()->json([
                    'status' => false,
                    'message' => 'validation error',
                    'errors' => $validateUser->errors()
                ], 401);
            }

            $admin = Admin::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password)
            ]);

            return response()->json([
                'status' => true,
                'message' => 'Admin created successfully',
                'token' => $admin->createToken("mobile", ['role:admin'])->plainTextToken
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'status' =>false,
                'message' => $th->getMessage()
            ], 500);
        }
    }

    /**
     * Login Admin User
     * @param Request $request
     * @return Admin
     */
    public function loginAdmin(Request $request)
    {
        try {
            // Validated input
            $request->validate([
                'email' => 'required|email',
                'password' => 'required',
            ]);

            $admin = Admin::where('email', $request->email)->first();
            return response()->json([
                'admin' => $admin,
                'token' => $admin->createToken('mobile', ['role:admin'])->plainTextToken
            ]);
            if (!$admin || !Hash::check($request->password, $admin->password)) {
                throw ValidationException::withMessages([
                    'email' => ['The provided credentials are incorrect.'],
                ]);
            }

            

        } catch (\Throwable $th) {
            return response()->json([
                'status' =>false,
                'message' => $th->getMessage()
            ], 500);
        }
    }
}

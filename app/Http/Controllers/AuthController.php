<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterAccountRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function registerAccount(RegisterAccountRequest $request)
    {
        $validatedData = $request->validated();
        $validatedData['password'] = Hash::make($validatedData['password']);

        if ($item = User::create($validatedData)) {
            Auth::login($item);
            return response()->json(['status' => 'success', 'message' => 'Your account has been created successfully.', 'data' => $item], 200);
        }

        return response()->json(['status' => false, 'message' => 'Something went wrong please try again later'], 500);
    }

    public function login(LoginRequest $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            return response()->json(['status' => 'success', 'message' => 'Logged in successfully.', 'data' => $user], 200);
        }

        return response()->json(['status' => false, 'message' => 'Invalid email or password.'], 500);
    }
}

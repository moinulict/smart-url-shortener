<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterAccountRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function registerAccount(RegisterAccountRequest $request)
    {
        if ($item = User::create($request->validated())) {
            Auth::login($item);
            return response()->json(['status' => 'success', 'message' => 'Your account has been created successfully.', 'data' => $item], 200);
        }

        return response()->json(['status' => false, 'message' => 'Something went wrong please try again later'], 500);
    }
}

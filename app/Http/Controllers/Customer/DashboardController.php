<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Http\Requests\ChangePasswordRequest;
use App\Models\UrlGen;
use App\Models\UrlGenTracking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function dashboard(){

        $data = array(
            "totalLinks" => UrlGen::where('user_id', Auth::user()->id)->count(),
            "totalVisitors" => UrlGenTracking::where('user_id', Auth::user()->id)->count(),
            "totalUniqueVisitors" => UrlGenTracking::where('user_id', Auth::user()->id)->groupBy('ip')->count()
        );

        return view('customer/dashboard')->with($data);

    }

    public function logout(){
        
        Auth::logout();

        return redirect('/');
    }

    public function changePassword(ChangePasswordRequest $request)
    {
        $user = Auth::user();
        $credentials = $request->only('password', 'new_password', 'confirm_password');

        if (!Hash::check($credentials['password'], $user->password)) {
            return response()->json(['status' => false, 'message' => 'Current password is incorrect.'], 500);
        }

        if ($credentials['new_password'] != $credentials['confirm_password']) {
            return response()->json(['status' => false, 'message' => 'Password did not match.'], 500);
        }

        $user->password = Hash::make($credentials['new_password']);
        $user->save();

        Auth::logout();

        return response()->json(['status' => 'success', 'message' => 'Password changed successfully.'], 200);
    }
}

<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Http\Requests\ChangePasswordRequest;
use App\Models\UrlGen;
use App\Models\UrlGenTracking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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

    public function changePassword(){
        
        return view('customer/change-password');
    }

    public function updatePassword(ChangePasswordRequest $request)
    {
        try {
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
    
            return response()->json(['status' => 'success', 'message' => 'Your password has been updated successfully, You will be logged out & redirected automatically.'], 200);
        } catch (\Throwable $th) {
            return response()->json(['status' => false, 'message' => $th->getMessage()], 500);
        }

    }

    public function updateAccount(Request $request)
    {
        try {
            $user = Auth::user(); 
            $user->name = $request->name;
            $user->save();
            return redirect()->back()->with(['message' => 'Your account has been updated successfully.', 'message_type' => 'success']);
        } catch (\Throwable $th) {
            return redirect()->back()->with(['message' => $th->getMessage(), 'message_type' => 'danger']);
        }

    }

    public function account(){
        return view('customer/my-account')->with('user', Auth::user());
    }

    public function myUrls(){
        $urls = UrlGen::where('user_id', Auth::user()->id)->select('id', 'long_url', 'short_url', 'created_at')->latest()->get();

        return view('customer/my-urls')->with('urls', $urls);
    }
}

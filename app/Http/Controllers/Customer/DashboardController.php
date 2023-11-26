<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
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
}

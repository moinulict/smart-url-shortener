<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function dashboard(){

        return view('customer/dashboard');

    }

    public function logout(){
        
        Auth::logout();

        return redirect('/');
    }
}

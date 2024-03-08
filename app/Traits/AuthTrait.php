<?php

namespace App\Traits;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

trait AuthTrait
{
    public function createAccount($data)
    {
        return User::create($data);
    }

    public function doLogin($user)
    {
        return Auth::login($user);
    }
}

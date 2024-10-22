<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Traits\AuthTrait;
use Illuminate\Http\Request;
use Socialite;
use Illuminate\Support\Facades\Auth;

class SocialController extends Controller
{
    use AuthTrait;

    public function redirect($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function Callback($provider)
    {
        try {
            $userSocial =   Socialite::driver($provider)->stateless()->user();
            $user      =   User::where(['email' => $userSocial->getEmail()])->first();
            if ($user) {
                $this->doLogin($user);
                return redirect()->route('dashboard');
            }
            $data = [
                'name'          => $userSocial->getName(),
                'email'         => $userSocial->getEmail(),
                'image'         => $userSocial->getAvatar(),
                'provider_id'   => $userSocial->getId(),
                'provider'      => $provider
            ];
            info($data);
            $user = $this->createAccount($data);
            $this->doLogin($user);
            return redirect()->route('dashboard');
        } catch (\Throwable $th) {
            return redirect('/');
        }
    }

}

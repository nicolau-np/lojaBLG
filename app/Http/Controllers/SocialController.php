<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator, Redirect, Response, File;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class SocialController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('facebook')->redirect();
    }
    public function callback()
    {
        $getInfo = Socialite::driver('facebook')->user();
        $user = $this->createUser($getInfo, 'facebook');
        Auth::login($user);
        return redirect()->to('/home');
    }

    function createUser($getInfo)
    {
        $user = User::where('provider_id', $getInfo->id)->first();
        if (!$user) {
            $user = User::create([
                'name'     => $getInfo->name,
                'email'    => $getInfo->email,
                'provider' => 'facebook',
                'provider_id' => $getInfo->id
            ]);
        }
        return $user;
    }
}
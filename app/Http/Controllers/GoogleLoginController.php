<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;

class GoogleLoginController extends Controller
{
     public function redirectToGoogle() {
         return Socialite::driver('google')->redirect();
    }
    
    public function handleGoogleCallback() {
          $googleUser = Socialite::driver('google')->user();
            dd($googleUser);
          $user = User::updateOrCreate([
            'google_id' => $googleUser->id,

          ], [
            'name'=>$googleUser->name,
            'email'=>$googleUser->email,
            'password'=>$googleUser->token,

        //'google_refresh_token' => $googleUser-> refreshToken,    

          ]);
            Auth::login($user);
            return redirect()->route('/categoria');
        }
        public function longout (Request $request): Redirector|RedirectorResponse{
            return redirect('/');
        }
}   
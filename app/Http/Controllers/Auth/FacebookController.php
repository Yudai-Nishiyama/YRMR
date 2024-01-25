<?php

// namespace App\Http\Controllers\Auth;

// use Exception;
// use App\Models\User;
// use Illuminate\Http\Request;
// use App\Http\Controllers\Controller;
// use Illuminate\Support\Facades\Auth;
// use Laravel\Socialite\Facades\Socialite;

namespace App\Http\Controllers\Auth;


use Exception;
use App\Models\User;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class FacebookController extends Controller
{
    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect("/");
    }

    public function handleFacebookCallback()
    {
        try {
            $user = Socialite::driver('facebook')->user();
            $finduser = User::where('facebook_id', $user->id)->first();
            if($finduser){
                Auth::login($finduser);
                return redirect('/');
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'facebook_id'=> $user->id,
                    'password' => encrypt('my-facebook')
                ]);

                Auth::login($newUser);
                return redirect("/");
            }

        } catch (Exception $e) {
            return redirect('login');
        }
    }
}


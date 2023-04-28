<?php

namespace App\Http\Controllers\auth;


use App\Models\User;
use App\Models\Admin;
use Illuminate\Http\Request;
use App\Models\SocialAccount;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class SocialLoginController extends Controller
{
    public function redirectToProvider(String $provider){
        return Socialite::driver($provider)->redirect();
    }

    public function providerCallback(String $provider){

        try{
            $social_user = Socialite::driver($provider)->user();

            // First Find Social Account
            $account = SocialAccount::where([
                'provider_name'=>$provider,
                'provider_id'=>$social_user->getId()
            ])->first();

            // If Social Account Exist then Find User and Login
            if($account){
                // auth('admin')->login($account->user);
                Auth::guard('admin')->login($account->user);
                return redirect()->route('dashboard');
            }

            // Find User
            $user = Admin::where([
                'email'=>$social_user->getEmail()
                ])->first();

                // If User not get then create new user
                if(!$user){
                    $user = Admin::create([
                        'email'=>$social_user->getEmail(),
                        'name'=>$social_user->getName()
                    ]);
                }

            // Create Social Ac`counts
           
            $user->socialAccounts()->create([
                'provider_id'=>$social_user->getId(),
                'provider_name'=>$provider
            ]);

            // Login
            Auth::guard('admin')->login($user);
            return redirect()->route('home');

        }catch(\Exception $e){
            return redirect()->route('login');
        }
    }
}

<?php

namespace App\Http\Controllers\Auth;
use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Socialite\Socialite;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthGoogleController extends Controller
{
    public function ridirect(){
        return Socialite::driver('google')->redirect();
    }


    public function callback(){

        try{
            $googleUser = Socialite::driver('google')->user();

            $user = User::where('email', $googleUser->getEmail())->first();

            if(!$user){
                $user = User::create([
                    'name' => $googleUser->getName(),
                    'email'=> $googleUser->getEmail(),
                    'google_id'=> $googleUser->getId(),
                    'avatar'=> $googleUser->getAvatar(),
                    'email_verified_at' => now(),
                    'password'=> Hash::make(rand(10000,9999999)),
                ]);
            }else{
                $user->update([
                    'google_id'=> $googleUser->getId(),
                    'email_verified_at' => now(),
                    'avatar'=> $googleUser->getAvatar(),
                ]);
            }

            Auth::login($user);
            return redirect()->route('analytics')->with('success', 'Berhasil login dengan Google');

        } catch(\Exception $e){
            return redirect()->route('login')->with('error', 'Gagal login dengan Google: '.$e->getMessage());
        }

    }
}
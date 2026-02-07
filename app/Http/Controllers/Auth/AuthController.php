<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{





    public function showlogin(Request $request)
    {
        return view('auth.login');
    }

    public function showregister(Request $request)
    {
        return view('auth.register');
    }


    public function login(Request $request)
    {
        $credential = $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        if(Auth::attempt($credential)) {
            $request->session()->regenerate();
            return redirect()->route('analytics');
        }

        throw ValidationException::withMessages([
            'email' => 'email or password is incorrect',
        ]);

        
    }  
    



public function register(Request $request)
{
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:8|confirmed',
    ]);

    $user = User::create([
        'name' => $validated['name'],
        'email' => $validated['email'],
        'password' => $validated['password'],
    ]);

    Auth::login($user);

    return redirect()->route('analytics'); 
}


    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('home');
    }
}

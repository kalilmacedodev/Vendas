<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use RealRashid\SweetAlert\Facades\Alert;

class AuthController extends Controller
{

    public function login(){

        if(Auth::check()){
            return redirect()->route('home');
        }
        return view('login');
    }

    public function post_login(Request $request){

        Auth::logout();

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials, true)) {
            $request->session()->regenerate();

            return redirect()->route('home');
        } else{
            throw ValidationException::withMessages(['password' => "Senha incorreta"]);
        }
    }

    public function logout(Request $request){
        Auth::logout();
        return redirect()->route('home');
    }

}

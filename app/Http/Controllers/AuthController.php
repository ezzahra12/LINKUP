<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\ResetPasswordRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLogin(){
        return view("auth.login");
    }

    public function showRegister(){
        return view("auth.register");
    }

    public function login(LoginRequest $request){

        if(Auth::attempt(["email" => $request->email, "password" => $request->password])){
            return redirect()->route('home');
        }

        return redirect()->back()->with("error", "Invalid credential");
    }

    public function register(RegisterRequest $request){
        User::create([
            "name" => $request->name,
            "pseudo" =>$request->pseudo,
            "email" =>$request->email,
            "password" => Hash::make($request->password)
        ]);

        return redirect()->route('login');
    }

    public function  logout(){
        Auth::logout();
        return redirect()->route('login');
    }

    public function reset_password(ResetPasswordRequest $request){
        if(Hash::check($request->current_password, Auth::user()->password)){

        Auth::user()->update([
                "password" => Hash::make($request->password)
            ]);

            return redirect()->route('profile.show');
        }

        return redirect()->back()->with('error', 'Incorrect password');
    }

}

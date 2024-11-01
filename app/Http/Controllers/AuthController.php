<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

use Hash;

class AuthController extends Controller
{
    
    public function login(){
        return view('auth.login');
    }

    public function register(){
        return view('auth.register');
    }

    public function forgotPassword(){
        return view('auth.forgot');
    }

    public function create_user(Request $request){
        //dd($request->all());

        request()->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required'
        ]);

        $save = new User();
        $save->name = trim($request->name);
        $save->email = trim($request->email);
        $save->password = Hash::make($request->password);
        $save->save();

        return redirect('login')->with('success','Your account registerd successfully');

    }

}

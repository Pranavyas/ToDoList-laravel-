<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class registrationController extends Controller
{
    //

    public function create(){

        return view('session.register');
    }

    public function store(){
        
        $this->validate(request(),[
            'name' => 'required',
            'password' => 'required|confirmed|min:6',
            'email' => 'required|email' 
        ]);

        $user = User::create([ 
            'name' => request('name'),
            'email' => request('email'),
            'password' => bcrypt(request('password'))
            ]);

        auth()->login($user);

        return redirect('/post');
    }

  
    public function show(){

        return view('layout.index');
    }

}


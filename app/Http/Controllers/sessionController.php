<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sessionController extends Controller
{
    //
    public function __construct(){
        $this->middleware('guest')->except('log');
    }

    public function create(){
        return view('session.login');
    }

    public function show(){
     
      //  dd(request(['email','password']));

       if(! auth()->attempt(request(['email','password']))){
           return back()->withErrors([
               'message' => 'Please sign in with the proper credential'
           ]);
       }

       return redirect('/ram');

        
    }

    public function log(){
        
                auth()->logout();
        
                return redirect('/');
        
    }

        
}

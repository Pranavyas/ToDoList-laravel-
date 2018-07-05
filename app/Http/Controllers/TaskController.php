<?php

namespace App\Http\Controllers;

use App\task;

class TaskController extends Controller

{
    //

    public function index(){
        return view('welcome');
    }

    public function about(){

        // $task= task::all();
        // return view('about',compact('task'));
        return "hiii";
    }

    public function aboutr(task $r){

    //$task= DB::table('task')->find($r);

     //$task= task::find($r);
    
     return view('id',compact('r'));   
    
    }
}

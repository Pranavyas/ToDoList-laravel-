<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\task;

class ditto extends Controller
{
    //

    public function index(){
        $task= task::complete();
        return view('task',compact('task'));
    }

    public function task(task $task){

    // $task= task::find($id);
    
    return view('tasks',compact('task'));

    
    }

}

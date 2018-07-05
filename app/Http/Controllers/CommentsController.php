<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\post;
use App\lure;

class CommentsController extends Controller
{
    //

    public function store(Post $post)
    
    {

        lure::create([

            'body'=> request('body'),
            'post_id' => $post->id  

        ]);

        return back();
    }
}

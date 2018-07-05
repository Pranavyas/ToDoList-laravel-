<?php

namespace App;

use App\User;

class comment extends Model
{
    //
   public function post(){
       return $this->belongsTo(post::class);
   }

   public function user(){

       return $this->belongsTo(User::class);
   
  }
}

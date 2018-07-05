<?php

namespace App;

use App\User;

class post extends Model
{
    //
    public function comment(){
        return $this->hasMany(comment::class);
    }

    public function addcomment($body){
        return $this->comment()->create(compact('body'));
    }
    
    public function user(){
        return $this->belongsTo(User::class);
    }
}

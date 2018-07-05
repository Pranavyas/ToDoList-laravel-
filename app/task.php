<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class task extends Model
{
    //
    public static function complete(){

        return static::where('complete',1)->get();

    }
    public static function get(){

        return static::where('id','>',2)->get();
    }
}

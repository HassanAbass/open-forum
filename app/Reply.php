<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    function owner(){
        return $this->belongsTo(User::class,'user_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Friend extends Model
{
    function friends(){
        return $this->belongsToMany(\App\Models\User::class,'user_id');
    }

}

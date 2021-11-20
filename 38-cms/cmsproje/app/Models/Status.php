<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $table='status';
    protected $dates = ['created_at'];

    function user(){
        return $this->belongsTo(\App\Models\User::class);
    }
}

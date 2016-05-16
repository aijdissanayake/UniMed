<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class role extends Model
{
    function getUsers() {
        return $this->hasMany('App\User','role','role_name');
    }
    
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class appointment extends Model
{
    public function patient() {
        return $this->belongsTo('App\patient');
    }
    public function session(){
    	return $this->belongsTo('App\Session');
    }


}

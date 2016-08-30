<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class appointment extends Model
{
    public function getPatient() {
        return $this->belongsTo('App\patient','patient_id', 'id');
    }
    public function getSession(){
    	return $this->belongsTo('App\Session','session_id','id');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class patient extends Model
{
    public function getUser() {
        return $this->belongsTo('App\User','user_id','id');
    }
    
    public function getPatientVisits() {
        return $this->hasMany('App\patientVisit');
    }
}

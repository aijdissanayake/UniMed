<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class patient extends Model
{
    public function getUser() {
        return $this->hasOne('App\User');
    }
    
    public function getPatientVisits() {
        return $this->hasMany('App\patientVisit');
    }
}

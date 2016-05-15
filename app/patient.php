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
    
    public function getAppointments() {
        return $this->hasMany('App\appointment');
    }
    
    public function getFullBloodReports() {
        return $this->hasMany('App\fullBloodReport','patient_id','id');
    }
}

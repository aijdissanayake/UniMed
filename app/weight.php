<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class weight extends Model
{
    public function getPatient() {
        return $this->belongsTo('App\patient','patient_id','id');
    }

    public function getPatientVisit() {
        return $this->belongsTo('App\patientVisit','patientID','id');
    }
}

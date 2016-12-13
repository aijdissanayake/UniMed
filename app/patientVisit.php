<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class patientVisit extends Model
{
    public function getPatient() {
        return $this->belongsTo('App\patient','patientID','id');
    }

    public function getWeightRecord() {
        return $this->hasOne('App\weight','visitRec_id','id');
    }
}

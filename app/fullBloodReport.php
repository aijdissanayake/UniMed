<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fullBloodReport extends Model
{
    public function getPatient() {
        return $this->belongsTo('App\patient','patient_id', 'id');
    }
}

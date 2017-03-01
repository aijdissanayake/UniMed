<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class session extends Model
{
    public function appointments() {
        return $this->hasMany('App\appointment');
    }

    public function unavailablePeriods(){
    	return $this->hasMany('App\unavailablePeriod','session_unavailableperiod');
    }
}


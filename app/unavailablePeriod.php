<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class unavailablePeriod extends Model
{
    public function sessions() {
        return $this->belongsToMany('App\session','session_unavailableperiod');
    }
}

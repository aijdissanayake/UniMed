<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class income extends Model
{
    public function getIncomeType() {
        return $this->belongsTo('App\incomeType','incomeType','id');
    }
}

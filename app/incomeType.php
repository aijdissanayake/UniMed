<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class incomeType extends Model
{
    public function getIncomes() {
        return $this->hasMany('App\income','incomeType','id');
    }
}

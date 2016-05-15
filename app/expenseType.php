<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class expenseType extends Model
{
    public function getExpenses() {
        return $this->hasMany('App\expense', 'paymentType','id');
    }
}

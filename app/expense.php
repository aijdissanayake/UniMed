<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class expense extends Model
{
    public function getExpenseType() {
        return $this->belongsTo('App\expenseType', 'paymentType','id');
    }
}

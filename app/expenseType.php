<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class expenseType extends Model
{
    
    protected $hidden = [
        'created_at', 'updated_at',
    ];
    
    
    public function getExpenses() {
        return $this->hasMany('App\expense', 'paymentType','id');
    }
}

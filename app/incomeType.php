<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class incomeType extends Model
{
    
    protected $hidden = [
        'created_at', 'updated_at',
    ];
    
    public function getIncomes() {
        return $this->hasMany('App\income','incomeType','id');
    }
}

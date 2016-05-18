<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    /*
     *  relationships
     */
    
    public function getPatient() {
        return $this->hasOne('App\patient','user_id','id');
    }
    
    public function getDoctor() {
        return $this->hasOne('App\doctor','user_id','id');
    }
    
    public function getLabTech() {
        return $this->hasOne('App\labtech','user_id','id');
    }
    
    public function getAssistant() {
        return $this->hasOne('App\assistant','user_id','id');
    }
    
    public function getRole() {
        return $this->belongsTo('App\role','role','role_name');
    }
    
    public function getLoginRecords() {
        return $this->hasMany('App\loginRecord','user_id','id');
    }
}

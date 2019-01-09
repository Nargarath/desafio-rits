<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Companies extends Model
{
    protected $fillable = [
        'name','address', 'number', 'city','state','contry'
    ];

    function vacants(){
        return $this->hasMany(JobVacants::class);
    }
}

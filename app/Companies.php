<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Companies extends Model
{
    protected $fillable = [
        'name','address', 'number','complement','CEP','neighborhood', 'city','state','country'
    ];

    function vacants(){
        return $this->hasMany(JobVacants::class);
    }
}

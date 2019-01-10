<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobVacants extends Model
{
    protected $fillable = [
        'name','status','company_id'
    ];
    protected $table = 'job_vacants';

    public function company()
    {
        return $this->belongsTo(Companies::class);
    }
    
    public function assignments(){
        return $this->hasMany(Assignments::class,'job_id');
    }

    public function candidates(){
        return $this->hasMany(Candidates::class,'job_id');
    }
}

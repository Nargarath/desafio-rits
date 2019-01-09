<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assignments extends Model
{
    protected $fillable = [
        'type', 'text','job_id'
    ];
    
    public function scopeGroupByType($query){

        $query->groupBy('type');   
        return $query;
   
     }
    public function job()
    {
        return $this->belongsTo(JobVacants::class);
    }
}

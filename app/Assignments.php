<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assignments extends Model
{
    protected $fillable = [
        'type', 'text','job_id'
    ];
    
    public function scopeGroupByType($query){

        $collection = collect($query->get());
        
        $grouped= $collection->groupBy(function ($item, $key) {
        
        return $item['type'];
        });
         
        return $grouped;
   
    }
    public function job()
    {
        return $this->belongsTo(JobVacants::class);
    }
}

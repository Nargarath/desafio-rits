<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curriculums extends Model
{
    protected $fillable = [
        'name', 'extension', 'candidate_id'
    ];


    public function candidate()
    {
        return $this->belongsTo(Candidates::class);
    }
}

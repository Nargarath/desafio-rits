<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidates extends Model
{
    protected $fillable = [
        'name', 'email', 'phone','motivation','linkedin','github','english_level','salary_pretension','job_id'
    ];

    public function curriculum()
    {
        return $this->hasOne(Curriculums::class);
    }

    public function job()
    {
        return $this->belongsTo(JobVacants::class);
    }
}

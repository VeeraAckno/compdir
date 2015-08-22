<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    protected $fillable = [
        'job_id', 'first_name', 'last_name', 'email', 'dob', 'unique_id', 'resume'
    ];

    public function job()
    {
        return $this->belongsTo('App\Job');
    }
}

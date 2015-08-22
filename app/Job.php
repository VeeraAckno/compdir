<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $fillable = [
        'job_id', 'job_title', 'job_description', 'status', 'author'
    ];

    public function applicants()
    {
        return $this->hasMany('App\Applicant');
    }

}

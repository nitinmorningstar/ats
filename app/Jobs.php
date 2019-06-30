<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\AssignJobs;
use App\Resume;
use App\User;
class Jobs extends Model
{
    //
    protected $table="jobs";
    public $timestamps=false;
   
    public function assignjobs()
    {
        return $this->hasMany(AssignJobs::class,'job_id');
    }
    public function resume()
    {
        return $this->hasMany(Resume::class,'job_id');
    }
    
}

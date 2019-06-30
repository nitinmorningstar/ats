<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Jobs;
use App\User;
use App\Resume;
class AssignJobs extends Model
{
    //
    protected $table="assign_jobs";
    public $timestamps=false;
     public $fillable = ['id','user_id','job_id'];
   
    public function jobs()
    {
        return $this->belongsTo(Jobs::class,'job_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
    public function resume()
    {
        return $this->hasMany(Resume::class,'assign_id');
    }
    
}

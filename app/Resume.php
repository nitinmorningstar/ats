<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Jobs;
use App\User;
use App\AssignJobs;
class Resume extends Model
{
    //
    protected $table="resumes";
    protected $guarded = ['id','user_id','assign_id','job_id','first_name','last_name','email','summery','resume'];
    public $timestamps=false;
    protected $dates = ['created_at'];
    public function jobs()
    {
        return $this->belongsTo(Jobs::class,'job_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
    public function assign()
    {
        return $this->belongsTo(AssignJobs::class,'assign_id');
    }
}

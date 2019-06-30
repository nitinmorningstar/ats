<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\View;
use Auth;
use App\Jobs;
use App\Resume;

class DashBoardController extends BaseController
{
    public function index()
    {
    	$jobs = Jobs::where('job_status','active')->get();
        foreach($jobs as $k=>$j){            
            $j->count_status = Resume::where('job_id', $j->id)->whereIn('status',[1,2,3])->count();
            // $j->approved = Resume::where('job_id', $j->id)->where('status',1)->count();
            // $j->interview = Resume::where('job_id', $j->id)->where('status',2)->count();
            // $j->offer = Resume::where('job_id', $j->id)->where('status',3)->count();
        }
        return view('website.dashboard.index',['jobs'=> $jobs]);
    }
    public function details($id)
    {
       $jobs = Jobs::all();
         $id = decrypt($id);
         $jobs = Jobs::find($id);
         return view('website.dashboard.details',['jobs'=> $jobs]);
    }
}
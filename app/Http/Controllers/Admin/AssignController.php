<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\View;
use App\User;
use App\Jobs;
use App\Resume;
class AssignController extends BaseController
{
    public function index($id)
    {
        $compId = decrypt($id);
        $star = User::where('role_id', '!=', 1)->get();
        return view('admin.website.jobs.assignjobs',['compId'=>$compId,'star'=>$star]);
    }
    public function details($id)
    {
        $id = decrypt($id);
        $jobs = Jobs::find($id);
        $resume = Resume::where('job_id',$id)->get();
        return view('admin.website.jobs.candidatedetails',['jobs'=>$jobs,'resume'=>$resume]);
    }
    public function summery($id)
    {
    $id = decrypt($id);
    $resume = Resume::where('id',$id)->get();
    return view('admin.website.jobs.summery',['resume'=>$resume]);
    }
}
<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\View;
use Auth;
use App\Jobs;
use App\Resume;
use App\User;

class ReportsController extends BaseController
{
    public function index()
    {
        $report = User::where('role_id', '!=', 1)->get();
        //$jobs = Jobs::where('job_status','active')->get();
        foreach($report as $k=>$j)
        {            
            $j->count_status = Resume::where('user_id', $j->id)->whereIn('status',[1,2,3])->count();
            $j->count_in = Resume::where('user_id', $j->id)->whereIn('status',[2])->count();
            $j->count_offer = Resume::where('user_id', $j->id)->whereIn('status',[3])->count();
        }
        return view('admin.website.reports.index',['report'=> $report]);
    }

}
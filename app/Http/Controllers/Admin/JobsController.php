<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\View;
use App\Jobs;
use App\Resume;

class JobsController extends BaseController
{
    public function index()
    {
        $jobs = Jobs::all();
        return view('admin.website.jobs.index',['jobs'=>$jobs]);
    }
    public function create()
    {
        $jobs = Jobs::all();
        return view('admin.website.jobs.create',['jobs'=>$jobs]);
    }
    public function store(Request $request)
    {
        $jobs = new Jobs();

        $jobs->title       = $request->title;
        $jobs->description                    = $request->description;
        $jobs->client               = $request->client;
        $jobs->city = $request->city;
        $jobs->state = $request->state;
        $jobs->rate_salary = $request->rate_salary;
        $jobs->job_status = $request->job_status;
         $jobs->job_code = 'JPC-'.rand(1000,9999);
        $jobs->save();
      return redirect()->route('admin.jobs',['jobs'=>$jobs]);    
    }
    public function edit($id)
    {
            $jobs = Jobs::all();
            $id = decrypt($id);
           $jobs = Jobs::find($id);
        return view('admin.website.jobs.edit',['jobs' =>  $jobs]);
         

    }
    public function update(Request $request, $id){
      
        $jobs = Jobs::find($id);                                                                                    
        $jobs->title             =      $request->title;
        $jobs->description                   = $request->description;
        $jobs->client               = $request->client;
        $jobs->city = $request->city;
        $jobs->state = $request->state;
        $jobs->rate_salary = $request->rate_salary;
        $jobs->job_status = $request->job_status;
        $jobs->save();
        return redirect()->route('admin.jobs');  
    }
    /*public function destroy(Request $request,  $id) 
    {
        $jobs  = decrypt($id);
        $jobs=Jobs::where('id',$id)->delete();
        return redirect()->route('admin.jobs');
    }*/
}
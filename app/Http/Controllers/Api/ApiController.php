<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\AssignJobs;
use App\User;
use App\Jobs;
use App\Resume;

class ApiController extends Controller
{
    public function AssignJobs(Request $request)
    {
        try{
            if(!empty($request->user_id && $request->job_id)){
                if($assigned = AssignJobs::where('job_id', $request->job_id)->where('user_id', $request->user_id)->first()){
                    $assigned->delete();
                }else{
                    $assigned = new AssignJobs($request->all());
                    $assigned->save();
                }
                return response()->json(['status'=>200, 'message'=> 'success', 'data'=>$request->all()]);
            } else{
                return response()->json(['status'=>400, 'message'=> 'params missing']);
            }
        } catch(\Exception $e) {
            return response()->json(['status'=> 500, 'message'=>$e->getMessage()]);
        }
    } 
    public function ChangeStatus(Request $request){  
        try{
            if(!empty($request->res_id)){
                $res = Resume::find($request->res_id);
                //$res->user_id = $request->user_id;
                $res->status = $request->status;
                $res->save();
                
                if ($res->status == 1){
                    $res->status = "1";
                    $res->save();
                }
                else if($res->status == 2) {
                    $res->status = "2";
                    $res->save();
                } 
                else if($res->status == 3)
                {
                    $res->status = "3";
                    $res->save();
                }
                else if($res->status == 4)
                {
                    $res->status = "4";
                    $res->save();
                }
                return response()->json(['status'=>200, 'message'=>'success', 'data'=> $res]);
            }else{
                return response()->json(['status'=>400, 'message'=>'params missing']);
            }
        }catch(\Exception $e){
            report($e);
            return response()->json(['status'=>500, 'message'=>$e->getMessage()]);
        }
    }  
    public function JobStatus(Request $request){  
        try{
            if(!empty($request->job_id)){
                $job = Jobs::find($request->job_id);
                //$res->user_id = $request->user_id;
                // $job->status = $request->status;
                // $job->save();
                
                if ($job->status == 0){
                    $job->status = "1";
                    $job->save();
                }
                else if($job->status == 1) {
                    $job->status = "0";
                    $job->save();
                } 
                return response()->json(['status'=>200, 'message'=>'success', 'data'=> $job]);
            }else{
                return response()->json(['status'=>400, 'message'=>'params missing']);
            }
        }catch(\Exception $e){
            report($e);
            return response()->json(['status'=>500, 'message'=>$e->getMessage()]);
        }
    }      
}
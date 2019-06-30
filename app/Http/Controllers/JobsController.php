<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Input;
use App\utils\Filetotext;
use App\utils\PdfToText;
use App\Jobs;
use App\Resume;
use App\AssignJobs;
use Auth;

class JobsController extends BaseController
{
    public function index()
    {
        $jobs = Jobs::all();
        return view('website.jobs.index',['jobs'=>$jobs]);
    }
    public function create($id)
    {
        //$resume = Resume::all();
        $id = decrypt($id);
        // dd($id);
        $jobs = Jobs::find($id);
        return view('website.jobs.create',['jobs'=>$jobs]);
    }
    public function store(Request $request,$id){
      
        $resume = new Resume();
        $resume->user_id = Auth::user()->id; 
        //dd($resume);                                                                                   
        $resume->job_id = $id;
        $resume->first_name  = $request->first_name;
        $resume->last_name  = $request->last_name;
        $resume->email = $request->email;
        $resume->summery  = $request->summery;
        //$resume->resumes = $request->resumes;
        if($request->hasFile('resumes'))
            {
				$image_tmp = Input::file('resumes');

				$name=$image_tmp->getClientOriginalName();

				$name=str_replace(" ","_",$name);

                if ($image_tmp->isValid()) 
                {
                    // Upload Images after Resize
                    $extension = $image_tmp->getClientOriginalExtension();
	                //$request->fileName = date('dMY').rand(111,99999).'.'.$extension;

				       
				   
			       $result= $image_tmp->move(public_path().'/upload/',$name);
                }
		    }
		    if($result)
		    {
                $filepath=public_path().'/upload/'.$name;
                //dd($filepath);    
                
                

                $extension = $image_tmp->getClientOriginalExtension();

                if($extension == "pdf")
                {
                    $parser = new \Smalot\PdfParser\Parser();
                $pdf    = $parser->parseFile($filepath);
                
                }
                else
                {
                    $docObj = new Filetotext("test.docx"); 
                    $return = $docObj->convertToText(); 
                }

                

                //$text = $pdf->getText();
                //dd($text);
              
    
                //dd($return);
                if($result !=1 || $result !=2)
                {
                    $data=new Resume;
                // $data->summery=trim($return);
                    $data->resumes = $name;
                    $data->user_id = Auth::user()->id; 
                    $data->job_id = $id;
                    $data->first_name = $request->first_name;
                    $data->last_name = $request->last_name;
                    $data->email = $request->email;
                    $data->summery = $request->summery;
                    $data->save();
                    return redirect()->back()->with('done','file uploaded');
                }
            }


        $resume->save();
        return redirect()->route('jobs.create');  
    }
    public function jobs()
    {
        $jobs = Jobs::all();
        return view('website.jobs.jobs',['jobs'=>$jobs]);
    }
    public function details($id)
    {
        $id = decrypt($id);
        $jobs = AssignJobs::find($id);
        $user_id = Auth::user()->id;
        $resume = Resume::where('id',$user_id)->where('assign_id', $id)->get();
        return view('website.jobs.candidatedetails',['jobs'=>$jobs,'resume'=>$resume]);
    }
    /*public function store(Request $request)
    {
        $jobs = new Jobs();
        $jobs->title         = $request->title;
        $jobs->description                    = $request->description;
        $jobs->location               = $request->location;
     
  
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
        $jobs->location                = $request->location;
        $jobs->save();
        return redirect()->route('admin.jobs');  
    }
    public function destroy(Request $request,  $id) 
    {
        $jobs  = decrypt($id);
        $jobs=Jobs::where('id',$id)->delete();
        return redirect()->route('admin.jobs');
    }*/
}
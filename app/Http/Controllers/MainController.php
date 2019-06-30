<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\utils\Filetotext;
use App\utils\PdfToText;
use App\document;
use DB;
class MainController extends Controller
{
	public function resume()
	{
		return view('website.resume.index');
	}
    //
   public $fileName='';
   
    public function resumeupload(Request $request)
    {
    	//dd($request->all)
    	    if($request->hasFile('fileupload'))
            {
				$image_tmp = Input::file('fileupload');

				$name=$image_tmp->getClientOriginalName();

				$name=str_replace(" ","_",$name);

                if ($image_tmp->isValid()) 
                {
                    // Upload Images after Resize
                    $extension = $image_tmp->getClientOriginalExtension();
	                //$request->fileName = date('dMY').rand(111,99999).'.'.$extension;

				       
				   
			       $result= $image_tmp->move(public_path().'/resume/',$name);
                }
		    }
		    if($result)
		    {
			      $filepath=public_path().'/resume/'.$name;
			 


			        $extension = $image_tmp->getClientOriginalExtension();

                if($extension == "pdf")
                {
                  $parser = new \Smalot\PdfParser\Parser();
									$pdf    = $parser->parseFile($filepath);
									
									$text = $pdf->getText();

                
                }
                else
                {
                    $docObj = new Filetotext("test.docx"); 
                    $text = $docObj->convertToText(); 
                }

                 //$text = $pdf->getText();
			         //dd($return);
              if($result !=1 || $result !=2)
              {
              	$data=new document;
              	$data->contents=trim($text);
              	$data->filename=$name;
              	$data->save();
              	return redirect()->back()->with('done','file uploaded');
              }
			}


    }
	public function search()
	{
		return view('website.search.index');
	}
    public function searchresult(Request $request)
    {

		$inputs=explode(",",$request->search);
		//dd($inputs);
    	$result=DB::select("SELECT id, filename FROM documents WHERE MATCH (contents) AGAINST (? IN NATURAL LANGUAGE MODE)",$inputs);
		//dd($result); 
		
		if(count($result))
    	 {
    	 	return view('website.search.index',compact('result'));
    	 }
    	 else{
    	 	return redirect()->back()->with('error','Not Found any record');
    	 }
    }
}

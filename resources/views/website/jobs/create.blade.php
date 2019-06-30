@extends('layouts.main')
@section('content')
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Jobs Details</h4> </div>
        {{--<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> <a href="" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Buy Now</a>
            <ol class="breadcrumb">
                <li><a href="#">Resume Upload</a></li>
                <li class="active">Widgets</li>
            </ol>
        </div>--}}
        <!-- /.col-lg-12 -->
    </div>
    <div class="row">
        <div class="col-sm-12 col-xs-21" style="width:100%;">
            <div class="panel panel-default" style="background-color:#dfe8f1;">
                <div class="panel-heading">Job Details</div>
                <div class="panel-wrapper collapse in">
                    <div class="panel-body">
                            <h3><a href="#">{{ $jobs->title }}</a></h3> <p>{{ $jobs->description }}</p>
                            <p>{{ $jobs->post }}</p>
                            <p>{{ $jobs->location }}</p>
                            <p>Salary:{{ $jobs->salary }}</p>                        
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12">
            @if($jobs->status == 1)
            <div class="white-box" id="submission">
                <button class="btn btn-block btn-success" onclick="myFunction()" style="width:180px;">Submit a Candidate</button>
                <form class="form-horizontal" id="form" method="post" enctype="multipart/form-data" action="{{ route('jobs.store',$jobs->id) }}" style="display:none; margin:30px;">
                    @csrf
                    <input type="hidden" id="job_id" name="job_id" class="form-control" value="{{ $jobs->id }}">
                    <div class="form-group">
                        <label class="col-md-12" for="example-text">First Name</span>
                        </label>
                        <div class="col-md-12">
                            <input type="text" id="first_name" name="first_name" class="form-control"> </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12" for="example-text">Last Name</span>
                        </label>
                        <div class="col-md-12">
                            <input type="text" id="last_name" name="last_name" class="form-control"> </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12" for="example-text">Email</span>
                        </label>
                        <div class="col-md-12">
                            <input type="text" id="email" name="email" class="form-control"> </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12" for="example-text">Summery</span>
                        </label>
                        <div class="col-md-12">
                            <textarea type="text" id="summery" name="summery" rows="5" class="form-control"></textarea>
                         </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12" for="example-text">Resume Upload</span>
                        </label>
                        <div class="col-md-12">
                            <input type="file" id="resumes" name="resumes" class="form-control"> 
                        </div>
                    
                    </div>
                    <button type="submit" class="btn btn-info waves-effect waves-light m-r-10">Submit</button>
                    <button type="submit" class="btn btn-inverse waves-effect waves-light">Cancel</button>
                </form>
            </div>
            @else 
            <div class="white-box">
                <b>Job is closed</b>
            </div>
            @endif
        </div>
        <div class="col-sm-12 col-xs-21" style="width:100%;">
            <div class="panel panel-default">
                <div class="panel-heading">Job Description</div>
                <div class="panel-wrapper collapse in">
                    <div class="panel-body">
                        <p>{{ $jobs->detail }}</p>                      
                        
                    </div>
                </div>
            </div>
        </div>
            {{--<div class="col-sm-12">
                <div class="white-box">
                    <ul class="search-listing">
                        <li>
                            <h3><a href="#">{{ $jobs->title }}</a></h3> <a href="javascript:void(0)" class="search-links">{{ $jobs->description }}</a>
                            <p>{{ $jobs->post }}</p>
                            <p>{{ $jobs->location }}</p>
                            <p>{{ $jobs->salary }}</p>
                        </li>
                    </ul>
                    <h3 class="box-title">Resume Upload</h3>
                    <form class="form-material form-horizontal" method="post" enctype="multipart/form-data" action="{{ route('jobs.store',$jobs->id) }}">
                        @csrf
                        <input type="hidden" id="job_id" name="job_id" class="form-control" value="{{ $jobs->id }}">
                        <div class="form-group">
                            <label class="col-md-12" for="example-text">First Name</span>
                            </label>
                            <div class="col-md-12">
                                <input type="text" id="first_name" name="first_name" class="form-control"> </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12" for="example-text">Last Name</span>
                            </label>
                            <div class="col-md-12">
                                <input type="text" id="last_name" name="last_name" class="form-control"> </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12" for="example-text">Email</span>
                            </label>
                            <div class="col-md-12">
                                <input type="text" id="email" name="email" class="form-control"> </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12" for="example-text">Summery</span>
                            </label>
                            <div class="col-md-12">
                                <input type="text" id="summery" name="summery" class="form-control"> </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12" for="example-text">Resume Upload</span>
                            </label>
                            <div class="col-md-12">
                                <input type="file" id="resumes" name="resumes" class="form-control"> 
                            </div>
                        
                        </div>
                        <button type="submit" class="btn btn-info waves-effect waves-light m-r-10">Submit</button>
                        <button type="submit" class="btn btn-inverse waves-effect waves-light">Cancel</button>
                    </form>
                </div>
            </div>--}}
    </div>
    
@endsection
@section('js')
<script>
    function myFunction() {
        document.getElementById("form").style.display = "block";
    }
</script>

@endsection
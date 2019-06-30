@extends('layouts.main')
@section('css')
    <style>
    .fix-sidebar .top-left-part{
        background:none;
    }
    </style>
@endsection
@section('content')
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Candidate Details</h4>
        </div>
        {{--<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> <a href="" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Buy Now</a>
            <ol class="breadcrumb">
                <li><a href="#">Jobs</a></li>
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
                        <h3><a href="#">{{ $jobs->jobs->title }}</a></h3> <p>{{ $jobs->jobs->description }}</p>
                        <p>{{ $jobs->jobs->post }}</p>
                        <p>{{ $jobs->jobs->location }}</p>
                        <p>Salary:{{ $jobs->jobs->salary }}</p>                        
                        
                    </div>
                </div>
            </div>
        </div>
        <div class=" col-sm-12 col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading" style="background:#dfe8f1;"> Candidate Details </div>
                <div class="panel-wrapper collapse in">
                    <ul class="nav customtab nav-tabs" role="tablist">
                        <li role="presentation" class="active nav-item"><a href="#home1" class="nav-link" aria-controls="home" role="tab" data-toggle="tab" aria-expanded="true"><span class="visible-xs"><i class="ti-home"></i></span><span class="hidden-xs"><b>My Candidates</b></span></a></li>
                        <li role="presentation" class="nav-item"><a href="#profile1" class="nav-link" aria-controls="profile" role="tab" data-toggle="tab" aria-expanded="false"><span class="visible-xs"><i class="ti-user"></i></span> <span class="hidden-xs"><b>Job Description</b></span></a></li>
                    </ul>
                    <div class="panel-body">
                        <div class="tab-content m-t-0">
                            <div role="tabpanel" class="tab-pane fade active in" id="home1">
                                
                                @foreach($jobs->resume as $res)
                                    <div class="col-md-12">
                                        <h3 style="background:#dfe8f1;line-height:50px;">{{ $res->user->name }}
                                            <b id="Status" style="float:right; margin-right:30px; font-size:18px;">
                                                @if($res->status == 1)
                                                Offer
                                                @elseif($res->status == 2)
                                                Interview
                                                @elseif($res->status == 3) 
                                                Rejected
                                                @else 
                                                Pending
                                                @endif
                                            </b>
                                        </h3>
                                        <p><b>Submitted on {{ $res->created_at->format('m/d/y') }}</b></p>
                                        <b><a href="{{ route('admin.summery',encrypt($res->id)) }}">Candidate Summery</a></b>
                                    </div>
                                    <div class="clearfix"></div>
                                    <hr>
                                @endforeach
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="profile1">
                                <div class="col-md-12">
                                    <p>{{ $jobs->jobs->detail }}</p>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
            
    </div>

@endsection
@section('js')
    
@endsection
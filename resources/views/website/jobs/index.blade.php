@extends('layouts.main')
@section('css')
<style>

  </style>
@endsection
@section('content')
  <div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
      <h4 class="page-title">Assigned Jobs</h4> </div>
      {{--<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> <a href="" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Buy Now</a>
          <ol class="breadcrumb">
              <li><a href="#">Jobs</a></li>
              <li class="active">Widgets</li>
          </ol>
      </div>--}}
      <!-- /.col-lg-12 -->
  </div>
  <div class="col-md-12 col-xs-12">
      <div class="white-box">
          @foreach(Auth::user()->AssignJobs as $key =>$value)
        <div class="row b-b" style="margin-bottom:20px;">
            <div class="col-md-8 col-xs-6 b-r">
                <p>
                  <a href="{{ route('jobs.create',encrypt($value->job_id)) }}" data-id="{{ $value->id }}" style="color:#01c0c8; overflow:hidden;font-size:20px;">{{ $value->jobs->title }}</a>
                <b style="float:right; margin:20px;">Salary:{{ $value->jobs->salary }}</b> 
                </p>
                <a href="javascript:void(0)" class="search-links" style="margin-right:50%; color:#01c0c8;"><b>{{ $value->jobs->description }}</b></a>
                <p>{{ $value->jobs->post }}</p>
                <p>{{ $value->jobs->location }}</p>
                <p>Salary:{{ $value->jobs->salary }}</p>
            </div>
            <div class="col-md-4 col-xs-6"> 
                <p style="overflow:hidden;"><b>Current Candidate Status</b> <button class="btn btn-primary" style="float:right; background:#01c0c8;">Save Job</button></h5>
                @if($value->jobs->resume->where('user_id', Auth::user()->id)->count()>0)
                <p>Submitted</p>
                @else
                <p>Pending</p>
                @endif
                <b><a href="{{ route('jobs.details',encrypt($value->id)) }}">{{ $value->jobs->resume->where('user_id', Auth::user()->id)->count() }}</a></b>
                {{--<p>Active</p>
                <p>0</p>--}}
                <p>Last Update:<b>Just Now</b></p>
                
            </div>
        </div>
          @endforeach
        </div>
      </div>
  </div>
  

  {{--<div class="row">
    <div class="col-md-12">
      <div class="white-box">
        <ul class="search-listing">
          @foreach(Auth::user()->AssignJobs as $key =>$value)
          <li style="position:relative;">
            <h3><a href="{{ route('jobs.create',encrypt($value->job_id)) }}" data-id="{{ $value->id }}">{{ $value->jobs->title }}</a></h3> <a href="javascript:void(0)" class="search-links" style="margin-right:100%;">{{ $value->jobs->description }}</a>
            <p>{{ $value->jobs->post }}</p>
            <p>{{ $value->jobs->location }}</p>
            <p>Salary:{{ $value->jobs->salary }}</p>
            <div class="vertical"></div>
            <div>
            <h5><p class="text">Current Candidate Status</p></h5>
            <p class="text">Pending</p>
            <p class="text">0</p>
            <p class="text">Active</p>
            <p class="text">0</p>
            <p class="text">Last Update:Just Now</p>
            </div>
          </li>
          @endforeach
        </ul>
        {{--<ul class="pagination m-b-0">
            <li class="disabled"> <a href="#"><i class="fa fa-angle-left"></i></a> </li>
            <li> <a href="javascript:void(0)">1</a> </li>
            <li class="active"> <a href="javascript:void(0)">2</a> </li>
            <li> <a href="javascript:void(0)">3</a> </li>
            <li> <a href="javascript:void(0)">4</a> </li>
            <li> <a href="javascript:void(0)">5</a> </li>
            <li> <a href="javascript:void(0)"><i class="fa fa-angle-right"></i></a> </li>
        </ul>--}}
      {{--</div>
    </div>--}}
        {{--<div class="col-lg-12">
          <div class="white-box">
            <h3 class="box-title m-b-0">Responsive Table </h3>
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Job Location</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach(Auth::user()->AssignJobs as $key =>$value)
                    <tr>
                      <td>{{ $value->jobs->id }}</td>
                      <td>{{ $value->jobs->title }}</td>
                      <td>{{ $value->jobs->description }}</td>
                      <td>{{ $value->jobs->location }}</td>
                      <td><button class="btn btn-block btn-success" style="width:140px;"><a href="{{ route('jobs.create',encrypt($value->id)) }}" style="color:white;">Resume Upload</a></button></td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>--}}
  </div>
@endsection
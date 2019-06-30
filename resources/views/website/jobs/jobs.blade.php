@extends('layouts.main')
@section('css')
@endsection
@section('content')
  <div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">All Jobs</h4> </div>
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
          @foreach($jobs as $job)
        <div class="row b-b" style="margin-bottom:20px;">
            <div class="col-md-8 col-xs-6 b-r">
                <p>
                    <a href="#" style="color:#01c0c8; font-size:20px;">{{ $job->title }}</a>
                    <b style="float:right; margin:20px;">Salary:{{ $job->salary }}</b>
                </p>
                 <a href="javascript:void(0)" class="search-links" style="margin-right:50%;color:#01c0c8;"><b>{{ $job->description }}</b></a>
                <p>{{ $job->post }}</p>
                <p>{{ $job->location }}</p>
                <p>Salary:{{ $job->salary }}</p>
            </div>
            <div class="col-md-4 col-xs-6"> 
                <p style="overflow:hidden;"><b>Current Candidate Status </b><button class="btn btn-primary" style="float:right; background:#01c0c8;">Save Job</button></p>
                <p>Pending</p>
                <p>0</p>
                <p>Active</p>
                <p>0</p>
                <p>Last Update:<b>Just Now</b></p>
                
            </div>
        </div>
          @endforeach
        </div>
      </div>
  </div>
@endsection
@section('js')
<script> 
        
        </script>
@endsection
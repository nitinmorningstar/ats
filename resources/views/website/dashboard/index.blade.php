@extends('layouts.main')
@section('css')
<style>
  .fix-sidebar .top-left-part{
    background:none;
  }
  th{
    font-size:15px;
  }
  td{
    font-weight:bold;
  }
  </style>
@endsection
@section('content')
<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">Home</h4> </div>
    {{--<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> <a href="" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Buy Now</a>
        <ol class="breadcrumb">
            <li><a href="#">Jobs</a></li>
            <li class="active">Widgets</li>
        </ol>
    </div>--}}
        <!-- /.col-lg-12 -->
  </div>
    <div class="row">
        <div class="col-lg-12">
          <div class="white-box">
            <h3 class="box-title m-b-0">Recruiting Dashboard</h3>
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th>Active Jobs</th>
                    <th>Salary</th>
                    <th>Assigned To</th>
                    <th>Submission</th>
                    <th>Client Submissions</th>
                    <th>Job Status</th>
                    <th>Posted Date</th>
                  </tr>
                </thead>
                <tbody>
                  	@foreach($jobs as $job)
	                  <tr>
	                    <td><a href="{{ route('details',encrypt($job->id))}}">{{ $job->job_code }}-{{ $job->title }}</a></td>
	                    <td>{{$job->salary}}</td>
                        <td>{{ $job->assignjobs->count() }}</td>
	                    <td>{{ $job->resume->count() }}</td>
	                    <td>{{$job->count_status}}</td>
	                    <td>
                       @if($job->status == 0)
                       <b>Closed</b>
                       @else
                       <b>Open</b>
                       @endif 
                      </td>
	                    <td>{{ date('d/m/y',strtotime($job->created_at)) }}</td>
	                  </tr>
                  	@endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
@endsection
@section('js')
<script> 
        
        </script>
@endsection          


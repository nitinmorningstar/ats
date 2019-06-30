@extends('admin.layouts.table')
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
      <h4 class="page-title">Jobs</h4> 
    </div>
        <!-- /.col-lg-12 -->
  </div>
  <div class="row">
    <div class="col-lg-12">
      <div class="white-box">
        <h3 class="box-title m-b-0">Responsive Table </h3>
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th>Job Code</th>
                  <th>Title</th>
                  <th>Description</th>
                  <th>Client</th>
                  <th>City</th>
                  <th>State</th>
                  <th>Rate/Salary</th>
                  <th>Job Status</th>
                  <th>Resume Submitted</th>
                  <th>Assigning</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                @foreach($jobs as $job)
                  <tr>
                    <td>{{ $job->job_code }}</td>
                    <td>{{ $job->title }}</td>
                    <td>{{ $job->description }}</td>
                    <td>{{ $job->client }}</td>
                    <td>{{ $job->city }}</td>
                    <td>{{ $job->state }}</td>
                    <td>{{ $job->rate_salary }}</td>
                    <td>{{ $job->job_status }}</td>
                    <td>
                      <a href="{{ route('admin.candidateDetails',encrypt($job->id)) }}">{{ $job->resume->count() }} Resumes</a></td>
                    <td>
                    <div class="row button-box">
                        <button class="btn btn-block btn-success" style="width:110px;"><a href="{{route('admin.assignjobs',encrypt($job->id))}}" style="color:white;">Assign Jobs</a></button>
                    </td>
                    <td class="text-nowrap">
                      <a href="{{ route('admin.edit',encrypt($job->id)) }}" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-pencil text-inverse m-r-10"></i></a> 
                      <a href="#" data-toggle="tooltip" data-original-title="Close"> <i class="fa fa-close text-danger"></i> </a> 
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
@section('js')
<script> 
        $(function() {
            $(`.deleteButton[data-delete-button]`).on('click', function(e){
                e.preventDefault();
                if(confirm('Do you want to delete it?')){
                    $(this).parent().find('form[data-delete-form]').submit();
                }
            });
        });
        </script>
@endsection
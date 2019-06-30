@extends('admin.layouts.main')
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
	                    <td><a href="{{ route('admin.details',encrypt($job->id))}}">{{ $job->job_code }}-{{ $job->title }}</a></td>
	                    <td>{{$job->salary}}</td>
                        <td>{{ $job->assignjobs->count() }}</td>
	                    <td>{{ $job->resume->count() }}</td>
	                    <td>{{$job->count_status}}</td>
	                    <td>
                        
                        <div class="checkboxToggle">
                          <input type="checkbox" {{ $job->status == 0 ? 'unchecked' : 'checked' }} data-current-status="{{ $job->status }}" data-job-id="{{ $job->id }}" data-size="normal" name="checkbox">
                        </div>
                        
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
  $(".checkboxToggle input[type='checkbox'], .checkboxToggle input[type='radio']").bootstrapSwitch();
    var radioswitch = function() {
        var bt = function() {
          $(".radio-switch").on("switch-change", function() {
            console.log("Sdg");
              $(".radio-switch").bootstrapSwitch("toggleRadioState")
          }), 
          $(".radio-switch").on("switch-change", function() {
            console.log("Sdgsdfg");
              $(".radio-switch").bootstrapSwitch("toggleRadioStateAllowUncheck")
          }), 
          $(".radio-switch").on("switch-change", function() {
            console.log("Sdgvbcx");
              $(".radio-switch").bootstrapSwitch("toggleRadioStateAllowUncheck", !1)
          })
        };
        return {
          init: function() {
              bt()
          }
        }
    }();
    $(document).ready(function() {
        radioswitch.init()
    });
</script>
<script> 
    

  $(document).ready(function(){
      //console.log("SDf");
    $(document).on('switchChange.bootstrapSwitch', '.checkboxToggle input', function(e){  var job =  $(this).data('jobId');
      var status = $(this).data('status');
      e.preventDefault();             
      console.log(e);
      $.ajax({
        type: "POST",
        url: "{{ url('/api/JobStatus') }}",   
        data :{
           'job_id' : job,
            'status': status,
        },
        success: function(response){
          console.log(response);
        },
        error: function(e){
          console.log(e);
        }
      });
      
    });
      
  });
    </script>
@endsection          


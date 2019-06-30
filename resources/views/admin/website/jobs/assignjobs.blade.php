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
    font-weight: bold;
  }
  </style>
@endsection
@section('content')
  <div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">Jobs</h4> </div>
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
            <h3 class="box-title m-b-0">Assiged Jobs</h3>
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Email Verified</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($star as $row)
                  <tr>
                      <td > 
                        <div class="checkboxToggle">
                          <input type="checkbox" {{ $row->assignjobs->where('job_id', $compId)->count() > 0 ? 'checked' : '' }} value="1" data-user-id="{{ $row->id }}" data-size="normal" name="checkbox">
                        </div>
                      </td>
                    <td>{{ $row->name }}</td>
                    <td>{{ $row->email }}</td>
                    <td>{{ $row->status==0 ? 'Not Verified' : 'Verified'}}</td>
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
  <script type="text/javascript">
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
    window.pageData = window.pageData || {};
    window.pageData.compId =  '{{ $compId }}';

    $(document).ready(function(){
      console.log("SDf");
      $(document).on('switchChange.bootstrapSwitch', '.checkboxToggle input', function(e){                
        console.log(e);
        $.ajax({
          type: "POST",
          url: "{{ url('/api/AssignJobs') }}",   
          data :{
            'job_id': window.pageData.compId,
            'user_id' : $(this).data('userId'),
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
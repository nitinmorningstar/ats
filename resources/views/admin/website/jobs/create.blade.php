@extends('admin.layouts.table')
@section('css')
<style>
  .fix-sidebar .top-left-part{
    background:none;
  }
  </style>
@endsection
@section('content')

    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Jobs</h4>
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
        <div class="col-sm-12">
            <div class="white-box">
                <h3 class="box-title">Jobs Information</h3>
                <form class="form-material form-horizontal" method="post" enctype="multipart/form-data" action="{{route('admin.store')}}">
                    @csrf
                    <div class="form-group">
                        <label class="col-md-12" for="example-text">Title</span>
                        </label>
                        <div class="col-md-12">
                            <input type="text" id="title" name="title" class="form-control"> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12" for="paydate">Description</span>
                        </label>
                        <div class="col-md-12">
                            <input type="text" id="description" name="description" class="form-control mydatepicker"> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12" for="paydate">Client</span>
                        </label>
                        <div class="col-md-12">
                            <input type="text" id="client" name="client" class="form-control mydatepicker"> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12" for="pname">City</span>
                        </label>
                        <div class="col-md-12">
                            <input type="text" id="city" name="city" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12" for="pname">State</span>
                        </label>
                        <div class="col-md-12">
                            <input type="text" id="state" name="state" class="form-control"> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12" for="pname">Rate/Salary</span>
                        </label>
                        <div class="col-md-12">
                            <input type="text" id="rate_salary" name="rate_salary" class="form-control"> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12" for="pname">Job status</span>
                        </label>
                        <div class="col-md-12">
                            <input type="text" id="job_status" name="job_status" class="form-control">
                        </div>
                    </div>
                    
                    <button type="submit" class="btn btn-info waves-effect waves-light m-r-10">Submit</button>
                    <button type="submit" class="btn btn-inverse waves-effect waves-light">Cancel</button>
                </form>
            </div>
        </div>
    </div>

@endsection
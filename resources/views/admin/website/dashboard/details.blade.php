@extends('admin.layouts.main')
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
            <h4 class="page-title">Job Details</h4>
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
                        <h3><a href="#">{{ $jobs->title }}</a></h3> 
                        <p>{{ $jobs->description }}</p>
                        <p>{{ $jobs->post }}</p>
                        <p>{{ $jobs->location }}</p>
                        <p>Salary:{{ $jobs->salary }}</p>                        
                        
                    </div>
                </div>
            </div>
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
    </div>

@endsection
@section('js')
       
@endsection
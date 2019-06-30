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
            <div class="col-lg-12">
              <div class="white-box">
                <h3 class="box-title m-b-0">Candidate Summery</h3>
                <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Summery</th>
                        <th>Resume</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($resume as $res)
                      <tr>
                        <td>{{ $res->first_name }}</td>
                        <td>{{ $res->last_name }}</td>
                        <td>{{ $res->email }}</td>
                        <td>{{ $res->summery }}</td>
                        <td><a href="{{asset('upload/'.$res->resumes) }}" target="_blank">{{ $res->resumes }}</a></td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
@endsection
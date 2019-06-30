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
        <h4 class="page-title">Reports</h4> </div>
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
            <h3 class="box-title m-b-0">Reports</h3>
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th>Users</th>
                    <th>Jobs Offered</th>
                    <th>Number of Submissions</th>
                    <th>Client Submissions</th>
                    <th>Interviews</th>
                    <th>Offers</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($report as $rep)
                
	                  <tr>
	                    <td>{{ $rep->name }}</td>
                      <td>{{ $rep->assignjobs->count() }}</td>
                      <td>{{ $rep->resume->count() }}</td>
                      <td>{{ $rep->count_status }}</td>
                      <td>{{ $rep->count_in }}</td>
                      <td>{{ $rep->count_offer }}</td>
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

@endsection          


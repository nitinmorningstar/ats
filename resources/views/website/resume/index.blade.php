@extends('layouts.main')

@section('content') 
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Widgets</h4> 
        </div>
        {{--<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> 
            <a href="" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Buy Now</a>
            <ol class="breadcrumb">
                <li><a href="#">Resume</a></li>
                <li class="active">Widgets</li>
            </ol>
        </div>--}}
                    <!-- /.col-lg-12 -->
    </div>
                <!-- .row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">Basic Information</h3>
                            <form action="{{route('resume')}}" class="form-material form-horizontal" method="post" enctype="multipart/form-data">
                            @csrf
              
                                <div class="form-group">
                                    <label class="col-md-12" for="example-text">Resume Upload</span>
                                    </label>
                                    <div class="col-md-12">
                                        <input type="file" id="example-text" name="fileupload" class="form-control" placeholder=""> </div>
                                </div>
                                <button type="submit" class="btn btn-info waves-effect waves-light m-r-10">Submit</button>
                                <button type="submit" class="btn btn-inverse waves-effect waves-light">Cancel</button>
                            </form>
                        </div>
                    </div>
                </div>
    {{--<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Resume</div>
                        @if (session('done'))
                            <div class="alert alert-success" role="alert">
                                {{ session('done') }}
                            </div>
                        @endif
                    <div class="card-body">
                    <form action="{{route('resume')}}" method="post" enctype="multipart/form-data">
                        @csrf
                Select image to upload:
                <input type="file" name="fileupload" id="fileToUpload" accept=".doc,.pdf,.docx" required="">
                <input type="submit" value="Upload Image" name="submit">
                </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br><br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Search</div>
                        
                    <div class="card-body">
                    <form action="{{route('search')}}" method="post" >
                        @csrf
                    <input type="text" name="search" placeholder="Type here " required class="form-control">
                    <br>

                    <input type="submit" value="Search" name="submit" class="btn  btn-primary">
                    </form>
                    </div>
                    <div class="card-footer">  
                        @if (session('error'))
                            <div class="alert alert-danger" role="alert">
                                {{ session('error') }}
                            </div>
                        @endif
                    </div>
                    @if(isset($result))
                    <div class="card-footer">  
                        @php  $url1= 'C:/xampp/htdocs/ats/public/resume/';@endphp
                        @foreach($result as $item)

                        <a href="{{ asset('resume/'.$item->filename)}}" target="_blank"><span>{{ @$item->filename}}</span></a>
                        @endforeach
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>--}}
@endsection

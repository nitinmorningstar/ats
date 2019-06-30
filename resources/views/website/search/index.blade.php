@extends('layouts.main')

@section('content') 
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Search</h4> 
        </div>
                    <!-- /.col-lg-12 -->
    </div>

                <!-- .row -->
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
                            <ul>
                                @foreach($result as $item)

                                <li><a href="{{ asset('resume/'.$item->filename)}}" target="_blank"><span>{{ @$item->filename}}</span></a></li>
                                @endforeach
                            </ul>
                           
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
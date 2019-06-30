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
        <div class="col-sm-12 col-xs-21" style="width:100%;">
            <div class="panel panel-default" style="background-color:#dfe8f1;">
                <div class="panel-heading">Job Details</div>
                <div class="panel-wrapper collapse in">
                    <div class="panel-body">
                        <h3><a href="#">{{ $jobs->title }}</a></h3> <p>{{ $jobs->description }}</p>
                        <p>{{ $jobs->post }}</p>
                        <p>{{ $jobs->location }}</p>
                        <p>Salary:{{ $jobs->salary }}</p>                        
                        
                    </div>
                </div>
            </div>
        </div>
        <div class=" col-sm-12 col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading" style="background:#dfe8f1;"> Candidate Details </div>
                <div class="panel-wrapper collapse in">
                    <ul class="nav customtab nav-tabs" role="tablist">
                        <li role="presentation" class="active nav-item"><a href="#home1" class="nav-link" aria-controls="home" role="tab" data-toggle="tab" aria-expanded="true"><span class="visible-xs"><i class="ti-home"></i></span><span class="hidden-xs"><b>My Candidates</b></span></a></li>
                        <li role="presentation" class="nav-item"><a href="#profile1" class="nav-link" aria-controls="profile" role="tab" data-toggle="tab" aria-expanded="false"><span class="visible-xs"><i class="ti-user"></i></span> <span class="hidden-xs"><b>Job Description</b></span></a></li>
                    </ul>
                    <div class="panel-body">
                        <div class="tab-content m-t-0">
                            <div role="tabpanel" class="tab-pane fade active in" id="home1">
                                @foreach($resume as $res)
                                    <div class="col-md-12" data-res-id="{{ $res->id }}">
                                        <h3 style="background:#dfe8f1;line-height:50px;">{{ $res->user->name }}
                                            <b  class="Status" id="Status" style="float:right; margin-right:30px; font-size:18px;">
                                                @if($res->status == 1)
                                                Accepted
                                                @elseif($res->status == 2)
                                                Interview
                                                @elseif($res->status == 3) 
                                                Offered
                                                @elseif($res->status == 4) 
                                                Rejected
                                                @else 
                                                Pending
                                                @endif
                                            </b>
                                        </h3>
                                        <p><b>Submitted on {{ $res->created_at->format('m/d/y') }}</b></p>
                                        <b><a href="{{ route('admin.summery',encrypt($res->id)) }}">Candidate Summery</a></b>
                                    </div>
                                    <div class="col-md-5 pull-right b-l">
                                        <button class="btn btn-success" alt="default" data-toggle="modal" data-target="#myModal" class="model_img img-responsive" data-current-status="{{ $res->status }}" data-res-id="{{ $res->id }}">Accept</button>
                                        <button class="btn btn-danger ChangeAccountStatus AccountStatus" data-current-status="{{ $res->status }}" data-status="4" data-res-id="{{ $res->id }}">Reject</button>
                                    </div>
                                    <div class="clearfix"></div>
                                    <hr>
                                @endforeach
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="profile1">
                                <div class="col-md-12">
                                    <p>{{ $jobs->detail }}</p>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title" id="myModalLabel">Accept Tasks</h4> 
                    </div>
                    <div class="modal-body">
                        <button class="btn btn-success ChangeAccountStatus AccountStatus" data-current-status="" data-status="1" data-res-id="">Accept</button>
                        <button class="btn btn-primary ChangeAccountStatus AccountStatus" data-current-status="" data-status="2" data-res-id="">Interview</button>
                        <button class="btn btn-info ChangeAccountStatus AccountStatus" data-current-status="" data-status="3" data-res-id="">Offer</button>
                        <button class="btn btn-danger ChangeAccountStatus AccountStatus" data-current-status="" data-status="4" data-res-id="">Reject</button>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-info waves-effect" data-dismiss="modal">Close</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
                <!-- /.modal-dialog -->
        </div>

            
    </div>

@endsection
@section('js')
    <script>
        $(document).ready(function() {
            $('#myModal').on('shown.bs.modal', function(e){
                $rel = e.relatedTarget;
                $this = $(this);
                
                var res_id = $($rel).data('resId');
                var current_status = $($rel).data('currentStatus');
                $this.find(`[data-res-id]`).data('resId', res_id);
                $this.find(`[data-current-status]`).data('currentStatus', current_status);

            });
            $('.ChangeAccountStatus').click(function(e){
                
                var res =  $(this).data('resId');
                var status = $(this).data('status');
                e.preventDefault();
        
            $.ajax({
                type: "POST",
                url: "{{ url('api/ChangeStatus') }}",   
                data: {
                    'res_id' : res,
                    'status': status,
                },
                success: function(response){
                    console.log(response);
                    switch(response.data.status){
                        case "0":
                            $('span.AccountStatus').text('Pending');
                            $(`[data-res-id="${res}"] .Status`).text('Pending');
                        break;
                        case "1": 
                            $('span.AccountStatus').text('Accept'); 
                            $(`[data-res-id="${res}"] .Status`).text('Accepted');
                            break;
                        case "2": 
                            $('span.AccountStatus').text('Interview');                      
                            $(`[data-res-id="${res}"] .Status`).text('Interview');
                            break;     
                        case "3":                   
                            $('span.AccountStatus').text('Offer'); 
                            $(`[data-res-id="${res}"] .Status`).text('Offered');
                            break; 
                        case "4":                   
                            $('span.AccountStatus').text('Reject'); 
                            $(`[data-res-id="${res}"] .Status`).text('Rejected');
                            break;     
                        default: 
                            console.log("something is wrong");
                    }
                    
                },
                error: function(e){
                    console.log(e);
                }
            });
            });
        });  
    </script>
@endsection
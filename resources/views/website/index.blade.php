@extends('layouts.main')
@section('content')
 
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Dashboard</h4> </div>
        {{--<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> <a href="" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Buy Now</a>
            <ol class="breadcrumb">
                <li><a href="#">Dashboard</a></li>
                <li class="active">Widgets</li>
            </ol>
        </div>--}}
        <!-- /.col-lg-12 -->
    </div>
    <!-- .row -->
    <div class="row">
        {{--<div class="col-lg-6 col-sm-12 col-xs-12">
            <h4>Icon widget <a class="get-code" data-toggle="collapse" href="#pgr1" aria-expanded="true"><i class="fa fa-code" title="Get Code" data-toggle="tooltip"></i></a></h4>
                <div class="collapse m-t-15" id="pgr1" aria-expanded="true"> <pre class="line-numbers language-javascript m-t-0"><code><b>Use below code & put in column</b><br/>
                    &lt;div class="white-box"&gt;
                    &lt;h3 class="box-title"&gt;NEW CLIENTS&lt;/h3&gt;
                    &lt;ul class="list-inline two-part"&gt;
                    &lt;li&gt;&lt;i class="icon-people text-info"&gt;&lt;/i&gt;&lt;/li&gt;
                    &lt;li class="text-right"&gt;&lt;span class="counter"&gt;23&lt;/span&gt;&lt;/li&gt;
                    &lt;/ul&gt;
                    &lt;/div&gt;</code></pre> 
                </div>
                <div class="row">
                    <div class="col-lg-6 col-sm-6 col-xs-12">
                        <div class="white-box">
                            <h3 class="box-title">NEW CLIENTS</h3>
                            <ul class="list-inline two-part">
                                <li><i class="icon-people text-info"></i></li>
                                <li class="text-right"><span class="counter">23</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-xs-12">
                        <div class="white-box">
                            <h3 class="box-title">NEW Projects</h3>
                            <ul class="list-inline two-part">
                                <li><i class="icon-folder text-purple"></i></li>
                                <li class="text-right"><span class="counter">169</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-xs-12">
                        <div class="white-box">
                            <h3 class="box-title">Open Projects</h3>
                            <ul class="list-inline two-part">
                                <li><i class="icon-folder-alt text-danger"></i></li>
                                <li class="text-right"><span class="counter">311</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-xs-12">
                        <div class="white-box">
                            <h3 class="box-title">NEW Invoices</h3>
                            <ul class="list-inline two-part">
                                <li><i class="ti-wallet text-success"></i></li>
                                <li class="text-right"><span class="counter">117</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12 col-xs-12">
                <h4>Carousel widget <a class="get-code" data-toggle="collapse" href="#pgr2" aria-expanded="true"><i class="fa fa-code" title="Get Code" data-toggle="tooltip"></i></a></h4>
                    <div class="collapse m-t-15" id="pgr2" aria-expanded="true"> <pre class="line-numbers language-javascript m-t-0"><code><b>Use below code & put in column</b><br/>
                        &lt;div class="carousel-inner"&gt;
                        &lt;div class="active item"&gt;
                        &lt;div class="overlaybg"&gt;&lt;img src="{{ asset('theme/plugins/images/news/slide1.jpg')}}"/&gt;&lt;/div&gt;
                        &lt;div class="news-content"&gt;&lt;span class="label label-danger label-rounded"&gt;Primary&lt;/span&gt;
                            &lt;h2&gt;..content here...&lt;/h2&gt;
                            &lt;a href="#"&gt;Read More&lt;/a&gt;&lt;/div&gt;
                        &lt;/div&gt;
                        &lt;div class="item"&gt;
                        &lt;div class="overlaybg"&gt;&lt;img src="{{ asset('theme/plugins/images/news/slide1.jpg')}}"/&gt;&lt;/div&gt;
                        &lt;div class="news-content"&gt;&lt;span class="label label-primary label-rounded"&gt;Primary&lt;/span&gt;
                            &lt;h2&gt;...content here...&lt;/h2&gt;
                            &lt;a href="#"&gt;Read More&lt;/a&gt;&lt;/div&gt;
                        &lt;/div&gt;
                        &lt;/div&gt;</code></pre> 
                    </div>
                    <div class="news-slide m-b-15">
                        <div class="vcarousel slide">
                            <!-- Carousel items -->
                            <div class="carousel-inner">
                                <div class="active item">
                                    <div class="overlaybg"><img src="{{ asset('theme/plugins/images/news/slide1.jpg')}}" /></div>
                                    <div class="news-content"><span class="label label-danger label-rounded">Primary</span>
                                        <h2>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</h2> <a href="#">Read More</a></div>
                                </div>
                                <div class="item">
                                    <div class="overlaybg"><img src="{{ asset('theme/plugins/images/news/slide1.jpg')}}" /></div>
                                    <div class="news-content"><span class="label label-primary label-rounded">Primary</span>
                                        <h2>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</h2> <a href="#">Read More</a></div>
                                </div>
                                <div class="item">
                                    <div class="overlaybg"><img src="{{ asset('theme/plugins/images/news/slide1.jpg')}}" /></div>
                                    <div class="news-content"><span class="label label-success label-rounded">Primary</span>
                                        <h2>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</h2> <a href="#">Read More</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <!-- /.row -->
                
                <!-- row -->
                <div class="row">
                    <div class="col-md-3 col-xs-12 col-sm-6">
                        <div class="white-box m-b-0 bg-danger">
                            <h3 class="text-white box-title">Analysis <span class="pull-right"><i class="fa fa-caret-up"></i> 260</span></h3>
                            <div id="sparkline1dash"></div>
                        </div>
                        <div class="white-box">
                            <div class="row">
                                <div class="pull-left">
                                    <div class="text-muted m-t-20">Site Analysis</div>
                                    <h2>21000</h2> </div>
                                <div data-label="60%" class="css-bar css-bar-60 css-bar-lg m-b-0 css-bar-danger pull-right"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-12 col-sm-6">
                        <div class="white-box m-b-0 bg-info">
                            <h3 class="text-white box-title">Sales <span class="pull-right"><i class="fa fa-caret-down"></i> 160</span></h3>
                            <div id="sparkline2dash" class="text-center"></div>
                        </div>
                        <div class="white-box">
                            <div class="row">
                                <div class="pull-left">
                                    <div class="text-muted m-t-20">Total Sales</div>
                                    <h2>21000</h2> </div>
                                <div data-label="60%" class="css-bar css-bar-60 css-bar-lg m-b-0  css-bar-info pull-right"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-12 col-sm-6">
                        <div class="white-box m-b-0 bg-purple">
                            <h3 class="text-white box-title">Site visits <span class="pull-right"><i class="fa fa-caret-up"></i> 260</span></h3>
                            <div id="sparkline3dash"></div>
                        </div>
                        <div class="white-box">
                            <div class="row">
                                <div class="pull-left">
                                    <div class="text-muted m-t-20">Total Visits</div>
                                    <h2>26000</h2> </div>
                                <div data-label="60%" class="css-bar css-bar-60 css-bar-lg m-b-0 css-bar-purple pull-right"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-12 col-sm-6">
                        <div class="white-box m-b-0 bg-inverse">
                            <h3 class="text-white box-title">Power consumption <span class="pull-right"><i class="fa fa-caret-up"></i> 260</span></h3>
                            <div id="sparkline4dash" class="text-center"></div>
                        </div>
                        <div class="white-box">
                            <div class="row">
                                <div class="pull-left">
                                    <div class="text-muted m-t-20">Total Usage</div>
                                    <h2>61000</h2> </div>
                                <div data-label="60%" class="css-bar css-bar-60 css-bar-lg m-b-0 css-bar-inverse pull-right"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /row -->
                <!-- .row -->
                <div class="row">
                    <div class="col-md-8 col-lg-9 col-sm-6 col-xs-12">
                        <div class="white-box">
                            <h3 class="box-title">SALES ANALYTICS</h3>
                            <ul class="list-inline text-center">
                                <li>
                                    <h5><i class="fa fa-circle m-r-5" style="color: #00bfc7;"></i>Site A View</h5> </li>
                                <li>
                                    <h5><i class="fa fa-circle m-r-5" style="color: #fdc006;"></i>Site B View</h5> </li>
                            </ul>
                            <div id="morris-area-chart2" style="height: 370px;"></div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3 col-sm-6 col-xs-12">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="white-box">
                                    <h3 class="box-title">Total Sites Visit</h3>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-xs-6  m-t-30">
                                            <h1 class="text-warning">6778</h1>
                                            <p class="text-muted">APRIL 2017</p> <b>(150-165 Sales)</b> </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                            <div id="sales1" class="text-center"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="white-box">
                                    <h3 class="box-title">Sales Difference</h3>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-xs-6  m-t-30">
                                            <h1 class="text-info">$2478</h1>
                                            <p class="text-muted">APRIL 2017</p> <b>(150-165 Sales)</b> </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                            <div id="sales2" class="text-center"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <!-- .row -->
                <div class="row">
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="white-box">
                            <h3 class="box-title"><small class="pull-right m-t-10 text-success"><i class="fa fa-sort-asc"></i> 18% High then last month</small> Site Traffic</h3>
                            <div class="stats-row">
                                <div class="stat-item">
                                    <h6>Overall Growth</h6> <b>80.40%</b></div>
                                <div class="stat-item">
                                    <h6>Montly</h6> <b>15.40%</b></div>
                                <div class="stat-item">
                                    <h6>Day</h6> <b>5.50%</b></div>
                            </div>
                            <div id="sparkline8"></div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="white-box">
                            <h3 class="box-title"><small class="pull-right m-t-10 text-danger"><i class="fa fa-sort-desc"></i> 18% High then last month</small>Site Traffic</h3>
                            <div class="stats-row">
                                <div class="stat-item">
                                    <h6>Overall Growth</h6> <b>80.40%</b></div>
                                <div class="stat-item">
                                    <h6>Montly</h6> <b>15.40%</b></div>
                                <div class="stat-item">
                                    <h6>Day</h6> <b>5.50%</b></div>
                            </div>
                            <div id="sparkline9"></div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="white-box">
                            <h3 class="box-title"><small class="pull-right m-t-10 text-success"><i class="fa fa-sort-asc"></i> 18% High then last month</small>Site Traffic</h3>
                            <div class="stats-row">
                                <div class="stat-item">
                                    <h6>Overall Growth</h6> <b>80.40%</b></div>
                                <div class="stat-item">
                                    <h6>Montly</h6> <b>15.40%</b></div>
                                <div class="stat-item">
                                    <h6>Day</h6> <b>5.50%</b></div>
                            </div>
                            <div id="sparkline10"></div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <!-- .row -->
                <div class="row">
                    <div class="col-md-4 col-xs-12 col-sm-6">
                        <div class="white-box">
                            <h3 class="box-title">To Do List</h3>
                            <ul class="list-task list-group" data-role="tasklist">
                                <li class="list-group-item" data-role="task">
                                    <div class="checkbox checkbox-info">
                                        <input type="checkbox" id="inputSchedule" name="inputCheckboxesSchedule">
                                        <label for="inputSchedule"> <span>Schedule meeting</span> </label>
                                    </div>
                                </li>
                                <li class="list-group-item" data-role="task">
                                    <div class="checkbox checkbox-info">
                                        <input type="checkbox" id="inputCall" name="inputCheckboxesCall">
                                        <label for="inputCall"> <span>Call clients for follow-up</span> <span class="label label-danger">Today</span> </label>
                                    </div>
                                </li>
                                <li class="list-group-item" data-role="task">
                                    <div class="checkbox checkbox-info">
                                        <input type="checkbox" id="inputBook" name="inputCheckboxesBook">
                                        <label for="inputBook"> <span>Book flight for holiday</span> </label>
                                    </div>
                                </li>
                                <li class="list-group-item" data-role="task">
                                    <div class="checkbox checkbox-info">
                                        <input type="checkbox" id="inputForward" name="inputCheckboxesForward">
                                        <label for="inputForward"> <span>Forward important tasks</span> <span class="label label-warning">2 weeks</span> </label>
                                    </div>
                                </li>
                                <li class="list-group-item" data-role="task">
                                    <div class="checkbox checkbox-info">
                                        <input type="checkbox" id="inputRecieve" name="inputCheckboxesRecieve">
                                        <label for="inputRecieve"> <span>Recieve shipment</span> </label>
                                    </div>
                                </li>
                                <li class="list-group-item" data-role="task">
                                    <div class="checkbox checkbox-info">
                                        <input type="checkbox" id="inputForward2" name="inputCheckboxesd">
                                        <label for="inputForward2"> <span>Important tasks</span> <span class="label label-success">2 weeks</span> </label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-12 col-sm-6">
                        <div class="white-box">
                            <h3 class="box-title">You have 5 new messages</h3>
                            <div class="message-center">
                                <a href="#">
                                    <div class="user-img"> <img src="../plugins/images/users/pawandeep.jpg" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                                    <div class="mail-contnet">
                                        <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:30 AM</span> </div>
                                </a>
                                <a href="#">
                                    <div class="user-img"> <img src="../plugins/images/users/sonu.jpg" alt="user" class="img-circle"> <span class="profile-status busy pull-right"></span> </div>
                                    <div class="mail-contnet">
                                        <h5>Sonu Nigam</h5> <span class="mail-desc">I've sung a song! See you at</span> <span class="time">9:10 AM</span> </div>
                                </a>
                                <a href="#">
                                    <div class="user-img"> <img src="../plugins/images/users/arijit.jpg" alt="user" class="img-circle"> <span class="profile-status away pull-right"></span> </div>
                                    <div class="mail-contnet">
                                        <h5>Arijit Sinh</h5> <span class="mail-desc">I am a singer!</span> <span class="time">9:08 AM</span> </div>
                                </a>
                                <a href="#">
                                    <div class="user-img"> <img src="../plugins/images/users/genu.jpg" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                                    <div class="mail-contnet">
                                        <h5>Genelia Deshmukh</h5> <span class="mail-desc">I love to do acting and dancing</span> <span class="time">9:08 AM</span> </div>
                                </a>
                                <a href="#" class="b-none">
                                    <div class="user-img"> <img src="../plugins/images/users/pawandeep.jpg" alt="user" class="img-circle"> <span class="profile-status offline pull-right"></span> </div>
                                    <div class="mail-contnet">
                                        <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="white-box">
                            <h3 class="box-title">Chat</h3>
                            <div class="chat-box">
                                <ul class="chat-list slimscroll" style="overflow: hidden;" tabindex="5005">
                                    <li>
                                        <div class="chat-image"> <img alt="male" src="../plugins/images/users/sonu.jpg"> </div>
                                        <div class="chat-body">
                                            <div class="chat-text">
                                                <h4>Sonu Nigam</h4>
                                                <p> Hi, All! </p> <b>10.00 am</b> </div>
                                        </div>
                                    </li>
                                    <li class="odd">
                                        <div class="chat-image"> <img alt="Female" src="../plugins/images/users/genu.jpg"> </div>
                                        <div class="chat-body">
                                            <div class="chat-text">
                                                <h4>Genelia</h4>
                                                <p> Hi, How are you Sonu? ur next concert? </p> <b>10.03 am</b> </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="chat-image"> <img alt="male" src="../plugins/images/users/ritesh.jpg"> </div>
                                        <div class="chat-body">
                                            <div class="chat-text">
                                                <h4>Ritesh</h4>
                                                <p> Hi, Sonu and Genelia, </p> <b>10.05 am</b> </div>
                                        </div>
                                    </li>
                                </ul>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Say something"> <span class="input-group-btn">
                    <button class="btn btn-success" type="button">Send</button>
                    </span> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <!-- .row -->
                <div class="row">
                    <div class="col-md-4 col-lg-4 col-xs-12">
                        <div class="white-box">
                            <h3 class="box-title">Browser Stats</h3>
                            <ul class="basic-list">
                                <li>Google Chrome <span class="pull-right label-danger label">21.8%</span></li>
                                <li>Mozila Firefox <span class="pull-right label-purple label">21.8%</span></li>
                                <li>Apple Safari <span class="pull-right label-success label">21.8%</span></li>
                                <li>Internet Explorer <span class="pull-right label-info label">21.8%</span></li>
                                <li>Opera mini <span class="pull-right label-warning label">21.8%</span></li>
                                <li>Mozila Firefox <span class="pull-right label-purple label">21.8%</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 col-xs-12">
                        <div class="white-box">
                            <h3 class="box-title">Visits from countries</h3>
                            <ul class="country-state">
                                <li>
                                    <h2>6350</h2> <small>From India</small>
                                    <div class="pull-right">48% <i class="fa fa-level-up text-success"></i></div>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:48%;"> <span class="sr-only">48% Complete</span></div>
                                    </div>
                                </li>
                                <li>
                                    <h2>3250</h2> <small>From UAE</small>
                                    <div class="pull-right">98% <i class="fa fa-level-up text-success"></i></div>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-inverse" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:98%;"> <span class="sr-only">98% Complete</span></div>
                                    </div>
                                </li>
                                <li>
                                    <h2>1250</h2> <small>From Australia</small>
                                    <div class="pull-right">75% <i class="fa fa-level-down text-danger"></i></div>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:75%;"> <span class="sr-only">75% Complete</span></div>
                                    </div>
                                </li>
                                <li>
                                    <h2>1350</h2> <small>From USA</small>
                                    <div class="pull-right">48% <i class="fa fa-level-up text-success"></i></div>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:48%;"> <span class="sr-only">48% Complete</span></div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-xs-12">
                        <div class="white-box">
                            <div class="user-bg"> <img src="../plugins/images/large/img1.jpg" alt="user" style="100%">
                                <div class="overlay-box">
                                    <div class="user-content">
                                        <a href="javascript:void(0)"><img alt="img" class="thumb-lg img-circle" src="../plugins/images/users/genu.jpg"></a>
                                        <h4 class="text-white">User Name</h4>
                                        <h5 class="text-white">info@myadmin.com</h5> </div>
                                </div>
                            </div>
                            <div class="user-btm-box">
                                <div class="col-md-4 col-sm-4 text-center">
                                    <p class="text-purple"><i class="ti-facebook"></i></p>
                                    <h1>258</h1> </div>
                                <div class="col-md-4 col-sm-4 text-center">
                                    <p class="text-blue"><i class="ti-twitter"></i></p>
                                    <h1>125</h1> </div>
                                <div class="col-md-4 col-sm-4 text-center">
                                    <p class="text-danger"><i class="ti-dribbble"></i></p>
                                    <h1>556</h1> </div>
                                <div class="stats-row col-md-12 m-t-20 m-b-0 text-center">
                                    <div class="stat-item">
                                        <h6>Contact info</h6> <b><i class="ti-mobile"></i> 123-456-7890</b></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <!-- .right-sidebar -->
                <div class="right-sidebar">
                    <div class="slimscrollright">
                        <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
                        <div class="r-panel-body">
                            <ul>
                                <li><b>Layout Options</b></li>
                                <li>
                                    <div class="checkbox checkbox-info">
                                        <input id="checkbox1" type="checkbox" class="fxhdr">
                                        <label for="checkbox1"> Fix Header </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="checkbox checkbox-warning">
                                        <input id="checkbox2" type="checkbox" class="fxsdr">
                                        <label for="checkbox2"> Fix Sidebar </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="checkbox checkbox-success">
                                        <input id="checkbox4" type="checkbox" class="open-close">
                                        <label for="checkbox4"> Toggle Sidebar </label>
                                    </div>
                                </li>
                            </ul>
                            <ul id="themecolors" class="m-t-20">
                                <li><b>With Light sidebar</b></li>
                                <li><a href="javascript:void(0)" data-theme="default" class="default-theme">1</a></li>
                                <li><a href="javascript:void(0)" data-theme="green" class="green-theme">2</a></li>
                                <li><a href="javascript:void(0)" data-theme="gray" class="yellow-theme">3</a></li>
                                <li><a href="javascript:void(0)" data-theme="blue" class="blue-theme">4</a></li>
                                <li><a href="javascript:void(0)" data-theme="purple" class="purple-theme">5</a></li>
                                <li><a href="javascript:void(0)" data-theme="megna" class="megna-theme working">6</a></li>
                                <li class="d-block m-t-30"><b>With Dark sidebar</b></li>
                                <li><a href="javascript:void(0)" data-theme="default-dark" class="default-dark-theme">7</a></li>
                                <li><a href="javascript:void(0)" data-theme="green-dark" class="green-dark-theme">8</a></li>
                                <li><a href="javascript:void(0)" data-theme="gray-dark" class="yellow-dark-theme">9</a></li>
                                <li><a href="javascript:void(0)" data-theme="blue-dark" class="blue-dark-theme">10</a></li>
                                <li><a href="javascript:void(0)" data-theme="purple-dark" class="purple-dark-theme">11</a></li>
                                <li><a href="javascript:void(0)" data-theme="megna-dark" class="megna-dark-theme">12</a></li>
                            </ul>
                            <ul class="m-t-20 chatonline">
                                <li><b>Chat option</b></li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../plugins/images/users/varun.jpg" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../plugins/images/users/genu.jpg" alt="user-img" class="img-circle"> <span>Genelia Deshmukh <small class="text-warning">Away</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../plugins/images/users/ritesh.jpg" alt="user-img" class="img-circle"> <span>Ritesh Deshmukh <small class="text-danger">Busy</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../plugins/images/users/arijit.jpg" alt="user-img" class="img-circle"> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../plugins/images/users/govinda.jpg" alt="user-img" class="img-circle"> <span>Govinda Star <small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../plugins/images/users/hritik.jpg" alt="user-img" class="img-circle"> <span>John Abraham<small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../plugins/images/users/john.jpg" alt="user-img" class="img-circle"> <span>Hritik Roshan<small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../plugins/images/users/pawandeep.jpg" alt="user-img" class="img-circle"> <span>Pwandeep rajan <small class="text-success">online</small></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>--}}
</div>
                <!-- /.right-sidebar -->
        
                 

@endsection
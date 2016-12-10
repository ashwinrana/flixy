<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="{{URL::to('src/img/favicon.ico')}}">

        <title>Dashboard: {{Auth::user()->first_name." ". Auth::user()->last_name }}</title>

    <!-- Bootstrap CSS -->
    <link href="{{URL::to('src/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="{{URL::to('src/css/bootstrap-theme.css')}}" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="{{URL::to('src/css/elegant-icons-style.css')}}" rel="stylesheet" />
    <link href="{{URL::to('src/css/font-awesome.min.css')}}" rel="stylesheet" />
    {{--<!-- full calendar css-->--}}
    {{--<link href="assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />--}}
    {{--<link href="assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />--}}
    <!-- easy pie chart-->
    <link href="{{URL::to('src/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css')}}" rel="stylesheet" type="text/css"
          media="screen"/>
    <!-- owl carousel -->
    <link rel="stylesheet" href="{{URL::to('src/css/owl.carousel.css')}}" type="text/css">
    <!-- Custom styles -->
    <link href="{{URL::to('src/css/widgets.css')}}" rel="stylesheet">
    <link href="{{URL::to('src/css/style.css')}}" rel="stylesheet">
    <link href="{{URL::to('src/css/style-responsive.css')}}" rel="stylesheet" />
    <link href="{{URL::to('src/css/xcharts.min.css')}}" rel=" stylesheet">
    <link href="{{URL::to('src/css/jquery-ui-1.10.4.min.css')}}" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
      <script src="{{URL::to('src/js/html5shiv.js')}}"></script>
      <script src="{{URL::to('src/js/respond.min.js')}}"></script>
      <script src="{{URL::to('src/js/lte-ie7.js')}}"></script>
    <![endif]-->
</head>

<body>
<!-- container section start -->
<section id="container" class="">


    <header class="header dark-bg">
        <!--logo start-->
        <a href="{{ url('dashboard') }}" class="logo">Nice <span class="lite">Admin</span></a>
        <!--logo end-->

        <div class="nav search-row" id="top_menu">
            <!--  search form start -->
            <ul class="nav top-menu">
                <li>
                    <form class="navbar-form">
                        <input class="form-control" placeholder="Search" type="text">
                    </form>
                </li>
            </ul>
            <!--  search form end -->
        </div>

        <div class="top-nav notification-row">
            <!-- notificatoin dropdown start-->
            <ul class="nav pull-right top-menu">

                <!-- task notificatoin start -->
                <li id="task_notificatoin_bar" class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="icon-task-l"></i>
                                <span class="badge bg-important">6</span>
                    </a>
                    <ul class="dropdown-menu extended tasks-bar">
                        <div class="notify-arrow notify-arrow-blue"></div>
                        <li>
                            <p class="blue">You have 6 pending letter</p>
                        </li>
                        <li>
                            <a href="#">
                                <div class="task-info">
                                    <div class="desc">Design PSD </div>
                                    <div class="percent">90%</div>
                                </div>
                                <div class="progress progress-striped">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                                        <span class="sr-only">90% Complete (success)</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="task-info">
                                    <div class="desc">
                                        Project 1
                                    </div>
                                    <div class="percent">30%</div>
                                </div>
                                <div class="progress progress-striped">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%">
                                        <span class="sr-only">30% Complete (warning)</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="task-info">
                                    <div class="desc">Digital Marketing</div>
                                    <div class="percent">80%</div>
                                </div>
                                <div class="progress progress-striped">
                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                        <span class="sr-only">80% Complete</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="task-info">
                                    <div class="desc">Logo Designing</div>
                                    <div class="percent">78%</div>
                                </div>
                                <div class="progress progress-striped">
                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 78%">
                                        <span class="sr-only">78% Complete (danger)</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="task-info">
                                    <div class="desc">Mobile App</div>
                                    <div class="percent">50%</div>
                                </div>
                                <div class="progress progress-striped active">
                                    <div class="progress-bar"  role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                                        <span class="sr-only">50% Complete</span>
                                    </div>
                                </div>

                            </a>
                        </li>
                        <li class="external">
                            <a href="#">See All Tasks</a>
                        </li>
                    </ul>
                </li>
                <!-- task notificatoin end -->
                <!-- inbox notificatoin start-->
                <li id="mail_notificatoin_bar" class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <i class="icon-envelope-l"></i>
                        <span class="badge bg-important">5</span>
                    </a>
                    <ul class="dropdown-menu extended inbox">
                        <div class="notify-arrow notify-arrow-blue"></div>
                        <li>
                            <p class="blue">You have 5 new messages</p>
                        </li>
                        <li>
                            <a href="#">
                                <span class="photo"><img alt="avatar" src="./img/avatar-mini.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Greg  Martin</span>
                                    <span class="time">1 min</span>
                                    </span>
                                    <span class="message">
                                        I really like this admin panel.
                                    </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="photo"><img alt="avatar" src="./img/avatar-mini2.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Bob   Mckenzie</span>
                                    <span class="time">5 mins</span>
                                    </span>
                                    <span class="message">
                                     Hi, What is next project plan?
                                    </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="photo"><img alt="avatar" src="./img/avatar-mini3.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Phillip   Park</span>
                                    <span class="time">2 hrs</span>
                                    </span>
                                    <span class="message">
                                        I am like to buy this Admin Template.
                                    </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="photo"><img alt="avatar" src="./img/avatar-mini4.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Ray   Munoz</span>
                                    <span class="time">1 day</span>
                                    </span>
                                    <span class="message">
                                        Icon fonts are great.
                                    </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">See all messages</a>
                        </li>
                    </ul>
                </li>
                <!-- inbox notificatoin end -->
                <!-- alert notification start-->
                <li id="alert_notificatoin_bar" class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                        <i class="icon-bell-l"></i>
                        <span class="badge bg-important">7</span>
                    </a>
                    <ul class="dropdown-menu extended notification">
                        <div class="notify-arrow notify-arrow-blue"></div>
                        <li>
                            <p class="blue">You have 4 new notifications</p>
                        </li>
                        <li>
                            <a href="#">
                                <span class="label label-primary"><i class="icon_profile"></i></span>
                                Friend Request
                                <span class="small italic pull-right">5 mins</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="label label-warning"><i class="icon_pin"></i></span>
                                John location.
                                <span class="small italic pull-right">50 mins</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="label label-danger"><i class="icon_book_alt"></i></span>
                                Project 3 Completed.
                                <span class="small italic pull-right">1 hr</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="label label-success"><i class="icon_like"></i></span>
                                Mick appreciated your work.
                                <span class="small italic pull-right"> Today</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">See all notifications</a>
                        </li>
                    </ul>
                </li>
                <!-- alert notification end-->
                <!-- user login dropdown start-->
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="img/avatar1_small.jpg">
                            </span>
                        <span class="username">{{ Auth::user()->first_name." ". Auth::user()->last_name }}</span>
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu extended logout">
                        <div class="log-arrow-up"></div>
                        <li class="eborder-top">
                            {{--$i = {{Auth::user()->id}}--}}
                            <a href="{{route('adminProfile',Auth::user()->id)}}"><i class="icon_profile"></i> My
                                Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="icon_mail_alt"></i> My Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="icon_clock_alt"></i> Timeline</a>
                        </li>
                        <li>
                            <a href="#"><i class="icon_chat_alt"></i> Chats</a>
                        </li>
                        <li>
                            <a href="{{ route('logout') }}"><i class="icon_key_alt"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
                <!-- user login dropdown end -->
            </ul>
            <!-- notificatoin dropdown end-->
        </div>
    </header>
    <!--header end-->


    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <!--overview start-->
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><i class="fa fa-laptop"></i> Dashboard</h3>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="{{ route('admin') }}">Home</a></li>
                        <li><i class="fa fa-laptop"></i>Dashboard</li>
                    </ol>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="info-box blue-bg">
                        <i class="fa fa-cloud-download"></i>
                        <div class="count">6.674</div>
                        <div class="title">Download</div>
                    </div><!--/.info-box-->
                </div><!--/.col-->

                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="info-box brown-bg">
                        <i class="fa fa-shopping-cart"></i>
                        <div class="count">7.538</div>
                        <div class="title">Purchased</div>
                    </div><!--/.info-box-->
                </div><!--/.col-->

                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="info-box dark-bg">
                        <i class="fa fa-thumbs-o-up"></i>
                        <div class="count">4.362</div>
                        <div class="title">Order</div>
                    </div><!--/.info-box-->
                </div><!--/.col-->

                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="info-box green-bg">
                        <i class="fa fa-cubes"></i>
                        <div class="count">1.426</div>
                        <div class="title">Stock</div>
                    </div><!--/.info-box-->
                </div><!--/.col-->

            </div><!--/.row-->



            <section class="panel">
                <div class="panel-body progress-panel">
                    <div class="row">
                        <div class="col-lg-8 task-progress pull-left">
                            <p align="center"><h1>User's List</h1></p>
                        </div>
                        <div class="col-lg-4">
                        </div>
                    </div>
                </div>
                <table class="table table-hover personal-task">
                    <tbody>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Status</th>
                    <th>Option</th>
                    <th>Roles</th>
                    @foreach($users as $user)
                        <tr>
                            <td>{{ $user->first_name }}</td>
                            <td>{{ $user->last_name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                <span class="badge bg-success">Active</span>
                            </td>
                            <td><a href="{{route('editlists',$user->id)}}">Edit</a>&nbsp;/&nbsp;<a
                                        href="#">Delete</a>&nbsp;/&nbsp;<a href="{{route('adminProfile',$user->id)
                            }}">Visit Profile</a></td>
                            <td><span class="badge bg-danger">Roles</span></td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{$users->links()}}
            </section>
            </div>
            <!-- Today status end -->



            <div class="row">

                <div class="col-lg-9 col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h2><i class="fa fa-flag-o red"></i><strong>Registered Users</strong></h2>
                            <div class="panel-actions">
                                <a href="index.html#" class="btn-setting"><i class="fa fa-rotate-right"></i></a>
                                <a href="index.html#" class="btn-minimize"><i class="fa fa-chevron-up"></i></a>
                                <a href="index.html#" class="btn-close"><i class="fa fa-times"></i></a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <table class="table bootstrap-datatable countries">
                                <thead>
                                <tr>
                                    <th></th>
                                    <th>Country</th>
                                    <th>Users</th>
                                    <th>Online</th>
                                    <th>Performance</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><img src="img/Germany.png" style="height:18px; margin-top:-2px;"></td>
                                    <td>Germany</td>
                                    <td>2563</td>
                                    <td>1025</td>
                                    <td>
                                        <div class="progress thin">
                                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="73" aria-valuemin="0" aria-valuemax="100" style="width: 73%">
                                            </div>
                                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="27" aria-valuemin="0" aria-valuemax="100" style="width: 27%">
                                            </div>
                                        </div>
                                        <span class="sr-only">73%</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img src="img/India.png" style="height:18px; margin-top:-2px;"></td>
                                    <td>India</td>
                                    <td>3652</td>
                                    <td>2563</td>
                                    <td>
                                        <div class="progress thin">
                                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100" style="width: 57%">
                                            </div>
                                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100" style="width: 43%">
                                            </div>
                                        </div>
                                        <span class="sr-only">57%</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img src="img/Spain.png" style="height:18px; margin-top:-2px;"></td>
                                    <td>Spain</td>
                                    <td>562</td>
                                    <td>452</td>
                                    <td>
                                        <div class="progress thin">
                                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="93" aria-valuemin="0" aria-valuemax="100" style="width: 93%">
                                            </div>
                                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="7" aria-valuemin="0" aria-valuemax="100" style="width: 7%">
                                            </div>
                                        </div>
                                        <span class="sr-only">93%</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img src="img/India.png" style="height:18px; margin-top:-2px;"></td>
                                    <td>Russia</td>
                                    <td>1258</td>
                                    <td>958</td>
                                    <td>
                                        <div class="progress thin">
                                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                            </div>
                                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            </div>
                                        </div>
                                        <span class="sr-only">20%</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img src="img/Spain.png" style="height:18px; margin-top:-2px;"></td>
                                    <td>USA</td>
                                    <td>4856</td>
                                    <td>3621</td>
                                    <td>
                                        <div class="progress thin">
                                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                            </div>
                                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            </div>
                                        </div>
                                        <span class="sr-only">20%</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img src="img/Germany.png" style="height:18px; margin-top:-2px;"></td>
                                    <td>Brazil</td>
                                    <td>265</td>
                                    <td>102</td>
                                    <td>
                                        <div class="progress thin">
                                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                            </div>
                                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            </div>
                                        </div>
                                        <span class="sr-only">20%</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img src="img/Germany.png" style="height:18px; margin-top:-2px;"></td>
                                    <td>Coloumbia</td>
                                    <td>265</td>
                                    <td>102</td>
                                    <td>
                                        <div class="progress thin">
                                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                            </div>
                                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            </div>
                                        </div>
                                        <span class="sr-only">20%</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img src="img/Germany.png" style="height:18px; margin-top:-2px;"></td>
                                    <td>France</td>
                                    <td>265</td>
                                    <td>102</td>
                                    <td>
                                        <div class="progress thin">
                                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                            </div>
                                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            </div>
                                        </div>
                                        <span class="sr-only">20%</span>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>

                </div><!--/col-->
                <div class="col-md-3">

                    <div class="social-box facebook">
                        <i class="fa fa-facebook"></i>
                        <ul>
                            <li>
                                <strong>256k</strong>
                                <span>friends</span>
                            </li>
                            <li>
                                <strong>359</strong>
                                <span>feeds</span>
                            </li>
                        </ul>
                    </div><!--/social-box-->
                </div>
                <div class="col-md-3">

                    <div class="social-box google-plus">
                        <i class="fa fa-google-plus"></i>
                        <ul>
                            <li>
                                <strong>962</strong>
                                <span>followers</span>
                            </li>
                            <li>
                                <strong>256</strong>
                                <span>circles</span>
                            </li>
                        </ul>
                    </div><!--/social-box-->

                </div><!--/col-->
                <div class="col-md-3">

                    <div class="social-box twitter">
                        <i class="fa fa-twitter"></i>
                        <ul>
                            <li>
                                <strong>1562k</strong>
                                <span>followers</span>
                            </li>
                            <li>
                                <strong>2562</strong>
                                <span>tweets</span>
                            </li>
                        </ul>
                    </div><!--/social-box-->

                </div><!--/col-->

            </div>



            <!-- statics end -->




            <!-- project team & activity start -->
<br><br>


            <!-- project team & activity end -->

        </section>
    </section>
    <!--main content end-->
</section>
<!-- container section start -->

<!-- javascripts -->
<script src="{{URL::to('src/js/jquery.js')}}"></script>
<script src="{{URL::to('src/js/jquery-ui-1.10.4.min.js')}}"></script>
<script src="{{URL::to('src/js/jquery-1.8.3.min.js')}}"></script>
<script type="text/javascript" src="{{URL::to('src/js/jquery-ui-1.9.2.custom.min.js')}}"></script>
<!-- bootstrap -->
<script src="{{URL::to('src/js/bootstrap.min.js')}}"></script>
<!-- nice scroll -->
<script src="{{URL::to('src/js/jquery.scrollTo.min.js')}}"></script>
<script src="{{URL::to('src/js/jquery.nicescroll.js')}}" type="text/javascript"></script>
<!-- charts scripts -->
<script src="{{URL::to('src/assets/jquery-knob/js/jquery.knob.js')}}"></script>
<script src="{{URL::to('src/js/jquery.sparkline.js')}}" type="text/javascript"></script>
<script src="{{URL::to('src/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js')}}"></script>
<script src="{{URL::to('src/js/owl.carousel.js')}}" ></script>
<!-- jQuery full calendar -->
{{--<<script src="js/fullcalendar.min.js"></script> <!-- Full Google Calendar - Calendar -->--}}
{{--<script src="assets/fullcalendar/fullcalendar//fullcalendar.js"></script>--}}
<!--script for this page only-->
{{--<script src="js/calendar-custom.js"></script>--}}
{{--<script src="js/jquery.rateit.min.js"></script>--}}
<!-- custom select -->
<script src="{{URL::to('src/js/jquery.customSelect.min.js')}}" ></script>
<script src="{{URL::to('src/assets/chart-master/Chart.js')}}"></script>

<!--custome script for all page-->
<script src="{{URL::to('src/js/scripts.js')}}"></script>
<!-- custom script for this page-->
<script src="{{URL::to('src/js/sparkline-chart.js')}}"></script>
<script src="{{URL::to('src/js/easy-pie-chart.js')}}"></script>
{{--<script src="js/jquery-jvectormap-1.2.2.min.js"></script>--}}
{{--<script src="js/jquery-jvectormap-world-mill-en.js"></script>--}}
<script src="{{URL::to('src/js/xcharts.min.js')}}"></script>
<script src="{{URL::to('src/js/jquery.autosize.min.js')}}"></script>
<script src="{{URL::to('src/js/jquery.placeholder.min.js')}}"></script>
<script src="{{URL::to('src/js/gdp-data.js')}}"></script>
<script src="{{URL::to('src/js/morris.min.js')}}"></script>
<script src="{{URL::to('src/js/sparklines.js')}}"></script>
<script src="{{URL::to('src/js/charts.js')}}"></script>
<script src="{{URL::to('src/js/jquery.slimscroll.min.js')}}"></script>
<script>

    //knob
    $(function() {
        $(".knob").knob({
            'draw' : function () {
                $(this.i).val(this.cv + '%')
            }
        })
    });

    //carousel
    $(document).ready(function() {
        $("#owl-slider").owlCarousel({
            navigation : true,
            slideSpeed : 300,
            paginationSpeed : 400,
            singleItem : true

        });
    });

    //custom select box

    $(function(){
        $('select.styled').customSelect();
    });

    /* ---------- Map ---------- */
    $(function(){
        $('#map').vectorMap({
            map: 'world_mill_en',
            series: {
                regions: [{
                    values: gdpData,
                    scale: ['#000', '#000'],
                    normalizeFunction: 'polynomial'
                }]
            },
            backgroundColor: '#eef3f7',
            onLabelShow: function(e, el, code){
                el.html(el.html()+' (GDP - '+gdpData[code]+')');
            }
        });
    });



</script>

</body>
</html>

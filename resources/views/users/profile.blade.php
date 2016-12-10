<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="admin/index/logo/img/favicon.png">
    <link rel ="stylesheet" href="{{asset('src/css/main.css')}}" type="text/css">

    <title>Profile | {{$user->first_name." ". $user->last_name }}</title>

    <!-- Bootstrap CSS -->
    <link href="{{URL::to('src/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="{{URL::to('src/css/bootstrap-theme.css')}}" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="{{URL::to('src/css/elegant-icons-style.css')}}" rel="stylesheet" />
    <link href="{{URL::to('src/css/font-awesome.min.css')}}" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="{{URL::to('src/css/style.css')}}" rel="stylesheet">
    <link href="{{URL::to('src/css/style-responsive.css')}}" rel="stylesheet" />

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
    <!--header start-->
    <header class="header dark-bg">
        <!--logo start-->
        <a href="{{ url('home') }}" class="logo">Nice <span class="lite">Admin</span></a>
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
                                <span class="badge bg-important">5</span>
                    </a>
                    <ul class="dropdown-menu extended tasks-bar">
                        <div class="notify-arrow notify-arrow-blue"></div>
                        <li>
                            <p class="blue">You have 5 pending tasks</p>
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
                                <img alt="" src="{{URL::to('src/img/avatar1_small.jpg')}}">
                            </span>
                        <span class="username">{{Auth::user()->first_name ." ". Auth::user()->last_name }}</span>
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu extended logout">
                        <div class="log-arrow-up"></div>
                       @if(Auth::user()->id != $user->id)
                        <li>
                            <a href="{{url('profile&').Auth::user()->id}}"><i class="icon_profile"></i> My Profile</a>
                        </li>
                        @endif
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
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><i class="fa fa-user-md"></i> Profile</h3>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="{{url('home')}}">Home</a></li>
                        <li><i class="icon_documents_alt"></i>Pages</li>
                        <li><i class="fa fa-user-md"></i>Profile</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <!-- profile-widget -->
                <div class="col-lg-12">
                    <div class="profile-widget profile-widget-info">
                        <div class="panel-body">
                            <div class="col-lg-2 col-sm-2">
                                <h4>{{$user->first_name ." ". $user->last_name}}</h4>
                                <div class="follow-ava">
                                    <img src="{{URL::to('src/img/profile-widget-avatar.jpg')}}" class="profile-pic" alt="">
                                    <div class="upload">Upload photo</div>

                                    <div class="pic-upload"><input type="file"></div>
                                </div>
                                <h6>Administrator</h6>
                            </div>
                            <div class="col-lg-4 col-sm-4 follow-info">
                                <p>Hello I’m {{$user->first_name." ".$user->last_name}}, a leading expert
                                    in
                                    interactive and
                                    creative design
                                    .</p>
                                <p>@jenifersmith</p>
                                <p><i class="fa fa-twitter">jenifertweet</i></p>
                                <h6>
                                    <span><i class="icon_clock_alt"></i>11:05 AM</span>
                                    <span><i class="icon_calendar"></i>{{$user->date_of_birth}}</span>
                                    <span><i class="icon_pin_alt"></i>{{$user->country}}</span>
                                </h6>
                            </div>
                            <div class="col-lg-2 col-sm-6 follow-info weather-category">
                                <ul>
                                    <li class="active">

                                        <i class="fa fa-comments fa-2x"> </i><br>

                                        Easy for Chat
                                    </li>

                                </ul>
                            </div>
                            <div class="col-lg-2 col-sm-6 follow-info weather-category">
                                <ul>
                                    <li class="active">

                                        <i class="fa fa-bell fa-2x"> </i><br>

                                        Attactive Notification System
                                    </li>

                                </ul>
                            </div>
                            <div class="col-lg-2 col-sm-6 follow-info weather-category">
                                <ul>
                                    <li class="active">

                                        <i class="fa fa-tachometer fa-2x"> </i><br>

                                        High speed
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- page start-->
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading tab-bg-info">
                            <ul class="nav nav-tabs">
                                <li class="active">
                                    <a data-toggle="tab" href="#recent-activity"><i class="icon-home"></i>{{$user->first_name." ". $user->last_name }} Wall
                                    </a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#profile"><i class="icon-user"></i>Profile
                                    </a>
                                </li>  @if(Auth::user()->id == $user->id)
                                <li class="">
                                    <a data-toggle="tab" href="#edit-profile">
                                        <i class="icon-envelope"></i>
                                        Edit Profile
                                    </a>
                                </li>
                                           @endif
                            </ul>
                        </header>
                        <div class="panel-body">
                            <div class="tab-content">
                                <div id="recent-activity" class="tab-pane active">
                                    <div class="profile-activity">
                                        <div class="act-time">
                                            <div class="activity-body act-in">
                                                <span class="arrow"></span>
                                                <div class="text">
                                                    <a href="#" class="activity-img"><img class="avatar" src="admin/index/img/chat-avatar.jpg" alt=""></a>
                                                    <p class="attribution"><a href="#">Jonatanh Doe</a> at 4:25pm, 30th Octmber 2014</p>
                                                    <p>It is a long established fact that a reader will be distracted layout</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="act-time">
                                            <div class="activity-body act-in">
                                                <span class="arrow"></span>
                                                <div class="text">
                                                    <a href="#" class="activity-img"><img class="avatar" src="admin/index/img/chat-avatar.jpg" alt=""></a>
                                                    <p class="attribution"><a href="#">Jhon Loves </a> at 5:25am, 30th Octmber 2014</p>
                                                    <p>Knowledge speaks, but wisdom listens.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="act-time">
                                            <div class="activity-body act-in">
                                                <span class="arrow"></span>
                                                <div class="text">
                                                    <a href="#" class="activity-img"><img class="avatar" src="admin/index/img/chat-avatar.jpg" alt=""></a>
                                                    <p class="attribution"><a href="#">Rose Crack</a> at 5:25am, 30th Octmber 2014</p>
                                                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="act-time">
                                            <div class="activity-body act-in">
                                                <span class="arrow"></span>
                                                <div class="text">
                                                    <a href="#" class="activity-img"><img class="avatar" src="admin/index/img/chat-avatar.jpg" alt=""></a>
                                                    <p class="attribution"><a href="#">Jimy Smith</a> at 5:25am, 30th Octmber 2014</p>
                                                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="act-time">
                                            <div class="activity-body act-in">
                                                <span class="arrow"></span>
                                                <div class="text">
                                                    <a href="#" class="activity-img"><img class="avatar" src="admin/index/img/chat-avatar.jpg" alt=""></a>
                                                    <p class="attribution"><a href="#">Maria Willyam</a> at 5:25am, 30th Octmber 2014</p>
                                                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="act-time">
                                            <div class="activity-body act-in">
                                                <span class="arrow"></span>
                                                <div class="text">
                                                    <a href="#" class="activity-img"><img class="avatar" src="admin/index/img/chat-avatar.jpg" alt=""></a>
                                                    <p class="attribution"><a href="#">Sarah saw</a> at 5:25am, 30th Octmber 2014</p>
                                                    <p>Knowledge speaks, but wisdom listens.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="act-time">
                                            <div class="activity-body act-in">
                                                <span class="arrow"></span>
                                                <div class="text">
                                                    <a href="#" class="activity-img"><img class="avatar" src="admin/index/img/chat-avatar.jpg" alt=""></a>
                                                    <p class="attribution"><a href="#">Layla night</a> at 5:25am, 30th Octmber 2014</p>
                                                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="act-time">
                                            <div class="activity-body act-in">
                                                <span class="arrow"></span>
                                                <div class="text">
                                                    <a href="#" class="activity-img"><img class="avatar" src="admin/index/img/chat-avatar.jpg" alt=""></a>
                                                    <p class="attribution"><a href="#">Andriana lee</a> at 5:25am, 30th Octmber 2014</p>
                                                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="act-time">
                                            <div class="activity-body act-in">
                                                <span class="arrow"></span>
                                                <div class="text">
                                                    <a href="#" class="activity-img"><img class="avatar" src="admin/index/img/chat-avatar.jpg" alt=""></a>
                                                    <p class="attribution"><a href="#">Maria Willyam</a> at 5:25am, 30th Octmber 2014</p>
                                                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- profile -->
                                <div id="profile" class="tab-pane">
                                    <section class="panel">
                                        <div class="bio-graph-heading">
                                            Hello I’m {{$user->first_name." ".$user->last_name}} ,
                                            {{$user->about_me}}</div>
                                        <div class="panel-body bio-graph-info">
                                            <h1>Bio Graph</h1>
                                            <div class="row">
                                                <div class="bio-row">
                                                    <p><span>First Name </span>: {{ $user->first_name }} </p>
                                                </div>
                                                <div class="bio-row">
                                                    <p><span>Last Name </span>: {{ $user->last_name }}</p>
                                                </div>
                                                <div class="bio-row">
                                                    <p><span>Birthday</span>: {{ $user->date_of_birth }}</p>
                                                </div>
                                                <div class="bio-row">
                                                    <p><span>Country </span>: {{ $user->country }}</p>
                                                </div>
                                                <div class="bio-row">
                                                    <p><span>Occupation </span>: {{ $user->occupation }}</p>
                                                </div>
                                                <div class="bio-row">
                                                    <p><span>Email </span>: {{ $user->email }}</p>
                                                </div>
                                                <div class="bio-row">
                                                    <p><span>Mobile </span>: {{$user->contact_number }}</p>
                                                </div>
                                                <div class="bio-row">
                                                    <p><span>Website </span>: <a href="{{$user->website }}"
                                                                                 target="_blank">{{$user->website }}</a> </p>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    {{--<section>--}}
                                        {{--<div class="row">--}}
                                        {{--</div>--}}
                                    {{--</section>--}}
                                </div>
                                @if(Auth::user()->id == $user->id)
                                    <!-- edit-profile -->
                                <div id="edit-profile" class="tab-pane">
                                    <section class="panel">
                                        <div class="panel-body bio-graph-info">
                                            <h1> Profile Info</h1>
                                            <form class="form-horizontal" role="form" action="update&{{$user->id}}" method="POST">
                                                <div class="form-group">
                                                    {{csrf_field()}}
                                                    <label class="col-lg-2 control-label">First Name</label>
                                                    <div class="col-lg-6"><input type="text" name="first_name"
                                                                                 class="form-control" value="{{ Auth::user()->first_name }} ">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">Last Name</label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" name="last_name" value="{{ Auth::user()->last_name }} " >
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">About Me</label>
                                                    <div class="col-lg-10">
                                                        <textarea name="about_me"  class="form-control"
                                                                  cols="30"
                                                                  rows="5" value="{{Auth::user()
                                                                  ->about_me}}"></textarea>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">Country</label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" name="country"
                                                               value="{{Auth::user()->country}}">
                                                    </div>
                                                </div>

                                                {{--<div class="form-group">--}}
                                                    {{--<label class="col-lg-2 control-label">Country</label>--}}
                                                    {{--<div class="col-lg-6">--}}
                                                        {{--<Select>Country:--}}
                                                            {{--<option>Afghanistan</option>--}}
                                                            {{--<option>Albania</option>--}}
                                                            {{--<option>Algeria</option>--}}
                                                            {{--<option>Andorra</option>--}}
                                                            {{--<option>Angola</option>--}}
                                                            {{--<option>Antigua and Barbuda</option>--}}
                                                            {{--<option>Argentina</option>--}}
                                                            {{--<option>Armenia</option>--}}
                                                            {{--<option>Australia</option>--}}
                                                            {{--<option>Azerbaijan</option>--}}
                                                            {{--<option>Bahamas</option>--}}
                                                            {{--<option>Bahrain</option>--}}
                                                            {{--<option>Bangladesh</option>--}}
                                                            {{--<option>Barbados</option>--}}
                                                            {{--<option>Belarus</option>--}}
                                                            {{--<option>Belgium</option>--}}
                                                            {{--<option>Belize</option>--}}
                                                            {{--<option>Benin</option>--}}
                                                            {{--<option>Bhutan</option>--}}
                                                            {{--<option>Bolivia</option>--}}
                                                            {{--<option>Bosnia and Herzegovina</option>--}}
                                                            {{--<option>Botswana</option>--}}
                                                            {{--<option>Brazil</option>--}}
                                                            {{--<option>Brunei</option>--}}
                                                            {{--<option>Bulgaria</option>--}}
                                                            {{--<option>Burkina Faso</option>--}}
                                                            {{--<option>Burundi</option>--}}
                                                            {{--<option>Cabo Verde</option>--}}
                                                            {{--<option>Cambodia</option>--}}
                                                            {{--<option>Cameroon</option>--}}
                                                            {{--<option>Canada</option>--}}
                                                            {{--<option>Central African Republic (CAR)</option>--}}
                                                            {{--<option>Chad</option>--}}
                                                            {{--<option>Chile</option>--}}
                                                            {{--<option>China</option>--}}
                                                            {{--<option>Colombia</option>--}}
                                                            {{--<option>Comoros</option>--}}
                                                            {{--<option>Democratic Republic of the Congo</option>--}}
                                                            {{--<option>Republic of the Congo</option>--}}
                                                            {{--<option>Costa Rica</option>--}}
                                                            {{--<option>Cote d'Ivoire</option>--}}
                                                            {{--<option>Croatia</option>--}}
                                                            {{--<option>Cuba</option>--}}
                                                            {{--<option>Cyprus</option>--}}
                                                            {{--<option>Czech Republic</option>--}}
                                                            {{--<option>Denmark</option>--}}
                                                            {{--<option>Djibouti</option>--}}
                                                            {{--<option>Dominica</option>--}}
                                                            {{--<option>Dominican Republic</option>--}}
                                                            {{--<option>Ecuador</option>--}}
                                                            {{--<option>Egypt</option>--}}
                                                            {{--<option>El Salvador</option>--}}
                                                            {{--<option>Equatorial Guinea</option>--}}
                                                            {{--<option>Eritrea</option>--}}
                                                            {{--<option>Estonia</option>--}}
                                                            {{--<option>Ethiopia</option>--}}
                                                            {{--<option>Fiji</option>--}}
                                                            {{--<option>Finland</option>--}}
                                                            {{--<option>France</option>--}}
                                                            {{--<option>Gabon</option>--}}
                                                            {{--<option>Gambia</option>--}}
                                                            {{--<option>Georgia</option>--}}
                                                            {{--<option>Germany</option>--}}
                                                            {{--<option>Ghana</option>--}}
                                                            {{--<option>Greece</option>--}}
                                                            {{--<option>Grenada</option>--}}
                                                            {{--<option>Guatemala</option>--}}
                                                            {{--<option>Guinea</option>--}}
                                                            {{--<option>Guinea-Bissau</option>--}}
                                                            {{--<option>Guyana</option>--}}
                                                            {{--<option>Haiti</option>--}}
                                                            {{--<option>Honduras</option>--}}
                                                            {{--<option>Hungary</option>--}}
                                                            {{--<option>Iceland</option>--}}
                                                            {{--<option>India</option>--}}
                                                            {{--<option>Indonesia</option>--}}
                                                            {{--<option>Iran</option>--}}
                                                            {{--<option>Iraq</option>--}}
                                                            {{--<option>Ireland</option>--}}
                                                            {{--<option>Israel</option>--}}
                                                            {{--<option>Italy</option>--}}
                                                            {{--<option>Jamaica</option>--}}
                                                            {{--<option>Japan</option>--}}
                                                            {{--<option>Jordan</option>--}}
                                                            {{--<option>Kazakhstan</option>--}}
                                                            {{--<option>Kenya</option>--}}
                                                            {{--<option>Kiribati</option>--}}
                                                            {{--<option>Kosovo</option>--}}
                                                            {{--<option>Kuwait</option>--}}
                                                            {{--<option>Kyrgyzstan</option>--}}
                                                            {{--<option>Laos</option>--}}
                                                            {{--<option>Latvia</option>--}}
                                                            {{--<option>Lebanon</option>--}}
                                                            {{--<option>Lesotho</option>--}}
                                                            {{--<option>Liberia</option>--}}
                                                            {{--<option>Libya</option>--}}
                                                            {{--<option>Liechtenstein</option>--}}
                                                            {{--<option>Lithuania</option>--}}
                                                            {{--<option>Luxembourg</option>--}}
                                                            {{--<option>Macedonia</option>--}}
                                                            {{--<option>Madagascar</option>--}}
                                                            {{--<option>Malawi</option>--}}
                                                            {{--<option>Malaysia</option>--}}
                                                            {{--<option>Maldives</option>--}}
                                                            {{--<option>Mali</option>--}}
                                                            {{--<option>Malta</option>--}}
                                                            {{--<option>Marshall Islands</option>--}}
                                                            {{--<option>Mauritania</option>--}}
                                                            {{--<option>Mauritius</option>--}}
                                                            {{--<option>Mexico</option>--}}
                                                            {{--<option>Micronesia</option>--}}
                                                            {{--<option>Moldova</option>--}}
                                                            {{--<option>Monaco</option>--}}
                                                            {{--<option>Mongolia</option>--}}
                                                            {{--<option>Montenegro</option>--}}
                                                            {{--<option>Morocco</option>--}}
                                                            {{--<option>Mozambique</option>--}}
                                                            {{--<option>Myanmar (Burma)</option>--}}
                                                            {{--<option>Namibia</option>--}}
                                                            {{--<option>Nauru</option>--}}
                                                            {{--<option>Nepal</option>--}}
                                                        {{--</Select>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">Birthday</label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" name="date_of_birth" value="{{ Auth::user()->date_of_birth }}" >
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">Occupation</label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control"name="occupation"
                                                               value{{Auth::user()->occupation }}>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">Email</label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" name="email"
                                                               value="{{  Auth::user()->email }} ">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">Mobile</label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" name="contact_number"
                                                               value="{{Auth::user()->contatc_number}}">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">Website URL</label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" name="website"
                                                               placeholder="http://www.demowebsite.com"
                                                               value="{{Auth::user()->websites}}">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="col-lg-offset-2 col-lg-10">
                                                        <button type="submit" class="btn btn-primary">Save</button>
                                                        <button type="button" class="btn btn-danger">Cancel</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                @endif
            </div>

            <!-- page end-->
        </section>
    </section>
    <!--main content end-->
</section>
<!-- container section end -->
<!-- javascripts -->
<script src="{{URL::to('src/js/jquery.js')}}"></script>
<script src="{{URL::to('src/js/bootstrap.min.js')}}"></script>
<!-- nice scroll -->
<script src="{{URL::to('src/js/jquery.scrollTo.min.js')}}"></script>
<script src="{{URL::to('src/js/jquery.nicescroll.js')}}" type="text/javascript"></script>
<!-- jquery knob -->
<script src="{{URL::to('src/assets/jquery-knob/js/jquery.knob.js')}}"></script>
<!--custome script for all page-->
<script src="{{URL::to('src/js/scripts.js')}}"></script>

<script>

    //knob
    $(".knob").knob();

</script>


</body>
</html>

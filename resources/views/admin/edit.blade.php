<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="{{URL::to('src/img/favicon.ico')}}">

    <title>Edit | {{  $user->first_name." ".$user->last_name }}</title>


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
<div id="container" class="">


    <header class="header dark-bg">
        <!--logo start-->
        <a href="{{ url('admin/home') }}" class="logo">Nice <span class="lite">Admin</span></a>
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
  <br/><br/><br/>
    <div id="edit-profile" class="tab-pane">
        <section class="panel">
            <div class="panel-body bio-graph-info">
                <h1> Profile Info</h1>
                <form class="form-horizontal" role="form" action="update&{{$user->id}}" method="POST">
                    <div class="form-group">
                        <label class="col-lg-2 control-label">First Name</label>
                        <div class="col-lg-6"><input type="text" name="first_name"
                                                     class="form-control" value="{{ $user->first_name}} ">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label">Last Name</label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" name="last_name" value="{{ $user->last_name }} " >
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label">About Me</label>
                        <div class="col-lg-10">
                                                        <textarea name="about_me"  class="form-control"
                                                                  cols="30"
                                                                  rows="5"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Country</label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" name="country" placeholder=" ">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Birthday</label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" name="date_of_birth" value="{{ $user->date_of_birth }}" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Occupation</label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control"name="occupation"
                                   placeholder=" ">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Email</label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" name="email"
                                   value="{{  $user->email }} ">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Mobile</label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" name="contact_number"
                                   placeholder=" ">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Website URL</label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" name="website"
                                   placeholder="http://www.demowebsite.com ">
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
    <!--main content end-->
<!-- container section start -->

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


</script>

</body>
</html>

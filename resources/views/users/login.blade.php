<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Login By Ashwin">
    <meta name="author" content="Ashwin Rana">
    <meta name="keyword" content="Ashwin Rana, Dashboard for babinr.com.np, Admin Ashwin, babinr.com.np, babinr.com, wwww.babinr.com.np, http://www.babinr.com.np">
    <link rel="icon" href="{{URL::to('src/img/favicon.ico')}}" />

    <title>Login Page for Admin</title>

    <!-- Bootstrap CSS -->
    <link href="{{URL::to('src/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="{{URL::to('src/css/bootstrap-theme.css')}}" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="{{URL::to('src/css/elegant-icons-style.css')}}" rel="stylesheet" />
    <link href="{{URL::to('src/css/font-awesome.css')}}" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="{{URL::to('src/css/style.css')}}" rel="stylesheet">
    <link href="{{URL::to('src/css/style-responsive.css')}}" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
    <script src="{{URL::to('src/js/html5shiv.js')}}"></script>
    <script src="{{URL::to('src/js/respond.min.js')}}"></script>


    <![endif]-->
</head>

<body class="login-img3-body">

@if(Session::has('msg'))

    {{Session::get('msg')}}

    @endif

<div class="container">
    <form class="login-form" action="{{ route('postLogin') }}" method="post">
        <div class="login-wrap">
            <p align="center"> <img src="{{URL::to('src/img/logo.png')}}" width="90" height="90"></p>
            <br>
            @if ( Session::has('message') )
                {!! Session::get('message') !!}
            @endif
            <div class="input-group">
                {!! csrf_field() !!}
                <span class="input-group-addon"><i class="icon_profile"></i></span>
                <input type="text" class="form-control" placeholder="User Name" name="user_name" required autofocus>
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                <input type="password" class="form-control" placeholder="password" name="password" required>
            </div>
            <label class="checkbox">
                <input type="checkbox" value="remember-me"> Remember me
                <span class="pull-right"> <a href="#"> Forgot Password?</a></span>
            </label>
            <br />
            <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
        </div>
<p align="center">
        <a href="{{ route('create') }}" class="btn btn-info btn-lg">Create Account</a>
</p></form>

</div>

<!-- This website is registered under private domain so the source code is also private. If you copy this source code
 and modify this code for your any use then you can be sued to court by www.babinr.com.np-->
</body>
</html>

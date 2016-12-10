<html>
<head>
    <!DOCTYPE html>
    <!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
    <!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
    <!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
    <!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <!-- BASICS -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>User List</title>
        <link rel="icon" href="./index/img/logo/favicon.ico">
        <meta name="description" content="Viewing User Registered List in BABINR.COM.NP">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/isotope.css" media="screen" />
        <link rel="stylesheet" href="./index/js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="./index/css/bootstrap.css">
        <link rel="stylesheet" href="./index/css/bootstrap-theme.css">
        <link rel="stylesheet" href="./index/css/style.css">
        <!-- skin -->
        <link rel="stylesheet" href="./index/skin/default.css">
    </head>
<body>
<br>
<p align="center">Welcome: <a href="{{route('profile',Auth::user()->id)}}">{{ Auth::user()->user_name  }} </a></p>
<br>
<div style="float: left; margin-left:2%;"><a href="{{ url('/create') }}" class="btn btn-info">Add User</a></div>

<div style="float: right; margin-right:2%;"><a href="{{ url('/logout') }}" class="btn btn-danger">Logout!</a></div>

<div style="float: right; margin-right:2%;"><a href="{{ url('users') }}" class="btn btn-danger">Refresh Record</a></div>
<br/><br/><br/>
<div class="container">
    <div class="row">
        <table class="table table-bordered">
            <tr>

                {{--<th>S.NO</th>--}}
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>User Name</th>
                <th>Address</th>
                <th>Contact Number</th>
                <th>Date Of Birth</th>
                <th>Option</th>
            </tr>

            @foreach($users as $user)
                {{--<td>{{$i++}}</td>--}}
                <td>{{$user->first_name }}</td>
                <td>{{$user->last_name }}</td>
                <td>{{$user->email }}</td>
                <td>{{$user->user_name }}</td>
            <td>{{$user->address}}</td>
                <td>{{$user->date_of_birth  }}</td>
                <td>{{$user->contact_number  }}</td>
                <td>{{$user->date_of_birth }}</td>
                <td><a href="{{route('editlists',$user->id)}}">Edit</a> &nbsp;/ &nbsp;<a
                            href="{{route('deleteUser',$user->id)}}">Delete?</a> &nbsp;/ &nbsp;<a href="{{route('profile',$user->id)
                            }}">Visit Profile</a></td>
                </tr>
            @endforeach
        </table>
        {{$users->links()}}
    </div>
</div></body>
</html>
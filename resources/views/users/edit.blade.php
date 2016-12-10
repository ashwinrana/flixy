<html>
<head>
    <title>Sample File</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
<p align="center"><h1>Edit Form</h1></p>
<div class="container">
    <div class="row">
        <form action="update&{{$user->id}}" class="form" method="POST" />
        {{csrf_field()}}
        <div class="form-group"><label for="">User Name: </label> {{$user->user_name}}</div>
        <div class="form-group"><label for="">First Name: </label><input type="text" class="form-control" name="first_name" value="{{$user->first_name}}"></div>
        <div class="form-group"><label for="">Last Name: </label><input type="text" class="form-control" name="last_name" value="{{$user->last_name}}"></div>
        <div class="form-group"><label for="">Email: </label><input type="text" class="form-control" name="email" value="{{$user->email}}"></div>
        {{--<div class="form-group"><label for="">New Password: </label><input type="password" class="form-control" name="password"></div>--}}
        <div class="form-group"><label for="">Address: </label><input type="text" class="form-control" name="Address" value="{{$user->address}}"></div>
        <div class="form-group"><label for="">Contact Number: </label><input type="text" class="form-control" name="contact_number" value="{{$user->contact_number}}"></div>
        <div class="form-group"><label for="">Date Of Birth: </label><input type="text" class="form-control" name="date_of_birth" value="{{$user->date_of_birth}}"></div>
        <div class="form-group"><label for=""></label><button type="text" class=" btn btn-danger"> Update</div>

        </form>

        <div></div>

    </div>
</body>
</html>
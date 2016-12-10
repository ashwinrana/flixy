<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="{{URL::to('src/img/favicon.ico')}}">

    <title>SignUp</title>


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


<section class="panel">
    <div class="panel-body bio-graph-info">
        <h1> Signup Form</h1><div style="float: right;">*Optional</div>
        <form class="form-horizontal" role="form" action="{{ url('users') }}" method="POST"
              enctype="multipart/form-data">
            <div class="form-group">
                {{csrf_field()}}
                <label class="col-lg-2 control-label">First Name</label>
                <div class="col-lg-6">
                    <input type="text" name="first_name" class="form-control" required >
                    <span>{{error->first('first_name')}}</span>
                </div>
            </div>

            <div class="form-group">
                <label class="col-lg-2 control-label">Last Name</label>
                <div class="col-lg-6">
                    <input type="text" class="form-control" name="last_name" required >
                    <span>{{error->first('last_name')}}</span>
                </div>
            </div>

            <div class="form-group">
                <label class="col-lg-2 control-label">User Name</label>
                <div class="col-lg-6">
                    <input type="text" class="form-control" name="user_name" required >
                    <span>{{error->first('first_name')}}</span>
                </div>
            </div>

            {{--@if ( Session::has('message') )--}}
            {{--{!! Session::get('message') !!}--}}
            {{--@endif--}}
            <div class="form-group">
                <label class="col-lg-2 control-label">Password</label>
                <div class="col-lg-6">
                    <input type="password" class="form-control" name="password" required >
                </div>
            </div>

            {{--<div class="form-group">--}}
            {{--<label class="col-lg-2 control-label">Confirm Password</label>--}}
            {{--<div class="col-lg-6">--}}
            {{--<input type="password" class="form-control" name="password2" required >--}}
            {{--</div>--}}
            {{--</div>--}}

            <div class="form-group">
                <label class="col-lg-2 control-label">Country</label>
                <div class="col-lg-6">
                    <input type="text" class="form-control" name="country" required >
                </div>
            </div>

            <div class="form-group">
                <label class="col-lg-2 control-label">Birthday</label>
                <div class="col-lg-6">
                    <input type="text" class="form-control" name="date_of_birth" required >
                </div>
            </div>
            <div class="form-group">
                <label class="col-lg-2 control-label">Occupation*</label>
                <div class="col-lg-6">
                    <input type="text" class="form-control"name="occupation" >
                </div>
            </div>
            <div class="form-group">
                <label class="col-lg-2 control-label">Email</label>
                <div class="col-lg-6">
                    <input type="text" class="form-control" name="email" required >
                </div>
            </div>
            <div class="form-group">
                <label class="col-lg-2 control-label">Mobile*</label>
                <div class="col-lg-6">
                    <input type="text" class="form-control" name="contact_number" >
                </div>
            </div>
            <div class="form-group">
                <label class="col-lg-2 control-label">Website URL*</label>
                <div class="col-lg-6">
                    <input type="text" class="form-control" name="website"
                           placeholder="http://www.demowebsite.com ">
                </div>
            </div>

            <div class="form-group">
                <label class="col-lg-2 control-label">Photo</label>
                <div class="col-lg-6">
                    <input type="file" class="form-control" name="image"
                           placeholder="">
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
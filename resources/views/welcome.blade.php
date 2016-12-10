<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <!-- BASICS -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Home ! Babinr.com.np</title>
    <link rel="icon" href="./index/img/logo/favicon.ico">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/isotope.css" media="screen" />
    <link rel="stylesheet" href="./index/js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="./index/css/bootstrap.css">
    <link rel="stylesheet" href="./index/css/bootstrap-theme.css">
    <link rel="stylesheet" href="./index/css/style.css">
    <!-- skin -->
    <link rel="stylesheet" href="./index/skin/default.css">




    <script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
    <!--
    NOTE :- Put above JQuery Library in starting of 'HEAD' tag.
    -->
    <style type="text/css">

        @import 'https://daneden.github.io/animate.css/animate.min.css';

        body {
            margin: 0;
            padding: 0;
            font-family: sans-serif,helvetica;
            background: url(https://inspirationhut.net/wp-content/uploads/2013/05/21.png) no-repeat;
            background-size: cover;
            height: 100vh;
        }
        .wrapper {
            position: absolute;
            left: 50%;
            transform:translate(-50%,-50%);
            background-clip: padding-box;
            text-align: center;
        }

        .wrapper .button {
            position: relative;
            width: 240px;
            margin: 2em auto;
            height: 70px;
            display: block;
            font-size: 2em;
            color: #fff;
            background: cornflowerblue;
            border: none;
            outline: none;
            box-shadow: 0 0 .25em #333;
            cursor: pointer;
            -moz-transition: all 0.2s linear;
            -webkit-transition: all 0.2s linear;
            transition: all 0.2s linear;
        }
        .wrapper .button:hover {
            opacity: 0.92;
            background: transparent;
            color: #808080;
            border:2px solid #808080;
            box-shadow: none;
        }
        .overlay {
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            display: none;
            z-index: 1000;
            background: rgba(0, 0, 0, 0.7);
            -moz-transition:all 0.2s;
            -webkit-transition:all 0.2s;
            transition:all 0.2s;
        }
        .popup {
            position: relative;
            /*height: 100%;*/
            width: 50%;
            margin: 100px auto;
            padding: 18px;
            background: #e7e7e7;
            border-radius: 6px;
            -moz-transition: all 0.5s cubic-bezier(0.6, -0.28, 0.74, 0.05);
            -webkit-transition: all 0.5s cubic-bezier(0.6, -0.28, 0.74, 0.05);
            transition: all 0.5s cubic-bezier(0.6, -0.28, 0.74, 0.05);
        }
        .popup .heading {
            margin-top: 0;
            color: #333;
            font-family: Tahoma, Arial, sans-serif;
        }
        .popup .close {
            position: absolute;
            top: 15px;
            right: 32px;
            font-size: 30px;
            font-weight: bold;
            text-decoration: none;
            color: #333;
            cursor: pointer;
            transition: all 0.2s;
        }
        .popup .close:hover {
            color: #d62222;
        }
        .popup .content {
            max-height: 30%;
            overflow: auto;
        }
    </style>
    <script type="text/javascript">
        $(document).ready(function(){

            $('.button').click(function(){
                $('.overlay').css({'display':'block'});
                $('.popup').addClass('animated zoomInUp');
                $('.popup').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend',function(){
                    $('.popup').removeClass('animated zoomInUp');
                });
            });

            $('.close').click(function(){
                $('.popup').addClass('animated zoomOutUp');
                $('.popup').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend',function(){
                    $('.popup').removeClass('animated zoomOutUp');
                });
                setTimeout(function(){
                    $('.overlay').css({'display':'none'});
                }, 1017);
            });

        });


    </script>

</head>

<body>
<section id="header" class="appear"></section>
<div class="navbar navbar-fixed-top" role="navigation" data-0="line-height:100px; height:100px; background-color:rgba(0,0,0,0.3);" data-300="line-height:60px; height:60px; background-color:rgba(0,0,0,1);">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="fa fa-bars color-white"></span>
            </button>
            <h1><a class="navbar-brand" href="#" data-0="line-height:90px;"
                   data-300="line-height:50px;">			babinr.com.np
                </a></h1>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav" data-0="margin-top:20px;" data-300="margin-top:5px;">
                <li class="active"><a href="{{ url('/') }}">Home</a></li>
                <li><a href="#section-about">About</a></li>
                <li><a href="#section-contact">Contact</a></li>
                <li><a href="{{ url('/create') }}">Sign Up</a></li>
                <li><a href="{{ url('/login') }}">Member</a></li>
            </ul>
        </div><!--/.navbar-collapse -->
    </div>
</div>

<section class="featured">
    <div class="container">
        <div class="row mar-bot40">
            <div class="col-md-6 col-md-offset-3">

                <div class="align-center">
                    <img src="./index/img/logo/logo.png" height="120" width="120" /><p></p>
                    <h2 class="logan">Welcome</h2>
                    <p>
                        Hello To Everyone who is visiting in my Website.<br>
                        My Name is Babin Rana. I am an Professional Web Developer.
                        I have done 50+ Projects Till Now And My Clients Are Also Very Sastisfied With My Work
                        . So If You Are Also
                        Intrested
                        To Develop Your Project, then It Would Be My Pleasure To Do It For You. If You
                        Are
                        Thinking
                        , then Please Leave A Note For Me Then I Will Contact You As Soon As Possible.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- services -->
<section id="section-services" class="section pad-bot30 bg-white">
    <div class="container">

        <div class="row mar-bot40">
            <div class="col-lg-4" >
                <div class="align-center">
                    <i class="fa fa-code fa-5x mar-bot20"></i>
                    <h4 class="text-bold">Scripts Use To Develop Website</h4>
                    <p>Simply I use different scripts To develop website like : HTML5, CSS, PHP, JAVASCRIPTS. By
                        using
                        this different types Of tools, the website which i have created will be more
                        Attractive, have Higher Performing
                        Capacity and with Less Bug while you are using those Website created by me.
                    </p>
                </div>
            </div>

            <div class="col-lg-4" >
                <div class="align-center">
                    <i class="fa fa-terminal fa-5x mar-bot20"></i>
                    <h4 class="text-bold">Responsive</h4>
                    <p>The Website which i made is 100% Responsive, which means using same Website you can view
                        it in Multple Devices like in : Android Devices, iOS Devices, All Kinds Of Desktop,
                        Laptops and in Other Devices also.
                    </p>
                </div>
            </div>

            <div class="col-lg-4" >
                <div class="align-center">
                    <i class="fa fa-bolt fa-5x mar-bot20"></i>
                    <h4 class="text-bold">Customizable</h4>
                    <p>I Provide Different Support and Help to My Clients after the completation of
                        web-project. If You Want to Edit Or
                        Change Anything
                        In Website Then I will cent percent co-operate with you. As i am a professional web
                        Designer my main moto is client satisfaction. So i am always ready to provide help and
                        support according to your view and want.
                    </p>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- spacer section:testimonial -->
<section id="testimonials" class="section" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="align-center">
                    <div class="testimonial pad-top40 pad-bot40 clearfix">
                        <h5>
                            We Are Always Here For Your Help, We Would Solve Your Problem With Our
                            Best Knowladge and Skills.
                        </h5>
                        <br/>
											<span class="author">&mdash; Author
												<a target="_blank" href="https://www.facebook.com/ashwin.me.1">Babin Rana</a></span>
                    </div>

                </div>
            </div>
        </div>

    </div>
    </div>
</section>

<!-- about -->
<section id="section-about" class="section appear clearfix">
    <div class="container">

        <div class="row mar-bot40">
            <div class="col-md-offset-3 col-md-6">
                <div class="section-header">
                    <h2 class="section-heading animated" data-animation="bounceInUp">Our Team</h2>
                    <p>Our group conisit of two members, who are eligible to complete project sucessfully.</p>
                </div>
            </div>
        </div>

        <div class="row align-center mar-bot40">
            <div class="col-md-3">
                <div class="team-member">
                    <div class="team-detail">
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="team-member">
                    <figure class="member-photo"><img src="./index/img/team/member1.jpg" alt="" /></figure>
                    <div class="team-detail">
                        <h4>Babin Rana</h4>
                        <span><u>Professional Web Developer</u></span><p></p>
									<span><p>Front-End / Back-End Developer</p>
									<p>Website Tester</p>
									<p>Website Designer</p></span>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="team-member">
                    <figure class="member-photo"><img src="./index/img/team/member2.jpg" alt="" /></figure>
                    <div class="team-detail">
                        <h4>Miniyan Prajuli</h4>
                        <span><u>Professional Web Developer</u></span><p></p>
									<span><p>Front-End / Back-End Developer</p>
									<p>Website Tester</p>
									<p>Website Designer</p></span>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="team-member">
                    <div class="team-detail">
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- /about -->

<!-- spacer section:stats -->
<section id="parallax1" class="section pad-top40 pad-bot40" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="align-center pad-top40 pad-bot40">
            <blockquote class="bigquote color-white"></blockquote>
            <p class="color-white">It Would Be Perfect Center For Your Dream Project To Complete Sucessfully.</p>
        </div>
    </div>
</section>


<section id="footer" class="section footer">
    <div class="container">
        <div class="row animated opacity mar-bot20" data-andown="fadeIn" data-animation="animation">
            <div class="col-sm-12 align-center">
                <ul class="social-network social-circle">

                    <li><a target="_blank" href="https://www.facebook.com/ashwin.me.1" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
            </div>
        </div>
        <section id="section-contact" class="section appear clearfix">
            <div id="popup" class="overlay">
                <div class="popup">
                    <h2 class="heading">Contact Form</h2>
                    <a class="close">&times;</a>
                    <div class="content">
                        <div id="contact-form" class="clearfix">
                            <form method="post" action="process.php">
                                <label for="name">Name: <span class="required">*</span></label>
                                <input type="text" id="name" name="name" value="" placeholder="John Doe" required="required" autofocus="autofocus" />

                                <label for="email">Email Address: <span class="required">*</span></label>
                                <input type="email" id="email" name="email" value="" placeholder="johndoe@example.com" required="required" />


                                <label for="enquiry">Enquiry: </label>
                                <select id="enquiry" name="enquiry">
                                    <option value="general">General</option>
                                    <option value="sales">Sales</option>
                                    <option value="support">Support</option>
                                </select>

                                <label for="message">Message: <span class="required">*</span></label>
                                <textarea id="message" name="message" placeholder="Your message must be greater than 20 charcters" required="required" data-minlength="20"></textarea>

                                <span id="loading"></span>
                                <input type="submit" value="Submit" id="submit-button" />
                                <p id="req-field-desc"><span class="required">*</span> indicates a required field</p>
                            </form>
                        </div>


                    </div>
                </div>
            </div>
            <div class="wrapper">
                <button class="button">Contact Us</button>
            </div>
        </section>


        <div class="row align-center copyright">
            <div class="col-sm-12"><p>Copyright &copy; 2016 Babin Rana - by <a href="http://babinr.com.np">babinr.com.np</a></p></div>
            <div class="col--sm-12">Fro More Information Email: info@babinr.com.np</div>
        </div>
    </div>

</section>
<a href="#header" class="scrollup"><i class="fa fa-chevron-up"></i></a>

<script src="./index/js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
<script src="./index/js/jquery.js"></script>
<script src="./index/js/jquery.easing.1.3.js"></script>
<script src="./index/js/bootstrap.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyASm3CwaK9qtcZEWYa-iQwHaGi3gcosAJc&sensor=false"></script>
<script src="./index/js/jquery.isotope.min.js"></script>
<script src="./index/js/jquery.nicescroll.min.js"></script>
<script src="./index/js/fancybox/jquery.fancybox.pack.js"></script>
<script src="./index/js/skrollr.min.js"></script>
<script src="./index/js/jquery.scrollTo-1.4.3.1-min.js"></script>
<script src="./index/js/jquery.localscroll-1.2.7-min.js"></script>
<script src="./index/js/stellar.js"></script>
<script src="./index/js/jquery.appear.js"></script>
<script src="/.index/js/validate.js"></script>
<script src="./index/js/main.js"></script>
<script type="text/javascript">
    // When the window has finished loading create our google map below
    google.maps.event.addDomListener(window, 'load', init);

    function init() {
        // Basic options for a simple Google Map
        // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
        var mapOptions = {
            // How zoomed in you want the map to start at (always required)
            zoom: 11,

            // The latitude and longitude to center the map (always required)
            center: new google.maps.LatLng(40.6700, -73.9400), // New York

            // How you would like to style the map.
            // This is where you would paste any style found on Snazzy Maps.
            styles: [	{		featureType:"all",		elementType:"all",		stylers:[		{			invert_lightness:true		},		{			saturation:10		},		{			lightness:30		},		{			gamma:0.5		},		{			hue:"#1C705B"		}		]	}	]
        };

        // Get the HTML DOM element that will contain your map
        // We are using a div with id="map" seen below in the <body>
        var mapElement = document.getElementById('map');

        // Create the Google Map using out element and options defined above
        var map = new google.maps.Map(mapElement, mapOptions);
    }
</script>
</body>
</html>
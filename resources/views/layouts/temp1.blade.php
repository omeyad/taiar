<!DOCTYPE html>
<html>


<!-- Mirrored from themeenergy.com/themes/html/transfers/register.html by HTTrack Website Copier/3.x [XR&CO'2010], Sat, 18 Nov 2017 09:04:42 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="Transfers - Private Transport and Car Hire HTML Template" />
    <meta name="description" content="Transfers - Private Transport and Car Hire HTML Template">
    <meta name="author" content="themeenergy.com">

    <title>طيار</title>

    <link rel="stylesheet" href="{{asset('css/styler.css')}}" />
    <link rel="stylesheet" href="{{asset('css/theme-pink.css')}}"  id="template-color" />
    <link rel="stylesheet" href="{{asset('css/pinkstyle.css')}}" />
    <link rel="stylesheet" href="{{asset('css/jquery-ui.css')}}" />
    <link rel="stylesheet" href="{{asset('css/animate.css')}}" />
    <link rel="stylesheet" href="{{asset('css/icons.css')}}" />
    <link rel="stylesheet" href="{{asset('http://fonts.googleapis.com/css?family=Raleway:400,500,600,700|Montserrat:400,700')}}" />
    <link rel="stylesheet" href="{{asset('images/favicon.ico')}}" />
    <link href="{{ asset('css/bootstrap-rtl.min.css') }}" rel="stylesheet">



    <script src="{{asset('js/e808bf9397.js')}}"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="{{asset('https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js')}}"></script>
    <script src="{{asset('https://oss.maxcdn.com/respond/1.4.2/respond.min.js')}}"></script>
    <![endif]-->
</head>

<body style="font-family:aldhabi">
<!-- Preloader -->
<div class="preloader">
<div id="followingBallsG">
<div id="followingBallsG_1" class="followingBallsG"></div>
<div id="followingBallsG_2" class="followingBallsG"></div>
    <div id="followingBallsG_3" class="followingBallsG"></div>
<div id="followingBallsG_4" class="followingBallsG"></div>
</div>
</div>
<!-- //Preloader -->

<!-- Header -->
<header class="header" role="banner">
    <div class="wrap">
        <!-- Logo -->
        <div class="logo" style="float: left">

            <img src="{{asset('images/logo2.png')}}" alt="Transfers" />
        </div>

        <!-- //Logo -->

        <!-- Main Nav -->
        <nav role="navigation" class="main-nav">
            <ul>




@guest
                            <li><a href="{{ route('login') }}" style="font-size: 20px;">دخول</a></li>
  <li><a href="blog.html" title="Blog" style="font-size: 20px;"> تسجيل  </a>
                    <ul>
                        <li><a href="/supplierRegister" title="Post" style="font-size: 20px;">مؤسسه</a></li>
                        <li><a href="/delivaryRegister" title="Post" style="font-size: 20px;">طيار</a></li>

                    </ul>
                </li>                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            خروج
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest


                <li><a href="/contact" title="Contact" style="font-size: 20px;">اتصل بنا </a></li>


                <li><a href="/about" title="Purchase" style="font-size: 20px;"> من نحن </a></li>
                <li><a href="/" title="" style="font-size: 20px;">  الرئيسية </a></li>

            </ul>
        </nav>
        <!-- //Main Nav -->
    </div>
</header>
<!-- //Header -->

<!-- Main -->

    <!-- Page info -->
    {{--<header class="site-title color">--}}
        {{--<div class="wrap">--}}
            {{--<div class="container">--}}
                {{--<h1>Register</h1>--}}
                {{--<nav role="navigation" class="breadcrumbs">--}}
                    {{--<ul>--}}
                        {{--<li><a href="index-2.html" title="Home">Home</a></li>--}}
                        {{--<li>Register</li>--}}
                    {{--</ul>--}}
                {{--</nav>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</header>--}}
    <!-- //Page info -->




                   @yield('content');

<!-- //Main -->

<!-- Footer -->
		<footer class="footer black" role="contentinfo">
    <div class="wrap">
        <div class="row">
            <!-- Column -->
            <article class="one-half col-md-4" style="float: right">
                <h6>مواقع مهمة  </h6>
<ul style="direction: rtl; list-style: none;">
	<li><a href="#">موقع 1</a></li>
	<li><a href="#">موقع 1</a></li>
	<li><a href="#">موقع 1</a></li>
	
	
</ul>
            </article>
       
            <!-- Column -->
            <article class="one-fourth col-md-4" style="text-align: justify">
                <h6>للتواصل معنا؟</h6>
                {{--<p>Contact us via phone or email:</p>--}}
                <p class="contact-data"  style="width: 50%;">+1 555 555 555<span class="icon icon-themeenergy_call"></span> </p>
                <p class="contact-data"  style="width: 60%;"><a href="mailto:help@transfers.com">wesambe7ery@gmail.com</a>
                <span class="icon icon-themeenergy_mail-2"></span> </p>
            </article>
                 <!-- //Column -->
            <article class="one-fourth col-md-4" style="text-align: justify ">
                <h6>مواقع التواصل الاجتماعي</h6>
                <ul class="social">
                    <li><a href="#" title="facebook"><i class="fa fa-fw fa-facebook" style="margin-top: 10px"></i></a></li>
                    <li><a href="#" title="twitter"><i class="fa fa-fw fa-twitter" style="margin-top: 10px" ></i></a></li>
                    <li><a href="#" title="gplus"><i class="fa fa-fw fa-google-plus" style="margin-top: 10px"></i></a></li>
                    <li><a href="#" title="linkedin"><i class="fa fa-fw fa-linkedin" style="margin-top: 10px"></i></a></li>


                </ul>
            </article>
            
            <!-- //Column -->

            <!-- Column -->

            <!-- //Column -->
        </div>


    </div>
    	<div class="copy">
				<p>Copyright 2016, Themeenergy. All rights reserved. </p>
				
				<nav role="navigation" class="foot-nav">
					<ul>
						<li><a href="#" title="Home">Home</a></li>
						<li><a href="#" title="Blog">Blog</a></li>
						<li><a href="#" title="About us">About us</a></li>
						<li><a href="#" title="Contact us">Contact us</a></li>
						<li><a href="#" title="Terms of use">Terms of use</a></li>
						<li><a href="#" title="Help">Help</a></li>
						<li><a href="#" title="For partners">For partners</a></li>
					</ul>
				</nav>
			</div>
		</div>
</footer>
<!-- //Footer -->

<!-- jQuery -->
<script src={{asset('js/jquery.min.js')}}></script>
<script src="{{asset('js/jquery.uniform.min.js')}}"></script>
<script src="{{asset('js/jquery.slicknav.min.js')}}"></script>
<script src="{{asset('js/wow.min.js')}}"></script>
<script src="{{asset('js/scripts.js')}}"></script>
<script src="{{asset('js/scripts.js')}}"></script>

<!-- TEMPLATE STYLES -->
<div id="template-styles">

    <div>
        <h3>Colors</h3>
        <ul class="colors" >
            <li><a href="#" class="beige" title="beige">beige</a></li>
            <li><a href="#" class="dblue" title="dblue">dblue</a></li>
            <li><a href="#" class="dgreen" title="dgreen">dgreen</a></li>
            <li><a href="#" class="grey" title="grey">grey</a></li>
            <li><a href="#" class="lblue" title="lblue">lblue</a></li>
            <li><a href="#" class="lgreen" title="lgreen">lgreen</a></li>
            <li><a href="#" class="lime" title="lime">lime</a></li>
            <li><a href="#" class="orange" title="orange">orange</a></li>
            <li><a href="#" class="peach" title="peach">peach</a></li>
            <li><a href="#" class="pink" title="pink">pink</a></li>
            <li><a href="#" class="purple" title="purple">purple</a></li>
            <li><a href="#" class="red" title="red">red</a></li>
            <li><a href="#" class="teal" title="teal">teal</a></li>
            <li><a href="#" class="turquoise" title="turquoise">turquoise</a></li>
            <li><a href="#" class="yellow" title="yellow">yellow</a></li>
        </ul>
    </div>
</div>
<script src="{{asset('js/styler.js')}}"></script>
</body>

<!-- Mirrored from themeenergy.com/themes/html/transfers/register.html by HTTrack Website Copier/3.x [XR&CO'2010], Sat, 18 Nov 2017 09:04:42 GMT -->
</html>
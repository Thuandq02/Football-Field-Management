<!DOCTYPE HTML>
<html>
<head>
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content="Novus Admin Panel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"/>
    <script type="application/x-javascript"> addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>
    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('backend/css/bootstrap.css') }}" rel='stylesheet' type='text/css'/>
    <!-- Custom CSS -->
    <link href="{{ asset('backend/css/style.css') }}" rel='stylesheet' type='text/css'/>
    <!-- font CSS -->
    <!-- font-awesome icons -->
    <link href="{{ asset('backend/css/font-awesome.css') }}" rel="stylesheet">
    <!-- //font-awesome icons -->
    <!-- js-->
    <script src="{{ asset('backend/js/jquery-1.11.1.min.js') }}"></script>
    <script src="{{ asset('backend/js/modernizr.custom.js') }}"></script>
    <!--webfonts-->
    <link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic'
          rel='stylesheet' type='text/css'>
    <!--//webfonts-->
    <!--animate-->
    <link href="{{ asset('backend/css/animate.css') }}" rel="stylesheet" type="text/css" media="all">
    <script src="{{ asset('backend/js/wow.min.js') }}"></script>
    <script>
        new WOW().init();
    </script>
    <!--//end-animate-->
    <!-- chart -->
    <script src="{{ asset('backend/js/Chart.js') }}"></script>
    <!-- //chart -->
    <!--Calender-->
    <link rel="stylesheet" href="{{ asset('backend/css/clndr.css') }}" type="text/css"/>
    <script src="{{ asset('backend/js/underscore-min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('backend/js/moment-2.2.1.js') }}" type="text/javascript"></script>
    <script src="{{ asset('backend/js/clndr.js') }}" type="text/javascript"></script>
    <script src="{{ asset('backend/js/site.js') }}" type="text/javascript"></script>
    <!--End Calender-->
    <!-- Metis Menu -->
    <script src="{{ asset('backend/js/metisMenu.min.js') }}"></script>
    <script src="{{ asset('backend/js/custom.js') }}"></script>
    <link href="{{ asset('backend/css/custom.css') }}" rel="stylesheet">
    <!--//Metis Menu -->
</head>
<body class="cbp-spmenu-push">
<div class="main-content">
    <!--left-fixed -navigation-->
    <div class=" sidebar" role="navigation">
        <div class="navbar-collapse">
            <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
                <ul class="nav" id="side-menu">
                    <li>
                        <a href="{{ route('home') }}" class="active"><i class="fa fa-home nav_icon"></i>Home</a>
                    </li>
                    <li>
                        <a href="{{ route('customer.list') }}"><i class="fa fa-table nav_icon"></i>List Customer</a>
                    </li>
                    <li>
                        <a href="{{ route('customer.create') }}"><i class="fa fa-cogs nav_icon"></i>Create Customer</a>
                    <li>
                    <li>
                        <a href="{{ route('pitche.list') }}"><i class="fa fa-table nav_icon"></i>List Pitch</a>
                    </li>
                    <li>
                        <a href="{{ route('pitche.create') }}"><i class="fa fa-cogs nav_icon"></i>Create Pitch</a>
                    <li>
                    <li>
                        <a href="{{ route('order.list') }}"><i class="fa fa-table nav_icon"></i>List Order</a>
                    </li>
                    <li>
                        <a href="{{ route('order.create') }}"><i class="fa fa-cogs nav_icon"></i>Create Order</a>
                    <li>
                </ul>
                <!-- //sidebar-collapse -->
            </nav>
        </div>
    </div>
    <!--left-fixed -navigation-->
    <!-- header-starts -->
    <div class="sticky-header header-section ">
        <div class="header-left">
            <!--toggle button start-->
            <button id="showLeftPush"><i class="fa fa-bars"></i></button>
            <!--toggle button end-->
            <!--logo -->
            <div class="logo">
                <a href="{{ route('home') }}">
                    <h1>DQT</h1>
                    <span>AdminPanel</span>
                </a>
            </div>

            <div class="clearfix"></div>
        </div>
        <div class="header-right">
            <!--notification menu end -->
            <div class="profile_details">
                <ul>
                    <li class="dropdown profile_details_drop">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                            <div class="profile_img">
                                <span class="prfil-img"><img src="{{ asset('backend/images/1.png') }}" alt=""> </span>
                                <div class="user-name">
                                    <p>Wikolia</p>
                                    <span>Administrator</span>
                                </div>
                                <i class="fa fa-angle-down lnr"></i>
                                <i class="fa fa-angle-up lnr"></i>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                        <ul class="dropdown-menu drp-mnu">
                            <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                            <li><a href="#"><i class="fa fa-user"></i> Profile</a></li>
                            <li><a href="#"><i class="fa fa-sign-out"></i> Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
    <!-- //header-ends -->
    <!-- main content start-->
@yield('content')
<!--footer-->
    <div class="footer">
        <p>&copy; 2021 DQT Admin Panel. All Rights Reserved | Student by <a href="https://codegym.vn/" target="_blank">CodeGym</a>
        </p>
    </div>
    <!--//footer-->
</div>
<!-- Classie -->
<script src="{{ asset('backend/js/classie.js') }}"></script>
<script>
    var menuLeft = document.getElementById('cbp-spmenu-s1'),
        showLeftPush = document.getElementById('showLeftPush'),
        body = document.body;

    showLeftPush.onclick = function () {
        classie.toggle(this, 'active');
        classie.toggle(body, 'cbp-spmenu-push-toright');
        classie.toggle(menuLeft, 'cbp-spmenu-open');
        disableOther('showLeftPush');
    };


    function disableOther(button) {
        if (button !== 'showLeftPush') {
            classie.toggle(showLeftPush, 'disabled');
        }
    }
</script>
<!--scrolling js-->
<script src="{{ asset('backend/js/jquery.nicescroll.js') }}"></script>
<script src="{{ asset('backend/js/scripts.js') }}"></script>
<!--//scrolling js-->
<!-- Bootstrap Core JavaScript -->
<script src="{{ asset('backend/js/bootstrap.js') }}"></script>
</body>
</html>

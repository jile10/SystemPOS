<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Itransform - Admin</title>
	<link rel="icon" href="/img/logo1.png" type="image/png">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="" />
	<meta name="author" content="http://bootstraptaste.com" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <!-- <link href="/assets/css/animate.min.css" rel="stylesheet"/> -->

    <!--  Paper Dashboard core CSS    -->
    <link href="/assets/css/now-ui-dashboard.css?v=1.0.1" rel="stylesheet"/>
    <link href="/assets/css/now-ui-kit.css?v=1.2.0" rel="stylesheet" />


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <!-- <link href="/assets/demo/demo.css" rel="stylesheet" /> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css" />
    <link rel="stylesheet" href="/assets/css/select2-bootstrap4.min.css">


    <!--  Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    @yield('css')
</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="orange">

    <!--
		Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
		Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
	-->]
        <div class="logo">
            <a href="/" class="simple-text logo-normal">
                <img src="/img/logo.png" alt="" width="199" height="52" />
            </a>
        </div>

        <div class="sidebar-wrapper">
            <ul class="nav text-dark">
                <li id="dashboard">
                    <a href="/backend/dashboard">
                        <i class="now-ui-icons business_bank"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li id="modules">
                    <a href="/backend/modules">
                        <i class="now-ui-icons design_app"></i>
                        <p>Modules</p>
                    </a>
                </li> 
                <li id="systems">
                    <a href="/backend/systems">
                        <i class="now-ui-icons education_atom"></i>
                        <p>Systems</p>
                    </a>
                </li>            
            </ul>
        </div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-expand-lg navbar-transparent  navbar-absolute bg-primary fixed-top">
            <div class="container-fluid">
                <div class="navbar-wrapper">
                    <div class="navbar-toggle">
                        <button type="button" class="navbar-toggler">
                            <span class="navbar-toggler-bar bar1"></span>
                            <span class="navbar-toggler-bar bar2"></span>
                            <span class="navbar-toggler-bar bar3"></span>
                        </button>
                    </div>
                    <a class="navbar-brand" id="topText"></a>
                </div>
                <div class="collapse navbar-collapse justify-content-end">
                    <a href="/backend/logout">LOG OUT</i></a>
                </div>
            </div>
        </nav>
        @yield('content')
    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="/assets/js/core/jquery.min.js"></script>
    <script src="/assets/js/core/popper.min.js"></script>
    <script src="/assets/js/core/bootstrap.min.js"></script>
    <script src="/assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="/assets/js/bootstrap-checkbox-radio.js"></script>

    <!--  Notifications Plugin    -->
    <script src="/assets/js/plugins/bootstrap-notify.js"></script>
    <script src="/assets/js/plugins/bootstrap-selectpicker.js" type="text/javascript"></script>

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
	<script src="/assets/js/now-ui-dashboard.js?v=1.0.1"></script>

	<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
	<!-- <script src="/assets/js/demo.js"></script> -->
	@yield('js')
</html>

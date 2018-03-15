<!DOCTYPE html>
<html>
	<head>
		<title>Itransform - Home</title>
		<link rel="icon" href="/img/logo1.png" type="image/png">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta name="description" content="" />
		<meta name="author" content="http://bootstraptaste.com" />
		<!-- css -->
		<link href="/css/bootstrap.min.css" rel="stylesheet" />
		<link href="/css/fancybox/jquery.fancybox.css" rel="stylesheet">
		<link href="/css/jcarousel.css" rel="stylesheet" />
		<link href="/css/flexslider.css" rel="stylesheet" />
		<link href="/css/style.css" rel="stylesheet" />

	    <link href="/assets/css/now-ui-kit.css?v=1.2.0" rel="stylesheet" />
		<!-- Theme skin -->
		<link href="/skins/default.css" rel="stylesheet" />
		<link href="/fonts/fontawesome-webfont.ttf"/>
		<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
		@yield('css')
		<style type="text/css">
			.navbar a:not(.btn):not(.dropdown-item) {
			   color: #111; 
			  }
		</style>
	</head>
	<body>
		<div id="wrapper">
			<!-- start header -->
			<header>
		        <div class="navbar navbar-default navbar-static-top">
		            <div class="container">
		                <div class="navbar-header">
		                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		                        <span class="icon-bar"></span>
		                        <span class="icon-bar"></span>
		                        <span class="icon-bar"></span>
		                    </button>
		                    <a class="navbar-brand" href="/"><img src="/img/logo.png" alt="" width="199" height="52" /></a>
		                </div>
		                <div class="navbar-collapse collapse ">
		                    <ul class="nav navbar-nav text-dark">
		                        <li><a href="/">Home</a></li>
		                        <li><a href="/about">About Us</a></li> 
		                        <li><a href="/systems">Systems</a></li> 
								<li><a href="/cart">Cart <span class="badge"></span></a></li>
								<li><a href="/contact">Contact</a></li>
		                    </ul>
		                </div>
		            </div>
		        </div>
			</header>
		</div>
		@yield('content')
		<footer>
			@yield('footer')
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="copyright">
							<center>
								<p>&copy; 2017 ITransform Corporation. All right reserved.</p>
		                        <p> Created by ITransform Corp. Team </p>
		                    </center>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
		<script src="/js/jquery.js"></script>
		<script src="/js/bootstrap.min.js"></script>
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
	    @yield('js')
	</body>
</html>
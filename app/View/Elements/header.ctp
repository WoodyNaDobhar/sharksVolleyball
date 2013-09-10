<!DOCTYPE html>
<html lang="en">
<head>

	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>Sharks Volleyball</title> 
	<meta name="description" content="Champaign County Volleyball Club is a volleyball program dedicated to providing high quality volleyball experiences for girls ages 10-18."/>
	<meta name="keywords" content="Ohio volleyball club program girls teenager" />
	<meta name="author" content="Azurite Design"/>
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: Facebook Open Graph -->
	<meta property="og:title" content="Sharks Volleyball"/>
	<meta property="og:description" content="Champaign County Volleyball Club is a volleyball program dedicated to providing high quality volleyball experiences for girls ages 10-18."/>
	<meta property="og:type" content="website"/>
	<meta property="og:url" content=""/>
	<meta property="og:image" content=""/>
	<!-- end: Facebook Open Graph -->

	<!-- start: CSS -->
	<link href="/css/bootstrap.css" rel="stylesheet">
	<link href="/css/bootstrap-responsive.css" rel="stylesheet">
	<link href="/css/style.css" rel="stylesheet">
		
	<link href="/css/parallax-slider.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Sans:400,700">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Serif">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Boogaloo">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Economica:700,400italic">
	<!-- end: CSS -->

	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!--[if IE 9]>
	  <link href="/css/styleie9.css" rel="stylesheet">
	<![endif]-->

</head>
<body>
	
	<!--start: Header -->
	<header>
		
		<!--start: Container -->
		<div class="container">
			
			<!--start: Navbar -->
			<div class="navbar navbar-inverse">
				<div class="navbar-inner">
			  		<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
			  		</a>
					<a class="brand" href="/"><i class="ico-cup circle"></i>Sharks<span>Volleyball</span>.</a>
			  		<div class="nav-collapse collapse">
						<ul class="nav">
				  			<li class="active"><a href="/">Home</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">About Us<b class="caret"></b></a>
								<ul class="dropdown-menu">
					  				<li><a href="/about-story">Our Story</a></li>
									<li><a href="http://www.gametimesportscenter.net">Our Facilities</a></li>
									<li><a href="/about-rules">Rules & Governance</a></li>
								</ul>
				  			</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Teams<b class="caret"></b></a>
								<ul class="dropdown-menu">
					  				<li><a href="/Teams/byYear/yyyy">yyyy</a></li>
									<li><a href="/Players">Alumni</a></li>
								</ul>
				  			</li>									
							<li><a href="/calendar">Calendar</a></li>
							<li><a href="/stats">Stats</a></li>
							<li><a href="/stats">Shop</a></li>
				  			<li><a href="/contact">Contact</a></li><?php 
				  			
				  			//if logged in...
				  			if($this->Session->check('Auth.User')){
				  				
				  				//show the logout and profile buttons
				  				echo '
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Me<b class="caret"></b></a>
								<ul class="dropdown-menu">
					  				<li><a href="/Users/account/'.$this->Session->read('Auth.User.id').'">Edit My Account</a></li>
									<li><a href="/join-lessons">Lessons & Training</a></li>
					  				<li><a href="/join-tryouts">Tryouts</a></li>
									<li><a href="/Users/logout">Log Out</a></li>
								</ul>
				  			</li>';
				  			}else{
				  				
				  				//otherwise, show the login
				  				echo '
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Members<b class="caret"></b></a>
								<ul class="dropdown-menu">
				  					<li><a href="/Users/login">Login</a></li>
									<li><a href="/join-lessons">Lessons & Training</a></li>
					  				<li><a href="/join-tryouts">Tryouts</a></li>
					  				<li><a href="/Users/add">Sign Up</a></li>
								</ul>
				  			</li>';
				  			}
?>
						</ul>
			  		</div>
				</div>
		  	</div>
			<!--end: Navbar -->
			
		</div>
		<!--end: Container-->			
			
	</header>
	<!--end: Header-->
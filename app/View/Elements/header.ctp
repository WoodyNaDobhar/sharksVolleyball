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
					<a href="<?php echo $isAdmin?"/admin":"/"; ?>"><img src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/img/logo.png" width="162" height="68" /></a>
					<!--<a class="brand" href="/"><i class="ico-volleyball circle"></i>Sharks<span>Volleyball</span>.</a> -->
			  		<div class="nav-collapse collapse">
						<ul class="nav">
				  			<li class="active"><a href="/">Home</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">About Us<b class="caret"></b></a>
								<ul class="dropdown-menu">
					  				<li><a href="/about-story">Our Story</a></li>
									<li><a href="http://www.gametimesportscenter.net">Our Facility</a></li>
									<li><a href="/about-club">Club Information</a></li>
								</ul>
				  			</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Tryouts<b class="caret"></b></a>
								<ul class="dropdown-menu">
					  				<li><a href="/tryout">Registration</a></li>
									<li><a href="/results">Results</a></li>
								</ul>
				  			</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Teams<b class="caret"></b></a>
								<ul class="dropdown-menu"><?PHP 
								
								foreach($teamDivisions as $division){
									
									echo '
					  				<li><a href="/Teams/byDivision/'.$division.'">Division '.$division.'</a></li>';
								}
								
								foreach($teamYears as $year){
									
									echo '
					  				<li><a href="/Teams/byYear/'.$year.'">'.$year.'</a></li>';
								}
								
								?>
								</ul>
				  			</li>
							<li><a href="/shop">Store</a></li>
				  			<li><a href="/contact">Contact</a></li>
						</ul>
			  		</div>
				</div>
		  	</div>
			<!--end: Navbar -->
			
		</div>
		<!--end: Container-->			
			
	</header>
	<!--end: Header-->
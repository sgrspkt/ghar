<!doctype html>
<html class="no-js" lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>Ghar Sansar</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
		<link rel="shortcut icon" href="assets/images/favicon.png">
		<link rel="stylesheet" href="assets/library/bootstrap/css/bootstrap.min.css" >
		<link rel="stylesheet" href="assets/library/owlcarousel/owl.carousel.min.css">
		<link rel="stylesheet" href="assets/css/font-awesome.min.css" >
		<link rel="stylesheet" type="text/css" href="assets/css/slick.css">
		<link rel="stylesheet" type="text/css" href="assets/css/slick-theme.css">
		<link rel="stylesheet" type="text/css" href="assets/css/select2.min.css" >
		<link rel="stylesheet" type="text/css"  href="assets/css/responsive.css" >
		<link rel="stylesheet" type="text/css"  href="assets/css/main.css" >
	</head>
	<?php
	$homepage = "/ghar-sansar/index.php";
	$currentpage = $_SERVER['REQUEST_URI'];
	?>
	<?php if($homepage==$currentpage): ?>
	<body>
		<?php else:?>
		<body class="inner-page">
			<?php endif; ?>
			<!-- header section starts here -->
			<div id="bg-holder">
				<?php
				if($homepage==$currentpage) {
				?>
				<div class="parallax" data-parallax="scroll" data-image-src="assets/images/banner.jpg"></div>
				<?php
				}
				?>
				<header class="header-section">
					<div class="container">
						<div class="row">
							<div class="col-md-2 col-sm-2">
								<div class="logo">
									<a href="index.php">Ghar Sansar</a>
								</div>
							</div>
							<div class="col-md-10 col-sm-10">
								<div class="main-navigation">
									<nav>
										<ul>
											<li><a href="rent.php">Rent</a></li>
											<li><a href="rent.php">Sell</a></li>
											<li><a href="rent.php">Real Estate</a></li>
											<li><a href="about-us.html">Find An Agent</a></li>
											<li class="hdr-login"><a href="#">Login</a> or <a href="#">Sign Up</a></li>
											<li class="hdr-property"><a href="#">Add Property</a></li>
											
										</ul>
									</nav>
								</div>
							</div>
						</div>
					</div>
				</header>
				<div id="toggle"><span></span></div>
				<div class="sec-navigation">
					<nav>
						<ul class="sec-menu">
							<li><a href="#">Home</a></li>
							<li><a href="#">About Us</a></li>
							<li><a href="#">Rent</a></li>
							<li><a href="#">Sell</a></li>
							<li><a href="#">Find An Agent</a></li>
							<li><a href="#">Login</a></li>
							<li><a href="#">Sign Up</a></li>
							<li class="hdr-property"><a href="#">Add Property</a></li>
						</ul>
					</nav>
				</div>
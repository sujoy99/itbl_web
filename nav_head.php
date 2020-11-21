<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<!-- font-awesome style  -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/fontawesome.min.css" integrity="sha512-kJ30H6g4NGhWopgdseRb8wTsyllFUYIx3hiUwmGAkgA9B/JbzUBDQVr2VVlWGde6sdBVOG7oU8AL35ORDuMm8g==" crossorigin="anonymous" />

	<!-- owl carousel style  -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" />

	<title>Hello, world!</title>


	<style>
		/* reset starts  */
		* {
			margin: 0;
			padding: 0;
			box-sizing: border-box;
		}

		html {
			font-size: 62.5%;
		}

		body {
			font-size: 2.2rem;
		}

		.col-lg-3 {
			margin: 0 !important;
			padding: 0 !important;
		}

		/* reset ends  */

		/* actual css starts  */

		/* header css starts  */
		.header_section {
			position: absolute;
			z-index: 9;
			width: 100%;
			top: 0;
			padding: 2rem 0;
			border-bottom: 2px solid #fff;
		}

		.logo {
			font-size: 2.5rem;
			/* color: #333; */
			color: #fff;
			font-weight: bold;
		}

		.info {
			display: flex;
			justify-content: center;
			align-items: center;
			color: #fff;
		}

		.info p {
			display: inline-block;
			margin-right: 2rem;
			font-size: 2.5rem;
		}

		/* header css ends  */

		/* navbar css starts  */
		.menu {
			width: 100% !important;
		}

		.menu ul li a {
			display: block;
			/* color: #333!important; */
			color: #fff !important;
			padding: 1.5rem 2rem !important;
			font-size: 2.5rem;
			/* font-weight: bold; */
		}

		.dropdown-item a {
			color: #333 !important;
		}

		i {
			margin: 8px;
		}

		/* navbar css ends  */


		/* navbar2 css starts  */
		nav {
			background: #1b1b1b;
		}

		nav:after {
			content: '';
			clear: both;
			display: table;
		}

		nav .logo {
			float: left;
			color: white;
			font-size: 27px;
			font-weight: 600;
			line-height: 70px;
			padding-left: 60px;
		}

		nav ul {
			float: right;
			margin-right: 40px;
			list-style: none;
			position: relative;
		}

		nav ul li {
			float: left;
			display: inline-block;
			background: #1b1b1b;
			margin: 0 5px;
		}

		nav ul li a {
			color: white;
			line-height: 70px;
			text-decoration: none;
			font-size: 18px;
			padding: 8px 15px;
		}

		nav ul li a:hover {
			color: cyan;
			border-radius: 5px;
			box-shadow: 0 0 5px #33ffff,
				0 0 10px #66ffff;
		}

		nav ul ul li a:hover {
			box-shadow: none;
		}

		nav ul ul {
			position: absolute;
			top: 90px;
			border-top: 3px solid cyan;
			opacity: 0;
			visibility: hidden;
			transition: top .3s;
		}

		nav ul ul ul {
			border-top: none;
		}

		nav ul li:hover>ul {
			top: 70px;
			opacity: 1;
			visibility: visible;
		}

		nav ul ul li {
			position: relative;
			margin: 0px;
			width: 150px;
			float: none;
			display: list-item;
			border-bottom: 1px solid rgba(0, 0, 0, 0.3);
		}

		nav ul ul li a {
			line-height: 50px;
		}

		nav ul ul ul li {
			position: relative;
			top: -60px;
			left: 150px;
		}

		.show,
		.icon,
		input {
			display: none;
		}

		.fa-plus {
			font-size: 15px;
			margin-left: 40px;
		}

		@media all and (max-width: 968px) {
			nav ul {
				margin-right: 0px;
				float: left;
			}

			nav .logo {
				padding-left: 30px;
				width: 100%;
			}

			.show+a,
			ul {
				display: none;
			}

			nav ul li,
			nav ul ul li {
				display: block;
				width: 100%;
			}

			nav ul li a:hover {
				box-shadow: none;
			}

			.show {
				display: block;
				color: white;
				font-size: 18px;
				padding: 0 20px;
				line-height: 70px;
				cursor: pointer;
			}

			.show:hover {
				color: cyan;
			}

			.icon {
				display: block;
				color: white;
				position: absolute;
				top: 0;
				right: 40px;
				line-height: 70px;
				cursor: pointer;
				font-size: 25px;
			}

			nav ul ul {
				top: 70px;
				border-top: 0px;
				float: none;
				position: static;
				display: none;
				opacity: 1;
				visibility: visible;
			}

			nav ul ul a {
				padding-left: 40px;
			}

			nav ul ul ul a {
				padding-left: 80px;
			}

			nav ul ul ul li {
				position: static;
			}

			[id^=btn]:checked+ul {
				display: block;
			}

			nav ul ul li {
				border-bottom: 0px;
			}

			span.cancel:before {
				content: '\f00d';
			}
		}

		/* navbar2 css ends  */


		/* slieder css starts  */
		.single_slide {

			background-size: cover;
			background-position: center;
			height: 90vh;
			width: 100%;
			display: flex;
			justify-content: center;
			align-items: center;
			position: relative;
			z-index: 2;
		}

		.single_slide::before {
			position: absolute;
			content: "";
			width: 100%;
			height: 90vh;
			top: 0;
			left: 0;
			background-color: #333;
			opacity: .5;
		}

		.slide_content h3 {
			color: #fff;
			font-size: 2.2rem;
			letter-spacing: .8rem;
			word-spacing: .8rem;
		}

		.slide_content h1 {
			color: #fff;
			font-size: 8rem;
			letter-spacing: .8rem;
			word-spacing: .8rem;
			font-weight: bold;
			margin: 5rem 0;
		}

		.slide_content a {
			margin-top: 2rem;
			font-size: 2rem;
		}

		.owl-dots {
			position: absolute;
			left: 50%;
			bottom: 20px;
			transform: translateX(-50%);
			height: 50px;
			width: 94px;
			background-color: #787070;
			border: medium none;
			border-radius: 10%;
		}

		.owl-dots button {
			width: 20px;
			height: 20px;
			background-color: #fff !important;
			margin: 0 5px;
			border-radius: 50%;
		}

		.owl-dots .active {
			background-color: #34bf49 !important;
		}

		/* slider css ends  */

		/* intro css starts  */
		.intro {
			margin: 4rem;
		}

		.intro h3 i {
			color: #34bf49;
			letter-spacing: 5px;
			word-spacing: 5px;
		}

		.intro p {
			word-spacing: 3px;
			font-size: 1.9rem;
		}

		.intro .box {
			border: 8px solid #34bf49;

		}

		.intro a {
			font-size: 1.8rem;
		}

		/* intro css ends  */

		/* *****extra header div css starts******* */


		.extra-div h2,
		.servicediv h2 {
			font-size: 1.1rem;
			font-weight: bold;
			margin: 20px 0 15px 0;
			line-height: 1.1;
			word-spacing: 4px;
			color: #34bf49;
			font-family: 'Goldman', cursive;

		}

		.extra-div p {
			font-size: 1.2rem;
		}

		.extra-div i {
			color: gray;
		}


		.header-extradiv {
			width: 100%;
			height: auto;
			margin: 100px 0px;
			text-align: center;
			text-transform: uppercase;

		}


		.extra-div {
			/* background: #fff; */
			background: #f5f5f5;
			padding: 45px !important;
			border: medium none;
			border-radius: 3px;
			transition: .3s;

		}

		.extra-div:hover {
			box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.3);
			transform: translateY(-20px);
		}

		/* *****extra header div css ends******* */

		/* service css starts  */
		.service {
			width: 100%;
			height: 60%;
			background-color: #34bf49;
		}

		.service_content {
			margin: 4rem;
			padding: 4rem;

		}

		.service_content h1 {
			font-size: 5rem;
			margin: 2rem 0;
		}

		.service_content h1 p {
			font-size: 2.2rem;
			color: goldenrod;
			text-align: center;
			margin-top: 2rem;
			letter-spacing: 1rem;
			word-spacing: .7rem;
		}

		/* service css ends  */
		/* actual css ends  */
	</style>
</head>

<body>

	<!-- .header section starts  -->
	<header class="header_section">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-3 col-md-3 col-sm-3">
					<div class="logo">
						<span style="height: 1rem; width: 1rem; padding:8px; background-color: #34bf49;">IT</span> Bangla
					</div>
				</div>
				<div class="col-lg-9 col-md-9 col-sm-9">
					<div class="info mt-4 float-md-right float-lg-right">
						<p><i class="fas fa-phone-alt text-warning"></i> +88099999999</p>
						<p><i class="far fa-envelope text-warning"></i> info@itbangla.net</p>
					</div>
				</div>
			</div>
		</div>

		<!-- navbar 1 starts  -->
		<div class="containter-fluid">
			<nav class="navbar navbar-expand-lg  menu ">
				<div class="container-fluid">


					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapseNavbar">
						<span class="navbar-toggler-icon"></span>
					</button>

					<div class="collapse navbar-collapse text-center" id="collapseNavbar">
						<ul class="navbar-nav mx-auto">
							<!-- about us starts -->
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
									<i class="far fa-file-alt"></i>ABOUT US
								</a>
								<div class="dropdown-menu">
									<a class="dropdown-item" href="#" style="color: #333!important;">Corporate Profile</a>
									<a class="dropdown-item" href="#">Our Goals</a>
									<a class="dropdown-item" href="#">Buiness Focus</a>
									<a class="dropdown-item" href="#">Clients</a>
									<a class="dropdown-item" href="#">Certificates & awards</a>
									<a class="dropdown-item" href="#">Directors</a>
								</div>
							</li>

							<!-- about us ends  -->

							<!-- training academy starts  -->
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle text-white" href="#" id="navbardrop" data-toggle="dropdown">
									<i class="far fa-file-alt"></i>TRAINING ACADEMY
								</a>
								<div class="dropdown-menu">
									<a class="dropdown-item" href="#">GED</a>
									<a class="dropdown-item" href="#">Industrial Training</a>
									<a class="dropdown-item" href="#">Oracle</a>
									<a class="dropdown-item" href="#">Java SE 8</a>
									<a class="dropdown-item" href="#">Redhat</a>
									<a class="dropdown-item" href="#">CCNA</a>
									<a class="dropdown-item" href="#">MCSE</a>
									<a class="dropdown-item" href="#">ASP.NET/C#</a>
									<a class="dropdown-item" href="#">Web Development</a>
									<a class="dropdown-item" href="#">RHCSS</a>
									<a class="dropdown-item" href="#">Certified Ethical Hacking</a>
								</div>
							</li>
							<!-- training academy ends  -->


							<!-- testing center starts -->
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle text-white" href="#" id="navbardrop" data-toggle="dropdown">
									<i class="far fa-file-alt"></i>TESTING CENTER
								</a>
								<div class="dropdown-menu">
									<a class="dropdown-item" href="#">Pearson VUE</a>
									<a class="dropdown-item" href="#">Redhat</a>
									<a class="dropdown-item" href="#">GMAT</a>
									<a class="dropdown-item" href="#">TOEFL</a>
									<a class="dropdown-item" href="#">BCAT</a>
									<a class="dropdown-item" href="#">PTE</a>
								</div>
							</li>
							<!-- testing center ends  -->


							<!-- software starts -->
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle text-white" href="#" id="navbardrop" data-toggle="dropdown">
									<i class="far fa-file-alt"></i>SOFTWARE
								</a>
								<div class="dropdown-menu">
									<a class="dropdown-item" href="#">HR management system</a>
									<a class="dropdown-item" href="#">Payrol management system</a>
									<a class="dropdown-item" href="#">Attendance management system</a>
									<a class="dropdown-item" href="#">Leave management system</a>
									<a class="dropdown-item" href="#">Accounting Management System</a>
									<a class="dropdown-item" href="#">Inventory Management system</a>
								</div>
							</li>
							<!-- software ends  -->


							<!-- security course starts -->
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle text-white" href="#" id="navbardrop" data-toggle="dropdown">
									<i class="far fa-file-alt"></i>SECURITY COURSE
								</a>
								<div class="dropdown-menu">
									<a class="dropdown-item" href="#">Certified data center Professional(CDCP</a>
									<a class="dropdown-item" href="#">Certified data center specialist(CDCS)</a>
									<a class="dropdown-item" href="#">Certified Information system Auditor(CISA)</a>
								</div>
							</li>
							<!-- security course ends  -->


							<!-- placement starts  -->
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle text-white" href="#" id="navbardrop" data-toggle="dropdown">
									<i class="far fa-file-alt"></i>PLACEMENT
								</a>
								<div class="dropdown-menu">
									<a class="dropdown-item" href="#">Frelancer job placement</a>
									<a class="dropdown-item" href="#">USA job placement</a>

								</div>
							</li>
							<!-- placement ends  -->

							<!-- contact starts  -->
							<li class="nav-item">
								<a class="nav-link text-white" href="#"><i class="far fa-envelope"></i>CONTACT </a>
							</li>
							<!-- contact ends  -->
						</ul>
					</div>
				</div>
			</nav>
		</div>
		<!-- navbar 1 ends  -->

		<!-- navbar 2 starts  -->


		<nav>

			<label for="btn" class="icon">
				<span class="fa fa-bars"></span>
			</label>
			<input type="checkbox" id="btn">
			<ul>
				<li>
					<label for="btn-0" class="show">ABOUT US +</label>	
						<a href="#">
							<i class="far fa-file-alt"></i>
							ABOUT US
						</a>
						<input type="checkbox" id="btn-0">
						<ul>
						<li><a href="#">Corporate Profile</a></li>
						<li><a href="#">Our Goals</a></li>
						<li><a href="#">Buiness Focus</a></li>
						<li><a href="#">Clients</a></li>
						<li><a href="#">Certificates & awards</a></li>
						<li><a href="#">Directors</a></li>
					</ul>
				</li>
				<li>
					<label for="btn-1" class="show">TRAINING ACADEMY +</label>
					<a href="#">
						<i class="far fa-file-alt"></i>
						TRAINING ACADEMY
					</a>
					<input type="checkbox" id="btn-1">
					<ul>
						<li><a href="#">GED</a></li>
						<li><a href="#">Industrial Training</a></li>
						<li><a href="#">Oracle</a></li>
						<li><a href="#">Java SE 8</a></li>
						<li><a href="#">Redhat</a></li>
						<li><a href="#">CCNA</a></li>
						<li><a href="#">MCSE</a></li>
						<li><a href="#">ASP.NET/C#</a></li>
						<li><a href="#">Web Development</a></li>
						<li><a href="#">RHCSS</a></li>
						<li><a href="#">Certified Ethical Hacking</a></li>
					</ul>
				</li>
				<li>
					<label for="btn-2" class="show">TESTING CENTER +</label>
					<a href="#">TESTING CENTER</a>
					<input type="checkbox" id="btn-2">
					<ul>
						<li><a href="#">Pearson VUE</a></li>
						<li><a href="#">Redhat</a></li>
						<li><a href="#">GMAT</a></li>
						<li><a href="#">TOEFL</a></li>
						<li><a href="#">BCAT</a></li>
						<li><a href="#">PTE</a></li>
						<!-- <li>
							<label for="btn-3" class="show">More +</label>
							<a href="#">More <span class="fa fa-plus"></span></a>
							<input type="checkbox" id="btn-3">
							<ul>
								<li><a href="#">Submenu-1</a></li>
								<li><a href="#">Submenu-2</a></li>
								<li><a href="#">Submenu-3</a></li>
							</ul>
						</li> -->
					</ul>
				</li>
				<li>
					<label for="btn-3" class="show">SOFTWARE +</label>
					<a href="#">
						<i class="far fa-file-alt"></i>
						SOFTWARE
					</a>
					<input type="checkbox" id="btn-3">
					<ul>
						<li><a href="#">HR management system</a></li>
						<li><a href="#">Payrol management system</a></li>
						<li><a href="#">Attendance management system</a></li>
						<li><a href="#">Leave management system</a></li>
						<li><a href="#">Accounting Management System</a></li>
						<li><a href="#">Inventory Management system</a></li>
					</ul>
				</li>
				<li>
					<label for="btn-4" class="show">TRAINING ACADEMY +</label>
					<a href="#">
						<i class="far fa-file-alt"></i>
						SECURITY COURSE
					</a>
					<input type="checkbox" id="btn-4">
					<ul>
						<li><a href="#">Certified data center Professional(CDCP)</a></li>
						<li><a href="#">Certified data center specialist(CDCS)</a></li>
						<li><a href="#">Certified Information system Auditor(CISA)</a></li>
					</ul>
				</li>
				<li>
					<label for="btn-5" class="show">TRAINING ACADEMY +</label>
					<a href="#">
						<i class="far fa-file-alt"></i>
						PLACEMENT
					</a>
					<input type="checkbox" id="btn-5">
					<ul>
						<li><a href="#">Frelancer job placement</a></li>
						<li><a href="#">USA job placement</a></li>
					</ul>
				</li>
				<li><a href="#">
							<i class="far fa-envelope"></i>Contact
						</a>
				</li>
			</ul>
		</nav>

		<!-- navbar 2 ends  -->

	</header>
	<!-- header section ends  -->

	<!-- slider section starts. it shows the fullscreen with header  -->
	<section class="slider_section owl-carousel">
		<div class="single_slide" style="background-image: url('./image/intro_1.jpg');">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 text-center">
						<div class="slide_content">
							<h3>IT BANGLA LTD</h3>
							<h1>LIVE PROJECT TRAINING</h1>
							<h3>WHERE YOU CAN BUILD YOUR FUTURE</h3>
							<a class="btn btn-warning" href="#">Read More</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="single_slide" style="background-image: url('./image/intro_2.jpg');">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 text-center">
						<div class="slide_content">
							<h3>IT BANGLA LTD</h3>
							<h1>Local & abroad Job Placement Training</h1>
							<h3>WHERE YOU CAN BUILD YOUR FUTURE</h3>
							<a class="btn btn-warning" href="#">Read More</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="single_slide" style="background-image: url('./image/intro_3.jpg');">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 text-center">
						<div class="slide_content">
							<h3>IT BANGLA LTD</h3>
							<h1>100% IT scholarship Course & Vendor Exam</h1>
							<h3>WHERE YOU CAN BUILD YOUR FUTURE</h3>
							<a class="btn btn-warning" href="#">Read More</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- slider section ends  -->


	<!-- intro section starts  -->
	<section class="intro">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 col-md-7 col-sm-7">
					<h3> <i>WELCOME TO IT BANGLA LTD </i></h3>
					<p class="text-muted"> IT Bangla Ltd is the largest computer education networks in Bangladesh.IT BANGLA LTD is a committed venture of IT services, by a team of dedicated professionals having distinct experience in technical, management & Functional domain both in domestic and international business. Our aim is to make IT education affordable to all sections of society through various projects associating with government’s quasigovernment public and private company to reach each and every corner. IT BANGLA LTD is the only company in IT field having such a vast network covering all cities, towns and villages. We have special teaching methodologies to train people in different categories ranging from school level to corporate clients. All this factors would help to achieve our ultimate goal – "cent percentage computer literacy."
					</p>
					<a href="#" class="btn btn-warning">Read more &#8594;</a>
				</div>
				<div class="col-lg-5 col-md-5 col-sm-5 box">
					<img src="./image/welcome.png" alt="welcome to itbl" height="90%" width="100%">
				</div>
			</div>

		</div>
	</section>
	<!-- intro section ends  -->

	<!-- *********Four extra div starts************ -->
	<div class="header-extradiv">
		<div class="container">
			<div class="row">
				<div class="extra-div col-lg-3 col-md-3 col-12">
					<i class="fas fa-eye"></i>
					<h2>Voice to our Customer</h2>
					<p> Our goal is to satisfy our customer through our outstanding service</p>
				</div>

				<div class="extra-div col-lg-3 col-md-3 col-12">
					<i class="fas fa-calculator"></i>
					<h2>Efficiency</h2>
					<p>effecient service assurance</p>
				</div>

				<div class="extra-div col-lg-3 col-md-3 col-12">
					<i class="fas fa-eraser"></i>
					<h2>High quality service</h2>
					<p>Ensure customer satisfaction through our best and unique service</p>
				</div>
				<div class="extra-div col-lg-3 col-md-3 col-12">
					<i class="far fa-clipboard"></i>
					<h2>Innovation</h2>
					<p>Continous improve our process for our customer</p>
				</div>
			</div>
		</div>
	</div>
	<!-- *********Four extra div ends************ -->

	<!-- service section starts  -->
	<section class="service">
		<div class="container">
			<div class="service_content">
				<div class="row justify-content-center ">

					<h1 class="text-white">Service We Offer

						<p><i>What We Do</i></p>
					</h1>

				</div>
			</div>
		</div>
	</section>
	<!-- service section ends  -->



	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	<!-- jquery -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>

	<!-- owl carousel script -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>


	<script>
		$('.slider_section').owlCarousel({
			items: 1,
			loop: true,
			dots: true,
			autoplay: true,
			stagePadding: 0

		})
	</script>
</body>

</html>
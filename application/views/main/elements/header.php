<?php defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="zxx">

<head>

	<!-- Metas -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="keywords" content="HTML5 Template Geekfolio Multi-Purpose themeforest">
	<meta name="description" content="Geekfolio - Multi-Purpose HTML5 Template">
	<meta name="author" content="">

	<!-- Title  -->
	<title>DarkRoom</title>

	<!-- Favicon -->
	<link rel="shortcut icon" href="<?=base_url()?>asset/img/logolight.png">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
		  rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Sora:wght@100;200;300;400;500;600;700;800&display=swap"
		  rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&display=swap"
		  rel="stylesheet">

	<!-- Plugins -->
	<link rel="stylesheet" href="<?=base_url()?>asset/css/plugins.css">

	<!-- Core Style Css -->
	<link rel="stylesheet" href="<?=base_url()?>asset/css/style.css">

</head>

<body class="home-arch main-bg">



<!-- ==================== Start Loading ==================== -->

<div class="loader-wrap">
	<svg viewBox="0 0 1000 1000" preserveAspectRatio="none">
		<path id="svg" d="M0,1005S175,995,500,995s500,5,500,5V0H0Z"></path>
	</svg>

	<div class="loader-wrap-heading">
		<div class="load-text">
			<span>L</span>
			<span>o</span>
			<span>a</span>
			<span>d</span>
			<span>i</span>
			<span>n</span>
			<span>g</span>
		</div>
	</div>
</div>

<!-- ==================== End Loading ==================== -->


<div class="cursor"></div>


<!-- ==================== Start progress-scroll-button ==================== -->

<div class="progress-wrap cursor-pointer">
	<svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
		<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
	</svg>
</div>

<!-- ==================== End progress-scroll-button ==================== -->



<!-- ==================== Start Navbar ==================== -->

<nav class="navbar navbar-expand-lg static">
	<div class="container">

		<!-- Logo -->
		<a class="logo icon-img-100" href="<?php echo base_url()?>">
			<img src="<?=base_url()?>asset/img/logodark.png" alt="logo">
		</a>

		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
				aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="icon-bar"><i class="fas fa-bars"></i></span>
		</button>

		<!-- navbar links -->
		<div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
			<ul class="navbar-nav">
				<li class="nav-item ">
					<a class="nav-link "  href="<?=base_url()?>" role="button"
					   aria-haspopup="true" aria-expanded="false"><span class="rolling-text">Domov</span></a>

				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="<?=base_url()?>blog" role="button"
					   aria-haspopup="true" aria-expanded="false"><span class="rolling-text">Blog</span></a>
					<!--                        <div class="dropdown-menu">-->
					<!--                            <a class="dropdown-item" href="page-about.html">About</a>-->
					<!--                            <a class="dropdown-item" href="page-services.html">Services</a>-->
					<!--                            <a class="dropdown-item" href="page-team.html">Our Team</a>-->
					<!--                            <a class="dropdown-item" href="page-contact.html">Contact Us</a>-->
					<!--                        </div>-->
				</li>

				<li class="nav-item ">
					<a class="nav-link "  href="<?=base_url()?>#cennik" role="button"
					   aria-haspopup="true" aria-expanded="false"><span class="rolling-text">Cennik</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?=base_url()?>kontakt"><span class="rolling-text">Kontakt</span></a>
				</li>
			</ul>
		</div>

<!--		<div class="search-form">-->
<!--			<div class="form-group">-->
<!--				<input type="text" name="search" placeholder="Search">-->
<!--				<button><span class="pe-7s-search"></span></button>-->
<!--			</div>-->
<!--			<div class="search-icon">-->
<!--				<span class="pe-7s-search open-search"></span>-->
<!--				<span class="pe-7s-close close-search"></span>-->
<!--			</div>-->
<!--		</div>-->
	</div>
</nav>

<!-- ==================== End Navbar ==================== -->

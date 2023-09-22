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
	<link rel="shortcut icon" href="asset/img/logolight.png">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
		  rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Sora:wght@100;200;300;400;500;600;700;800&display=swap"
		  rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&display=swap"
		  rel="stylesheet">

	<!-- Plugins -->
	<link rel="stylesheet" href="asset/css/plugins.css">

	<!-- Core Style Css -->
	<link rel="stylesheet" href="asset/css/style.css">

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
			<img src="asset/img/logodark.png" alt="logo">
		</a>

		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
				aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="icon-bar"><i class="fas fa-bars"></i></span>
		</button>

		<!-- navbar links -->
		<div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
			<ul class="navbar-nav">
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
					   aria-haspopup="true" aria-expanded="false"><span class="rolling-text">Domov</span></a>
					<!--                        <div class="dropdown-menu mega-menu">-->
					<!--                            <div class="container">-->
					<!--                                <div class="row">-->
					<!--                                    <div class="col-lg-3">-->
					<!--                                        <div class="clumn">-->
					<!--                                            <div class="title">-->
					<!--                                                <h6 class="sub-title ls1">Home Dark</h6>-->
					<!--                                            </div>-->
					<!--                                            <div class="links">-->
					<!--                                                <a class="dropdown-item" href="../dark/home-main.html">Main Home</a>-->
					<!--                                                <a class="dropdown-item" href="../dark/home-corporate.html">Corporate-->
					<!--                                                    Business</a>-->
					<!--                                                <a class="dropdown-item" href="../dark/home-onepage.html">Home One page</a>-->
					<!--                                                <a class="dropdown-item" href="../dark/home-digital-agency.html">Digital-->
					<!--                                                    Agency</a>-->
					<!--                                                <a class="dropdown-item" href="../dark/home-freelancer.html">Freelancer</a>-->
					<!--                                                <a class="dropdown-item" href="../dark/home-marketing-agency.html">Marketing-->
					<!--                                                    Agency</a>-->
					<!--                                                <a class="dropdown-item" href="../dark/home-creative-agency.html">Creative-->
					<!--                                                    Agency</a>-->
					<!--                                                <a class="dropdown-item" href="../dark/home-startup.html">Startup Bussines</a>-->
					<!--                                                <a class="dropdown-item" href="../dark/home-architecture.html">Architecture</a>-->
					<!--                                            </div>-->
					<!--                                        </div>-->
					<!--                                    </div>-->
					<!--                                    <div class="col-lg-3">-->
					<!--                                        <div class="clumn">-->
					<!--                                            <div class="title">-->
					<!--                                                <h6 class="sub-title ls1">Home Light</h6>-->
					<!--                                            </div>-->
					<!--                                            <div class="links">-->
					<!--                                                <a class="dropdown-item" href="home-main.html">Main Home</a>-->
					<!--                                                <a class="dropdown-item" href="home-corporate.html">Corporate-->
					<!--                                                    Business</a>-->
					<!--                                                <a class="dropdown-item" href="home-onepage.html">Home One page</a>-->
					<!--                                                <a class="dropdown-item" href="home-digital-agency.html">Digital-->
					<!--                                                    Agency</a>-->
					<!--                                                <a class="dropdown-item" href="home-freelancer.html">Freelancer</a>-->
					<!--                                                <a class="dropdown-item" href="home-marketing-agency.html">Marketing-->
					<!--                                                    Agency</a>-->
					<!--                                                <a class="dropdown-item" href="home-creative-agency.html">Creative-->
					<!--                                                    Agency</a>-->
					<!--                                                <a class="dropdown-item" href="home-startup.html">Startup Bussines</a>-->
					<!--                                                <a class="dropdown-item" href="home-architecture.html">Architecture</a>-->
					<!--                                            </div>-->
					<!--                                        </div>-->
					<!--                                    </div>-->
					<!--                                    <div class="col-lg-3">-->
					<!--                                        <div class="clumn">-->
					<!--                                            <div class="title">-->
					<!--                                                <h6 class="sub-title ls1">Showcases</h6>-->
					<!--                                            </div>-->
					<!--                                            <div class="links">-->
					<!--                                                <a class="dropdown-item" href="../dark/showcase-parallax-slider.html">Parallax-->
					<!--                                                    Slider</a>-->
					<!--                                                <a class="dropdown-item" href="../dark/showcase-frame-slider.html">Frame-->
					<!--                                                    Slider</a>-->
					<!--                                                <a class="dropdown-item" href="../dark/showcase-circle-slider.html">Circle-->
					<!--                                                    Slider</a>-->
					<!--                                                <a class="dropdown-item" href="../dark/showcase-carousel.html">Showcase-->
					<!--                                                    Carousel</a>-->
					<!--                                                <a class="dropdown-item"-->
					<!--                                                    href="../dark/showcase-interactive-center-horizontal.html">Interactive-->
					<!--                                                    Links1</a>-->
					<!--                                                <a class="dropdown-item"-->
					<!--                                                    href="../dark/showcase-interactive-center.html">Interactive Links2</a>-->
					<!--                                                <a class="dropdown-item" href="../dark/showcase-parallax.html">Vertical-->
					<!--                                                    Parallax</a>-->
					<!--                                            </div>-->
					<!--                                        </div>-->
					<!--                                    </div>-->
					<!--                                    <div class="col-lg-3">-->
					<!--                                        <div class="clumn">-->
					<!--                                            <div class="title">-->
					<!--                                                <h6 class="sub-title ls1">Showcases Light</h6>-->
					<!--                                            </div>-->
					<!--                                            <div class="links">-->
					<!--                                                <a class="dropdown-item" href="showcase-parallax-slider.html">Parallax-->
					<!--                                                    Slider</a>-->
					<!--                                                <a class="dropdown-item" href="showcase-carousel.html">Showcase-->
					<!--                                                    Carousel</a>-->
					<!--                                                <a class="dropdown-item"-->
					<!--                                                    href="showcase-interactive-center-horizontal.html">Interactive-->
					<!--                                                    Links1</a>-->
					<!--                                                <a class="dropdown-item"-->
					<!--                                                    href="showcase-interactive-center.html">Interactive Links2</a>-->
					<!--                                                <a class="dropdown-item" href="showcase-parallax.html">Vertical-->
					<!--                                                    Parallax</a>-->
					<!--                                            </div>-->
					<!--                                        </div>-->
					<!--                                    </div>-->
					<!--                                </div>-->
					<!--                            </div>-->
					<!--                        </div>-->
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="blog.html" role="button"
					   aria-haspopup="true" aria-expanded="false"><span class="rolling-text">Blog</span></a>
					<!--                        <div class="dropdown-menu">-->
					<!--                            <a class="dropdown-item" href="page-about.html">About</a>-->
					<!--                            <a class="dropdown-item" href="page-services.html">Services</a>-->
					<!--                            <a class="dropdown-item" href="page-team.html">Our Team</a>-->
					<!--                            <a class="dropdown-item" href="page-contact.html">Contact Us</a>-->
					<!--                        </div>-->
				</li>
				<!--                    <li class="nav-item dropdown">-->
				<!--                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"-->
				<!--                            aria-haspopup="true" aria-expanded="false"><span class="rolling-text">Blog</span></a>-->
				<!--                            <ul class="dropdown-menu">-->
				<!--                                <li class="dropdown-item">-->
				<!--                                    <a href="#0">Classic Grid <i class="fas fa-angle-right icon-arrow"></i></a>-->
				<!--                                    <ul class="dropdown-side">-->
				<!--                                        <li><a class="dropdown-item" href="portfolio-grid-2.html">Grid 2 Columns</a></li>-->
				<!--                                        <li><a class="dropdown-item" href="portfolio-grid-3.html">Grid 3 Columns</a></li>-->
				<!--                                        <li><a class="dropdown-item" href="portfolio-grid-4.html">Grid 4 Columns</a></li>-->
				<!--                                    </ul>-->
				<!--                                </li>-->
				<!--                                <li class="dropdown-item">-->
				<!--                                    <a href="#0">Masonry <i class="fas fa-angle-right icon-arrow"></i></a>-->
				<!--                                    <ul class="dropdown-side">-->
				<!--                                        <li><a class="dropdown-item" href="portfolio-masonry-2.html">Masonry 2 Columns</a></li>-->
				<!--                                        <li><a class="dropdown-item" href="portfolio-masonry-3.html">Masonry 3 Columns</a>-->
				<!--                                        </li>-->
				<!--                                        <li><a class="dropdown-item" href="portfolio-masonry-4.html">Masonry 4 Columns</a></li>-->
				<!--                                    </ul>-->
				<!--                                </li>-->
				<!--                                <li><a class="dropdown-item" href="portfolio-metro.html">Portfolio Metro</a></li>-->
				<!--                                <li><a class="dropdown-item" href="portfolio-modern.html">Modern Grid</a></li>-->
				<!--                                <li><a class="dropdown-item" href="project-details1.html">Project Details 1</a></li>-->
				<!--                                <li><a class="dropdown-item" href="project-details2.html">Project Details 2</a></li>-->
				<!--                            </ul>-->
				<!--                    </li>-->
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
					   aria-haspopup="true" aria-expanded="false"><span class="rolling-text">Cennik</span></a>
					<!--                        <div class="dropdown-menu">-->
					<!--                            <a class="dropdown-item" href="blog-classic.html">Blog Standerd</a>-->
					<!--                            <a class="dropdown-item" href="blog-list.html">Blog List</a>-->
					<!--                            <a class="dropdown-item" href="blog-half-img.html">Image Out Frame</a>-->
					<!--                            <a class="dropdown-item" href="blog-details.html">Blog Details</a>-->
					<!--                        </div>-->
				</li>
				<!--                    <li class="nav-item dropdown">-->
				<!--                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"-->
				<!--                            aria-haspopup="true" aria-expanded="false"><span class="rolling-text">Shop</span></a>-->
				<!--                        <div class="dropdown-menu">-->
				<!--                            <a class="dropdown-item" href="shop-list.html">Shop List</a>-->
				<!--                            <a class="dropdown-item" href="shop-product.html">Single Product</a>-->
				<!--                            <a class="dropdown-item" href="shop-cart.html">Cart</a>-->
				<!--                            <a class="dropdown-item" href="shop-checkout.html">Checkout</a>-->
				<!--                        </div>-->
				<!--                    </li>-->
				<li class="nav-item">
					<a class="nav-link" href="page-contact.html"><span class="rolling-text">Kontakt</span></a>
				</li>
			</ul>
		</div>

		<div class="search-form">
			<div class="form-group">
				<input type="text" name="search" placeholder="Search">
				<button><span class="pe-7s-search"></span></button>
			</div>
			<div class="search-icon">
				<span class="pe-7s-search open-search"></span>
				<span class="pe-7s-close close-search"></span>
			</div>
		</div>
	</div>
</nav>

<!-- ==================== End Navbar ==================== -->

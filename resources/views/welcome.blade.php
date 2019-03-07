<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
<!-- Document Meta
    ============================================= -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!--IE Compatibility Meta-->
<meta name="author" content="zytheme" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
<meta name="description" content="construction html5 template">
<link href="../resources/assets/images/favicon/favicon.ico" rel="icon">

<!-- Fonts
    ============================================= -->
<link href="http://fonts.googleapis.com/css?family=Poppins:400,400i,500,500i,600,600i,700,700i%7CDroid+Serif:400,400i,700,700i%7CLora:400,400italic,700,700italic" rel="stylesheet" type="text/css">

<!-- RS5.0 Main Stylesheet -->
<link rel="stylesheet" type="text/css" href="../resources/assets/revolution/css/settings.css">
<link rel="stylesheet" type="text/css" href="../resources/assets/revolution/css/layers.css">
<link rel="stylesheet" type="text/css" href="../resources/assets/revolution/css/navigation.css">
<!-- Stylesheets
    ============================================= -->
<link href="../resources/assets/css/external.css" rel="stylesheet">
<link href="../resources/assets/css/style.css" rel="stylesheet">

<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
<!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
      <script src="assets/js/respond.min.js"></script>
    <![endif]-->

<!-- Document Title
    ============================================= -->
<title>Movies Analysis</title>
</head>
<body>
<div class="preloader">
	<div class="spinner">
	<div class="double-bounce1"></div>
	<div class="double-bounce2"></div>
	</div>
</div><!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="wrapper clearfix">
<header id="navbar-spy" class="header header-1">
    <nav id="primary-menu" class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid container-p0">
            <a class="navbar-brand" href=" {{ url('/') }} ">
                <img src="../resources/assets/images/logo/logo-white.png" alt="logo template">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav ml-auto">
                     	<!-- Home Menu -->
	<li class="has-dropdown mega-dropdown active">
		<a href=" {{ url('/') }} ">home</a>
	</li>
	<!-- li end -->

	<!-- Pages Menu-->
	<li class="has-dropdown">
		<a href="#" data-toggle="dropdown" class="dropdown-toggle menu-item">pages</a>
		<ul class="dropdown-menu">

			<li class="dropdown-submenu">
				<a href=" {{ url('/about') }} ">about</a>
			</li>

			<li>
				<a href=" {{ url('/clients') }} ">clients</a>
			</li>

			<li class="dropdown-submenu">
				<a href=" {{ url('/contact') }} ">contact</a>
			</li>

			<li class="dropdown-submenu">
				<a href=" {{ url('/srevices') }} ">services</a>
			</li>

			<li class="dropdown-submenu">
				<a href=" {{ url('/team') }} ">team</a>
			</li>

			<li>
				<a href=" {{ url('/testimonials') }} ">testimonials</a>
			</li>
		</ul>
	</li>
	<!-- li end -->

	<!-- films Menu -->
	<li class="has-dropdown">
		<a href=" {{ url('/films') }} ">films</a>
		<ul class="dropdown-menu">

			<li class="dropdown-submenu">
				<a href="#" data-toggle="dropdown" class="dropdown-toggle">Comedy</a>
			</li>

			<li class="dropdown-submenu">
				<a href="#" data-toggle="dropdown" class="dropdown-toggle">Dramma</a>
			</li>

			<li>
				<a href="#">Horror</a>
			</li>

		</ul>
	</li>
	<!-- li end -->

	<!-- Elements Menu -->
	<li class="has-dropdown mega-dropdown">
		<a href=" {{ url('/signup') }} ">Sign Up</a>
	</li>


                </ul>
                <div class="module-container">
                    <!-- Module Languages -->
<div class="module module-lang">
    <a href="#">En</a>|<a href="#">Ru</a>
</div>                    <!-- Module Social -->
<div class="module module-social">
    <a class="social-icon social-text-hover social-icon-twitter" href="#"><i class="fa fa-twitter"></i></a>
    <a class="social-icon social-text-hover social-icon-instagram" href="#"><i class="fa fa-instagram"></i></a>
    <a class="social-icon social-text-hover social-icon-behance" href="#"><i class="fa fa-vk"></i></a>
</div>                </div>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
</header>
<!-- Hero Section
====================================== -->
<section id="slider" class="slider slider-1">
	<!-- START REVOLUTION SLIDER 5.0 -->
	<div class="rev_slider_wrapper">
		<div id="slider1" class="rev_slider"  data-version="5.0">
			<ul>
				<!-- slide 1 -->
				<li data-transition="slideleft"
					data-slotamount="default"
					data-easein="Power4.easeInOut"
					data-easeout="Power4.easeInOut"
					data-masterspeed="2000"
					data-thumb="../resources/assets/images/sliders/thumb/1.jpg">
					<!-- MAIN IMAGE -->
					<img src="../resources/assets/images/sliders/slide-bg/1.jpg" alt="Slide Background Image"  width="1920" height="1280">
					<!-- LAYER NR. 1 -->
					<div class="tp-caption"
 				        data-x="['left','left','left','left']" data-hoffset="['-50','20','20','0']"
                        data-y="['middle','middle','middle','middle']" data-voffset="['20','20','20','20']"
						data-width="none"
						data-height="none"
                        data-whitespace="nowrap"
                        data-transform_idle="o:1;"
                        data-transform_in="x:[-155%];z:0;rX:0deg;rY:0deg;rZ:0deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power2.easeInOut;"
                        data-transform_out="x:[-100%];s:3000;e:Power2.easeInOut;s:3000;e:Power2.easeInOut;"
                        data-mask_in="x:50px;y:0px;s:inherit;e:inherit;"
                        data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                        data-start="1000"
						data-splitin="none"
						data-responsive_offset="on">
						<div class="slide-container"></div>
					</div>

					<!-- LAYER NR. 2 -->
					<div class="tp-caption"
				        data-x="['left','left','left','left']" data-hoffset="['50','50','50','20']"
                        data-y="['middle','middle','middle','middle']" data-voffset="['-65','-65','-65','-60']"
						data-fontsize="['65', '50', '40', '30']"
						data-width="none"
						data-height="none"
                        data-transform_idle="o:1;"
                        data-transform_in="x:[155%];z:0;rX:0deg;rY:0deg;rZ:0deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power2.easeInOut;"
                        data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                        data-mask_in="x:50px;y:0px;s:inherit;e:inherit;"
                        data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                        data-start="1250"
						data-responsive_offset="on">
						<div class="slide--headline">Analysis</div>
					</div>

					<!-- LAYER NR. 3 -->
					<div class="tp-caption"
				        data-x="['left','left','left','left']" data-hoffset="['50','50','50','20']"
                        data-y="['middle','middle','middle','middle']" data-voffset="['20','20','20','20']"
						data-fontsize="['17', '17', '15', '13']"
						data-width="none"
						data-height="none"
                        data-transform_idle="o:1;"
                        data-transform_in="x:[-155%];z:0;rX:0deg;rY:0deg;rZ:0deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power2.easeInOut;"
                        data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                        data-mask_in="x:50px;y:0px;s:inherit;e:inherit;"
                        data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                        data-start="1500"
						data-responsive_offset="on">
						<div class="slide--bio">Film analysis is the vital essence of what we do, and truly great <br>analysis is born of meticulous planning and process. This is<br> where we specialise !</div>
					</div>

					<!-- LAYER NR. 4 -->
					<div class="tp-caption"
				        data-x="['left','left','left','left']" data-hoffset="['50','50','50','20']"
                        data-y="['middle','middle','middle','middle']" data-voffset="['110','100','120','120']"
						data-width="none"
						data-height="none"
                        data-transform_idle="o:1;"
                        data-transform_in="x:[155%];z:0;rX:0deg;rY:0deg;rZ:0deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power2.easeInOut;"
                        data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                        data-mask_in="x:50px;y:0px;s:inherit;e:inherit;"
                        data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                        data-start="1750"
						data-responsive_offset="on"
						>
						<div class="slide-action">
							<a class="btn btn-secondary btn-hover" href="#">Learn More</a>
						</div>
					</div>
				</li>

				<!-- slide 2 -->
				<li data-transition="slideright"
					data-slotamount="default"
					data-easein="Power4.easeInOut"
					data-easeout="Power4.easeInOut"
					data-masterspeed="2000"
					data-thumb="../resources/assets/images/sliders/thumb/2.jpg">
					<!-- MAIN IMAGE -->
					<img src="../resources/assets/images/sliders/slide-bg/2.jpg" alt="Slide Background Image"  width="1920" height="1280">
					<!-- LAYER NR. 1 -->
					<div class="tp-caption"
				        data-x="['left','left','left','left']" data-hoffset="['-50','20','20','0']"
                        data-y="['middle','middle','middle','middle']" data-voffset="['20','20','20','20']"
						data-width="none"
						data-height="none"
                        data-whitespace="nowrap"
                        data-transform_idle="o:1;"
                        data-transform_in="x:[-155%];z:0;rX:0deg;rY:0deg;rZ:0deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power2.easeInOut;"
                        data-transform_out="x:[-100%];s:3000;e:Power2.easeInOut;s:3000;e:Power2.easeInOut;"
                        data-mask_in="x:50px;y:0px;s:inherit;e:inherit;"
                        data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                        data-start="1000"
						data-splitin="none"
 						data-responsive_offset="on">
						<div class="slide-container"></div>
					</div>

					<!-- LAYER NR. 2 -->
					<div class="tp-caption"
				        data-x="['left','left','left','left']" data-hoffset="['50','50','50','20']"
                        data-y="['middle','middle','middle','middle']" data-voffset="['-65','-65','-65','-60']"
						data-fontsize="['65', '50', '40', '30']"
						data-width="none"
						data-height="none"
                        data-transform_idle="o:1;"
                        data-transform_in="x:[155%];z:0;rX:0deg;rY:0deg;rZ:0deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power2.easeInOut;"
                        data-transform_out="x:[-100%];s:3000;e:Power2.easeInOut;s:3000;e:Power2.easeInOut;"
                        data-mask_in="x:50px;y:0px;s:inherit;e:inherit;"
                        data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                        data-start="1250"
						data-responsive_offset="on">
						<div class="slide--headline">Box Office</div>
					</div>

					<!-- LAYER NR. 3 -->
					<div class="tp-caption"
				        data-x="['left','left','left','left']" data-hoffset="['50','50','50','20']"
                        data-y="['middle','middle','middle','middle']" data-voffset="['20','20','20','20']"
						data-fontsize="['17', '17', '15', '13']"
						data-width="none"
						data-height="none"
                        data-transform_idle="o:1;"
                        data-transform_in="x:[155%];z:0;rX:0deg;rY:0deg;rZ:0deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power2.easeInOut;"
                        data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                        data-mask_in="x:50px;y:0px;s:inherit;e:inherit;"
                        data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                        data-start="1500"
						data-responsive_offset="on">
						<div class="slide--bio">Tracking box office is key to modern commercial cinema, <br> reflecting the economic success of a film. This is <br> where we specialise !</div>
					</div>

					<!-- LAYER NR. 4 -->
					<div class="tp-caption"
				        data-x="['left','left','left','left']" data-hoffset="['50','50','50','20']"
                        data-y="['middle','middle','middle','middle']" data-voffset="['110','100','120','120']"
						data-width="none"
						data-height="none"
                        data-transform_idle="o:1;"
                        data-transform_in="x:[155%];z:0;rX:0deg;rY:0deg;rZ:0deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power2.easeInOut;"
                        data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                        data-mask_in="x:50px;y:0px;s:inherit;e:inherit;"
                        data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                        data-start="1750"
						data-responsive_offset="on"
						>
						<div class="slide-action">
							<a class="btn btn-secondary btn-hover" href="#">Learn More</a>
						</div>
					</div>
				</li>

			</ul>
		</div>
		<!-- END REVOLUTION SLIDER -->
	</div>
	<!-- END OF SLIDER WRAPPER -->
</section>
<!-- #hero end --><!-- About #5
============================================= -->
<section id="about5" class="about about-4 about-5">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-9">
                <div class="heading heading-4 mb-70">
                    <div class="subheading">We Are Creative</div>
                    <h2>Movie Analysis is a development studio based in Nizhny Novgorod, focused on IT, films, business and experiences.</h2>
                </div>
            </div>
            <!-- .col-lg-9 end -->
        </div>
        <div class="row">
            <!-- About Panel #1 -->
            <div class="col-sm-12 col-md-12 col-lg-4">
                <div class="about-panel">
                    <div class="about-icon">
                        <h6>Story</h6>
                    </div>
                    <div class="about-content">
                        <p>Our agency can be as strong as our employees, and therefore our team runs its own business in the field of film analysis.</p>
                        <div class="about-more">
                            <a href="#"><i class="celia-arrow-long-right"></i><span>Read More</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- .col-lg-4 end -->

            <!-- About Panel #2 -->
            <div class="col-sm-12 col-md-12 col-lg-4">
                <div class="about-panel">
                    <div class="about-icon">
                        <h6>Mission</h6>
                    </div>
                    <div class="about-content">
                        <p>Film analysis is the vital essence of what we do, and truly great analysis is born of meticulous planning and process.</p>
                        <div class="about-more">
                            <a href="#"><i class="celia-arrow-long-right"></i><span>Read More</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- .col-lg-4 end -->

            <!-- About Panel #4 -->
            <div class="col-sm-12 col-md-12 col-lg-4">
                <div class="about-panel">
                    <div class="about-icon">
                        <h6>Values</h6>
                    </div>
                    <div class="about-content">
                        <p>One of our values in Movie Analysis agency is “Beauty in Simplicity” because we love making things simple, intuitive and expertly crafted.</p>
                        <div class="about-more">
                            <a href="#"><i class="celia-arrow-long-right"></i><span>Read More</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- .col-lg-4 end -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
<!-- #about5 end -->

<!-- Service #1
============================================= -->
<section id="service1" class="service service-1">
    <div class="container">
        <div class="row heading heading-2 mb-60">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="subheading">Our Services</div>
            </div>
            <!-- .col-lg-12 end -->
            <div class="col-sm-12 col-md-12 col-lg-4">
                <h2>What We Do!</h2>
            </div>
            <!-- .col-lg-4 end -->
            <div class="col-sm-12 col-md-12 col-lg-6">
                <p>We understand the importance of approaching each work integrally and believe in the power of simple and easy communication.</p>
            </div>
            <!-- .col-lg-6 end -->
        </div>
        <!-- .row end -->
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-4">
                <div class="service-panel">
                    <div class="service-icon">
                        <i class="icon-database"></i>
                    </div>
                    <div class="service-content">
                        <h3>Data Science</h3>
                        <p>Your data set is the heart of your personality, let our data scientists create a perfect and dreamy set.</p>
                        <a class="service-more" href="#"><i class="celia-arrow-long-right"></i><span>Read More</span></a>
                    </div>
                </div>
                <!-- .service-panel end -->
            </div>
            <!-- .col-lg-4 end -->

            <div class="col-sm-12 col-md-12 col-lg-4">
                <div class="service-panel">
                    <div class="service-icon">
                        <i class="icon icon-DesktopMonitor"></i>
                    </div>
                    <div class="service-content">
                        <h3>Web Design</h3>
                        <p>What separates Celia from all other web design agencies is the ability to offer the most User Experience.</p>
                        <a class="service-more" href="#"><i class="celia-arrow-long-right"></i><span>Read More</span></a>
                    </div>
                </div>
                <!-- .service-panel end -->
            </div>
            <!-- .col-lg-4 end -->

            <div class="col-sm-12 col-md-12 col-lg-4">
                <div class="service-panel">
                    <div class="service-icon">
                        <i class="icon icon-CompactCamera"></i>
                    </div>
                    <div class="service-content">
                        <h3>Photography</h3>
                        <p>Photography is the core of we do at Celia, photography equipment & digital camera reviews.</p>
                        <a class="service-more" href="#"><i class="celia-arrow-long-right"></i><span>Read More</span></a>
                    </div>
                </div>
                <!-- .service-panel end -->
            </div>
            <!-- .col-lg-4 end -->

        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
<!-- #service1 end -->

<!-- Team #1
============================================= -->
<section id="team1" class="team team-1 bg-gray">
    <div class="container">
        <div class="heading heading-2">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="subheading">our professionals</div>
                </div>
                <!-- .col-lg-12 end -->
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <h2>Meet The Team.</h2>
                </div>
                <!-- .col-lg-4 end -->
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <p>We love what we do and we do it with passion. We value the experimentation, the reformation of the message, and the smart incentives.</p>
                </div><!-- .col-lg-6 end -->
            </div>
        </div><!-- .row end -->
        <div class="row">
            <div class="col-sm-12 col-md-4 col-lg-4">
                <div class="team-panel">
                    <div class="team-img">
                        <img src="../resources/assets/images/team/team-1.jpg" alt="member avatar">
                        <div class="team-overlay">
                            <a href="#">VKontakte</a>
                            <a href="#">Instgram</a>
                            <a href="#">facebook</a>
                            <a href="#">twitter</a>
                        </div>
                    </div>
                    <div class="team-content">
                        <h3>Denis Silin</h3>
                        <p>Data Science</p>
                    </div>
                </div><!-- .team-panel end -->
            </div>
            <!-- .col-lg-4 end -->

            <div class="col-sm-12 col-md-4 col-lg-4">
                <div class="team-panel">
                    <div class="team-img">
                        <img src="../resources/assets/images/team/team-2.jpg" alt="member avatar">
                        <div class="team-overlay">
                            <a href="#">VKontakte</a>
                            <a href="#">Instgram</a>
                            <a href="#">facebook</a>
                            <a href="#">twitter</a>
                        </div>
                    </div>
                    <div class="team-content">
                        <h3>Alexander Vardanian</h3>
                        <p>Web Developer</p>
                    </div>
                </div><!-- .team-panel end -->
            </div>
            <!-- .col-lg-4 end -->

            <div class="col-sm-12 col-md-4 col-lg-4">
                <div class="team-panel">
                    <div class="team-img">
                        <img src="../resources/assets/images/team/team-3.jpg" alt="member avatar">
                        <div class="team-overlay">
                            <a href="#">VKontakte</a>
                            <a href="#">Instgram</a>
                            <a href="#">facebook</a>
                            <a href="#">twitter</a>
                        </div>
                    </div>
                    <div class="team-content">
                        <h3>Alexander Dydychkin</h3>
                        <p>Machine Learning</p>
                    </div>
                </div><!-- .team-panel end -->
            </div>
            <!-- .col-lg-4 end -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
<!-- #team1 end -->

<!-- Clients #2
=============================================-->
<section id="clients2" class="clients clients-1 clients-2 pb-80">
	<div class="container">
		<div class="row heading heading-2">
 			<div class="col-sm-12 col-md-12 col-lg-12">
				<div class="subheading">Our Clients</div>
 			</div>
			<!-- .col-lg-12 end -->
			<div class="col-sm-12 col-md-12 col-lg-4">
 				<h2>Lucky Partners!</h2>
			</div>
			<!-- .col-lg-4 end -->
			<div class="col-sm-12 col-md-12 col-lg-6">
				<p>We've been lucky to collaborate with a long list of customers, located in and out of the country. Thanks to them we have grown as professionals.</p>

			</div>
			<!-- .col-lg-6 end -->
		</div>
		<!-- .row end -->

		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-12">
			<div  class="carousel owl-carousel carousel-dots" data-slide="6" data-slide-rs="2" data-autoplay="false" data-nav="false" data-dots="true" data-space="20" data-loop="true" data-speed="800">
					<!-- Client #1 -->
					<div class="client">
						<img src="../resources/assets/images/clients/7.png" alt="client">
					</div>
					<!-- .client end -->

					<!-- Client #2 -->
					<div class="client">
						<img src="../resources/assets/images/clients/8.png" alt="client">
					</div>
					<!-- .client end -->

					<!-- Client #3 -->
					<div class="client">
						<img src="../resources/assets/images/clients/9.png" alt="client">
					</div>
					<!-- .client end -->

					<!-- Client #4 -->
					<div class="client">
						<img src="../resources/assets/images/clients/10.png" alt="client">
					</div>
					<!-- .client end -->

					<!-- Client #5 -->
					<div class="client">
						<img src="../resources/assets/images/clients/11.png" alt="client">
					</div>
					<!-- .client end -->

					<!-- Client #6 -->
					<div class="client">
						<img src="../resources/assets/images/clients/12.png" alt="client">
					</div>
					<!-- .client end -->

					<!-- Client #7 -->
					<div class="client">
						<img src="../resources/assets/images/clients/8.png" alt="client">
					</div>
					<!-- .client end -->

					<!-- Client #8 -->
					<div class="client">
						<img src="../resources/assets/images/clients/7.png" alt="client">
					</div>
					<!-- .client end -->

				</div>
				<!-- #clients end -->
			</div>
			<!-- .col-lg-12 end -->
		</div>
		<!-- .row end -->
	</div>
	<!-- .container end -->
</section>
<!-- #clients2 end --><!-- Footer #1
============================================= -->
<footer id="footer" class="footer footer-1">
    <div class="footer-container">
        <!-- Widget Section
	============================================= -->
        <div class="footer-widget">
            <div class="widget-container">
                <div class="info">
                    <h3>Stay Connected With Us!</h3>
                    <ul class="list-inline">
                        <li><a href="#">vKontakte</a></li>
                        <li><a href="#">gitHub</a></li>
                        <li><a href="#">instgram</a></li>
                        <li><a href="#">twitter</a></li>
                        <li><a href="#">facebook</a></li>
                    </ul>
                </div>
                <div class="subscription">

                </div>
            </div>
        </div><!-- .footer-widget end -->
        <!-- Logo Widget
	============================================= -->
        <div class="footer-logo">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="text-center">
                            <img src="../resources/assets/images/logo/logo-light-footer.png" alt="logo">
                        </div>
                    </div>
                </div>
            </div><!-- .container end -->
        </div><!-- .footer-copyright end -->

        <!-- Info Widget
	============================================= -->
        <div class="footer-info-widget">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-3">
                        <div class="contact-info">
                            <p>Email Us : mag18bi@gmail.com</p>
                            <p>Call Us : +7 (996) 010 98 27 </p>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-6">
                        <div class="bio-info text-center">
                            <p>Movie Analysis is a development studio based in Nijni Novgorod, focused on IT, films, business and experiences.</p>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-3">
                        <div class="copyright-info text-right">
                            <p>&copy; 2019 Movie Analysis Studio.<br> All Rights Reserved.</p>
                            <p>With Love by <a href="https://vk.com/alexvardanen"> Ginger Kote </a></p>
                        </div>
                    </div>
                </div><!-- .row end -->
            </div><!-- .container end -->
        </div><!-- .footer-copyright end -->

    </div><!-- .footer-container end -->
</footer>
 </div><!-- #wrapper end -->

<script src="../resources/assets/js/jquery-3.3.1.min.js"></script>
<script src="../resources/assets/js/plugins.js"></script>
<script src="../resources/assets/js/functions.js"></script>
<!-- RS5.0 Core JS Files -->
<script src="../resources/assets/revolution/js/jquery.themepunch.tools.min.js?rev=5.0"></script>
<script src="../resources/assets/revolution/js/jquery.themepunch.revolution.min.js?rev=5.0"></script>
<script src="../resources/assets/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script src="../resources/assets/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="../resources/assets/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="../resources/assets/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="../resources/assets/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="../resources/assets/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="../resources/assets/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="../resources/assets/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<!-- RS Configration JS Files -->
<script src="../resources/assets/js/rsconfig.js"></script>
</body>
</html>

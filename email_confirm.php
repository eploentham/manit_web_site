<!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en-us"> <!--<![endif]-->
<?php

require 'config.php';
setIPView();
$objConnect = mysqli_connect("localhost",'root','Ekartc2c5','manit');
$obj = mysqli_query($objConnect, "Update b_customer Set status_regis = '2' Where cust_id = '".$_GET['cust_id']."'");
mysqli_close($objConnect);
?>
<head>
  <title>Agency | Unify - Responsive Website Template</title>

  <!-- Meta -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Favicon -->
  <link rel="shortcut icon" href="favicon.ico">

  <!-- Web Fonts -->
  <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=cyrillic,latin">
  <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900">

  <!-- CSS Global Compulsory -->
  <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/app.css">
  <link rel="stylesheet" href="assets/css/blocks.css">

  <!-- CSS Implementing Plugins -->
  <link rel="stylesheet" href="assets/plugins/animate.css">
  <link rel="stylesheet" href="assets/plugins/line-icons/line-icons.css">
  <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/plugins/owl-carousel2/assets/owl.carousel.css">
  <link rel="stylesheet" href="assets/plugins/sky-forms-pro/skyforms/css/sky-forms.css">
  <link rel="stylesheet" href="assets/plugins/sky-forms-pro/skyforms/custom/custom-sky-forms-v2.css">

    <link rel="stylesheet" type="text/css" href="assets/plugins/revolution-slider/revolution/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
    <!-- REVOLUTION STYLE SHEETS -->
    <link rel="stylesheet" type="text/css" href="assets/plugins/revolution-slider/revolution/css/settings.css">
    <!-- REVOLUTION LAYERS STYLES -->
    <link rel="stylesheet" type="text/css" href="assets/plugins/revolution-slider/revolution/css/layers.css">
    <!-- REVOLUTION NAVIGATION STYLES -->
    <link rel="stylesheet" type="text/css" href="assets/plugins/revolution-slider/revolution/css/navigation.css">

  <!-- CSS Theme -->
  <link rel="stylesheet" href="assets/css/agency.style.css">

  <!-- CSS Customization -->
  <link rel="stylesheet" href="assets/css/custom.css">
</head>

<!--
	The data-spy and data-target are part of the built-in Bootstrap scrollspy function.
-->
<body id="body" data-spy="scroll" data-target=".one-page-header" class="demo-lightbox-gallery">
<main class="wrapper">

	<!--=== Header ===-->
	<nav class="one-page-header navbar navbar-default navbar-fixed-top one-page-nav-scrolling one-page-nav__fixed" data-role="navigation">
		<div class="container">
			<div class="menu-container page-scroll">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#body">
					<img src="assets/img/logo-dark3.png" alt="">
				</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<div class="menu-container">
					<ul class="nav navbar-nav">
						<li class="page-scroll">
							<a href="#About"><span data-hover="About">About</span></a>
						</li>
						<li class="page-scroll">
							<a href="#WhyWe"><span data-hover="Why We">Why We</span></a>
						</li>
						<li class="page-scroll">
							<a href="#Services"><span data-hover="Services">Services</span></a>
						</li>
						<li class="page-scroll">
							<a href="#WorkProcess"><span data-hover="Work Process">Work Process</span></a>
						</li>
						<li class="page-scroll">
							<a href="#Skills"><span data-hover="Skills">Skills</span></a>
						</li>
						<li class="page-scroll">
							<a href="#Team"><span data-hover="Team">Team</span></a>
						</li>
						<li class="page-scroll">
							<a href="#Testimonials"><span data-hover="Testimonials">Testimonials</span></a>
						</li>
						<li class="page-scroll">
							<a href="#Contact"><span data-hover="Contact">Contact</span></a>
						</li>
					</ul>
				</div>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container -->
	</nav>
	<!--=== End Header ===-->

	<!-- Promo Block -->
	<div class="promo">
				<div id="rev_slider_104_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="scroll-effect76" style="background-color:#111111;padding:0px;">
				<!-- START REVOLUTION SLIDER 5.0.7 fullscreen mode -->
					<div id="rev_slider_104_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.0.7">
						<ul>	<!-- SLIDE  -->
							<li data-index="rs-309" data-transition="slideoverhorizontal" data-slotamount="default"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="1000"  data-thumb="assets/img-temp/promo/bigbold_3-100x50.jpg"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="Unify Agency" data-description="">
								<!-- MAIN IMAGE -->
								<img src="assets/img-temp/promo/bigbold_3.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
								<!-- LAYERS -->

								<!-- LAYER NR. 1 -->
								<div class="tp-caption tp-shape tp-shapewrapper   rs-parallaxlevel-0"
									 id="slide-309-layer-11"
									 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
									 data-y="['bottom','bottom','bottom','bottom']" data-voffset="['0','0','0','0']"
												data-width="full"
									data-height="['400','400','400','550']"
									data-whitespace="nowrap"
									data-transform_idle="o:1;"
										data-style_hover="cursor:default;"

									 data-transform_in="opacity:0;s:1500;e:Power2.easeInOut;"
									 data-transform_out="opacity:0;s:1000;s:1000;"
									data-start="0"
									data-basealign="slide"
									data-responsive_offset="off"
									data-responsive="off"

									style="z-index: 5;background-color:rgba(0, 0, 0, 0.50);border-color:rgba(0, 0, 0, 0);background:linear-gradient(to bottom,  rgba(0,0,0,0) 0%,rgba(0,0,0,0.45) 100%);">
								</div>

								<!-- LAYER NR. 2 -->
								<div class="tp-caption BigBold-Title   tp-resizeme rs-parallaxlevel-0"
									 id="slide-309-layer-1"
									 data-x="['left','left','left','left']" data-hoffset="['50','50','30','17']"
									 data-y="['bottom','bottom','bottom','bottom']" data-voffset="['110','110','180','160']"
												data-fontsize="['110','100','70','60']"
									data-lineheight="['110','100','70','60']"
									data-width="['none','none','none','400']"
									data-height="none"
									data-whitespace="['nowrap','nowrap','nowrap','normal']"
									data-transform_idle="o:1;"

									 data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
									 data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
									 data-mask_in="x:0px;y:[100%];"
									 data-mask_out="x:inherit;y:inherit;"
									data-start="500"
									data-splitin="none"
									data-splitout="none"
									data-basealign="slide"
									data-responsive_offset="off"


									style="z-index: 6; white-space: nowrap;">Unify Agency
								</div>

								<!-- LAYER NR. 3 -->
								<div class="tp-caption BigBold-SubTitle   rs-parallaxlevel-0"
									 id="slide-309-layer-4"
									 data-x="['left','left','left','left']" data-hoffset="['55','55','33','20']"
									 data-y="['bottom','bottom','bottom','bottom']" data-voffset="['40','1','74','58']"
												data-fontsize="['15','15','15','13']"
									data-lineheight="['24','24','24','20']"
									data-width="['410','410','410','280']"
									data-height="['60','100','100','100']"
									data-whitespace="normal"
									data-transform_idle="o:1;"

									 data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
									 data-transform_out="y:50px;opacity:0;s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
									data-start="650"
									data-splitin="none"
									data-splitout="none"
									data-basealign="slide"
									data-responsive_offset="off"
									data-responsive="off"

									style="z-index: 7; min-width: 410px; max-width: 410px; max-width: 60px; max-width: 60px; white-space: normal;">A Premium Revolution Slider Template for your
						Website Highlights &amp; Multi-Media Content.
								</div>

								<!-- LAYER NR. 4 -->
								<div class="tp-caption BigBold-Button rev-btn  rs-parallaxlevel-0"
									 id="slide-309-layer-7"
									 data-x="['left','left','left','left']" data-hoffset="['480','480','30','20']"
									 data-y="['bottom','bottom','bottom','bottom']" data-voffset="['50','50','30','20']"
												data-width="none"
									data-height="none"
									data-whitespace="nowrap"
									data-transform_idle="o:1;"
										data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
										data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);cursor:pointer;"

									 data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
									 data-transform_out="y:50px;opacity:0;s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
									data-start="650"
									data-splitin="none"
									data-splitout="none"
									data-actions='[{"event":"click","action":"scrollbelow","offset":"px"}]'
									data-basealign="slide"
									data-responsive_offset="off"
									data-responsive="off"

									style="z-index: 8; white-space: nowrap;border-color:rgba(255, 255, 255, 0.25);outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;">READ MORE
								</div>

								<!-- LAYER NR. 5 -->
								<div class="tp-caption BigBold-Button rev-btn  rs-parallaxlevel-0"
									 id="slide-309-layer-12"
									 data-x="['left','left','left','left']" data-hoffset="['676','676','226','216']"
									 data-y="['bottom','bottom','bottom','bottom']" data-voffset="['50','50','30','20']"
												data-width="none"
									data-height="none"
									data-whitespace="nowrap"
									data-transform_idle="o:1;"
										data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
										data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);cursor:pointer;"

									 data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
									 data-transform_out="y:50px;opacity:0;s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
									data-start="650"
									data-splitin="none"
									data-splitout="none"
									data-actions='[{"event":"click","action":"jumptoslide","slide":"next","delay":""}]'
									data-basealign="slide"
									data-responsive_offset="off"
									data-responsive="off"

									style="z-index: 9; white-space: nowrap;padding:15px 20px 15px 20px;border-color:rgba(255, 255, 255, 0.25);outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;"><i class="fa fa-chevron-right"></i>
								</div>
							</li>
							<!-- SLIDE  -->
							<li data-index="rs-310" data-transition="slideoverhorizontal" data-slotamount="default"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="1000"  data-thumb="assets/img-temp/promo/typing_cover-100x50.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="HTML5 Video" data-description="">
								<!-- MAIN IMAGE -->
								<img src="assets/img-temp/promo/typing_cover.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
								<!-- LAYERS -->

								<!-- BACKGROUND VIDEO LAYER -->
								<div class="rs-background-video-layer"
									data-forcerewind="on"
									data-volume="mute"
									data-videowidth="100%"
									data-videoheight="100%"
									data-videomp4="../assets/plugins/revolution-slider/assets/videos/typing.mp4"
									data-videopreload="preload"
									data-videostartat="00:04"
									data-videoloop="loop"
									data-forceCover="1"
									data-aspectratio="16:9"
									data-autoplay="true"
									data-autoplayonlyfirsttime="false"
									data-nextslideatend="true"
								></div>
								<!-- LAYER NR. 1 -->
								<div class="tp-caption tp-shape tp-shapewrapper   rs-parallaxlevel-0"
									 id="slide-310-layer-11"
									 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
									 data-y="['bottom','bottom','bottom','bottom']" data-voffset="['0','0','0','0']"
												data-width="full"
									data-height="['400','400','400','550']"
									data-whitespace="nowrap"
									data-transform_idle="o:1;"
										data-style_hover="cursor:default;"

									 data-transform_in="opacity:0;s:1500;e:Power2.easeInOut;"
									 data-transform_out="opacity:0;s:1000;s:1000;"
									data-start="0"
									data-basealign="slide"
									data-responsive_offset="off"
									data-responsive="off"

									style="z-index: 5;background-color:rgba(0, 0, 0, 0.50);border-color:rgba(0, 0, 0, 0);background:linear-gradient(to bottom,  rgba(0,0,0,0) 0%,rgba(0,0,0,0.45) 100%);">
								</div>

								<!-- LAYER NR. 2 -->
								<div class="tp-caption BigBold-Title   tp-resizeme rs-parallaxlevel-0"
									 id="slide-310-layer-1"
									 data-x="['left','left','left','left']" data-hoffset="['50','50','30','17']"
									 data-y="['bottom','bottom','bottom','bottom']" data-voffset="['110','110','180','160']"
												data-fontsize="['110','100','70','60']"
									data-lineheight="['100','90','60','60']"
									data-width="['none','none','none','400']"
									data-height="none"
									data-whitespace="['nowrap','nowrap','nowrap','normal']"
									data-transform_idle="o:1;"

									 data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
									 data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
									 data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
									 data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
									data-start="500"
									data-splitin="none"
									data-splitout="none"
									data-basealign="slide"
									data-responsive_offset="off"


									style="z-index: 6; white-space: nowrap;">SO SMOOTH!
								</div>

								<!-- LAYER NR. 3 -->
								<div class="tp-caption BigBold-SubTitle   rs-parallaxlevel-0"
									 id="slide-310-layer-4"
									 data-x="['left','left','left','left']" data-hoffset="['55','55','33','20']"
									 data-y="['bottom','bottom','bottom','bottom']" data-voffset="['40','1','74','58']"
												data-fontsize="['15','15','15','13']"
									data-lineheight="['24','24','24','20']"
									data-width="['410','410','410','280']"
									data-height="['60','100','100','100']"
									data-whitespace="normal"
									data-transform_idle="o:1;"

									 data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
									 data-transform_out="y:50px;opacity:0;s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
									data-start="650"
									data-splitin="none"
									data-splitout="none"
									data-basealign="slide"
									data-responsive_offset="off"
									data-responsive="off"

									style="z-index: 7; min-width: 410px; max-width: 410px; max-width: 60px; max-width: 60px; white-space: normal;">You can Download this Premium Slider for Free if you Activate your Copy of Slider Revolution.
								</div>

								<!-- LAYER NR. 4 -->
								<div class="tp-caption BigBold-Button rev-btn  rs-parallaxlevel-0"
									 id="slide-310-layer-7"
									 data-x="['left','left','left','left']" data-hoffset="['480','480','30','20']"
									 data-y="['bottom','bottom','bottom','bottom']" data-voffset="['50','50','30','20']"
												data-width="none"
									data-height="none"
									data-whitespace="nowrap"
									data-transform_idle="o:1;"
										data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
										data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);cursor:pointer;"

									 data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
									 data-transform_out="y:50px;opacity:0;s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
									data-start="650"
									data-splitin="none"
									data-splitout="none"
									data-actions='[{"event":"click","action":"scrollbelow","offset":"px"}]'
									data-basealign="slide"
									data-responsive_offset="off"
									data-responsive="off"

									style="z-index: 8; white-space: nowrap;border-color:rgba(255, 255, 255, 0.25);outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;">READ MORE
								</div>

								<!-- LAYER NR. 5 -->
								<div class="tp-caption BigBold-Button rev-btn  rs-parallaxlevel-0"
									 id="slide-310-layer-12"
									 data-x="['left','left','left','left']" data-hoffset="['676','676','226','216']"
									 data-y="['bottom','bottom','bottom','bottom']" data-voffset="['50','50','30','20']"
												data-width="none"
									data-height="none"
									data-whitespace="nowrap"
									data-transform_idle="o:1;"
										data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
										data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);cursor:pointer;"

									 data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
									 data-transform_out="y:50px;opacity:0;s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
									data-start="650"
									data-splitin="none"
									data-splitout="none"
									data-actions='[{"event":"click","action":"jumptoslide","slide":"next","delay":""}]'
									data-basealign="slide"
									data-responsive_offset="off"
									data-responsive="off"

									style="z-index: 9; white-space: nowrap;padding:15px 20px 15px 20px;border-color:rgba(255, 255, 255, 0.25);outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;"><i class="fa fa-chevron-right"></i>
								</div>
							</li>
							<!-- SLIDE  -->
							<li data-index="rs-311" data-transition="slideoverhorizontal" data-slotamount="default"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="1000"  data-thumb="assets/img-temp/promo/bigbold_1-100x50.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Scroll Down" data-description="">
								<!-- MAIN IMAGE -->
								<img src="assets/img-temp/promo/bigbold_1.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
								<!-- LAYERS -->

								<!-- LAYER NR. 1 -->
								<div class="tp-caption tp-shape tp-shapewrapper   rs-parallaxlevel-0"
									 id="slide-311-layer-11"
									 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
									 data-y="['bottom','bottom','bottom','bottom']" data-voffset="['0','0','0','0']"
												data-width="full"
									data-height="['400','400','400','550']"
									data-whitespace="nowrap"
									data-transform_idle="o:1;"
										data-style_hover="cursor:default;"

									 data-transform_in="opacity:0;s:1500;e:Power2.easeInOut;"
									 data-transform_out="opacity:0;s:1000;s:1000;"
									data-start="0"
									data-basealign="slide"
									data-responsive_offset="off"
									data-responsive="off"

									style="z-index: 5;background-color:rgba(0, 0, 0, 0.50);border-color:rgba(0, 0, 0, 0);background:linear-gradient(to bottom,  rgba(0,0,0,0) 0%,rgba(0,0,0,0.45) 100%);">
								</div>

								<!-- LAYER NR. 2 -->
								<div class="tp-caption BigBold-Title   tp-resizeme rs-parallaxlevel-0"
									 id="slide-311-layer-1"
									 data-x="['left','left','left','left']" data-hoffset="['50','50','30','17']"
									 data-y="['bottom','bottom','bottom','bottom']" data-voffset="['110','110','180','160']"
												data-fontsize="['110','100','70','60']"
									data-lineheight="['100','90','60','60']"
									data-width="['none','none','none','400']"
									data-height="none"
									data-whitespace="['nowrap','nowrap','nowrap','normal']"
									data-transform_idle="o:1;"

									 data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
									 data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
									 data-mask_in="x:0px;y:[100%];"
									 data-mask_out="x:inherit;y:inherit;"
									data-start="500"
									data-splitin="none"
									data-splitout="none"
									data-basealign="slide"
									data-responsive_offset="off"


									style="z-index: 6; white-space: nowrap;">SCROLL DOWN
								</div>

								<!-- LAYER NR. 3 -->
								<div class="tp-caption BigBold-SubTitle   rs-parallaxlevel-0"
									 id="slide-311-layer-4"
									 data-x="['left','left','left','left']" data-hoffset="['55','55','33','20']"
									 data-y="['bottom','bottom','bottom','bottom']" data-voffset="['40','1','74','58']"
												data-fontsize="['15','15','15','13']"
									data-lineheight="['24','24','24','20']"
									data-width="['410','410','410','280']"
									data-height="['60','100','100','100']"
									data-whitespace="normal"
									data-transform_idle="o:1;"

									 data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
									 data-transform_out="y:50px;opacity:0;s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
									data-start="650"
									data-splitin="none"
									data-splitout="none"
									data-basealign="slide"
									data-responsive_offset="off"
									data-responsive="off"

									style="z-index: 7; min-width: 410px; max-width: 410px; max-width: 60px; max-width: 60px; white-space: normal;">This Premium Revolution Slider Template Features an Exclusive Scroll Effect. Get it Now!
								</div>

								<!-- LAYER NR. 4 -->
								<div class="tp-caption BigBold-Button rev-btn  rs-parallaxlevel-0"
									 id="slide-311-layer-7"
									 data-x="['left','left','left','left']" data-hoffset="['480','480','30','20']"
									 data-y="['bottom','bottom','bottom','bottom']" data-voffset="['50','50','30','20']"
												data-width="none"
									data-height="none"
									data-whitespace="nowrap"
									data-transform_idle="o:1;"
										data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
										data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);cursor:pointer;"

									 data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
									 data-transform_out="y:50px;opacity:0;s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
									data-start="650"
									data-splitin="none"
									data-splitout="none"
									data-actions='[{"event":"click","action":"scrollbelow","offset":"px"}]'
									data-basealign="slide"
									data-responsive_offset="off"
									data-responsive="off"

									style="z-index: 8; white-space: nowrap;border-color:rgba(255, 255, 255, 0.25);outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;">READ MORE
								</div>

								<!-- LAYER NR. 5 -->
								<div class="tp-caption BigBold-Button rev-btn  rs-parallaxlevel-0"
									 id="slide-311-layer-12"
									 data-x="['left','left','left','left']" data-hoffset="['676','676','226','216']"
									 data-y="['bottom','bottom','bottom','bottom']" data-voffset="['50','50','30','20']"
												data-width="none"
									data-height="none"
									data-whitespace="nowrap"
									data-transform_idle="o:1;"
										data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
										data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);cursor:pointer;"

									 data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
									 data-transform_out="y:50px;opacity:0;s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
									data-start="650"
									data-splitin="none"
									data-splitout="none"
									data-actions='[{"event":"click","action":"jumptoslide","slide":"next","delay":""}]'
									data-basealign="slide"
									data-responsive_offset="off"
									data-responsive="off"

									style="z-index: 9; white-space: nowrap;padding:15px 20px 15px 20px;border-color:rgba(255, 255, 255, 0.25);outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;"><i class="fa fa-chevron-right"></i>
								</div>
							</li>
						</ul>
						<div class="tp-static-layers"></div>
						<div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
					</div>
				</div><!-- END REVOLUTION SLIDER -->
	</div>
	<!-- End Promo Block -->

	<!-- About Us Block -->
	<div class="chess-about-us equal-height-columns clearfix" id="About">
		<div class="chess-about-us-item chess-about-us-item--1 equal-height-column">
			<div class="chess-about-us-inner chess-about-us-inner--left">
				<h3>We love our customers</h3>
				<p>Nulla cursus orci sed ipsum scelerisque volutpat. Integer quis dapibus leo, maximus ultrices dui. Mauris facilisis, ex sed scelerisque bibendum, tellus leo pharetra augue, sed iaculis felis neque quis magna.</p>
			</div>
		</div>
		<div class="chess-about-us-item chess-about-us-item--2 chess-about-us-item--dark equal-height-column">
			<div class="chess-about-us-inner chess-about-us-inner--right">
				<h3>We are creative</h3>
				<p>Nunc sed justo semper, gravida orci at, malesuada ipsum. Morbi at faucibus enim, ac pharetra purus. Phasellus id tellus eu nisi porta maximus. Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
			</div>
		</div>
		<div class="chess-about-us-item chess-about-us-item--3 chess-about-us-item--dark equal-height-column">
			<div class="chess-about-us-inner chess-about-us-inner--left">
				<h3>We are pragmatic</h3>
				<p>Aliquam dignissim, leo sit amet pulvinar dapibus, neque sapien bibendum massa, a efficitur massa mauris a augue. Suspendisse faucibus facilisis porttitor. Suspendisse tristique arcu vel</p>
			</div>
		</div>
		<div class="chess-about-us-item chess-about-us-item--4 equal-height-column">
			<div class="chess-about-us-inner chess-about-us-inner--right">
				<h3>We are professional</h3>
				<p>Mauris aliquet, magna nec gravida interdum, magna nibh fringilla nulla, eget egestas sapien orci eget tellus. Pellentesque vulputate posuere libero a varius. Duis feugiat nisl id arcu posuere dapibus eu sed augue.</p>
			</div>
		</div>
		<img src="assets/img-temp/team2.jpg" alt="">
	</div>
	<!-- End About Us Block -->

	<!-- Why We Block -->
	<div class="why-we equal-height-columns g-heading-v7 g-mb-80 clearfix" id="WhyWe">
		<div class="why-we-item why-we-item--light equal-height-column">
			<div class="why-we-item-inner">
				<h2 class="h2"><em class="block-name">Why we</em> We as magicians</h2>
				<p>Donec ut diam risus. Nunc cursus turpis ac erat mollis maximus. Donec erat urna, tincidunt at leo non, blandit finibus ante. Nunc venenatis risus in finibus dapibus. Ut ac massa sodales, mattis enim id, efficitur tortor. Nullam faucibus iaculis laoreet. Phasellus ac ipsum odio.</p>
				<p>Nulla cursus orci sed ipsum scelerisque volutpat. Integer quis dapibus leo, maximus ultrices dui. Mauris facilisis, ex sed scelerisque bibendum, tellus leo pharetra augue.</p>
				<p>Mauris aliquet, magna nec gravida interdum, magna nibh fringilla nulla, eget egestas sapien orci eget tellus. Pellentesque vulputate posuere libero a varius. Duis feugiat.</p>
				<p><button class="btn-u btn-u-lg btn-u-red btn-u-upper" type="submit">Get In Touch</button></p>
			</div>
		</div>

		<div class="why-we-item why-we-item--dark equal-height-column">
			<div class="why-we-item-inner">
				<div class="g-display-table wow fadeInRight" data-wow-offset="20" data-wow-duration="1.75s">
					<div class="g-display-td g-text-middle hidden-xs">
						<i class="icon-custom icon-2lg rounded-x icon-color-u icon-border-v2 icon-line icon-magnet"></i>
					</div>
					<div class="g-display-td g-text-top">
						<h4>Branding and identity</h4>
						<p>Sed in laoreet purus. Nunc sagittis suscipit ultrices. Proin suscipit facilisis ultrices. Phasellus arcu risus, semper quis elementum eget.</p>
					</div>
				</div>
				<div class="g-display-table wow fadeInRight" data-wow-offset="20" data-wow-duration="1.75s">
					<div class="g-display-td g-text-middle hidden-xs">
						<i class="icon-custom icon-2lg rounded-x icon-color-u icon-border-v2 icon-line icon-magic-wand"></i>
					</div>
					<div class="g-display-td g-text-top">
						<h4>UI/UX and graphic design</h4>
						<p>Mauris aliquet, magna nec gravida interdum, magna nibh fringilla nulla, eget egestas sapien orci eget tellusa varius.</p>
					</div>
				</div>
				<div class="g-display-table wow fadeInRight" data-wow-offset="20" data-wow-duration="1.75s">
					<div class="g-display-td g-text-middle hidden-xs">
						<i class="icon-custom icon-2lg rounded-x icon-color-u icon-border-v2 icon-line icon-calculator"></i>
					</div>
					<div class="g-display-td g-text-top">
						<h4>Web and software development</h4>
						<p>Aliquam dignissim, leo sit amet pulvinar dapibus, neque sapien bibendum massa, a efficitur massa mauris a augue. Suspendisse faucibus.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Why We Block -->

	<!-- What We Do Block -->
	<div class="container text-center g-heading-v7 g-mb-65" id="Services">
		<h2 class="h2"><em class="block-name">Services</em> What we do</h2>
		<div class="row g-mb-70">
			<div class="col-sm-8 col-sm-offset-2">
				Sed feugiat porttitor nunc, non dignissim ipsum vestibulum in. Donec in blandit dolor. Vivamus a fringilla lorem, vel faucibus ante. Nunc ullamcorper, justo a iaculis elementum, enim orci viverra eros, fringilla porttitor lorem eros vel odio.
			</div>
		</div>
		<div class="row">
			<div class="col-md-3 col-sm-6 g-mb-30 wow fadeInUp" data-wow-offset="20" data-wow-duration="1.5s">
				<i class="icon-custom icon-3lg rounded-x icon-color-u icon-border-v3 icon-line icon-magic-wand g-mb-25"><span></span></i>
				<h4 class="g-mb-15">Web Design</h4>
				Quisque rhoncus euismod pulvinar. Nulla non arcu at lectus. Vestibulum fringilla velit rhoncus euismod rhoncus turpis
			</div>
			<div class="col-md-3 col-sm-6 g-mb-30 wow fadeInUp" data-wow-offset="20" data-wow-duration="1.75s">
				<i class="icon-custom icon-3lg rounded-x icon-color-u icon-border-v3 icon-line icon-diamond g-mb-25"><span></span></i>
				<h4 class="g-mb-15">Graphic Design</h4>
				Quisque rhoncus euismod pulvinar. Nulla non arcu at lectus. Vestibulum fringilla velit rhoncus euismod rhoncus turpis
			</div>
			<div class="col-md-3 col-sm-6 g-mb-30 wow fadeInUp" data-wow-offset="20" data-wow-duration="2s">
				<i class="icon-custom icon-3lg rounded-x icon-color-u icon-border-v3 icon-line icon-calculator g-mb-25"><span></span></i>
				<h4 class="g-mb-15">UI/UX</h4>
				Quisque rhoncus euismod pulvinar. Nulla non arcu at lectus. Vestibulum fringilla velit rhoncus euismod rhoncus turpis
			</div>
			<div class="col-md-3 col-sm-6 g-mb-30 wow fadeInUp" data-wow-offset="20" data-wow-duration="2.25s">
				<i class="icon-custom icon-3lg rounded-x icon-color-u icon-border-v3 icon-line icon-badge g-mb-25"><span></span></i>
				<h4 class="g-mb-15">Branding</h4>
				Quisque rhoncus euismod pulvinar. Nulla non arcu at lectus. Vestibulum fringilla velit rhoncus euismod rhoncus turpis
			</div>
		</div>
	</div>
	<!-- End What We Do Block -->

	<!-- How We Work -->
	<div class="v-tab-content text-center g-heading-v7 g-mb-80" id="WorkProcess">
		<div class="container">
			<h2 class="h2"><em class="block-name">Work Process</em> How We Work</h2>
			<div class="row g-mb-70">
				<div class="col-sm-8 col-sm-offset-2">
					Praesent eu nibh malesuada, condimentum nibh hendrerit, viverra sem. Nulla porttitor eget ante ullamcorper convallis. Integer dictum lorem arcu, eget tempus nulla accumsan id.
				</div>
			</div>

			<div class="row text-left">
				<div class="col-sm-3">
				  <!-- Nav tabs -->
				  <ul class="nav nav-tabs nav-stacked g-mb-30" role="tablist">
				    <li role="presentation" class="active"><a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab">User Interfase</a></li>
				    <li role="presentation"><a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab">Identity And Branding</a></li>
				    <li role="presentation"><a href="#tab3" aria-controls="tab3" role="tab" data-toggle="tab">Web Design</a></li>
				  </ul>
			  </div>

				<div class="col-sm-9">
				  <!-- Tab panes -->
				  <div class="tab-content">
				    <div role="tabpanel" class="tab-pane fade in active" id="tab1">
				    	<p class="g-mb-30"><img src="assets/img-temp/process/2.jpg" alt="" class="img-responsive"></p>
				    	<div class="row">
					    	<div class="col-md-4 col-sm-6 g-mb-30">
						    	<div class="g-display-table g-mb-15">
						    		<div class="g-display-td g-text-middle">
						    			<i class="num-icon-v2">1</i>
						    		</div>
						    		<div class="g-display-td g-text-middle">
						    			<h4>Discuss With Client</h4>
						    		</div>
					    		</div>

					    		<p>Quisque rhoncus euismod pulvinar. Nulla non arcu at lectus. Vestibulum fringilla velit rhoncus euismod rhoncus turpis. Donec vel pharetra tellus. Sed non est lacus.</p>
					    	</div>
					    	<div class="col-md-4 col-sm-6 g-mb-30">
						    	<div class="g-display-table g-mb-15">
						    		<div class="g-display-td g-text-middle">
						    			<i class="num-icon-v2">2</i>
						    		</div>
						    		<div class="g-display-td g-text-middle">
						    			<h4>Wireframe</h4>
						    		</div>
					    		</div>

					    		<p>Cras sit amet varius velit. Maecenas porta condimentum tortor at sagittis. Cum sociis natoque penatibus et magnis dis. Donec vel pharetra tellus. Sed non est lacus.</p>
					    	</div>
					    	<div class="col-md-4 col-sm-6 g-mb-30">
						    	<div class="g-display-table g-mb-15">
						    		<div class="g-display-td g-text-middle">
						    			<i class="num-icon-v2">3</i>
						    		</div>
						    		<div class="g-display-td g-text-middle">
						    			<h4>Creative Concept</h4>
						    		</div>
					    		</div>

					    		<p>Nam in nisl volutpat ex bibendum sollicitudin. Praesent ac magna convallis, sagittis erat in, dapibus mauris. Donec vel pharetra tellus. Sed non est lacus.</p>
					    	</div>
				    	</div>
				    </div>

				    <div role="tabpanel" class="tab-pane fade" id="tab2">
				    	<p class="g-mb-30"><img src="assets/img-temp/process/3.jpg" alt="" class="img-responsive"></p>
				    	<div class="row">
					    	<div class="col-sm-6 g-mb-30">
						    	<div class="g-display-table g-mb-15">
						    		<div class="g-display-td g-text-middle">
						    			<i class="num-icon-v2">1</i>
						    		</div>
						    		<div class="g-display-td g-text-middle">
						    			<h4>Discuss With Client</h4>
						    		</div>
					    		</div>

					    		<p>Quisque rhoncus euismod pulvinar. Nulla non arcu at lectus. Vestibulum fringilla velit rhoncus euismod rhoncus turpis. Donec vel pharetra tellus. Sed non est lacus.</p>
					    	</div>
					    	<div class="col-sm-6 g-mb-30">
						    	<div class="g-display-table g-mb-15">
						    		<div class="g-display-td g-text-middle">
						    			<i class="num-icon-v2">2</i>
						    		</div>
						    		<div class="g-display-td g-text-middle">
						    			<h4>Wireframe</h4>
						    		</div>
					    		</div>

					    		<p>Cras sit amet varius velit. Maecenas porta condimentum tortor at sagittis. Cum sociis natoque penatibus et magnis dis. Donec vel pharetra tellus. Sed non est lacus.</p>
					    	</div>
				    	</div>
				    </div>
				    <div role="tabpanel" class="tab-pane fade" id="tab3">
				    	<p class="g-mb-30"><img src="assets/img-temp/process/1.jpg" alt="" class="img-responsive"></p>
				    	<p>Sed feugiat porttitor nunc, non dignissim ipsum vestibulum in. Donec in blandit dolor. Vivamus a fringilla lorem, vel faucibus ante. Nunc ullamcorper, justo a iaculis elementum, enim orci viverra eros, fringilla porttitor lorem eros vel odio.</p>
				    </div>
				  </div>
			  </div>
		  </div>
		</div>
	</div>
	<!-- End How We Work -->

	<!-- Our Best Side -->
	<div class="container text-center g-heading-v7 g-mb-80" id="Skills">
		<h2 class="h2"><em class="block-name">Skills</em> Our Best Side</h2>
		<div class="row g-mb-70">
			<div class="col-sm-8 col-sm-offset-2">
				Integer accumsan maximus leo, et consectetur metus vestibulum in. Vestibulum viverra justo odio. Donec eu nulla leo. Vivamus risus lacus, viverra eu maximus non, tincidunt sodales massa.
			</div>
		</div>

    <!-- Pie Charts v3 -->
    <div class="row pie-progress-charts g-mb-50">
      <div class="inner-pchart col-md-3 col-sm-6 g-mb-30--sm">
        <div class="circle" id="circle-1"></div>
        <h4 class="g-mb-15">Happty Clients</h4>
        <p>Integer accumsan maximus leo, et consectetur metus vestibulum in. Vestibulum viverra justo odio maximus efficitur</p>
      </div>
      <div class="inner-pchart col-md-3 col-sm-6 g-mb-30--sm">
        <div class="circle" id="circle-2"></div>
        <h4 class="g-mb-15">Completed Projects</h4>
        <p>Quisque vestibulum sem eget nibh commodo, non elementum nibh pulvinar. Duis mattis venenatis tortor iaculis ultricies</p>
      </div>
      <div class="inner-pchart col-md-3 col-sm-6 g-mb-30--sm">
        <div class="circle" id="circle-3"></div>
        <h4 class="g-mb-15">Our Team</h4>
        <p>Nullam in diam arcu. Etiam nisl justo, tempor scelerisque sagittis vel, bibendum vestibulum metus. Donec eget nunc neque</p>
      </div>
      <div class="inner-pchart col-md-3 col-sm-6">
        <div class="circle" id="circle-4"></div>
        <h4 class="g-mb-15">Countries</h4>
        <p>Rhoncus euismod pulvinar. Nulla non arcu at lectus. Vestibulum fringilla velit rhoncus euismod rhoncus turpis</p>
      </div>
    </div>
    <!-- End Pie Charts v3 -->

    <div class="row text-left">
	    <div class="col-sm-6 g-mb-30--sm">
        <!-- Progress Bar -->
        <div class="progress-box">
          <h5>Wed Development</h5>
          <div class="progress g-mb-45">
            <div class="progress-bar" role="progressbar" data-width="85"></div>
          </div>

          <h5>CSS3 And HTML5</h5>
          <div class="progress g-mb-45">
            <div class="progress-bar" role="progressbar" data-width="70"></div>
          </div>

          <h5>Social Media</h5>
          <div class="progress g-mb-45">
            <div class="progress-bar" role="progressbar" data-width="90"></div>
          </div>
        </div>
        <!-- End Progress Bar -->
	    </div>
	    <div class="col-sm-6">
        <!-- Progress Bar -->
        <div class="progress-box">
          <h5>App Development</h5>
          <div class="progress g-mb-45">
            <div class="progress-bar" role="progressbar" data-width="75"></div>
          </div>

          <h5>Branding</h5>
          <div class="progress g-mb-45">
            <div class="progress-bar" role="progressbar" data-width="95"></div>
          </div>

          <h5>Wordpress</h5>
          <div class="progress g-mb-45">
            <div class="progress-bar" role="progressbar" data-width="70"></div>
          </div>
        </div>
        <!-- End Progress Bar -->
	    </div>
    </div>
	</div>
	<!-- End Our Best Side -->

	<!-- Our Team -->
	<div class="our-team-v4 text-center g-heading-v7" id="Team">
		<div class="our-team-v4-start">
			<div class="container">
				<h2 class="h2"><em class="block-name">Our Team</em> Work With Professionals</h2>
				<div class="row g-mb-30">
					<div class="col-sm-8 col-sm-offset-2">
						Praesent eu nibh malesuada, condimentum nibh hendrerit, viverra sem. Nulla porttitor eget ante ullamcorper convallis. Integer dictum lorem arcu, eget tempus nulla accumsan id.
					</div>
				</div>
			</div>
		</div>

		<div class="container our-team-v4-members">
			<div class="row">
				<!-- Col -->
				<div class="col-md-3 col-sm-6 col-xs-6 col-2xs-12">
					<div class="our-team-v4-member g-mb-50">
						<div class="our-team-v4-member-wrapper g-mb-40">
							<img src="assets/img-temp/team/2.jpg" alt="">
							<div>
								<em>
									changing your mind and changing world
								</em>
								<ul class="g-social-icons-v2">
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								</ul>
							</div>
						</div>
						<em class="our-team-v4__role">Photographer</em>
						<strong class="our-team-v4__name">Ralf Smith</strong>
						<span class="our-team-v4__position">Head Photographer</span>
					</div>
				</div>
				<!-- End Col -->
				<!-- Col -->
				<div class="col-md-3 col-sm-6 col-xs-6 col-2xs-12">
					<div class="our-team-v4-member g-mb-50">
						<div class="our-team-v4-member-wrapper g-mb-40">
							<img src="assets/img-temp/team/5.jpg" alt="">
							<div>
								<em>
									changing your mind and changing world
								</em>
								<ul class="g-social-icons-v2">
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								</ul>
							</div>
						</div>
						<em class="our-team-v4__role">Designer</em>
						<strong class="our-team-v4__name">Monica Gaudy</strong>
						<span class="our-team-v4__position">Art Director</span>
					</div>
				</div>
				<!-- End Col -->
				<!-- Col -->
				<div class="col-md-3 col-sm-6 col-xs-6 col-2xs-12">
					<div class="our-team-v4-member g-mb-50">
						<div class="our-team-v4-member-wrapper g-mb-40">
							<img src="assets/img-temp/team/1.jpg" alt="">
							<div>
								<em>
									changing your mind and changing world
								</em>
								<ul class="g-social-icons-v2">
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								</ul>
							</div>
						</div>
						<em class="our-team-v4__role">Co-Founder</em>
						<strong class="our-team-v4__name">Julia Exon</strong>
						<span class="our-team-v4__position">Creative Director</span>
					</div>
				</div>
				<!-- End Col -->
				<!-- Col -->
				<div class="col-md-3 col-sm-6 col-xs-6 col-2xs-12">
					<div class="our-team-v4-member g-mb-50">
						<div class="our-team-v4-member-wrapper g-mb-40">
							<img src="assets/img-temp/team/4.jpg" alt="">
							<div>
								<em>
									changing your mind and changing world
								</em>
								<ul class="g-social-icons-v2">
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								</ul>
							</div>
						</div>
						<em class="our-team-v4__role">Co-Founder</em>
						<strong class="our-team-v4__name">Jacob Assange</strong>
						<span class="our-team-v4__position">Marketing Director</span>
					</div>
				</div>
				<!-- End Col -->
			</div>
		</div>
	</div>
	<!-- End Our Team -->

  <!-- Join Our Team -->
  <div class="g-section-bg-gray text-center g-pt-60 g-pb-70 g-heading-v7">
  	<div class="container">
  		<h3>Want To Join Our Team?</h3>
			<div class="row g-mb-40">
				<div class="col-sm-8 col-sm-offset-2">
					Sed eget aliquet nisl. Proin laoreet accumsan nisl non vestibulum. Donec molestie, lorem nec sollicitudin elementum, mi justo posuere lectus, vitae ullamcorper orci mi vel massa. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
				</div>
			</div>
			<button type="submit" class="btn-u btn-u-lg btn-u-red btn-u-upper">Send Your Resume</button>
  	</div>
  </div>
  <!-- END Join Our Team -->

	<!-- Testimonials & Clients -->
	<div class="testimonials-clients clearfix" id="Testimonials">
		<div class="tc-testimonials">
			<div class="testimonials-clients-block">
        <div class="testimonials-v6">
          <div class="testimonials-v6-item">
						<div class="g-display-table g-mb-25">
							<div class="g-display-td g-text-middle">
								<img src="assets/img-temp/testimonials/1.jpg" alt="">
							</div>
							<div class="g-display-td g-text-middle">
	          		<strong>Melissa Jordany</strong>
	          		<em>Gray Consultion Corp.</em>
							</div>
						</div>
          	<blockquote>
							Ut augue diam, lacinia fringilla erat eu, vehicula commodo quam. Aliquam eget accumsan ligula. Maecenas sit amet consectetur lectus. Suspendisse commodo et magna non pulvinar. Quisque et ultricies sem, et vulputate dui. Morbi aliquam leo id ipsum tempus mollis.
          	</blockquote>
          </div>
          <div class="testimonials-v6-item">
						<div class="g-display-table g-mb-25">
							<div class="g-display-td g-text-middle">
								<img src="assets/img-temp/testimonials/2.jpg" alt="">
							</div>
							<div class="g-display-td g-text-middle">
	          		<strong>Joe Armstrong</strong>
	          		<em>Blue Yellow Sky Corp.</em>
							</div>
						</div>
          	<blockquote>
							Ut augue diam, lacinia fringilla erat eu, vehicula commodo quam. Aliquam eget accumsan ligula. Maecenas sit amet consectetur lectus. Suspendisse commodo et magna non pulvinar. Quisque et ultricies sem, et vulputate dui. Morbi aliquam leo id ipsum tempus mollis.
          	</blockquote>
          </div>
        </div>
			</div>
		</div>

		<div class="tc-testimonials-clients why-we-item--dark">
			<div class="testimonials-clients-block">
        <ul class="owl-clients-v5">
          <li><a href="#"><img src="assets/img-temp/clients/1.png" alt=""></a></li>
          <li><a href="#"><img src="assets/img-temp/clients/2.png" alt=""></a></li>
          <li><a href="#"><img src="assets/img-temp/clients/3.png" alt=""></a></li>
          <li><a href="#"><img src="assets/img-temp/clients/4.png" alt=""></a></li>
          <li><a href="#"><img src="assets/img-temp/clients/5.png" alt=""></a></li>
          <li><a href="#"><img src="assets/img-temp/clients/6.png" alt=""></a></li>
        </ul>
			</div>
		</div>
	</div>
	<!-- End Testimonials & Clients -->

	<!-- Contacts -->
  <div class="contacts-v4 text-center g-heading-v7 equal-height-columns" id="Contact">
  	<div class="container g-pt-80 g-pb-30">
  		<h2 class="h2"><em class="block-name">Contact Us</em> Get In Touch</h2>
  	</div>
		<div class="row">
  		<div class="col-sm-3 contacts-v4-info contacts-v4-info--dark equal-height-column">
  			<i class="icon-line icon-map icon-v4 g-mb-30"></i>
  			<div>
					<em>Address</em>
					<strong>In sed lectus tincidunt</strong>
				</div>
  		</div>
  		<div class="col-sm-3 contacts-v4-info equal-height-column">
  			<i class="icon-line icon-screen-smartphone icon-v4 g-mb-30"></i>
  			<div>
					<em>Phone Number</em>
					<strong>+48 555 2566 112</strong>
				</div>
  		</div>
  		<div class="col-sm-3 contacts-v4-info contacts-v4-info--dark equal-height-column">
  			<i class="icon-line icon-envelope-letter icon-v4 g-mb-30"></i>
  			<div>
					<em>Email</em>
					<strong><a href="mailto:info@htmlstream.com">info@htmlstream.com</a></strong>
				</div>
  		</div>
  		<div class="col-sm-3 contacts-v4-info equal-height-column">
  			<i class="icon-line icon-call-in icon-v4 g-mb-30"></i>
  			<div>
					<em>Call Free</em>
					<strong>+48 555 1258 987</strong>
				</div>
  		</div>
  	</div>
  </div>
	<!-- End Contacts -->

  <!-- Form -->
  <div class="g-section-bg-gray text-center g-pt-60 g-pb-70 g-heading-v7">
  	<div class="container">
  		<h3>Have A Questions?</h3>
			<div class="row g-mb-40">
				<div class="col-sm-8 col-sm-offset-2">
					Sed eget aliquet nisl. Proin laoreet accumsan nisl non vestibulum.
				</div>
			</div>
  		<form action="#" class="sky-form" method="post" id="sky-form3">
  			<fieldset>
		  		<div class="row">
		  			<div class="col-sm-6 g-mb-25">
	            <label class="input">
	              	<input type="text" placeholder="Your name" name="name" id="name">
	            </label>
		  			</div>
		  			<div class="col-sm-6 g-mb-25">
	            <label class="input">
	              <input type="text" placeholder="Your phone" name="phone" id="phone">
	            </label>
		  			</div>
		  		</div>
		  		<div class="row">
		  			<div class="col-sm-6 g-mb-25">
	            <label class="select">
	              <select>
	                <option value="0">Department</option>
	                <option value="1">Department 1</option>
	                <option value="2">Department 2</option>
	                <option value="3">Department 3</option>
	                <option value="4">Department 4</option>
	              </select>
	              <i></i>
	            </label>
		  			</div>
		  			<div class="col-sm-6 g-mb-25">
	            <label class="input">
	              <input type="text" placeholder="Subject" name="subject" id="subject">
	            </label>
		  			</div>
		  		</div>
		  		<div class="row g-mb-35">
		  			<div class="col-sm-12">
	            <label class="textarea textarea-expandable">
	              <textarea rows="3" placeholder="Message" name="message" id="message"></textarea>
	            </label>
		  			</div>
		  		</div>
		  		<button type="submit" class="btn-u btn-u-lg btn-u-red btn-u-upper">Send Message</button>
	  		</fieldset>

	  		<!-- Success Message -->
        <div class="message">
            <i class="rounded-x fa fa-check"></i>
            <p>Your message was successfully sent!</p>
        </div>
  		</form>
  	</div>
  </div>
  <!-- END Form -->

  <!-- GMaps -->
  <div class="GMap-stand-alone" id="map"></div>
  <!-- END GMaps -->

	<!-- Footer 9 -->
	<div class="footer-v9 text-center">
	<div class="container">
		<div class="page-scroll">
			<a href="#body" class="footer-logo">
				<img src="assets/img/logo-light3.png" alt="Logo" class="g-mb-30">
			</a>
		</div>
		<div class="g-mb-35">Integer accumsan maximus leo, et consectetur metus vestibulum in. Vestibulum viverra justo odio maximus efficitur</div>
		<ul class="g-social-icons-v2 g-mb-30">
			<li><a href="#"><i class="fa fa-twitter"></i></a></li>
			<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
			<li><a href="#"><i class="fa fa-facebook"></i></a></li>
			<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
		</ul>
		<ul class="footer-v9-menu list-inline">
			<li class="page-scroll"><a href="#About">About</a></li>
			<li class="page-scroll"><a href="#WhyWe">Why We</a></li>
			<li class="page-scroll"><a href="#Services">Services</a></li>
			<li class="page-scroll"><a href="#WorkProcess">Work Process</a></li>
			<li class="page-scroll"><a href="#Skills">Skills</a></li>
			<li class="page-scroll"><a href="#Team">Team</a></li>
			<li class="page-scroll"><a href="#Testimonials">Testimonials</a></li>
			<li class="page-scroll"><a href="#Contact">Contact</a></li>
		</ul>
	</div>
	</div>
	<!-- End Footer 9 -->

</main>

<!-- JS Global Compulsory -->
<script src="assets/plugins/jquery/jquery.min.js"></script>
<script src="assets/plugins/jquery/jquery-migrate.min.js"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

<!-- JS Implementing Plugins -->
<script src="assets/plugins/smoothScroll.js"></script>
<script src="assets/plugins/jquery.easing.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?signed_in=true&amp;callback=initMap" async defer></script><script src="assets/js/plugins/gmaps-ini.js"></script>
<script src="assets/plugins/circles-master/circles.min.js"></script>
<script src="assets/plugins/jquery-appear.js"></script>
<script src="assets/plugins/wow/dist/wow.min.js"></script>
<script src="assets/plugins/owl-carousel2/owl.carousel.min.js"></script>
<script src="assets/plugins/sky-forms-pro/skyforms/js/jquery.form.min.js"></script>
<script src="assets/plugins/sky-forms-pro/skyforms/js/jquery.validate.min.js"></script>

<!-- REVOLUTION JS FILES -->
<script src="assets/plugins/revolution-slider/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="assets/plugins/revolution-slider/revolution/js/jquery.themepunch.revolution.min.js"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS (Load Extensions only on Local File Systems! The following part can be removed on Server for On Demand Loading) -->
<script src="assets/plugins/revolution-slider/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="assets/plugins/revolution-slider/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="assets/plugins/revolution-slider/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="assets/plugins/revolution-slider/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="assets/plugins/revolution-slider/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="assets/plugins/revolution-slider/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="assets/plugins/revolution-slider/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="assets/plugins/revolution-slider/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="assets/plugins/revolution-slider/revolution/js/extensions/revolution.extension.video.min.js"></script>

<!-- JS Page Level -->
<script src="assets/js/one.app.js"></script>
<script src="assets/js/plugins/owl-carousel2.js"></script>
<script src="assets/js/plugins/progress-bar.js"></script>
<script src="assets/js/plugins/circles-master.js"></script>
<script src="assets/js/plugins/promo.js"></script>
<script src="assets/js/forms/contact.js"></script>

<script>
$(function() {
  App.init();
  OwlCarousel.initOwlCarousel();
  ContactForm.initContactForm();
  CirclesMaster.initCirclesMaster();
  ProgressBar.initProgressBarHorizontal();
  new WOW().init();
});
</script>

<!--[if lt IE 10]>
  <script src="../assets/plugins/sky-forms-pro/skyforms/js/jquery.placeholder.min.js"></script>
<![endif]-->
</body>
</html>
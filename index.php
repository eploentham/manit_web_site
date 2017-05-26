<!DOCTYPE html>
<?php
@session_start();
    //require 'config.php';
    require_once("config.php");
    setIPView();
    $menu = file_get_contents('menu.php',TRUE);
    $footer = file_get_contents('footer.php',TRUE);
    if(isset($_SESSION["status_regis"])){
        $txt = "<a href='#' class='dropdown-toggle' > ".$_SESSION["cust_name_t"]." ".$_SESSION["cust_lastname_t"]."</a>";
        $menu = str_replace('<a href="login.php" class="dropdown-toggle" >ลงชื่อเข้าระบบ</a>',$txt,$menu);
    }

  //$switcher = file_get_contents('switcher.php',TRUE);
  //$footer = file_get_contents('footer.php',TRUE);
  //$ourclient = file_get_contents('ourclient.php',TRUE);
?>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <title>Manit Insurance</title>

    <!-- Meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">

    <!-- Web Fonts -->
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin">

    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- CSS Header and Footer -->
    <link rel="stylesheet" href="assets/css/headers/header-v6.css">
    <link rel="stylesheet" href="assets/css/footers/footer-v1.css">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="assets/plugins/animate.css">
    <link rel="stylesheet" href="assets/plugins/line-icons/line-icons.css">
    <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/plugins/sky-forms-pro/skyforms/css/sky-forms.css">
    <link rel="stylesheet" href="assets/plugins/sky-forms-pro/skyforms/custom/custom-sky-forms.css">
    <!--[if lt IE 9]><link rel="stylesheet" href="assets/plugins/sky-forms-pro/skyforms/css/sky-forms-ie8.css"><![endif]-->

    <!-- CSS Theme -->
    <link rel="stylesheet" href="assets/css/theme-colors/default.css" id="style_color">
    <link rel="stylesheet" href="assets/css/theme-skins/dark.css">
    <link href="assets/king-ui/css/king-ui.css" rel="stylesheet">
    <link href="assets/king-ui/css/animate.css" rel="stylesheet">
    <link href="assets/king-ui/css/owl.carousel.css" rel="stylesheet">
    <link href="assets/king-ui/css/owl.theme.css" rel="stylesheet">
    <!-- fonts -->
    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,400italic,700' rel='stylesheet' type='text/css'>

    <link href='assets/king-ui/fonts/FontAwesome.otf' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="assets/plugins/sky-forms-pro/skyforms/css/sky-forms.css">

</head>

<body class="header-fixed">
    <div class="wrapper">
        <!--=== Header v6 ===-->
        <?php echo $menu; ?>
        <!--=== End Header v6 ===-->

        <!-- Interactive Slider v2 -->
        <div class="interactive-slider-v2">
            <div class="container">
                <h1>ข้อเสนอดีๆ สำหรับครอบครัวคุณ</h1>
                <p>สะดวก รวดเร็ว มั่นใจ ไร้กังวล ซื้อประกันกับเรา ประหยัดเงินมากกว่า</p>
            </div>
        </div>
        <!-- End Interactive Slider v2 -->

        <!--=== Content ===-->
        <!--<div class="container content-md">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <ul class="nav nav-pills" role="tablist">
                                <li class="active"><a href="#tab1" role="tab" data-toggle="tab" aria-expanded="true"><h4>ประกันรถยนต์</h4></a></li>
                                <li class=""><a href="#tab2" role="tab" data-toggle="tab" aria-expanded="false"><h4>ประกันรถจักรยานยนต์</h4></a></li>
                            </ul>
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane animated fadeIn active" id="tab1">
                                    <div class="col-md-6">
                                        <h1>ประกันรถยนต์</h1>ค้นพบข้อเสนอประกันรถยนต์โดนๆ ซื้อ พ.ร.บ. ต่อประกันรถยนต์ โดยบริษัทประกันภัยชั้นนำมากกว่า 30 บริษัท
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <button type="button" class="btn btn-success btn-rounded btn-block" id="btnCarInsur"><i class="glyphicon glyphicon-search"></i><span><strong>ค้นหาประกันรถยนต์เลย!</strong></span></button>
                                        <div class="box-content">
                                            <p>หรือ</p>
                                        </div>
                                        <button type="button" class="btn btn-warning btn-pill btn-block" id="btnCarPRB"><i class="glyphicon glyphicon-comment"></i><span>ค้นหาเฉพาะ พ.ร.บ</span></button>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane animated fadeIn" id="tab2" style="background: #005384">
                                    <div class="col-md-6" style="background: #005384">
                                        <h2>ประกันรถจักรยานยนต์</h2>ค้นพบข้อเสนอประกันรถจักรยานยนต์โดนๆ โดยบริษัทประกันภัยชั้นนำ
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12" style="background: #005384">
                                        <button type="button" class="btn btn-success btn-rounded btn-block" id="btnMotoInsur"><i class="glyphicon glyphicon-search"></i><span><strong>ค้นหาประกันรถจักรยานยนต์เลย!</strong></span></button>
                                        <div class="box-content">
                                            <p>หรือ</p>
                                        </div>
                                        <button type="button" class="btn btn-warning btn-pill btn-block" id="btnMotoPRB"><i class="glyphicon glyphicon-comment"></i><span>ค้นหาเฉพาะ พ.ร.บ</span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                </div>
            </div>
        </div>-->
        <div class="margin-bottom-40"></div>
        <!-- Tab v3 -->
        <div class="container">
            <div class="row tab-v3">
                <div class="col-lg-3">
                    <ul class="nav nav-pills nav-stacked">
                            <li class="active"><a href="#car-1" data-toggle="tab"><i class="fa fa-home"></i> ประกันรถยนต์</a></li>
                            <li><a href="#moto-1" data-toggle="tab"><i class="fa fa-cloud"></i> ประกันรถจักรยานยนต์</a></li>
                            <li><a href="#travel-1" data-toggle="tab"><i class="fa fa-comments"></i> ประกันเดินทาง</a></li>
                            <li><a href="#settings-2" data-toggle="tab"><i class="fa fa-gear"></i> Settings3</a></li>
                    </ul>
                </div>

                <div class="col-lg-9">
                        <div class="tab-content">
                                <div class="tab-pane fade in active" id="car-1">
                                <form action="#" id="sky-form" class="sky-form">
                                        <h5>เลือกประเภทประกันรถยนต์</h5>
                                        <div class="row">
                                            <div class="col col-md-3">
                                                <div class="checkbox checkbox-danger space-bottom ">
                                                    <label class="hide"><input type="checkbox"></label>
                                                    <input id="checkbox1" type="checkbox" checked="">
                                                    <label for="checkbox1"><span>1</span></label>
                                                </div>
                                            </div>
                                            <div class="col col-md-3">
                                                <div class="checkbox checkbox-danger space-bottom ">
                                                    <label class="hide"><input type="checkbox"></label>
                                                    <input id="checkbox1" type="checkbox" checked="">
                                                    <label for="checkbox1"><span>2+</span></label>
                                                </div>
                                            </div>
                                            <div class="col col-md-3">
                                                <div class="checkbox checkbox-danger space-bottom ">
                                                    <label class="hide"><input type="checkbox"></label>
                                                    <input id="checkbox2" type="checkbox" checked="">
                                                    <label for="checkbox2"><span>2</span></label>
                                                </div>
                                            </div>                                            
                                            
                                        </div>

                                        <div class="row">
                                            <div class="col col-md-3">
                                                <div class="checkbox checkbox-danger space-bottom ">
                                                    <label class="hide"><input type="checkbox"></label>
                                                    <input id="checkbox2" type="checkbox" checked="">
                                                    <label for="checkbox2"><span>3</span></label>
                                                </div>
                                            </div>
                                            <div class="col col-md-3">
                                                <div class="checkbox checkbox-danger space-bottom ">
                                                    <label class="hide"><input type="checkbox"></label>
                                                    <input id="checkbox1" type="checkbox" checked="">
                                                    <label for="checkbox1"><span>3+</span></label>
                                                </div>
                                            </div>
                                            <div class="col col-md-3">
                                                <div class="checkbox checkbox-danger space-bottom ">
                                                    <label class="hide"><input type="checkbox"></label>
                                                    <input id="checkbox1" type="checkbox" checked="">
                                                    <label for="checkbox1"><span>พ.ร.บ</span></label>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col col-md-3">
                                                <h5 >เลือกปี</h5>
                                            </div>
                                            <div class="col col-md-5">
                                                    <section >
                                                        <label class="label">Select</label>
                                                        <label class="select state-success">
                                                                <?php echo CboYear(); ?>
                                                                <i></i>
                                                        </label>
                                                </section>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col col-md-3">
                                                <h5 >เลือกยี่ห้อรถ</h5>
                                            </div>
                                            <div class="col col-md-5">
                                                    <section >
                                                        <label class="label">Select</label>
                                                        <label class="select state-success">
                                                                <?php echo CboYear(); ?>
                                                                <i></i>
                                                        </label>
                                                </section>
                                            </div>
                                        </div>
                                        
                                                <div class="row">
                                                    <div class="col col-md-3">
                                                        <h5 >เลือกรุ่นรถ</h5>
                                                    </div>
                                                    <div class="row">
                        								<label class="label col col-4">Expiration date</label>
                        								<section class="col col-5">
                        									<label class="select">
                        										<select name="month">
                        											<option value="0" selected disabled>Month</option>
                        											<option value="1">January</option>
                        											<option value="1">February</option>
                        											<option value="3">March</option>
                        											<option value="4">April</option>
                        											<option value="5">May</option>
                        											<option value="6">June</option>
                        											<option value="7">July</option>
                        											<option value="8">August</option>
                        											<option value="9">September</option>
                        											<option value="10">October</option>
                        											<option value="11">November</option>
                        											<option value="12">December</option>
                        										</select>
                        										<i></i>
                        									</label>
                        								</section>
                        								<section class="col col-3">
                        									<label class="input">
                        										<input type="text" name="year" id="year" placeholder="Year">
                        									</label>
                        								</section>
                        							</div>
                                                </div>
                                        
                                        <div class="row">
                                            <div class="checkbox checkbox-danger space-bottom col-md-8" data-width="100%">
                                                <button type="button" class="btn btn-pill btn-info-filled btn-block" id="btnCarInsur"><span>เปรียบเทียบ</span><i class="fa fa-rocket"></i></button>
                                            </div>
                                        </div>
                                        </form>
                                </div>
                                <div class="tab-pane fade in" id="moto-1">
                                        <img alt="" class="pull-left lft-img-margin img-width-200" src="assets/img/main/img22.jpg">
                                        <h4>Heading Sample 2</h4>
                                        <p>Vivamus imperdiet condimentum diam, eget placerat felis consectetur id. Donec eget orci metus, ac adipiscing nunc. Pellentesque fermentum, ante ac interdum ullamcorper. Donec eget orci metus, <strong>ac adipiscing nunc.</strong> Vivamus imperdiet condimentum diam, eget placerat felis consectetur id. Donec eget orci metus, ac adipiscing nunc. Pellentesque fermentum, ante ac interdum id. Donec eget orci metus, ac adipiscing nunc. Pellentesque fermentum, ante ac interdum ullamcorper. Donec eget orci metus, ac adipiscing nunc. Pellentesque fermentum, ante ac <strong>interdum ullamcorper.</strong></p>
                                </div>
                                <div class="tab-pane fade in" id="travel-1">
                                        <h4>Heading Sample 3</h4>
                                        <p><img alt="" class="pull-right rgt-img-margin img-width-200" src="assets/img/main/img13.jpg"> <strong>Vivamus imperdiet condimentum diam, eget placerat felis consectetur id.</strong> Donec eget orci metus, Vivamus imperdiet condimentum diam, eget placerat felis consectetur id. Donec eget orci metus, ac adipiscing nunc. Pellentesque fermentum, ante ac interdum ullamcorper. Donec eget orci metus, ac adipiscing nunc. Pellentesque fermentum, consectetur id. Donec eget orci metus, ac adipiscing nunc. <strong>Pellentesque fermentum</strong>, ante ac interdum ullamcorper. Donec eget orci metus, ac adipiscing nunc. Pellentesque fermentum, ante ac interdum ullamcorper.</p>
                                </div>
                                <div class="tab-pane fade in" id="settings-2">
                                        <img alt="" class="pull-left lft-img-margin img-width-200" src="assets/img/main/img10.jpg">
                                        <h4>Heading Sample 4</h4>
                                        <p>Vivamus imperdiet condimentum diam, eget placerat felis consectetur id. Donec eget orci metus, ac adipiscing nunc. Pellentesque fermentum, ante ac interdum ullamcorper. Donec eget orci metus, <strong>ac adipiscing nunc.</strong> Vivamus imperdiet condimentum diam, eget placerat felis consectetur id. Donec eget orci metus, ac adipiscing nunc. Pellentesque fermentum, ante ac interdum id. Donec eget orci metus, ac adipiscing nunc. Pellentesque fermentum, ante ac interdum ullamcorper. Donec eget orci metus, ac adipiscing nunc. Pellentesque fermentum, ante ac <strong>interdum ullamcorper.</strong></p>
                                </div>
                        </div>
                </div>
            </div>
        </div>
        
        <!-- Tab v3 -->
        <!--=== End Content ===-->
        <!--=== Footer Version 1 ===-->
        <?php echo $footer; ?>
        <!--/footer-->

            
        </div>
        <!--=== End Footer Version 1 ===-->
    </div><!--/wrapper-->

	<!--=== Style Switcher ===-->
	<i class="style-switcher-btn fa fa-cogs hidden-xs"></i>
	<div class="style-switcher animated fadeInRight">
		<div class="style-swticher-header">
			<div class="style-switcher-heading">Style Switcher</div>
			<div class="theme-close"><i class="icon-close"></i></div>
		</div>

		<div class="style-swticher-body">
			<!-- Theme Colors -->
			<div class="style-switcher-heading">Theme Colors</div>
			<ul class="list-unstyled">
				<li class="theme-default theme-active" data-style="default" data-header="light"></li>
				<li class="theme-blue" data-style="blue" data-header="light"></li>
				<li class="theme-orange" data-style="orange" data-header="light"></li>
				<li class="theme-red" data-style="red" data-header="light"></li>
				<li class="theme-light" data-style="light" data-header="light"></li>
				<li class="theme-purple last" data-style="purple" data-header="light"></li>
				<li class="theme-aqua" data-style="aqua" data-header="light"></li>
				<li class="theme-brown" data-style="brown" data-header="light"></li>
				<li class="theme-dark-blue" data-style="dark-blue" data-header="light"></li>
				<li class="theme-light-green" data-style="light-green" data-header="light"></li>
				<li class="theme-dark-red" data-style="dark-red" data-header="light"></li>
				<li class="theme-teal last" data-style="teal" data-header="light"></li>
			</ul>

			<!-- Theme Skins -->
			<div class="style-switcher-heading">Theme Skins</div>
			<div class="row no-col-space margin-bottom-20 skins-section">
				<div class="col-xs-6">
					<button data-skins="default" class="btn-u btn-u-xs btn-u-dark btn-block active-switcher-btn handle-skins-btn">Light</button>
				</div>
				<div class="col-xs-6">
					<button data-skins="dark" class="btn-u btn-u-xs btn-u-dark btn-block skins-btn">Dark</button>
				</div>
			</div>

			<hr>

			<!-- Layout Styles -->
			<div class="style-switcher-heading">Layout Styles</div>
			<div class="row no-col-space margin-bottom-20">
				<div class="col-xs-6">
					<a href="javascript:void(0);" class="btn-u btn-u-xs btn-u-dark btn-block active-switcher-btn wide-layout-btn">Wide</a>
				</div>
				<div class="col-xs-6">
					<a href="javascript:void(0);" class="btn-u btn-u-xs btn-u-dark btn-block boxed-layout-btn">Boxed</a>
				</div>
			</div>

			<hr>

			<!-- Theme Type -->
			<div class="style-switcher-heading">Theme Types and Versions</div>
			<div class="row no-col-space margin-bottom-10">
				<div class="col-xs-6">
					<a href="E-Commerce/index.html" class="btn-u btn-u-xs btn-u-dark btn-block">Shop UI <small class="dp-block">Template</small></a>
				</div>
				<div class="col-xs-6">
					<a href="One-Pages/Classic/index.html" class="btn-u btn-u-xs btn-u-dark btn-block">One Page <small class="dp-block">Template</small></a>
				</div>
			</div>

			<div class="row no-col-space">
				<div class="col-xs-6">
					<a href="Blog-Magazine/index.html" class="btn-u btn-u-xs btn-u-dark btn-block">Blog <small class="dp-block">Template</small></a>
				</div>
				<div class="col-xs-6">
					<a href="RTL/index.html" class="btn-u btn-u-xs btn-u-dark btn-block">RTL <small class="dp-block">Version</small></a>
				</div>
			</div>
		</div>
	</div><!--/style-switcher-->
	<!--=== End Style Switcher ===-->

	<!-- JS Global Compulsory -->
	<script type="text/javascript" src="assets/plugins/jquery/jquery.min.js"></script>
	<script type="text/javascript" src="assets/plugins/jquery/jquery-migrate.min.js"></script>
	<script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<!-- JS Implementing Plugins -->
	<script type="text/javascript" src="assets/plugins/back-to-top.js"></script>
	<script type="text/javascript" src="assets/plugins/smoothScroll.js"></script>
	<script src="assets/plugins/sky-forms-pro/skyforms/js/jquery.validate.min.js"></script>
	<script src="assets/plugins/sky-forms-pro/skyforms/js/jquery.maskedinput.min.js"></script>
	<script src="assets/plugins/sky-forms-pro/skyforms/js/jquery-ui.min.js"></script>
	<script src="assets/plugins/sky-forms-pro/skyforms/js/jquery.form.min.js"></script>
	<!-- JS Customization -->
	<script type="text/javascript" src="assets/js/custom.js"></script>
	<!-- JS Page Level -->
	<script type="text/javascript" src="assets/js/app.js"></script>
	<script type="text/javascript" src="assets/js/forms/order.js"></script>
	<script type="text/javascript" src="assets/js/forms/review.js"></script>
	<script type="text/javascript" src="assets/js/forms/checkout.js"></script>
	<script type="text/javascript" src="assets/js/plugins/style-switcher.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function() {
			App.init();
			StyleSwitcher.initStyleSwitcher();
                        $("#btnCarInsur").click(calCar);
                        
		});
                function calCar(){
                    //alert("aaaaa");
                    window.location.assign('cal_car.php')
                }
	</script>
	<!--[if lt IE 9]>
		<script src="assets/plugins/respond.js"></script>
		<script src="assets/plugins/html5shiv.js"></script>
		<script src="assets/plugins/placeholder-IE-fixes.js"></script>
	<![endif]-->
</body>
</html>

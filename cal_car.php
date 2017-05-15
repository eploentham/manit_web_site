<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
@session_start();
    require 'config.php';

    setIPView();
    $menu = file_get_contents('menu.php',TRUE);
    $footer = file_get_contents('footer.php',TRUE);
    $switcher = file_get_contents('switcher.php',TRUE);
    $carTypeInsur = file_get_contents('car_type_insur.php',TRUE);
    $carYear = file_get_contents('car_year.php',TRUE);
    $divYear = divYear();
    $divBrand = divBrand();
    if(isset($_SESSION["status_regis"])){
        $txt = "<a href='#' class='dropdown-toggle' > ".$_SESSION["cust_name_t"]." ".$_SESSION["cust_lastname_t"]."</a>";
        $menu = str_replace('<a href="login.php" class="dropdown-toggle" >ลงชื่อเข้าระบบ</a>',$txt,$menu);
    }
    if(isset($_SESSION["car_year"])){
        
    }
  //$switcher = file_get_contents('switcher.php',TRUE);
  //$footer = file_get_contents('footer.php',TRUE);
  //$ourclient = file_get_contents('ourclient.php',TRUE);
?>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Manit Insurance</title>
        <!-- Meta -->
    
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

    <!-- CSS Theme -->
    <link rel="stylesheet" href="assets/css/theme-colors/default.css" id="style_color">
    <link rel="stylesheet" href="assets/css/theme-skins/dark.css">

    <!-- CSS Customization -->
    <link rel="stylesheet" href="assets/css/custom.css">
    <link href="assets/king-ui/css/king-ui.css" rel="stylesheet">
    <link href="assets/king-ui/css/animate.css" rel="stylesheet">
    <link href="assets/king-ui/css/owl.carousel.css" rel="stylesheet">
    <link href="assets/king-ui/css/owl.theme.css" rel="stylesheet">
    <!-- fonts -->
    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,400italic,700' rel='stylesheet' type='text/css'>
    <link href="assets/king-ui/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='assets/king-ui/fonts/FontAwesome.otf' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="assets/king-ui/css/linear-icons.css">
    </head>
    <body class="header-fixed">
        <!--=== Header v6 ===-->
        <?php echo $menu; ?>
        <!--=== End Header v6 ===-->
        <div class="interactive-slider-v2">
            <div class="container content-sm">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <div class="panel panel-primary" id="divInsurYear">
                            <div class="panel-heading">
                                <h3 class="panel-title">เลือกเงื่อนไขรถยนต์ </h3>
                            </div>
                            <div class="col-md-6">
                                
                            </div>
                            <div class="col-md-6">
                                <div class="col-md-4">
                                    <div class="checkbox checkbox-danger space-bottom ">
                                        <label class="hide"><input type="checkbox"></label>
                                        <input id="checkbox1" type="checkbox" checked="">
                                        <label for="checkbox1"><span>1</span></label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="checkbox checkbox-danger space-bottom ">
                                        <label class="hide"><input type="checkbox"></label>
                                        <input id="checkbox1" type="checkbox" checked="">
                                        <label for="checkbox1"><span>2</span></label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="checkbox checkbox-danger space-bottom ">
                                        <label class="hide"><input type="checkbox"></label>
                                        <input id="checkbox1" type="checkbox" checked="">
                                        <label for="checkbox1"><span>3</span></label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                เลือกประเภท
                            </div>
                            <div class="col-md-6">
                                <div class="col-md-4">
                                    <div class="checkbox checkbox-danger space-bottom ">
                                        <label class="hide"><input type="checkbox"></label>
                                        <input id="checkbox1" type="checkbox" checked="">
                                        <label for="checkbox1"><span>พ.ร.บ</span></label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="checkbox checkbox-danger space-bottom ">
                                        <label class="hide"><input type="checkbox"></label>
                                        <input id="checkbox1" type="checkbox" checked="">
                                        <label for="checkbox1"><span>2+</span></label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="checkbox checkbox-danger space-bottom ">
                                        <label class="hide"><input type="checkbox"></label>
                                        <input id="checkbox1" type="checkbox" checked="">
                                        <label for="checkbox1"><span>3+</span></label>
                                    </div>
                                </div>
                            </div>
                            
                            
                            <div class="panel-body form-group-sm">
                                <div class="col-md-6">
                                    <?php echo $divYear;?>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group margin-bottom-5">
                                        <span class="input-group-addon"><i class="fa fa-user" ></i></span>
                                        <input type="text" id="clYear" class="form-control" placeholder="Year">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <?php echo $divBrand;?>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group margin-bottom-5">
                                        <span class="input-group-addon"><i class="fa fa-user" ></i></span>
                                        <input type="text" id="clBrand" class="form-control" placeholder="Brand">
                                    </div>
                                </div>
                                
                                <div class="checkbox checkbox-danger space-bottom col-md-8" data-width="100%">
                                    <button type="button" class="btn btn-pill btn-info-filled btn-block" id="btnCarInsur"><span>เปรียบเทียบ</span><i class="fa fa-rocket"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>
        </div>
        <!--=== Content ===-->

        
        <!--=== End Content ===-->
        
        <!--=== Footer Version 1 ===-->
        <?php echo $footer; ?>
        <!--=== End Footer Version 1 ===-->
        
        <!--=== Style Switcher ===-->
        <?php echo $switcher; ?>
        <!--=== End Style Switcher ===-->
        
        <!-- JS Global Compulsory -->
	<script type="text/javascript" src="assets/plugins/jquery/jquery.min.js"></script>
	<script type="text/javascript" src="assets/plugins/jquery/jquery-migrate.min.js"></script>
	<script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<!-- JS Implementing Plugins -->
	<script type="text/javascript" src="assets/plugins/back-to-top.js"></script>
	<script type="text/javascript" src="assets/plugins/smoothScroll.js"></script>
	<script type="text/javascript" src="assets/plugins/jquery.parallax.js"></script>
	<!-- JS Customization -->
	<script type="text/javascript" src="assets/js/custom.js"></script>
	<!-- JS Page Level -->
	<script type="text/javascript" src="assets/js/app.js"></script>
	<script type="text/javascript" src="assets/js/plugins/style-switcher.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function() {
                    App.init();
                    StyleSwitcher.initStyleSwitcher();
                    $('ul.dropdown-menu li').live("click", function() {
                        //alert($(this).attr("id"));
                        if ($(this).attr("id")=="liYear"){
                            $("#clYear").val($(this).text());
                        }else if ($(this).attr("id")=="liBrand"){
                            $("#clBrand").val($(this).text());
                        }
                        
                    });
		});
	</script>
	<!--[if lt IE 9]>
		<script src="assets/plugins/respond.js"></script>
		<script src="assets/plugins/html5shiv.js"></script>
		<script src="assets/plugins/placeholder-IE-fixes.js"></script>
	<![endif]-->
    </body>
</html>

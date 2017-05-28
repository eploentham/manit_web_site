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
    $txt="<p>50 ประกันสำหรับคุณ</p>"
            . "<table class='table table-hover table-expandable table-search-results '>"
            ."<thead><tr><th>เลือก</th>"
            . "<th>บริษัทประกัน</th>"
            . "<th>ชั้น</th>"
            . "<th>ทุนประกัน</th>"
            . "<th>ความคุ้มครอง</th>"
            . "<th>ความนิยม</th>"
            . "<th>ราคา</th>"
            . "</tr></thead>"
            . "<tbody>"
            ."<tr><td><div class='checkbox checkbox-danger space-bottom '><label class='hide'><input type='checkbox'></label><input id='chkprb' type='checkbox' checked='false'><label for='chkprb'><span>พ.ร.บ</span></label></div></td>"
            . "<td><img class='logo' src='assets/img/prakan/AIC.png' ></td>"
                ."<td class='imgsearch'><img src='assets/img/prakan/2.png' ></td>"
                ."<td><span class='btn btn-primary active'>300,000</span></td>"
                ."<td><p><small>ประเภทการซ่อม :</small><span>อู่</span></P></td>"
                ."<td>5.0</td><td>7,400</td>"
            ."</tr>"
            . "<tr><td colspan='8'><h4>Additional information</h4><ul><li><a href='http://en.wikipedia.org/wiki/Usa'>USA on Wikipedia</a></li><li><a href='http://nationalatlas.gov/'>National Atlas of the United States</a></li><li><a href='http://www.nationalcenter.org/HistoricalDocuments.html'>Historical Documents</a></li></ul></td>"
            ."</tr>"
      ."</tbody></table>";
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
    <!--<link href="assets/king-ui/css/king-ui.css" rel="stylesheet">
    <link href="assets/king-ui/css/animate.css" rel="stylesheet">
    <link href="assets/king-ui/css/owl.carousel.css" rel="stylesheet">
    <link href="assets/king-ui/css/owl.theme.css" rel="stylesheet">-->
    <link rel="stylesheet" href="assets/css/style1.css">
    
    
    <!-- fonts -->
    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,400italic,700' rel='stylesheet' type='text/css'>
    <link href="assets/king-ui/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='assets/king-ui/fonts/FontAwesome.otf' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="assets/king-ui/css/linear-icons.css">
    <link href="assets/plugins/jquery-plugin-for-expandable-bootstrap-table-rows/css/bootstrap-table-expandable.css" rel="stylesheet">
    
    </head>
    <body class="header-fixed">
        <!--=== Header v6 ===-->
        <?php echo $menu; ?>
        <!--=== End Header v6 ===-->
        
        <!--=== Content ===-->
        <br><br><br>
        <div class="container content">
            <div  class="rows">
                <div class="col col-lg-12">
                    <?php echo $txt;?>
                </div>
            </div>
        </div>
        <!--=== End Content ===-->
        
        <!--=== Footer Version 1 ===-->
        <?php echo $footer; ?>
        <!--=== End Footer Version 1 ===-->
        
        <!--=== Style Switcher ===-->
        <?php //echo $switcher; ?>
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
        <script src="assets/plugins/jquery-plugin-for-expandable-bootstrap-table-rows/js/bootstrap-table-expandable.js"></script>
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

<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
@session_start();
require_once("config.php");
setIPView();
$menu = file_get_contents('menu.php',TRUE);
//$switcher = file_get_contents('switcher.php',TRUE);
$footer = file_get_contents('footer.php',TRUE);
if(isset($_SESSION["status_regis"])){
    $txt = "<a href='#' class='dropdown-toggle' > ".$_SESSION["cust_name_t"]." ".$_SESSION["cust_lastname_t"]."</a>";
    $menu = str_replace('<a href="login.php" class="dropdown-toggle" >ลงชื่อเข้าระบบ</a>',$txt,$menu);
}
?>

<head>
	<title>Manit Insurance</title>

	<!-- Meta -->
	<meta charset="utf-8">
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
    
	<!-- CSS Customization -->
	<link rel="stylesheet" href="assets/css/custom.css">
        <link href="assets/plugins/jquery-plugin-for-expandable-bootstrap-table-rows/css/bootstrap-table-expandable.css" rel="stylesheet">
        <link rel="stylesheet" Type="text/css" href="assets/css/font/font.css">
        <link rel="stylesheet" Type="text/css" href="assets/css/css.css">
        <style type="text/css">
            .bgimg {
                background-image: url('../img/bg/18-car.jpg');
            }
            .wrapper {
                display: grid;
                border:1px solid #000;
                grid-gap: 10px;
                grid-template-columns: repeat(auto-fill, minmax(100px,1fr) minmax(200px,2fr));
            }
            .box {
                background-color: #444;
                color: #fff;
                border-radius: 5px;
                padding: 20px;
                font-size: 150%;
            }
            
        </style>
</head>
<body class="header-fixed" id="body1">
    <div class="wrapper">
        <?php echo $menu; ?>

        <div class="interactive-slider-v2" id="div1">
            <div class="ui stackable grid container">
                <div class="five wide column" style="margin-top:10em;text-align:right">
                    <div class="mobile-hide">
                        
                    </div>
                </div>
                <div class="eight wide column" style="margin-top:1.5em;margin-bottom:1em">
                    <h1 class="thai" style="font-weight:400;color:white;font-size:20px">เปรียบเทียบราคาประกันภัยทุกชนิด</h1>
                        <div class="ui segment defaultpanel" >
                            <div class="ui top attached label">โปรดเลือกแบบประกัน</div>
                            <div class="ui divided items">
                                <a class="item" href="#">
                                    <div class="ui tiny image" style="text-align:center">
                                        <i class="car big icon"></i>
                                    </div>
                                    <div class="middle aligned content">
                                        <h2 class="thai" style="font-weight:400;font-size:14px;margin-bottom:-1.5rem">ประกันรถยนต์</h2>
                                    </div>
                                    <div class="ui right floated">
                                        <i class="chevron circle right icon"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="ui divided items">
                                <a class="item" href="#">
                                    <div class="ui tiny image" style="text-align:center">
                                        <i class="motorcycle big icon"></i>
                                    </div>
                                    <div class="middle aligned content">
                                        <h2 class="thai" style="font-weight:400;font-size:14px;margin-bottom:-1.5rem">ประกันรถจักรยานยนต์</h2>
                                    </div>
                                    <div class="ui right floated">
                                        <i class="chevron circle right icon"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="ui divided items">
                                <a class="item" href="#">
                                    <div class="ui tiny image" style="text-align:center">
                                        <i class="plane big icon"></i>
                                    </div>
                                    <div class="middle aligned content">
                                        <h2 class="thai" style="font-weight:400;font-size:14px;margin-bottom:-1.5rem">ประกันเดินทาง</h2>
                                    </div>
                                    <div class="ui right floated">
                                        <i class="chevron circle right icon"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                        
                    </div>
            </div>
        </div>
    </div>
</body>
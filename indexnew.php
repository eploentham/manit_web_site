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
<html>
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
                                <a class="item" href="cal_car_new.php">
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
        <div class="ui stripe vertical segment" style="margin-top:3em">
            <div class="ui one column center aligned divided relaxed grid container">
                <span class="thai" style="font-size:18px;font-weight:500">สิ่งที่เราสัญญากับ </span><span style="color:red">คุณ</span>
                <div class="row" style="margin-bottom:3em;margin-top:1.5em">
                    <div class="ui small horizontal list">
                        <div class="item">
                            <i class="yellow big smile icon"></i>
                            <div class="content">
                                <span class="thai"style="font-weight:400;font-size:15px">ง่ายและรวดเร็ว</span>
                            </div>
                        </div>
                        <div class="item">
                            <i class="red big heart icon"></i>
                            <div class="content">
                                <span class="thai"style="font-weight:400;font-size:15px">ราคาที่คุ้มค่า</span>
                            </div>
                        </div>
                        <div class="item">
                            <i class="big history icon"></i>
                            <div class="content">
                                <span class="thai"style="font-weight:400;font-size:15px">ประหยัดเวลา</span>
                            </div>
                        </div>
                        <div class="item">
                            <i class="big calculator icon"></i>
                            <div class="content">
                                <span class="thai"style="font-weight:400;font-size:15px">ประหยัดค่าเบี้ย</span>
                            </div>
                        </div>
                        <div class="item">
                            <i class="file big text outline icon"></i>
                            <div class="content">
                                <span class="thai"style="font-weight:400;font-size:15px">ข้อเสนอที่ต้องการ</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="stackable very relaxed ui grid container" style="margin-top:3em">
            <div class="ui stripe vertical segment">
                <div class="ui two column center aligned divided relaxed grid container">
                    <span class="thai" style="font-size:18px;font-weight:500">รับประกันเงินคืน <span style="color:red"></span> หากเจอที่อื่นถูกกว่า</span>
                    <div class="row" style="margin-top:1em">
                        <div class="column">
                            <i class="payment big icon"></i>
                            <p><span style="color:red">ฟรี </span>ค่าธรรมเนียมบัตรเครดิต</p>
                        </div>
                        <div class="column">
                            <i class="car big icon"></i>
                            <p><span style="color:red">ฟรี </span>บริการต่อทะเบียนรถ</p>
                        </div>
                    </div>
                    <div class="row" style="margin-bottom:2em">
                        <div class="column"><i class="file outline big icon"></i><p><span style="color:red">100% </span>เงินคืนถ้าเจอข้อเสนอถูกกว่า</p></div>
                        <div class="column"><i class="barcode big icon"></i><p><span style="color:red">ฟรี </span>E-Voucher diffuser RAMAIRA spa</p></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ui stripe vertical segment" style="margin-top:3em">
            <div class="ui three column center aligned divided relaxed stackable grid container">
                <span class="thai" style="font-size:18px;font-weight:500">ทำประกันง่ายๆแค่ <span style="color:red">3</span> ขั้นตอน</span>
                <div class="row" style="margin-top:1em;margin-bottom:2em">
                    <div class="column"><img class="ui tiny image floated right" src="/Content/img/hp/quotes.png" alt="ประกันภัยรถยนต์">
                        <h3>Step 1</h3><p><span style="color:red">1 </span>เช็คเบี้ยประกัน</p></div>
                    <div class="column"><img class="ui tiny image floated right" src="/Content/img/hp/plan.png" alt="ประกันภัยรถยนต์">
                        <h3>Step 2</h3><p><span style="color:red">2 </span>เลือกแผนที่ต้องการ</p></div>
                    <div class="column"><img class="ui tiny image floated right" src="/Content/img/hp/member1.png" alt="ประกันภัยรถยนต์">
                        <h3>Step 3</h3><p><span style="color:red">3 </span>คุ้มครองทันที</p></div>
                </div>
            </div>
        </div>
        <div class="ui stripe vertical segment" style="margin-top:3em">
            <div class="ui one column center aligned divided relaxed grid container"><span class="thai" style="font-size:16px;font-weight:500">สะดวกเลือกชำระได้หลายช่องทางและปลอดภัย</span>
                <div class="row" style="margin-top:1em;margin-bottom:4em;display:-webkit-box">
                    <div class="column">
                        <div class="ui list">
                            <div class="item"><i class="green checkmark icon"></i>
                                <div class="content">ชำระสดลดสูงสุด 10% หรือผ่อน 0% นาน 10 เดือน ไม่มีค่าธรรมเนียมบัตรเครดิต</div>                            
                            </div>
                            <div class="item"><i class="green checkmark icon"></i>
                                <div class="content">เลือกได้ทั้งกรอกข้อมูลเองรับกรมธรรม์ทันที หรือเจ้าหน้าที่ติดต่อกลับเพื่ออำนวยความสะดวก</div>                                
                            </div>
                            <div class="item"><i class="green checkmark icon"></i>
                                <div class="content">สั่งซื้อได้ 24 ชม. 7 วันทั่วประเทศไทย ไม่มีค่าจัดส่ง</div>
                            </div>
                            <div class="item"><i class="green checkmark icon"></i>
                                <div class="content">เจอที่อื่นถูกกว่าหรือไม่พอใจยินดีคืนเงิน 100%</div>
                            </div>
                        </div>
                    </div>                        
                </div>
            </div>
        </div>
        <?php echo $footer; ?>
    </div>
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
    <script type="text/javascript" src="assets/js/plugins/style-switcher.js"></script>
    <script type="text/javascript" src="assets/js/forms/order.js"></script>
    <script type="text/javascript" src="assets/js/forms/review.js"></script>
    <script type="text/javascript" src="assets/js/forms/checkout.js"></script>
    <script src="assets/plugins/jquery-plugin-for-expandable-bootstrap-table-rows/js/bootstrap-table-expandable.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            App.init();
            
        });
    </script>
</body>
</html>
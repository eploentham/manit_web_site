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
                /*grid-template-columns: repeat(auto-fill, minmax(100px,1fr) minmax(200px,2fr));*/
            }
            .box {
                background-color: #444;
                color: #fff;
                border-radius: 5px;
                padding: 20px;
                font-size: 150%;
            }
            option.avatar {
                background-repeat: no-repeat !important;
                padding-left: 20px;
            }
            .avatar .ui-icon {
                background-position: left top;
            }
        </style>
</head>
<body class="header-fixed" id="body1">
    <div class="wrapper">
        <?php echo $menu; ?>
        <div class="interactive-slider-v2-travel" id="div1">
            <div class="ui stackable grid container">
                <div class="five wide column" style="margin-top:10em;text-align:right">
                    <div class="mobile-hide">

                    </div>
                </div>
                <div class="eight wide column" style="margin-top:1.5em;margin-bottom:1em">
                    <h1 class="thai" style="font-weight:400;color:white;font-size:20px">ประกันการเดินทาง</h1>
                    <div class="ui segment defaultpanel" >
                        <div class="ui top attached label">ซื้อประกันเดินทาง</div>
                        <form action="#" class="sky-form">
                            <fieldset>
                                <section>
                                    <div class="field">
                                        <label class="label">แบบ</label>
                                        <label class="select state-success">
                                            <select id="cboTypeTravel">
                                                <option> รายเที่ยว</option>
                                                <option> รายปี</option>
                                            </select>
                                            <!--<span id="span1" style="color: rgb(255, 102, 102); display: inline;">*โปรดเลือกปีรถ</span>-->
                                        </label>
                                    </div>
                                </section>
                                <section>
                                    <div  class="field">
                                        <label class="label">จุดหมายปลายทาง</label>
                                        <label class="select state-success">
                                            <select style="width:250px"  name="pages" id="pages">
                                            <option value="" selected="selected">Choose a sample page</option>
                                            <option value="examples/index.html">Normal</option>
                                            <option value="examples/byjson.html">By Json Data</option>
                                            <option value="examples/multiple-skin.html">Multiple Skin</option>
                                            <option value="examples/css-sprite.html">CSS Sprite</option>
                                            <option value="examples/object-oriented-approach.html">Object Oriented Approach</option>
                                            <option value="examples/object-oriented-approach-more.html">Object Oriented Approach - More</option>
                                            <option value="examples/use-checkbox.html">Use Checkbox</option>
                                            <option value="examples/mouse-events.html">Mouse Events</option>
                                            <option value="examples/help.html">Documentation</option>
                                        </select>
                                        </label>
                                    </div>
                                </section>
                                <section>
                                    <div  class="row">
                                        <div class="col col-6">
                                            <label class="label">วันที่เดินทาง</label>
                                            <label class="select state-success">
                                                <input type="text" name="txtDateStart" id="txtDateStart" value="<?php echo $supInputDate;?>" placeholder="วันที่ป้อน" class="datepicker" >
                                            </label>
                                        </div>
                                        <div class="col col-6">
                                            <label class="label">วันที่สิ้นสุด</label>
                                            <label class="select state-success">
                                                <input type="text" name="txtDateEnd" id="txtDateEnd" value="<?php echo $supInputDate;?>" placeholder="วันที่ป้อน" class="datepicker" data-date-format="dd/mm/yyyy">
                                            </label>
                                        </div>
                                    </div>
                                </section>
                                <h6 class="ui dividing header" style="margin-top:-2px"></h6>
                                <section>
                                        <label class="label">เบอร์โทรศัพท์ของท่าน</label>
                                        <label class="input state-error">
                                                <input type="text">
                                        </label>
                                        <div class="note note-error"style="color:#FF6666;display:none">*โปรดใส่เบอร์มือถือ</div>
                                </section>
                                <div class="row">
                                    <div class="col-md-6">
                                        <button type="button" class="btn-u btn-lg rounded btn-u-brown" id="btnSearchCar" ><i class="fa fa-picture-o"></i>คำนวณ เบี้ยประกันภัย</button>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="ui stripe vertical segment" style="margin-top:3em"><div class="ui one column center aligned divided relaxed grid container"><span class="thai" style="font-size:18px;font-weight:500">ข้อเสนอประกันเดินทางสำหรับ<span style="color:red"> คุณ</span></span><div class="row" style="margin-bottom:3em;margin-top:1.5em"><div class="ui small horizontal list"><div class="item"><i class="big payment icon"></i><div class="content"><span class="thai" style="font-weight:400;font-size:15px">เบี้ยประกันเริ่มที่ 190 บาท</span></div></div><div class="item"><i class="visa big blue icon"></i><div class="content"><span class="thai" style="font-weight:400;font-size:15px">ยื่นวีซ่าไม่ผ่าน การันตีเงืนคืน 100%</span></div></div><div class="item"><i class="big male icon"></i><div class="content"><span class="thai" style="font-weight:400;font-size:15px">คุ้มครองกระเป๋าหาย, เครื่อง Delay</span></div></div><div class="item"><i class="big diamond icon"></i><div class="content"><span class="thai" style="font-weight:400;font-size:15px">คุ้มครองสูงสุด 10 ล้านบาท</span></div></div><div class="item"><i class="big world icon"></i><div class="content"><span class="thai" style="font-weight:400;font-size:15px">คุ้มครองทุกประเทศ</span></div></div><div class="item"><i class="big hospital icon"></i><div class="content"><span class="thai" style="font-weight:400;font-size:15px">คุ้มครองค่ารักษาพยาบาล</span></div></div></div></div></div></div>
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
            StyleSwitcher.initStyleSwitcher();
            //$("#cboBrandCar").change(getModelCar);
            //$("#cboBrandMoto").change(getModelMoto);
            /* BOOTSTRAP DROPDOWN MENU - Update selected item text and image */

            $('.datepicker').datepicker({
                format: 'mm/dd/yyyy',
                startDate: '-3d'
            });
        });
    </script>
</body>
</html>
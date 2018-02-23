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

        <!--<link href="assets/king-ui/css/king-ui.css" rel="stylesheet">
        <link href="assets/king-ui/css/animate.css" rel="stylesheet">
        <link href="assets/king-ui/css/owl.carousel.css" rel="stylesheet">
        <link href="assets/king-ui/css/owl.theme.css" rel="stylesheet">-->
    
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
        </style>
</head>
<body class="header-fixed" id="body1">
    <div class="wrapper">
        <?php echo $menu; ?>
        <div class="interactive-slider-v2-car" id="div1">
            <div class="ui stackable grid container">
                <div class="five wide column" style="margin-top:10em;text-align:right">
                    <div class="mobile-hide">

                    </div>
                </div>
                
                <div class="eight wide column" style="margin-top:1.5em;margin-bottom:1em">
                    <h1 class="thai" style="font-weight:400;color:white;font-size:20px">เช็คราคาประกันภัยรถยนต์</h1>
                    <div class="ui segment defaultpanel" >
                        <div class="ui top attached label">1. ระบุข้อมูลรถยนต์</div>
                        <form action="#" class="sky-form">
                            <fieldset>
                                <section>
                                    <div class="field">
                                        <label class="label">ประเภท</label>
                                        <label class="select state-success">
                                            <select id="cboCarType">
                                                <option value='1'>ประกันรถยนต์ ชั้น1</option>
                                                <option value='2'>ประกันรถยนต์ ชั้น2</option>
                                                <option value='2+'>ประกันรถยนต์ ชั้น2+</option>
                                                <option value='3'>ประกันรถยนต์ ชั้น3</option>
                                                <option value='3+'>ประกันรถยนต์ ชั้น3+</option>
                                                <option value='3+'> พ.ร.บ.</option>
                                            </select>
                                            <!--<span id="span1" style="color: rgb(255, 102, 102); display: inline;">*โปรดเลือกปีรถ</span>-->
                                        </label>
                                    </div>
                                </section>
                                <section>
                                    <div class="field">
                                        <label class="label">เลือกปีรถ</label>
                                        <label class="select state-success">
                                            <select id="cboYear">
                                                <?php echo CboYearCar(); ?>
                                            </select>
                                            <!--<span id="span1" style="color: rgb(255, 102, 102); display: inline;">*โปรดเลือกปีรถ</span>-->
                                        </label>
                                    </div>
                                </section>
                                <section>
                                    <div class="field">
                                        <label class="label">เลือกยี่ห้อรถ</label>
                                        <label class="select state-success">
                                            <select id="cboBrandCar">
                                                <?php echo CboBrandCar(); ?>
                                            </select>
                                             <!--<span id="span1" style="color: rgb(255, 102, 102); display: inline;">*โปรดเลือกปีรถ</span>-->
                                        </label>

                                    </div>
                                </section>
                                <section>
                                    <div class="field">
                                        <label class="label">เลือกรุ่น</label>
                                        <label class="select state-success">
                                            <select id="cboModelCar">
                                                <?php echo ""; ?>
                                            </select>
                                             <!--<span id="span1" style="color: rgb(255, 102, 102); display: inline;">*โปรดเลือกปีรถ</span>-->
                                        </label>
                                    </div>
                                </section>
                                <section>
                                    <div class="field">
                                        <label class="label">เลือกรุ่นย่อย</label>
                                        <label class="select state-success">
                                            <select id="cboModelCarSub">
                                                <?php echo ""; ?>
                                            </select>
                                             <!--<span id="span1" style="color: rgb(255, 102, 102); display: inline;">*โปรดเลือกปีรถ</span>-->
                                        </label>
                                    </div>
                                </section>
                                <section>
                                    <div class="field">
                                        <label class="label">เลือกรุ่นย่อย</label>
                                        <label class="select state-success">
                                            <select id="cboModelCarSub">
                                                <?php echo ""; ?>
                                            </select>
                                             <!--<span id="span1" style="color: rgb(255, 102, 102); display: inline;">*โปรดเลือกปีรถ</span>-->
                                        </label>
                                    </div>
                                </section>
                                <section>
                                    <div class="inline-group">
                                        <label class="radio"><input type="radio" name="radio-inline" checked><i class="rounded-x"></i>กล้องติดรถยนต์</label>
                                        <label class="radio"><input type="radio" name="radio-inline"><i class="rounded-x"></i>ไม่มีกล้องติดรถยนต์</label>
                                        
                                    </div>
                                </section>
                                <section>
                                    <div class="field">
                                        <label class="label">หมดประกันหรือต้องการให้คุ้มครอง</label>
                                        <label class="select state-success">
                                            <select id="cboInsurStart">
                                                <?php echo ""; ?>
                                            </select>
                                             <!--<span id="span1" style="color: rgb(255, 102, 102); display: inline;">*โปรดเลือกปีรถ</span>-->
                                        </label>
                                    </div>
                                </section>
                                <h6 class="ui dividing header" style="margin-top:-2px"></h6>

                                <!--<section>
                                        <label class="label">2. กดเพื่อดูเบี้ยประกัน ส่วนลด ราคาผ่อนชำระ</label>
                                        <label class="input state-error">
                                                <input type="text">
                                        </label>
                                        <div class="note note-error"style="color:#FF6666;display:none">*โปรดใส่เบอร์มือถือ</div>
                                </section>-->
                                <div class="row">
                                    <div class="col-md-6">
                                        <button type="button" class="btn-u btn-lg rounded btn-u-brown" id="btnSearchCar" ><i class="fa fa-picture-o"></i>ค้นหา เบี้ยประกันภัยรถยนต์</button>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--<div class="ui stripe vertical segment" style="margin-top:3em">
            <div class="ui one column center aligned divided relaxed grid container"><span class="thai" style="font-size:18px;font-weight:500">สิ่งที่เราสัญญากับ <span style="color:red">คุณ</span></span>
                <div class="row" style="margin-bottom:3em;margin-top:1.5em">
                    <div class="ui small horizontal list">
                        <div class="item"><i class="yellow big smile icon"></i>
                            <div class="content"><span class="thai" style="font-weight:400;font-size:15px">ง่ายและรวดเร็ว</span></div>
                        </div>
                        <div class="item"><i class="red big heart icon"></i>
                            <div class="content"><span class="thai" style="font-weight:400;font-size:15px">ราคาที่คุ้มค่า</span></div>
                        </div>
                        <div class="item"><i class="big history icon"></i>
                            <div class="content"><span class="thai" style="font-weight:400;font-size:15px">ประหยัดเวลา</span></div>
                        </div>
                        <div class="item"><i class="big calculator icon"></i>
                            <div class="content"><span class="thai" style="font-weight:400;font-size:15px">ประหยัดค่าเบี้ย</span></div>
                        </div>
                        <div class="item"><i class="file big text outline icon"></i>
                            <div class="content"><span class="thai" style="font-weight:400;font-size:15px">ข้อเสนอที่ต้องการ</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>-->
        <!--<div class="ui stripe vertical segment" style="margin-top:0"><div class="ui center aligned divided very relaxed stackable grid container"><div class="column"><div id="owl-company" class="owl-carousel owl-theme" style="display: block; opacity: 1;"><div class="owl-wrapper-outer"><div class="owl-wrapper" style="width: 11280px; left: 0px; display: block; transition: all 800ms ease 0s; transform: translate3d(-2820px, 0px, 0px);"><div class="owl-item" style="width: 141px;"><div class="item"><img class="ui centered image" src="https://dlg9copcywnep.cloudfront.net/Content/img/company/vib.jpg" alt="ประกันภัยรถยนต์" width="50"></div></div><div class="owl-item" style="width: 141px;"><div class="item"><img class="ui centered image" src="https://dlg9copcywnep.cloudfront.net/Content/img/company/vib.jpg" alt="ประกันภัยรถยนต์" width="50"></div></div><div class="owl-item" style="width: 141px;"><div class="item"><img class="ui centered image" src="https://dlg9copcywnep.cloudfront.net/Content/img/company/azcp.jpg" alt="ประกันภัยรถยนต์" width="50"></div></div><div class="owl-item" style="width: 141px;"><div class="item"><img class="ui centered image" src="https://dlg9copcywnep.cloudfront.net/Content/img/company/charan.jpg" alt="ประกันภัยรถยนต์" width="50"></div></div><div class="owl-item" style="width: 141px;"><div class="item"><img class="ui centered image" src="https://dlg9copcywnep.cloudfront.net/Content/img/company/liberty.png" alt="ประกันภัยรถยนต์" width="50"></div></div><div class="owl-item" style="width: 141px;"><div class="item"><img class="ui centered image" src="https://dlg9copcywnep.cloudfront.net/Content/img/company/msig.jpg" alt="ประกันภัยรถยนต์" width="50"></div></div><div class="owl-item" style="width: 141px;"><div class="item"><img class="ui centered image" src="https://dlg9copcywnep.cloudfront.net/Content/img/company/nki.png" alt="ประกันภัยรถยนต์" width="50"></div></div><div class="owl-item" style="width: 141px;"><div class="item"><img class="ui centered image" src="https://dlg9copcywnep.cloudfront.net/Content/img/logo/mpai.png" alt="ประกันภัยรถยนต์" width="50"></div></div><div class="owl-item" style="width: 141px;"><div class="item"><img class="ui centered image" src="https://dlg9copcywnep.cloudfront.net/Content/img/company/pacificcross.png" alt="ประกันภัยรถยนต์" width="50"></div></div><div class="owl-item" style="width: 141px;"><div class="item"><img class="ui centered image" src="https://dlg9copcywnep.cloudfront.net/Content/img/company/samaggi.gif" alt="ประกันภัยรถยนต์" width="50"></div></div><div class="owl-item" style="width: 141px;"><div class="item"><img class="ui centered image" src="https://dlg9copcywnep.cloudfront.net/Content/img/company/axa.jpg" alt="ประกันภัยรถยนต์" width="50"></div></div><div class="owl-item" style="width: 141px;"><div class="item"><img class="ui centered image" src="https://dlg9copcywnep.cloudfront.net/Content/img/company/bangkok.jpg" alt="ประกันภัยรถยนต์" width="50"></div></div><div class="owl-item" style="width: 141px;"><div class="item"><img class="ui centered image" src="https://dlg9copcywnep.cloudfront.net/Content/img/company/chao.jpg" alt="ประกันภัยรถยนต์" width="50"></div></div><div class="owl-item" style="width: 141px;"><div class="item"><img class="ui centered image" src="https://dlg9copcywnep.cloudfront.net/Content/img/company/deves.jpg" alt="ประกันภัยรถยนต์" width="50"></div></div><div class="owl-item" style="width: 141px;"><div class="item"><img class="ui centered image" src="https://dlg9copcywnep.cloudfront.net/Content/img/company/msh.jpg" alt="ประกันภัยรถยนต์" width="50"></div></div><div class="owl-item" style="width: 141px;"><div class="item"><img class="ui centered image" src="https://dlg9copcywnep.cloudfront.net/Content/img/company/muangthai.png" alt="ประกันภัยรถยนต์" width="50"></div></div><div class="owl-item" style="width: 141px;"><div class="item"><img class="ui centered image" src="https://dlg9copcywnep.cloudfront.net/Content/img/company/ns.jpg" alt="ประกันภัยรถยนต์" width="50"></div></div><div class="owl-item" style="width: 141px;"><div class="item"><img class="ui centered image" src="https://dlg9copcywnep.cloudfront.net/Content/img/company/safety.jpg" alt="ประกันภัยรถยนต์" width="50"></div></div><div class="owl-item" style="width: 141px;"><div class="item"><img class="ui centered image" src="https://dlg9copcywnep.cloudfront.net/Content/img/company/tokio.jpg" alt="ประกันภัยรถยนต์" width="50"></div></div><div class="owl-item" style="width: 141px;"><div class="item"><img class="ui centered image" src="/Content/img/company/falcon.png" alt="ประกันภัยรถยนต์" width="50"></div></div><div class="owl-item" style="width: 141px;"><div class="item"><img class="ui centered image" src="https://dlg9copcywnep.cloudfront.net/Content/img/company/aetna.png" alt="ประกันภัยรถยนต์" width="50"></div></div><div class="owl-item" style="width: 141px;"><div class="item"><img class="ui centered image" src="https://dlg9copcywnep.cloudfront.net/Content/img/company/aioi.jpg" alt="ประกันภัยรถยนต์" width="50"></div></div><div class="owl-item" style="width: 141px;"><div class="item"><img class="ui centered image" src="https://dlg9copcywnep.cloudfront.net/Content/img/company/asia.jpg" alt="ประกันภัยรถยนต์" width="50"></div></div><div class="owl-item" style="width: 141px;"><div class="item"><img class="ui centered image" src="https://dlg9copcywnep.cloudfront.net/Content/img/company/asset.jpg" alt="ประกันภัยรถยนต์" width="50"></div></div><div class="owl-item" style="width: 141px;"><div class="item"><img class="ui centered image" src="https://dlg9copcywnep.cloudfront.net/Content/img/company/bui.jpg" alt="ประกันภัยรถยนต์" width="50"></div></div><div class="owl-item" style="width: 141px;"><div class="item"><img class="ui centered image" src="https://dlg9copcywnep.cloudfront.net/Content/img/company/bupa.png" alt="ประกันภัยรถยนต์" width="50"></div></div><div class="owl-item" style="width: 141px;"><div class="item"><img class="ui centered image" src="https://dlg9copcywnep.cloudfront.net/Content/img/company/gen.jpg" alt="ประกันภัยรถยนต์" width="50"></div></div><div class="owl-item" style="width: 141px;"><div class="item"><img class="ui centered image" src="https://dlg9copcywnep.cloudfront.net/Content/img/company/kpi.png" alt="ประกันภัยรถยนต์" width="50"></div></div><div class="owl-item" style="width: 141px;"><div class="item"><img class="ui centered image" src="https://dlg9copcywnep.cloudfront.net/Content/img/company/sec.jpg" alt="ประกันภัยรถยนต์" width="50"></div></div><div class="owl-item" style="width: 141px;"><div class="item"><img class="ui centered image" src="https://dlg9copcywnep.cloudfront.net/Content/img/company/sjnk.png" alt="ประกันภัยรถยนต์" width="50"></div></div><div class="owl-item" style="width: 141px;"><div class="item"><img class="ui centered image" src="https://dlg9copcywnep.cloudfront.net/Content/img/company/smk.jpg" alt="ประกันภัยรถยนต์" width="50"></div></div><div class="owl-item" style="width: 141px;"><div class="item"><img class="ui centered image" src="https://dlg9copcywnep.cloudfront.net/Content/img/company/thai.png" alt="ประกันภัยรถยนต์" width="50"></div></div><div class="owl-item" style="width: 141px;"><div class="item"><img class="ui centered image" src="https://dlg9copcywnep.cloudfront.net/Content/img/company/thaisri.png" alt="ประกันภัยรถยนต์" width="50"></div></div><div class="owl-item" style="width: 141px;"><div class="item"><img class="ui centered image" src="https://dlg9copcywnep.cloudfront.net/Content/img/company/thaivivat.png" alt="ประกันภัยรถยนต์" width="50"></div></div><div class="owl-item" style="width: 141px;"><div class="item"><img class="ui centered image" src="https://dlg9copcywnep.cloudfront.net/Content/img/company/tpb.jpg" alt="ประกันภัยรถยนต์" width="50"></div></div><div class="owl-item" style="width: 141px;"><div class="item"><img class="ui centered image" src="https://dlg9copcywnep.cloudfront.net/Content/img/company/tsi.jpg" alt="ประกันภัยรถยนต์" width="50"></div></div><div class="owl-item" style="width: 141px;"><div class="item"><img class="ui centered image" src="https://dlg9copcywnep.cloudfront.net/Content/img/company/aig.gif" alt="ประกันภัยรถยนต์" width="50"></div></div><div class="owl-item" style="width: 141px;"><div class="item"><img class="ui centered image" src="https://dlg9copcywnep.cloudfront.net/Content/img/company/dip.jpg" alt="ประกันภัยรถยนต์" width="50"></div></div><div class="owl-item" style="width: 141px;"><div class="item"><img class="ui centered image" src="https://dlg9copcywnep.cloudfront.net/Content/img/company/ksk.jpg" alt="ประกันภัยรถยนต์" width="50"></div></div><div class="owl-item" style="width: 141px;"><div class="item"><img class="ui centered image" src="https://dlg9copcywnep.cloudfront.net/Content/img/company/vib.jpg" alt="ประกันภัยรถยนต์" width="50"></div></div></div></div></div></div></div></div>-->
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
            $("#cboBrandCar").change(getModelCar);
            $("#cboBrandMoto").change(getModelMoto);
        });
        function getModelCar(){
            //alert("aaaa");
            $("#cboModel").empty();
            $.ajax({ 
                type: 'GET', url: 'getAmphur.php', contentType: "application/json", dataType: 'text', data: { 'brand_code': $("#cboBrandCar").val()
                    ,'year_code': $("#cboYearCar").val()
                    , 'flagPage':"model_car" }, 
                success: function (data) {
                    //alert('bbbbb');
                    var json_obj = $.parseJSON(data);
                    //alert('bbbbb '+json_obj.length);
                    toAppend = "<option value='0' selected='' disabled=''>เลือกรุ่น</option>";
                    for (var i in json_obj)
                    {
                        if(json_obj[i].amphur_name==null) {
                            //alert('ddddd ');
                        }
                        toAppend += '<option value="'+json_obj[i].model_code+'">'+json_obj[i].model_name+'</option>';
                        //
                    }
                    $("#cboModelCar").append(toAppend);
                    $("#cboModelCar").selectpicker('refresh');
                }
            });
        }
        function getModelMoto(){
            //alert("aaaa");
            $("#cboModel").empty();
            $.ajax({ 
                type: 'GET', url: 'getAmphur.php', contentType: "application/json", dataType: 'text', data: { 'brand_code': $("#cboBrandMoto").val()
                    ,'year_code': $("#cboYearMoto").val()
                    , 'flagPage':"model_moto" }, 
                success: function (data) {
                    //alert('bbbbb');
                    var json_obj = $.parseJSON(data);
                    //alert('bbbbb '+json_obj.length);
                    toAppend = "<option value='0' selected='' disabled=''>เลือกรุ่น</option>";
                    for (var i in json_obj)
                    {
                        if(json_obj[i].amphur_name==null) {
                            //alert('ddddd ');
                        }
                        toAppend += '<option value="'+json_obj[i].model_code+'">'+json_obj[i].model_name+'</option>';
                        //
                    }
                    $("#cboModelMoto").append(toAppend);
                    $("#cboModelMoto").selectpicker('refresh');
                }
            });
        }
    </script>
</body>
</html>
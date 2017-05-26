<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<?php
@session_start();
    //require 'config.php';
    require_once("config.php");
    setIPView();
    $menu = file_get_contents('menu.php',TRUE);
    $switcher = file_get_contents('switcher.php',TRUE);
    $footer = file_get_contents('footer.php',TRUE);
    if(isset($_SESSION["status_regis"])){
        $txt = "<a href='#' class='dropdown-toggle' > ".$_SESSION["cust_name_t"]." ".$_SESSION["cust_lastname_t"]."</a>";
        $menu = str_replace('<a href="login.php" class="dropdown-toggle" >ลงชื่อเข้าระบบ</a>',$txt,$menu);
    }

  //$switcher = file_get_contents('switcher.php',TRUE);
  //$footer = file_get_contents('footer.php',TRUE);
  //$ourclient = file_get_contents('ourclient.php',TRUE);
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
</head>

<body class="header-fixed" id="body1">
    <div class="wrapper">
        <!--=== Header ===-->
        <?php echo $menu; ?>
        <!--=== End Header ===-->

        <div class="interactive-slider-v2" id="div1">
            <div class="container">
                <h1>ข้อเสนอดีๆ สำหรับครอบครัวคุณ</h1>
                <p>สะดวก รวดเร็ว มั่นใจ ไร้กังวล ซื้อประกันกับเรา ประหยัดเงินมากกว่า</p>
            </div>
        </div>

        <!--=== Content Part ===-->
        <div class="container content">
            <div class="row">
                <!-- Begin Sidebar Menu -->

                <!-- End Sidebar Menu -->

                <!-- Begin Content -->
                <div class="col-md-2">

                </div>
                <div class="col-md-10">
                    <!-- Tabs -->
                    <div class="tab-v3">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#tabCar" data-toggle="tab" id="tabCar1"><h5>ประกันรถยนต์</h5></a></li>
                            <li><a href="#tabMoto" data-toggle="tab" id="tabMoto1"><h5>ประกันรถจักรยานยนต์</h5></a></li>
                            <li><a href="#tabTravel" data-toggle="tab" id="tabTravel1"><h5>ประกันเดินทาง</h5></a></li>
                        </ul>
                        <div class="tab-content">
                            <!-- Success Forms -->
                            <div class="tab-pane fade in active" id="tabCar">
                                <form action="#" class="sky-form">
                                    <header>เลือกประเภทประกันรถยนต์</header>
                                    <fieldset>
                                        <div class="row">
                                            <div class="col col-md-3">
                                                <div class="checkbox checkbox-danger space-bottom ">
                                                    <label class="hide"><input type="checkbox"></label>
                                                    <input id="chk1" type="checkbox" checked="false">
                                                    <label for="chk1"><span>1</span></label>
                                                </div>
                                            </div>
                                            <div class="col col-md-3">
                                                <div class="checkbox checkbox-danger space-bottom ">
                                                    <label class="hide"><input type="checkbox"></label>
                                                    <input id="chk2p" type="checkbox" checked="false">
                                                    <label for="chk2p"><span>2+</span></label>
                                                </div>
                                            </div>
                                            <div class="col col-md-3">
                                                <div class="checkbox checkbox-danger space-bottom ">
                                                    <label class="hide"><input type="checkbox"></label>
                                                    <input id="chk2" type="checkbox" checked="false">
                                                    <label for="chk2"><span>2</span></label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col col-md-3">
                                                <div class="checkbox checkbox-danger space-bottom ">
                                                    <label class="hide"><input type="checkbox"></label>
                                                    <input id="chk3" type="checkbox" checked="false">
                                                    <label for="chk3"><span>3</span></label>
                                                </div>
                                            </div>
                                            <div class="col col-md-3">
                                                <div class="checkbox checkbox-danger space-bottom ">
                                                    <label class="hide"><input type="checkbox"></label>
                                                    <input id="chk3p" type="checkbox" checked="v">
                                                    <label for="chk3p"><span>3+</span></label>
                                                </div>
                                            </div>
                                            <div class="col col-md-3">
                                                <div class="checkbox checkbox-danger space-bottom ">
                                                    <label class="hide"><input type="checkbox"></label>
                                                    <input id="chkprb" type="checkbox" checked="false">
                                                    <label for="chkprb"><span>พ.ร.บ</span></label>                                                    
                                                </div>
                                            </div>
                                        </div>                                    
                                        <section>
                                            <label class="label">เลือกปีรถ</label>
                                            <label class="select state-success">
                                                <select id="cboYear">
                                                    <?php echo CboYearCar(); ?>
                                                </select>
                                                <i></i>
                                            </label>
                                            
                                        </section>
                                        <section>
                                            <label class="label">เลือกยี่ห้อรถ</label>
                                            <label class="select state-success">
                                                <select id="cboBrandCar">
                                                    <?php echo CboBrandCar();?>
                                                </select>
                                                <i></i>
                                            </label>
                                            
                                        </section>
                                        <section>
                                            <label class="label">เลือกรุ่น</label>
                                            <label class="select state-success">
                                                <select id="cboModelCar">
                                                    <?php echo ""; ?>
                                                </select>
                                                <i></i>
                                            </label>
                                            
                                        </section>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <button type="button" class="btn-u btn-lg rounded btn-u-brown" ><i class="fa fa-picture-o"></i>ค้นหา เบี้ยประกันภัยรถยนต์</button>
                                            </div>
                                        </div>
                                        
                                    </fieldset>
                                    
                                </form>
                                <!--/ Success states for elements -->
                            </div>
                            <!-- End Success Forms -->
                            <div class="tab-pane fade in" id="tabMoto">
                                <form action="#" class="sky-form">
                                    <header>เลือกประเภทประกันจักรยานยนต์</header>
                                    <fieldset>
                                        <div class="row">
                                            <div class="col col-md-3">
                                                <div class="checkbox checkbox-danger space-bottom ">
                                                    <label class="hide"><input type="checkbox"></label>
                                                    <input id="chk2p" type="checkbox" checked="false">
                                                    <label for="chk2p"><span>2+</span></label>
                                                </div>
                                            </div>
                                            <div class="col col-md-3">
                                                <div class="checkbox checkbox-danger space-bottom ">
                                                    <label class="hide"><input type="checkbox"></label>
                                                    <input id="chk2" type="checkbox" checked="false">
                                                    <label for="chk2"><span>2</span></label>
                                                </div>
                                            </div>                                            
                                        </div>

                                        <div class="row">
                                            <div class="col col-md-3">
                                                <div class="checkbox checkbox-danger space-bottom ">
                                                    <label class="hide"><input type="checkbox"></label>
                                                    <input id="chk3" type="checkbox" checked="false">
                                                    <label for="chk3"><span>3</span></label>
                                                </div>
                                            </div>
                                            <div class="col col-md-3">
                                                <div class="checkbox checkbox-danger space-bottom ">
                                                    <label class="hide"><input type="checkbox"></label>
                                                    <input id="chk3p" type="checkbox" checked="v">
                                                    <label for="chk3p"><span>3+</span></label>
                                                </div>
                                            </div>
                                            <div class="col col-md-3">
                                                <div class="checkbox checkbox-danger space-bottom ">
                                                    <label class="hide"><input type="checkbox"></label>
                                                    <input id="chkprb" type="checkbox" checked="false">
                                                    <label for="chkprb"><span>พ.ร.บ</span></label>                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <section>
                                            <label class="label">เลือกปีรถ</label>
                                            <label class="select state-success">
                                                <select id="cboYear">
                                                    <?php echo CboYearMoto(); ?>
                                                </select>
                                                <i></i>
                                            </label>
                                            
                                        </section>
                                        <section>
                                            <label class="label">เลือกยี่ห้อรถ</label>
                                            <label class="select state-success">
                                                <select id="cboBrandMoto">
                                                    <?php echo CboBrandMoto();?>
                                                </select>
                                                <i></i>
                                            </label>
                                        </section>
                                        <div class="row">
                                            <div class="col col-md-3">
                                                <label class="label">เลือกรุ่น</label>
                                                <label class="select state-success">
                                                    <select id="cboModelMoto">
                                                        <?php echo ""; ?>
                                                    </select>
                                                    <i></i>
                                                </label>
                                            </div>
                                            <div class="col col-md-3">
                                                <label class="label">เลือกซี่ซี่รถมอเตอร์ไซด์</label>
                                                <label class="select state-success">
                                                    <select id="cboMotoCC">
                                                        <?php echo ""; ?>
                                                    </select>
                                                    <i></i>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <button type="button" class="btn-u btn-lg rounded btn-u-brown" ><i class="fa fa-picture-o"></i>ค้นหา เบี้ยประกันภัยรถยนต์</button>
                                            </div>
                                        </div>
                                        
                                    </fieldset>
                                </form>
                            </div>
                            <div class="tab-pane fade in" id="tabTravel">
                                <form action="#" class="sky-form">
                                    <header>ค้นพบข้อเสนอประกันการเดินทางโดนๆ </header>
                                    <fieldset>
                                        <div class="col-md-6">
                                            <button type="button" class="btn-u btn-lg rounded btn-u-brown" ><i class="fa fa-picture-o"></i>ค้นหา เบี้ยประกันการเดินทาง</button>
                                        </div>
                                    </fieldset>
                                    
                                </form>
                            </div>
                                <!-- Error Forms -->
                                
                                <!-- End Error Forms -->

                                <!-- Disabled Forms -->
                                
                                <!-- End Disabled Forms -->
                        </div>
                    </div>
                    <!-- End Tabs-->
                </div>
                <!-- End Content -->
            </div>
        </div><!--/container-->
        <!--=== End Content Part ===-->

        <!--=== Footer Version 1 ===-->
        <?php echo $footer; ?>
        <!--=== End Footer Version 1 ===-->
    </div><!--/End Wrapepr-->

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
	<script type="text/javascript">
            jQuery(document).ready(function() {
                    App.init();
                    StyleSwitcher.initStyleSwitcher();
                    $("#cboBrandCar").change(getModelCar);
                    $("#cboBrandMoto").change(getModelMoto);
                    $("#tabCar1").click(setBackGroundCar);
                    $("#tabMoto1").click(setBackGroundMoto);
                    $("#tabTravel1").click(setBackGroundTravel);
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
            function setBackGroundCar(){
                //alert("aaa");
                //$('body').css('background-image', 'url("assets/img/bg/18-1.jpg")');interactive-slider-v2
                $("#div1").removeClass();
                $("#div1").addClass("interactive-slider-v2");
                //$.backstretch(["assets/img/bg/18-1.jpg"]);
            }
            function setBackGroundMoto(){
                $("#div1").removeClass();
                $("#div1").addClass("interactive-slider-v2-moto");
            }
            function setBackGroundTravel(){
                $("#div1").removeClass();
                $("#div1").addClass("interactive-slider-v2-travel");
            }
	</script>
	<!--[if lt IE 9]>
	<script src="assets/plugins/respond.js"></script>
	<script src="assets/plugins/html5shiv.js"></script>
	<script src="assets/plugins/placeholder-IE-fixes.js"></script>
	<script src="assets/plugins/sky-forms-pro/skyforms/js/sky-forms-ie8.js"></script>
	<![endif]-->

	<!--[if lt IE 10]>
	<script src="assets/plugins/sky-forms-pro/skyforms/js/jquery.placeholder.min.js"></script>
	<![endif]-->
</body>
</html>

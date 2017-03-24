<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
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

    
    
    <!-- CSS Page Style -->
    <link rel="stylesheet" href="assets/css/pages/page_log_reg_v2.css">

    <!-- CSS Customization -->
    <link rel="stylesheet" href="assets/css/custom.css">
    <!--<link href="assets/king-ui/css/king-ui.css" rel="stylesheet">
    <link href="assets/king-ui/css/animate.css" rel="stylesheet">
    <link href="assets/king-ui/css/owl.carousel.css" rel="stylesheet">
    <link href="assets/king-ui/css/owl.theme.css" rel="stylesheet">-->
    <!-- fonts -->
    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,400italic,700' rel='stylesheet' type='text/css'>
    <link href="assets/king-ui/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='assets/king-ui/fonts/FontAwesome.otf' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="assets/king-ui/css/linear-icons.css">
</head>

<body>
	<!--=== Content Part ===-->
	<div class="container">
		<!--Reg Block-->
		<div class="reg-block">
			<div class="reg-block-header">
				<h2>Sign Up</h2>
				<ul class="social-icons text-center">
					<li><a class="rounded-x social_facebook" data-original-title="Facebook" href="#"></a></li>
					<li><a class="rounded-x social_twitter" data-original-title="Twitter" href="#"></a></li>
					<li><a class="rounded-x social_googleplus" data-original-title="Google Plus" href="#"></a></li>
					<li><a class="rounded-x social_linkedin" data-original-title="Linkedin" href="#"></a></li>
				</ul>
				<p>Already Signed Up? Click <a class="color-green" href="page_login1.html">Sign In</a> to login your account.</p>
			</div>

			<div class="input-group margin-bottom-20">
				<span class="input-group-addon"><i class="fa fa-user"></i></span>
				<input type="text" id="reUsername" class="form-control" placeholder="Username">
			</div>
			<div class="input-group margin-bottom-20">
				<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
				<input type="text" id="reEmail" class="form-control" placeholder="Email">
			</div>
			<div class="input-group margin-bottom-20">
				<span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                <input type="password" id="rePassword" class="form-control" placeholder="Password">
			</div>
			<div class="input-group margin-bottom-30">
				<span class="input-group-addon"><i class="fa fa-key"></i></span>
                                <input type="password" id="reCPassword" class="form-control" placeholder="Confirm Password">
			</div>
			<hr>

			<div class="checkbox">
				<label>
					<input type="checkbox" id="reterms">
					I read <a target="_blank" href="page_terms.php">Terms and Conditions</a>
				</label>
			</div>

			<div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <button type="button" id="btnRegis" class="btn-u btn-block">Register</button>
                            </div>
                            <div id="loading">
                                <img id="logo-footer" class="slick-loading" src="assets/img/ajax-loader.gif" alt="">
                            </div>
                            <div id="divView"></div>
			</div>
		</div>
		<!--End Reg Block-->
	</div><!--/container-->
	<!--=== End Content Part ===-->

	<!-- JS Global Compulsory -->
	<script type="text/javascript" src="assets/plugins/jquery/jquery.min.js"></script>
	<script type="text/javascript" src="assets/plugins/jquery/jquery-migrate.min.js"></script>
	<script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<!-- JS Implementing Plugins -->
	<script type="text/javascript" src="assets/plugins/back-to-top.js"></script>
	<script type="text/javascript" src="assets/plugins/smoothScroll.js"></script>
	<script type="text/javascript" src="assets/plugins/jquery.parallax.js"></script>
        <script type="text/javascript" src="assets/plugins/backstretch/jquery.backstretch.min.js"></script>
	<!-- JS Customization -->
	<script type="text/javascript" src="assets/js/custom.js"></script>
	<!-- JS Page Level -->
	<script type="text/javascript" src="assets/js/app.js"></script>
	<script type="text/javascript" src="assets/js/plugins/style-switcher.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function() {
			App.init();
                        hideLoader();
                        btnRegisDisable();
                        $("#btnRegis").click(sendEmail);
                        $("#reterms").click(checkRegis);
                        //$("#btnRegis").
                        
                        //$("#divView").append("bbbbbbbbbbbb");
		});
                function showLoader() {
                    $("#loading").show();
                  }
                function hideLoader() {
                    //alert('bbbbb');
                    $("#loading").hide();
                }
                function btnRegisDisable(){
                    $("#btnRegis").prop("disabled",true);
                    //$('#btn_show').addClass('btn-u-blue');
                    $('#btnRegis').removeClass('btn-u');
                    //$("#btn_show").removeClass("animated fadeOut");
                }
                function btnRegisEnable(){
                    $("#btnRegis").prop("disabled",false);
                    $('#btnRegis').addClass('btn-u');
                    //$('#btn_show').removeClass('btn-u-blue');
                }
                function checkRegis(){
                    //alert("aaaaa");
                    if($("#reterms").is(':checked')==true){
                        btnRegisEnable();
                    }else{
                        btnRegisDisable();
                    }
                }
                function sendEmail(){
                    //alert('bbbbb');
                    //$("#divView").append("aaaaaaaaaaaaa");
                    //alert("aaa"+$("#reterms").is(':checked'));
                    if($("#reterms").is(':checked')==true){
                        if($("#rePassword").val()==""){
                            alert("Password ไม่สามารถว่างได้");
                            return ;
                        }
                        if($("#rePassword").val() != $("#reCPassword").val()){
                            alert("Password ไม่ตรงกัน ");
                            return ;
                        }
                        showLoader();
                        $.ajax({
                            type: 'GET', url: 'gmail.php', contentType: "application/json", dataType: 'text', 
                            data: {'flagPage': "regis"
                                , 'reUsername':$("#reUsername").val()
                                , 'reEmail':$("#reEmail").val()
                                , 'rePassword':$("#rePassword").val()
                                }, 
                            success: function (data) {
                                //alert('bbbbb '.data);
                                $("#divView").append(data);
                                $("#divView").append("<br>ขอบคุณสำหรับการสมัครสมาชิก กับManit Insurance <br>โปรดตรวจสอบ email และconfirm ");
                                hideLoader();
                            }
                        });
                    }else{
                        alert("ยังไม่ได้ Click Terms");
                    }
                }
	</script>
	<script type="text/javascript">
		$.backstretch([
			"assets/img/bg/19.jpg",
			"assets/img/bg/18.jpg",
			], {
				fade: 1000,
				duration: 7000
			});
	</script>
	<!--[if lt IE 9]>
	<script src="assets/plugins/respond.js"></script>
	<script src="assets/plugins/html5shiv.js"></script>
	<script src="assets/plugins/placeholder-IE-fixes.js"></script>
	<![endif]-->
</body>
</html>

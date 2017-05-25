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

<body class="header-fixed">
    <div class="wrapper">
        <!--=== Header ===-->
        <?php echo $menu; ?>
        <!--=== End Header ===-->

        <div class="interactive-slider-v2">
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
                            <li class="active"><a href="#home-1" data-toggle="tab"><h5>ประกันรถยนต์</h5></a></li>
                            <li><a href="#profile-1" data-toggle="tab"><h5>ประกันรถจักรยานยนต์</h5></a></li>
                            <li><a href="#messages-1" data-toggle="tab"><h5>ประกันเดินทาง</h5></a></li>
                        </ul>
                        <div class="tab-content">
                            <!-- Success Forms -->
                            <div class="tab-pane fade in active" id="home-1">
                                <form action="#" class="sky-form">
                                    <header>เลือกประเภทประกันรถยนต์</header>
                                    <fieldset>
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
                                    </fieldset>

                                    <fieldset>
                                        <section>
                                            <label class="label">เลือกปีรถ</label>
                                            <label class="select state-success">
                                                <select>
                                                    <?php echo CboYear(); ?>
                                                </select>
                                                <i></i>
                                            </label>
                                            
                                        </section>
                                        <section>
                                            <label class="label">เลือกยี่ห้อรถ</label>
                                            <label class="select state-success">
                                                <select>
                                                    <?php echo CboBrand(); ?>
                                                </select>
                                                <i></i>
                                            </label>
                                            
                                        </section>
                                    </fieldset>

                                    <fieldset>
                                        
                                    </fieldset>

                                        <fieldset>
                                                <section>
                                                        <label class="label">Radios</label>
                                                        <div class="row">
                                                                <div class="col col-4">
                                                                        <label class="radio state-success"><input type="radio" name="radio"><i class="rounded-x"></i>Alexandra</label>
                                                                        <label class="radio state-success"><input type="radio" name="radio"><i class="rounded-x"></i>Alice</label>
                                                                </div>
                                                                <div class="col col-4">
                                                                        <label class="radio state-success"><input type="radio" name="radio" checked><i class="rounded-x"></i>Avelina</label>
                                                                        <label class="radio state-success"><input type="radio" name="radio"><i class="rounded-x"></i>Basilia</label>
                                                                </div>
                                                                <div class="col col-4">
                                                                        <label class="radio state-success"><input type="radio" name="radio"><i class="rounded-x"></i>Cassandra</label>
                                                                        <label class="radio state-success"><input type="radio" name="radio"><i class="rounded-x"></i>Clemencia</label>
                                                                </div>
                                                        </div>
                                                        <div class="note note-success">Thanks for your selection.</div>
                                                </section>
                                        </fieldset>

                                        <fieldset>
                                                <section>
                                                        <label class="label">Checkboxes</label>
                                                        <div class="row">
                                                                <div class="col col-4">
                                                                        <label class="checkbox state-success"><input type="checkbox" name="checkbox"><i></i>Alexandra</label>
                                                                        <label class="checkbox state-success"><input type="checkbox" name="checkbox" checked><i></i>Alice</label>
                                                                </div>
                                                                <div class="col col-4">
                                                                        <label class="checkbox state-success"><input type="checkbox" name="checkbox"><i></i>Avelina</label>
                                                                        <label class="checkbox state-success"><input type="checkbox" name="checkbox"><i></i>Basilia</label>
                                                                </div>
                                                                <div class="col col-4">
                                                                        <label class="checkbox state-success"><input type="checkbox" name="checkbox" checked><i></i>Cassandra</label>
                                                                        <label class="checkbox state-success"><input type="checkbox" name="checkbox"><i></i>Clemencia</label>
                                                                </div>
                                                        </div>
                                                        <div class="note note-success">Thanks for your selection.</div>
                                                </section>
                                        </fieldset>

                                        <fieldset>
                                                <div class="row">
                                                        <section class="col col-5">
                                                                <label class="label">Toggles based on radios</label>
                                                                <label class="toggle state-success"><input type="radio" name="radio-toggle" checked><i class="rounded-4x"></i>Alexandra</label>
                                                                <label class="toggle state-success"><input type="radio" name="radio-toggle"><i class="rounded-4x"></i>Anastasia</label>
                                                                <label class="toggle state-success"><input type="radio" name="radio-toggle"><i class="rounded-4x"></i>Avelina</label>
                                                                <div class="note note-success">Thanks for your selection.</div>
                                                        </section>

                                                        <div class="col col-2"></div>

                                                        <section class="col col-5">
                                                                <label class="label">Toggles based on checkboxes</label>
                                                                <label class="toggle state-success"><input type="checkbox" name="checkbox-toggle" checked><i class="rounded-4x"></i>Cassandra</label>
                                                                <label class="toggle state-success"><input type="checkbox" name="checkbox-toggle"><i class="rounded-4x"></i>Clemencia</label>
                                                                <label class="toggle state-success"><input type="checkbox" name="checkbox-toggle"><i class="rounded-4x"></i>Desiderata</label>
                                                                <div class="note note-success">Thanks for your selection.</div>
                                                        </section>
                                                </div>
                                        </fieldset>

                                        <footer>
                                                <button type="submit" class="btn-u btn-u-default">Submit</button>
                                                <button type="button" class="btn-u" onclick="window.history.back();">Back</button>
                                        </footer>
                                </form>
                                <!--/ Success states for elements -->
                            </div>
                            <!-- End Success Forms -->

                                <!-- Error Forms -->
                                <div class="tab-pane fade" id="profile-1">
                                        <form action="#" class="sky-form">
                                                <header>Error states for elements</header>

                                                <fieldset>
                                                        <section>
                                                                <label class="label">Text input</label>
                                                                <label class="input state-error">
                                                                        <input type="text">
                                                                </label>
                                                                <div class="note note-error">This is a required field.</div>
                                                        </section>

                                                        <section>
                                                                <label class="label">File input</label>
                                                                <label for="file" class="input input-file state-error">
                                                                        <div class="button"><input type="file" id="file" onchange="this.parentNode.nextSibling.value = this.value">Browse</div><input type="text" readonly>
                                                                </label>
                                                                <div class="note note-error">File size must be less than 3Mb.</div>
                                                        </section>
                                                </fieldset>

                                                <fieldset>
                                                        <section>
                                                                <label class="label">Select</label>
                                                                <label class="select state-error">
                                                                        <select>
                                                                                <option value="0">Choose name</option>
                                                                                <option value="1">Alexandra</option>
                                                                                <option value="2">Alice</option>
                                                                                <option value="3">Anastasia</option>
                                                                                <option value="4">Avelina</option>
                                                                        </select>
                                                                        <i></i>
                                                                </label>
                                                                <div class="note note-error">You must select an option.</div>
                                                        </section>
                                                </fieldset>

                                                <fieldset>
                                                        <section>
                                                                <label class="label">Textarea</label>
                                                                <label class="textarea state-error">
                                                                        <textarea rows="3"></textarea>
                                                                </label>
                                                                <div class="note note-error">This is a required field.</div>
                                                        </section>
                                                </fieldset>

                                                <fieldset>
                                                        <section>
                                                                <label class="label">Radios</label>
                                                                <div class="row">
                                                                        <div class="col col-4">
                                                                                <label class="radio state-error"><input type="radio" name="radio"><i class="rounded-x"></i>Alexandra</label>
                                                                                <label class="radio state-error"><input type="radio" name="radio"><i class="rounded-x"></i>Alice</label>
                                                                        </div>
                                                                        <div class="col col-4">
                                                                                <label class="radio state-error"><input type="radio" name="radio"><i class="rounded-x"></i>Avelina</label>
                                                                                <label class="radio state-error"><input type="radio" name="radio"><i class="rounded-x"></i>Basilia</label>
                                                                        </div>
                                                                        <div class="col col-4">
                                                                                <label class="radio state-error"><input type="radio" name="radio"><i class="rounded-x"></i>Cassandra</label>
                                                                                <label class="radio state-error"><input type="radio" name="radio"><i class="rounded-x"></i>Clemencia</label>
                                                                        </div>
                                                                </div>
                                                                <div class="note note-error">You must select one option.</div>
                                                        </section>
                                                </fieldset>

                                                <fieldset>
                                                        <section>
                                                                <label class="label">Checkboxes</label>
                                                                <div class="row">
                                                                        <div class="col col-4">
                                                                                <label class="checkbox state-error"><input type="checkbox" name="checkbox"><i></i>Alexandra</label>
                                                                                <label class="checkbox state-error"><input type="checkbox" name="checkbox"><i></i>Alice</label>
                                                                        </div>
                                                                        <div class="col col-4">
                                                                                <label class="checkbox state-error"><input type="checkbox" name="checkbox"><i></i>Avelina</label>
                                                                                <label class="checkbox state-error"><input type="checkbox" name="checkbox"><i></i>Basilia</label>
                                                                        </div>
                                                                        <div class="col col-4">
                                                                                <label class="checkbox state-error"><input type="checkbox" name="checkbox"><i></i>Cassandra</label>
                                                                                <label class="checkbox state-error"><input type="checkbox" name="checkbox"><i></i>Clemencia</label>
                                                                        </div>
                                                                </div>
                                                                <div class="note note-error">You must select at least one option.</div>
                                                        </section>
                                                </fieldset>

                                                <fieldset>
                                                        <div class="row">
                                                                <section class="col col-5">
                                                                        <label class="label">Toggles based on radios</label>
                                                                        <label class="toggle state-error"><input type="radio" name="radio-toggle"><i class="rounded-4x"></i>Alexandra</label>
                                                                        <label class="toggle state-error"><input type="radio" name="radio-toggle"><i class="rounded-4x"></i>Anastasia</label>
                                                                        <label class="toggle state-error"><input type="radio" name="radio-toggle"><i class="rounded-4x"></i>Avelina</label>
                                                                        <div class="note note-error">You must select one option.</div>
                                                                </section>

                                                                <div class="col col-2"></div>

                                                                <section class="col col-5">
                                                                        <label class="label">Toggles based on checkboxes</label>
                                                                        <label class="toggle state-error"><input type="checkbox" name="checkbox-toggle"><i class="rounded-4x"></i>Cassandra</label>
                                                                        <label class="toggle state-error"><input type="checkbox" name="checkbox-toggle"><i class="rounded-4x"></i>Clemencia</label>
                                                                        <label class="toggle state-error"><input type="checkbox" name="checkbox-toggle"><i class="rounded-4x"></i>Desiderata</label>
                                                                        <div class="note note-error">You must select at least one option.</div>
                                                                </section>
                                                        </div>
                                                </fieldset>

                                                <footer>
                                                        <button type="submit" class="btn-u btn-u-default">Submit</button>
                                                        <button type="button" class="btn-u" onclick="window.history.back();">Back</button>
                                                </footer>
                                        </form>
                                        <!--/ Error states for elements -->
                                </div>
                                <!-- End Error Forms -->

                                <!-- Disabled Forms -->
                                <div class="tab-pane fade" id="messages-1">
                                        <form action="#" class="sky-form">
                                                <header>Disabled states for elements</header>

                                                <fieldset>
                                                        <section>
                                                                <label class="label">Text input</label>
                                                                <label class="input state-disabled">
                                                                        <input type="text" disabled>
                                                                </label>
                                                        </section>
                                                </fieldset>

                                                <fieldset>
                                                        <section>
                                                                <label class="label">Select</label>
                                                                <label class="select state-disabled">
                                                                        <select name="" disabled id="">
                                                                                <option value="0"></option>
                                                                                <option value="1">Alexandra</option>
                                                                                <option value="2">Alice</option>
                                                                                <option value="3">Anastasia</option>
                                                                                <option value="4">Avelina</option>
                                                                        </select>
                                                                        <i></i>
                                                                </label>
                                                        </section>
                                                </fieldset>

                                                <fieldset>
                                                        <section>
                                                                <label class="label">Textarea</label>
                                                                <label class="textarea state-disabled">
                                                                        <textarea rows="3" disabled></textarea>
                                                                </label>
                                                        </section>
                                                </fieldset>

                                                <fieldset>
                                                        <section>
                                                                <label class="label">Radios</label>
                                                                <div class="row">
                                                                        <div class="col col-4">
                                                                                <label class="radio state-disabled"><input type="radio" name="radio" disabled><i class="rounded-x"></i>Alexandra</label>
                                                                                <label class="radio state-disabled"><input type="radio" name="radio" disabled><i class="rounded-x"></i>Alice</label>
                                                                        </div>
                                                                        <div class="col col-4">
                                                                                <label class="radio state-disabled"><input type="radio" name="radio" disabled><i class="rounded-x"></i>Avelina</label>
                                                                                <label class="radio state-disabled"><input type="radio" name="radio" disabled><i class="rounded-x"></i>Basilia</label>
                                                                        </div>
                                                                        <div class="col col-4">
                                                                                <label class="radio state-disabled"><input type="radio" name="radio" disabled><i class="rounded-x"></i>Cassandra</label>
                                                                                <label class="radio state-disabled"><input type="radio" name="radio" disabled><i class="rounded-x"></i>Clemencia</label>
                                                                        </div>
                                                                </div>
                                                        </section>
                                                </fieldset>

                                                <fieldset>
                                                        <section>
                                                                <label class="label">Checkboxes</label>
                                                                <div class="row">
                                                                        <div class="col col-4">
                                                                                <label class="checkbox state-disabled"><input type="checkbox" name="checkbox" disabled><i></i>Alexandra</label>
                                                                                <label class="checkbox state-disabled"><input type="checkbox" name="checkbox" disabled><i></i>Alice</label>
                                                                        </div>
                                                                        <div class="col col-4">
                                                                                <label class="checkbox state-disabled"><input type="checkbox" name="checkbox" disabled><i></i>Avelina</label>
                                                                                <label class="checkbox state-disabled"><input type="checkbox" name="checkbox" disabled><i></i>Basilia</label>
                                                                        </div>
                                                                        <div class="col col-4">
                                                                                <label class="checkbox state-disabled"><input type="checkbox" name="checkbox" disabled><i></i>Cassandra</label>
                                                                                <label class="checkbox state-disabled"><input type="checkbox" name="checkbox" disabled><i></i>Clemencia</label>
                                                                        </div>
                                                                </div>
                                                        </section>
                                                </fieldset>

                                                <fieldset>
                                                        <div class="row">
                                                                <section class="col col-5">
                                                                        <label class="label">Toggles based on radios</label>
                                                                        <label class="toggle state-disabled"><input type="radio" name="radio-toggle" disabled><i class="rounded-4x"></i>Alexandra</label>
                                                                        <label class="toggle state-disabled"><input type="radio" name="radio-toggle" disabled><i class="rounded-4x"></i>Anastasia</label>
                                                                        <label class="toggle state-disabled"><input type="radio" name="radio-toggle" disabled><i class="rounded-4x"></i>Avelina</label>
                                                                </section>

                                                                <div class="col col-2"></div>

                                                                <section class="col col-5">
                                                                        <label class="label">Toggles based on checkboxes</label>
                                                                        <label class="toggle state-disabled"><input type="checkbox" name="checkbox-toggle" disabled><i class="rounded-4x"></i>Cassandra</label>
                                                                        <label class="toggle state-disabled"><input type="checkbox" name="checkbox-toggle" disabled><i class="rounded-4x"></i>Clemencia</label>
                                                                        <label class="toggle state-disabled"><input type="checkbox" name="checkbox-toggle" disabled><i class="rounded-4x"></i>Desiderata</label>
                                                                </section>
                                                        </div>
                                                </fieldset>

                                                <footer>
                                                        <button type="submit" disabled class="button state-disabled">Submit</button>
                                                        <button type="button" class="button state-disabled button-secondary" onclick="window.history.back();">Back</button>
                                                </footer>
                                        </form>
                                        <!--/ Disabled states for elements -->
                                </div>
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
	<script type="text/javascript" src="assets/js/plugins/style-switcher.js"></script>
        <script type="text/javascript" src="assets/js/forms/order.js"></script>
	<script type="text/javascript" src="assets/js/forms/review.js"></script>
	<script type="text/javascript" src="assets/js/forms/checkout.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function() {
			App.init();
			StyleSwitcher.initStyleSwitcher();
		});
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

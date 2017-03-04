<!DOCTYPE html>
<?php
$menu = file_get_contents('menu.php',TRUE);
$footer = file_get_contents('footer.php',TRUE);
?>
<html lang="en">

<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Bootstrap UI Kit / Components">
<meta name="keywords" content="bootstrap ui kit, bootstrap components, html5 / css3 ui kit, web ui kit" />
<meta name="author" content="KingStudio.ro">

<!-- favicon -->
<link rel="icon" href="images/favicon.png">
<!-- page title -->
<title>ประกันรถยนต์ Manit</title>
<!-- bootstrap css -->
<link href="bootstrap-3.3.7/css/bootstrap.min.css" rel="stylesheet">
<!-- css -->
<link rel="stylesheet" href="css/bootstrap-select.css" >
<link href="css/king-ui.css" rel="stylesheet">
<link href="css/animate.css" rel="stylesheet">
<link href="css/owl.carousel.css" rel="stylesheet">
<link href="css/owl.theme.css" rel="stylesheet">
<!-- fonts -->
<link href='https://fonts.googleapis.com/css?family=Lato:300,400,400italic,700' rel='stylesheet' type='text/css'>
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href='fonts/FontAwesome.otf' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/linear-icons.css">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<style>
    .box-content {
    display: inline-block;
    width: 200px;
    padding: 10px;
}
</style>
</head>

<body>

<?php echo $menu; ?>
<!-- your content here -->

<div class="container">
    <div class="row">
        <div class="col-md-12"><br><br>
            <div class="col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                      <h3 class="panel-title">ฉันกำลังมองหาประกันรถยนต์</h3>
                    </div>
                    <div class="panel-body">
                        <div class="checkbox checkbox-danger space-bottom">
                            <label class="hide"><input type="checkbox"></label>
                            <input id="checkbox11" type="checkbox" checked="">
                            <label for="checkbox11"><span>1. ประกันรถยนต์ชั้น 1</span></label>
                        </div>
                        <div class="checkbox checkbox-danger space-bottom">
                            <label class="hide"><input type="checkbox"></label>
                            <input id="checkbox12" type="checkbox" checked="">
                            <label for="checkbox12"><span>2. ปีรถ</span></label>
                        </div>
                        <div class="checkbox checkbox-danger space-bottom">
                            <label class="hide"><input type="checkbox"></label>
                            <input id="checkbox13" type="checkbox" checked="">
                            <label for="checkbox13"><span>3. ยี่ห้อรถ</span></label>
                        </div>
                        <div class="checkbox checkbox-danger space-bottom">
                            <label class="hide"><input type="checkbox"></label>
                            <input id="checkbox14" type="checkbox" checked="">
                            <label for="checkbox14"><span>4. รุ่นรถ</span></label>
                        </div>
                        <div class="checkbox checkbox-danger space-bottom">
                            <label class="hide"><input type="checkbox"></label>
                            <input id="checkbox15" type="checkbox" checked="">
                            <label for="checkbox15"><span>5. รุ่นย่อย</span></label>
                        </div>
                        <div class="checkbox checkbox-danger space-bottom">
                            <label class="hide"><input type="checkbox"></label>
                            <input id="checkbox16" type="checkbox" checked="">
                            <label for="checkbox16"><span>6. บริษัทประกันภัยที่ใช้อยู่</span></label>
                        </div>
                        <!--<ul class="list-group">
                            <li class="list-group-item-warning" >1 ประกันรถยนต์ชั้น 1 </li>
                            <li class="list-group-item-danger" >2 ปีรถ </li>
                            <li class="list-group-item-text " >3 ยี่ห้อรถ </li>
                            <li class="list-group-item-success" >4  รุ่นรถ </li>
                            <li class="list-group-item-success" >5 รุ่นย่อย </li>
                            <li class="list-group-item-info" >6 บริษัทประกันภัยที่ใช้อยู่</li>
                        </ul>-->
                    </div>
                </div><!-- / panel -->                
            </div>
            <div class="col-md-6">
                <div class="panel panel-danger" id="divInsur">
                    <div class="panel-heading">
                        <h3 class="panel-title">เลือกชั้นประกันรถยนต์ </h3>
                    </div>
                    <div class="panel-body">
                        <div class="form-group">
                            <div class="checkbox checkbox-danger space-bottom ">
                                <label class="hide"><input type="checkbox"></label>
                                <input id="checkbox1" type="checkbox" checked="">
                                <label for="checkbox1"><span>1</span></label>
                            </div>
                            <div class="checkbox checkbox-danger space-bottom col-md-4">
                                <label class="hide"><input type="checkbox"></label>
                                <input id="checkbox2" type="checkbox" checked="">
                                <label for="checkbox2"><span>2</span></label>
                            </div>
                            <div class="checkbox checkbox-danger space-bottom col-md-4 col-md-offset-1">
                                <label class="hide"><input type="checkbox"></label>
                                <input id="checkbox2p" type="checkbox" checked="">
                                <label for="checkbox2p"><span>2+</span></label>
                            </div>
                            
                            <div class="checkbox checkbox-danger space-bottom col-md-4">
                                <label class="hide"><input type="checkbox"></label>
                                <input id="checkbox3" type="checkbox" checked="">
                                <label for="checkbox3"><span>3</span></label>
                            </div>
                            <div class="checkbox checkbox-danger space-bottom col-md-4 col-md-offset-1">
                                <label class="hide"><input type="checkbox"></label>
                                <input id="checkbox3p" type="checkbox" checked="">
                                <label for="checkbox3p"><span>3+</span></label>
                            </div>
                            <div class="checkbox checkbox-danger space-bottom col-md-4">
                                <label class="hide"><input type="checkbox"></label>
                                <input id="checkboxprb" type="checkbox" checked="">
                                <label for="checkboxprb"><span>พ.ร.บ.</span></label>
                            </div>
                            <div class="checkbox checkbox-danger space-bottom col-md-1">
                                <button type="button" class="btn btn-info-filled btn-rounded" id="btnCarInsur"><span>เปรียบเทียบ</span><i class="fa fa-rocket"></i></button>
                            </div>
                            
                        </div>
                        
                    </div>
                </div><!-- / panel -->
                <div class="panel panel-primary" id="divInsurYear">
                    <div class="panel-heading">
                        <h3 class="panel-title">เลือกปีรถยนต์ </h3>
                    </div>
                    <div class="panel-body form-group-sm">
                        <div class="col-md-8">
                            <select class="selectpicker show-tick" data-width="100%" data-style="btn-primary" id="cboInsurYear">
                                <option>2017</option>
                                <option>2016</option>
                                <option>2015</option>
                            </select>
                        </div>
                        <div class="col-md-8">
                            <select class="selectpicker show-tick" data-width="100%" id="cboInsurBrand">
                                <option>TOYOTA</option>
                                <option>HONDA</option>
                                <option>MAZDA</option>
                                <option>NISSAN</option>
                                <option>ISUZU</option>
                                <option>BENZ</option>
                                <option>BMW</option>
                            </select>
                        </div>
                        <div class="col-md-8">
                            <select class="selectpicker  show-tick" data-width="100%" data-style="btn-primary" id="cboInsurModel">
                                <option>CIIVIC</option>
                                <option>CITY</option>
                                <option>MAZDA</option>
                                <option>NISSAN</option>
                                <option>ISUZU</option>
                                <option>BENZ</option>
                                <option>BMW</option>
                            </select>
                        </div>
                        <div class="col-md-8">
                            <select class="selectpicker  show-tick" data-width="100%" id="cboInsurModelSub">
                                <option>วิริยะ</option>
                                <option>HONDA</option>
                                <option>MAZDA</option>
                                <option>NISSAN</option>
                                <option>ISUZU</option>
                                <option>BENZ</option>
                                <option>BMW</option>
                            </select>
                        </div>
                        <div class="col-md-8">
                            <select class="selectpicker  show-tick" data-width="100%" data-style="btn-info" id="cboInsurComp">
                                <option>วิริยะ</option>
                                <option>HONDA</option>
                                <option>MAZDA</option>
                                <option>NISSAN</option>
                                <option>ISUZU</option>
                                <option>BENZ</option>
                                <option>BMW</option>
                            </select>
                        </div>
                        <div class="checkbox checkbox-danger space-bottom col-md-8" data-width="100%">
                            <button type="button" class="btn btn-pill btn-info-filled btn-block" id="btnCarInsur"><span>เปรียบเทียบ</span><i class="fa fa-rocket"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>








<?php echo $footer; ?>
<!-- javascript -->
<script src="js/jquery.min.js"></script>
<script src="bootstrap-3.3.7/js/bootstrap.min.js"></script>
<script src="js/validator.min.js" type="text/javascript"></script>
<script src="js/form-scripts.js" type="text/javascript"></script>
<script src="js/bootstrap-select.min.js"></script>
<!-- bootstrap javascript plugins -->
<!-- / sliders -->
<script src="js/owl.carousel.min.js"></script>
<!-- cards carousel -->
<script>

    $(document).ready(function($) {
      $("#card-carousel").owlCarousel();
    });

    $("body").data("page", "frontpage");

</script>
<!-- / cards carousel -->
<!-- image carousel -->
<script>
    $(document).ready(function() {
      $("#image-carousel").owlCarousel({
        items : 4,
        itemsDesktop : [1199,3],
        itemsDesktopSmall : [979,3]
      });

    });
</script>
<!-- / image carousel -->
<!-- posts carousel -->
<script>
    $(document).ready(function() {
      $("#posts-carousel").owlCarousel({
        items : 4,
        itemsDesktop : [1199,3],
        itemsDesktopSmall : [979,3]
      });

    });
</script>
<!-- / posts carousel -->
<!-- posts carousel 3col -->
<script>
    $(document).ready(function() {
      $("#posts-carousel-3col").owlCarousel({
        items : 3,
        itemsDesktop : [1199,3],
        itemsDesktopSmall : [979,3]
      });

    });
</script>
<!-- / posts carousel 3col -->
<!-- image slider -->
<script>
$(document).ready(function() {
 
    $("#image-slider").owlCarousel({

        navigation : false, // Show next and prev buttons
        slideSpeed : 300,
        paginationSpeed : 400,
        singleItem:true

    });
    $("#btnCarInsur").click(showdivInsurYear);
    hidedivInsurYear();
    function hidedivInsurYear(){
        $("#divInsurYear").hide();
    }
    function showdivInsurYear(){
        $("#divInsurYear").show();
        hidedivInsur();
    }
    function hidedivInsur(){
        $("#divInsur").hide();
    }
});
</script>
<!-- / image slider -->
<!-- / sliders -->
<!-- facts counter -->
<script src="js/jquery.countTo.js"></script>
 <script type="text/javascript">
      $('.timer').countTo({
        refreshInterval: 60,
        formatter: function (value, options) {
          return value.toFixed(options.decimals);
        },
      });
</script>
<!-- / facts counter -->
<!-- google maps -->
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBA40uewXP25u1A4o9u8ueBimZZwIdNLkY"></script>
<script src="js/map.js"></script>
<script src="js/map-full.js"></script>
<!-- / google maps -->
<!-- portfolio script -->
<script src="js/jquery.shuffle.min.js"></script>
<script src="js/custom.js"></script>
<!-- / portfolio script -->
<!-- / javascript -->
</body>

</html>
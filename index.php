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
<meta name="author" content="nakoyasoft.com">

<!-- favicon -->
<link rel="icon" href="images/favicon.png">
<!-- page title -->
<title>ประกันรถยนต์ Manit</title>
<!-- bootstrap css -->
<link href="bootstrap-3.3.7/css/bootstrap.min.css" rel="stylesheet">
<!-- css -->
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
<div id="light-slider" class="carousel slide">  
      <div class="carousel-inner">
        <!-- slide 1 -->
        <div class="item active slide1">
          <div class="container">
            <div class="carousel-caption">
              <div class="row">
                <div class="col-md-12 slider-content">
                  <h3 class="slide-title animated fadeInDown"><span class="text-primary">Manit </span>ประหยัดเงินมากกว่า</h3>
                  <h5 class="slide-text animated fadeIn">ค้นพบข้อเสนอโดนๆ ให้คุณซื้อประกันออนไลน์
แบบไร้กังวลและได้รับความคุ้มครองทันที สะดวกกว่า</h5><br><br><br><br><br><br><br><br><br>
                  <!--<a href="#" class="page-scroll btn btn-lg btn-default-filled btn-pill animated fadeInUp">Find Out More</a>
                  <a href="#" class="page-scroll btn btn-lg btn-primary-filled btn-pill animated fadeInUp">Download Now</a>-->
                </div><!-- slider-content -->
              </div><!-- / row -->
            </div><!-- / carousel-caption -->
          </div><!-- / container -->
        </div><!-- / slide 1 -->
        <!-- slide 2 -->

      </div><!-- /carousel-inner -->
      <!-- controls -->
      <a class="left carousel-control" href="#light-slider" data-slide="prev"><span class="lnr lnr-chevron-left"></span></a>
      <a class="right carousel-control" href="#light-slider" data-slide="next"><span class="lnr lnr-chevron-right"></span></a>
      <!-- / controls -->
</div>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <ul class="nav nav-pills" role="tablist">
                  <li class="active"><a href="#tab1" role="tab" data-toggle="tab" aria-expanded="true">ประกันรถยนต์</a></li>
                  <li class=""><a href="#tab2" role="tab" data-toggle="tab" aria-expanded="false">ประกันรถจักรยานยนต์</a></li>
                </ul>
                <div class="tab-content">
                    
                    <div role="tabpanel" class="tab-pane animated fadeIn active" id="tab1">
                        <div class="col-md-6">
                            <h1>ประกันรถยนต์</h1>ค้นพบข้อเสนอประกันรถยนต์โดนๆ ซื้อ พ.ร.บ. ต่อประกันรถยนต์ โดยบริษัทประกันภัยชั้นนำมากกว่า 30 บริษัท
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <button type="button" class="btn btn-success btn-rounded btn-block" id="btnCarInsur"><i class="glyphicon glyphicon-search"></i><span><strong>ค้นหาประกันรถยนต์เลย!</strong></span></button>
                            <div class="box-content">
                                <p>หรือ</p>
                            </div>
                            <button type="button" class="btn btn-warning btn-pill btn-block" id="btnCarPRB"><i class="glyphicon glyphicon-comment"></i><span>ค้นหาเฉพาะ พ.ร.บ</span></button>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane animated fadeIn" id="tab2">
                        <div class="col-md-6">
                            <h2>ประกันรถจักรยานยนต์</h2>ค้นพบข้อเสนอประกันรถจักรยานยนต์โดนๆ โดยบริษัทประกันภัยชั้นนำ
                        </div>
                        
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <button type="button" class="btn btn-success btn-rounded btn-block" id="btnCarInsur"><i class="glyphicon glyphicon-search"></i><span><strong>ค้นหาประกันรถจักรยานยนต์เลย!</strong></span></button>
                            <div class="box-content">
                                <p>หรือ</p>
                            </div>
                            <button type="button" class="btn btn-warning btn-pill btn-block" id="btnCarPRB"><i class="glyphicon glyphicon-comment"></i><span>ค้นหาเฉพาะ พ.ร.บ</span></button>
                        </div>
                    </div>
                
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</div>
<br><br><br>
<div class="container">
    <div class="row">
    <div id="posts-carousel" class="owl-carousel">
        <div class="blog block carousel-post text-center">
            <img src="images/compare.png" alt="">
            <h5>อิสระในการเลือก</h5>
            <p>เราให้บริการแพลทฟอร์มเปรียบเทียบแผนประกัน แต่อิสระในการเลือกเป็นของคุณ</p>
            <a href="#">Read More</a>
        </div><!-- / carousel-post -->
        <div class="blog block carousel-post text-center">
            <img src="images/protection.png" alt="">
            <h5>คุ้มครองทันที</h5>
            <p>ให้คุณซื้อประกันออนไลน์แบบไร้กังวลและได้รับความคุ้มครองทันที</p>
            <a href="#">Read More</a>
        </div><!-- / carousel-post -->
        <div class="blog block carousel-post text-center">
            <img src="images/best-deals.png" alt="">
            <h5>ข้อเสนอที่ดีที่สุด</h5>
            <p>เราเฟ้นหาข้อเสนอประกันที่ลงตัวที่สุดสำหรับคุณ จากกรมธรรม์อันหลากหลาย</p>
            <a href="#">Read More</a>
        </div><!-- / carousel-post -->
        <div class="blog block carousel-post text-center">
            <img src="images/support.png" alt="">
            <h5>บริการด้วยใจ</h5>
            <p>ทีมงานของเราพร้อมให้บริการคุณเสมอเมื่อต้องการความช่วยเหลือ</p>
            <a href="#">Read More</a>
        </div><!-- / carousel-post -->

    </div>
    <br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-offset-4">   
                    ลูกค้าได้ค้นพบข้อเสนอพิเศษที่ถูกใจมากกว่า 1,000,000 กรมธรรม์                
            </div>
            <div class="col-md-offset-4">
                แพลทฟอร์มประกันออนไลน์ ให้คุณเลือกซื้อประกันรถยนต์ ประกันรถยนต์ชั้น 1 ประกันรถยนต์ชั้น 2 ประกันรถยนต์ชั้น 2+ ประกันรถยนต์ชั้น 3+ ประกันรถยนต์ชั้น 3 ซื้อ พ.ร.บ. ต่อประกัน ชำระเงินแล้ว ได้รับความคุ้มครองทันที จากบริษัทประกันมากกว่า 30 บริษัท
            </div>
        </div>
        
    </div>
    <br><br>
    <div class="col-md-4">
      <div class="card">
        <img class="card-img-top" src="images/customer_support.jpg" alt="">
        <div class="card-block">
          <h3 class="card-title">บริการด้วยใจ</h3>
          <p class="card-text">ทีมงานบริการด้วยใจ พร้อมให้บริการ วันจันทร์ ถึง วันศุกร์ เวลา 08:00 น.- 18:00 น. หรือติดต่อขอความช่วยเหลือผ่านช่องทางบริการทางอีเมล </p>
          <a href="#" class="btn card-btn btn-primary-filled">Find Out More</a>
        </div>
      </div><!-- / .card -->
    </div><!-- / col-md-4 -->
    <div class="col-md-4">
      <div class="card">
        <img class="card-img-top" src="images/360x200.jpg" alt="">
        <div class="card-block">
          <h3 class="card-title">Card Title</h3>
          <p class="card-text">Vestibulum ac fringilla ligula. Nam volutpat  est non scelerisque.</p>
          <a href="#" class="btn card-btn btn-primary-filled">Find Out More</a>
        </div>
      </div><!-- / .card -->
    </div><!-- / col-md-4 -->
    <div class="col-md-4">
      <div class="card">
        <img class="card-img-top" src="images/360x200.jpg" alt="">
        <div class="card-block">
          <h3 class="card-title">Card Title</h3>
          <p class="card-text">Vestibulum ac fringilla ligula. Nam volutpat  est non scelerisque.</p>
          <a href="#" class="btn card-btn btn-primary-filled">Find Out More</a>
        </div>
      </div><!-- / .card -->
    </div><!-- / col-md-4 -->
    
    <br><br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-offset-4">   
                    ช่องทางการชำระเงิน            
            </div>
        </div>
    </div>
    
    
    <div id="cards-carousel">
      <div class="container">
        <div id="card-carousel" class="owl-carousel">
          <div class="card">
            <div class="card-block">
              <img class="card-img-inside" src="images/kbank.png" alt="">
              
            </div>
          </div><!-- / .card -->
          <div class="card">
            <div class="card-block">
              <img class="card-img-inside" src="images/visa.png" alt="">
              
            </div>
          </div><!-- / .card -->
          <div class="card">
            <div class="card-block">
              <img class="card-img-inside" src="images/mastercard.png" alt="">
              
            </div>
          </div><!-- / .card -->
          <div class="card">
            <div class="card-block">
              <img class="card-img-inside" src="images/counter_service.png" alt="">
              
            </div>
          </div><!-- / .card -->
          <div class="card">
            <div class="card-block">
              <img class="card-img-inside" src="images/180x120.jpg" alt="">
              
            </div>
          </div><!-- / .card -->
          <div class="card">
            <div class="card-block">
              <img class="card-img-inside" src="images/180x120.jpg" alt="">
              
            </div>
          </div><!-- / .card -->
          <div class="card">
            <div class="card-block">
              <img class="card-img-inside" src="images/180x120.jpg" alt="">
              
            </div>
          </div><!-- / .card -->
          <div class="card">
            <div class="card-block">
              <img class="card-img-inside" src="images/180x120.jpg" alt="">
              
            </div>
          </div><!-- / .card -->
          <div class="card">
            <div class="card-block">
              <img class="card-img-inside" src="images/180x120.jpg" alt="">
              
            </div>
          </div><!-- / .card -->
          <div class="card">
            <div class="card-block">
              <img class="card-img-inside" src="images/180x120.jpg" alt="">
              
            </div>
          </div><!-- / .card -->
        </div>
      </div><!-- / container -->
    </div>
    
    </div>
</div>
<?php echo $footer; ?>


    
    
    
    
<!-- javascript -->
<script src="js/jquery.min.js"></script>
<script src="bootstrap-3.3.7/js/bootstrap.min.js"></script>
<script src="js/validator.min.js" type="text/javascript"></script>
<script src="js/form-scripts.js" type="text/javascript"></script>
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
    $("#btnCarInsur").click(openCarInsur);
    function openCarInsur(){
        //alert("aaaaa");
        window.location.href = "carinsur.php";
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
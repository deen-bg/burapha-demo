<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Site Metas -->
    <title>Burapha</title>
    <meta name="keywords" content="สินเชื่อรถยนต์, ปัญหาด้านการเงิน, จำนำเล่มทะเบียน, ขอสินเชื่อ, ปิดบัญชี, รีไฟแนนซ์, จำนำจอด">
    <meta name="description" content="บริการรับจัดไฟแนนซ์ รีไฟแนนซ์ ให้คำปรึกษาทางด้านสินเชื่อรถยนต์ จำนำจอด เพราะทุกปัญหาของคุณย่อมมีทางออก">
    <meta name="author" content="Brick House Solutions">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="<?=base_url('./assets/images/LOGOjumnumjod.png');?>" type="image/x-icon" />
    <link rel="apple-touch-icon" href="<?=base_url('./assets/images/LOGOjumnumjod.png');?>" />
    

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?=base_url('./assets/css/bootstrap.min.css');?>">
    <!-- Pogo Slider CSS -->
    <link rel="stylesheet" href="<?=base_url('./assets/css/pogo-slider.min.css');?>">
    <!-- Site CSS -->
    <link rel="stylesheet" href="<?=base_url('./assets/css/style.css');?>">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="<?=base_url('./assets/css/responsive.css');?>">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?=base_url('./assets/css/custom.css');?>">
<style>
  
.column div {
	position: relative;
	/* margin: 0 0 0 25px; */
	padding: 0;
}
.column div span {
	position: absolute;
	bottom: -20px;
	left: 0;
	z-index: -1;
	display: block;
	margin: 0;
	padding: 0;
	color: #444;
	font-size: 18px;
	text-decoration: none;
	text-align: center;
	-webkit-transition: .3s ease-in-out;
	transition: .3s ease-in-out;
}


/* Zoom In #1 */
.hover01 figure img {
	-webkit-transform: scale(1);
	transform: scale(1);
	-webkit-transition: .3s ease-in-out;
	transition: .3s ease-in-out;
  opacity: 1;
}
.hover01 figure:hover img {
	-webkit-transform: scale(1.3);
	transform: scale(1.3);
}
</style>
</head>

<!-- <body id="home" class="container-fluid" data-spy="scroll" data-target="#navbar-wd" data-offset="98" width="100%"> -->
<body class="container-fluid" width="100%" style="overflow-x: hidden;" >
<div class="container-fluid" style="overflow-x: hidden;">
  <!-- LOADER -->
  <div id="preloader">
    <div class="loader">
      <img src="<?=base_url('./assets/images/loader.gif');?>" alt="#" />
    </div>
  </div>
  <!-- END LOADER -->
  <!-- Start header -->
  <header class="top-header">
    <nav class="navbar header-nav navbar-expand-lg">
      <!-- <div class="container-fluid"> -->
        <marquee width="100%" direction="left" height="120px">
          <img src="<?=base_url('./assets/images/LOGOjumnumjod.png');?>" alt="รับจำนำจอด" style="height: 100px;padding-right: 30px;"  ><span>&nbsp;รับจำนำจอด-0991101119</span>
        </marquee>            
      <!-- </div> -->
    </nav>
  </header>
  <!-- <div class="container-fluid"> -->
    <!-- End header -->
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="<?=base_url('./assets/images/banner.png');?>" alt="รับจำนำจอด" class="="img-responsive >
        </div>
      </div>
    </div>
    <!-- contact button -->
    <div id="contentDsc">
      <div class="container-fluid">
        <div class="row">
                <div class="col-lg-12 text-center">
                    <h1 class="black-txt" id="head-txt-banner1" >รับจำนำจอดรถยนต์ทุกรุ่น รถเก๋ง รถกระบะ รถตู้</h1>
                    <h1 class="black-txt" id="head-txt-banner2">รถติดไฟแนนซ์ ค้างค่างวดเราก็รับ อนุมัติไว รับเงินทันที</h1>
                    <h1 class="black-txt" id="head-txt-banner3">ไม่ใช้คนค้ำประกัน ไม่เช็คแบล็คลิสต์ รับจำนำจอดเท่านั้น</h1>
                    <br>
                    <p>
                      <a href="tel:0991101119" style="color: #ffffff;">
                        <button type="button" class="btn btn-danger" style="
                          font-size: 28px;
                          font-family: 'sukhumvit_setbold';
                          letter-spacing: 1px;
                          border-radius: 30px;
                          width: 270px;"><img src="<?=base_url('./assets/images/icon/phone1-68x64.png');?>" align="left" style="
                            width: 46px;
                            height: auto;
                          ">&nbsp;0991101119
                        </button>
                      </a>
                    </p>
                    <p>
                      <a href="https://line.me/R/ti/p/~0991101119" target="_blank" style="color: #ffffff;">
                        <button type="button" class="btn btn-success" style="
                          font-size: 20px;
                          color: #ffffff;
                          font-family: 'sukhumvit_setbold';
                          letter-spacing: 1px;
                          border-radius: 30px;
                          width: 270px;
                          padding-top: 13px;">
                          <img src="<?=base_url('./assets/images/icon/line-icon.png');?>" align="left" style="
                            width: 46px;
                            height: auto;
                          ">&nbsp;refinancejumnumcar                  
                        </button>
                      </a>  
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- concept -->
    <div id="contentConcept">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 text-center">
              <h1 class="black-txt" id="concept-title">3 ขั้นตอนง่ายๆ อนุมัติไว</h1>
            </div>
          </div>
          <!-- card -->
          <div class="row">
            <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
              <div class="" style="background-color: none !important; border: none;" >
              <!-- animation hover1 -->
                <div class="hover01 column">
                  <div>
                    <figure>
                      <img class="card-img-top" src="<?=base_url('./assets/images/concept/c_1.png');?>" alt="Card image cap">
                    </figure>
                  </div>
                </div>

                
                <div class="card-body">
                  <h2 class="black-txt text-center" id="txt-confirm1">นัดดูสภาพรถยนต์ ประเมินราคา</h2>
                  <!-- <h2 class="black-txt text-center"></h2> -->
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
              <div class="" style="background-color: none; border: none;">
                <!-- animation hover1 -->
                <div class="hover01 column">
                  <div>
                    <figure>
                      <img class="card-img-top" src="<?=base_url('./assets/images/concept/c_2.png');?>" alt="Card image cap">
                    </figure>
                  </div>
                </div>
                <div class="card-body">
                  <h2 class="black-txt text-center" id="txt-confirm2">เตรียมเอกสารเซ็นสัญญา</h2>
                  <!-- <h2 class="black-txt text-center"></h2> -->
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
              <div class="" style="background-color: none; border: none;">
                <div class="hover01 column">
                  <div>
                    <figure>
                      <img class="card-img-top" src="<?=base_url('./assets/images/concept/c_3.png');?>" alt="Card image cap">
                    </figure>
                  </div>
                </div>
                <div class="card-body">
                  <h2 class="black-txt text-center" id="txt-confirm3">รับเงินสดทันที</h2>
                  <!-- <h2 class="black-txt text-center"></h2> -->
                </div>
              </div>
            </div>
          </div>

          <!-- end card -->
        </div>
    </div>
    <!-- end -->
    <!-- เอกสารที่ต้องใช้ -->
    <div id="contentDsc">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                  <h1 class="black-txt" id="conceptHead-txt" >เอกสารที่ใช้ในการจำนำ มี 2 แบบ</h1>
                </div>
            </div>
            <div class="row">
              <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 pb-3">
              <div class="card" style="height: 303px;border-radius: 30px;border:none;">
                <div class="card-header" style="background-color: red;border-top-left-radius: 30px;border-top-right-radius: 30px;">
                  <h2 class="black-txt text-center" id="head-txt1" style="padding-bottom: 0px;margin-bottom: 0px;">สำหรับรถมีเล่มทะเบียน</h2>
                </div>
                <div class="card-body" id="card_body1">
                  <h3><strong>1.เล่มทะเบียนรถยนต์</strong></h3>
                  <h3><strong>2.สำเนาบัตรประชาชน</strong></h3>
                  <h3><strong>3.สำเนาทะเบียนบ้าน</strong></h3>
                </div>
              </div>
              </div>
              <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 pb-3">
                <div class="card" style="height: 303px;border-radius: 30px;border:none;">
                  <div class="card-header" style="background-color: red;border-top-left-radius: 30px;border-top-right-radius: 30px;">
                    <h2 class="black-txt text-center" id="head-txt2" style="padding-bottom: 0px;margin-bottom: 0px;">สำหรับรถยนต์ติดไฟแนนซ์</h2>
                  </div>
                  <div class="card-body" id="card_body2">
                    <h3><strong>1.สัญญาเช่าซื้อ</strong></h3>
                    <h3><strong>2.ใบเสร็จค่างวดล่าสุด</strong></h3>
                    <h3><strong>3.สำเนาทะเบียนรถ</strong></h3>
                    <h3><strong>4.สำเนาบัตรประชาชน</strong></h3>
                    <h3><strong>4.สำเนาทะเบียนบ้าน</strong></h3>
                  </div>
                </div>
            </div>
  
        </div>
        <br>
        <div class="row">
                <div class="col-lg-12 text-center">
                  <h1 class="black-txt text-center" id="prmHead-txt">ทำสัญญาจำนำรถเสร็จรับเงินสดทันที</h1>
                </div>
            </div>
    </div>
    <!-- end -->
    <!-- content Review -->
    <div id="contentReview">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                  <h1 class="black-txt text-center" id="rw-txt">Review</h1>
                  <h1 id="rwH1-1" style="color: #ffffff;">เรามีการดูแลรักษารถยนต์ของท่านเสมือนรถของเราเองหมดห่วงไร้กังวล</h1>
                  <h1 id="rwH1-2" style="color: #ffffff;">ไม่ต้องกลัวรถหาย และเราจะตรวจเช็คความเรียบร้อย</h1>
                  <h1 id="rwH1-3" style="color: #ffffff;">รวมถึงล้างทำความสะอาดก่อนส่งมอบ</h1>
                </div>
                <br>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-3 col-md-3 padding-bottom-30">
                  <div class="hover01 column">
                    <div>
                      <figure>
                        <a class="fancybox-pop fancybox.image" href="<?=base_url('./assets/images/services/1.jpg');?>" rel="services-1">
                        <img src="<?=base_url('./assets/images/services/1.jpg');?>" class="img-responsive">
                      </a>
                      </figure>
                    </div>
                  </div>
                    
                </div>
                <div class="col-lg-3 col-md-3 padding-bottom-30">
                  <div class="hover01 column">
                    <div>
                      <figure>
                        <a class="fancybox-pop fancybox.image" href="<?=base_url('./assets/images/services/2.jpg');?>" rel="services-1">
                          <img src="<?=base_url('./assets/images/services/2.jpg');?>" class="img-responsive">
                      </a>
                      </figure>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-3 padding-bottom-30">
                  <div class="hover01 column">
                    <div>
                      <figure>
                        <a class="fancybox-pop fancybox.image" href="<?=base_url('./assets/images/services/3.jpg');?>" rel="services-1">
                          <img src="<?=base_url('./assets/images/services/3.jpg');?>" class="img-responsive">
                      </a>
                      </figure>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-3 padding-bottom-30">
                  <div class="hover01 column">
                    <div>
                      <figure>
                        <a class="fancybox-pop fancybox.image" href="<?=base_url('./assets/images/services/4.jpg');?>" rel="services-1">
                          <img src="<?=base_url('./assets/images/services/4.jpg');?>" class="img-responsive">
                      </a>
                      </figure>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-3 padding-bottom-30">
                  <div class="hover01 column">
                    <div>
                      <figure>
                        <a class="fancybox-pop fancybox.image" href="<?=base_url('./assets/images/services/5.jpg');?>" rel="services-1">
                          <img src="<?=base_url('./assets/images/services/5.jpg');?>" class="img-responsive">
                      </a>
                      </figure>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-3 padding-bottom-30">
                  <div class="hover01 column">
                    <div>
                      <figure>
                        <a class="fancybox-pop fancybox.image" href="<?=base_url('./assets/images/services/6.jpg');?>" rel="services-1">
                          <img src="<?=base_url('./assets/images/services/6.jpg');?>" class="img-responsive">
                      </a>
                      </figure>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-3 padding-bottom-30">
                  <div class="hover01 column">
                    <div>
                      <figure>
                        <a class="fancybox-pop fancybox.image" href="<?=base_url('./assets/images/services/7.jpg');?>" rel="services-1">
                          <img src="<?=base_url('./assets/images/services/7.jpg');?>" class="img-responsive">
                      </a>
                      </figure>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-3 padding-bottom-30">
                  <div class="hover01 column">
                    <div>
                      <figure>
                        <a class="fancybox-pop fancybox.image" href="<?=base_url('./assets/images/services/8.jpg');?>" rel="services-1">
                          <img src="<?=base_url('./assets/images/services/8.jpg');?>" class="img-responsive">
                      </a>
                      </figure>
                    </div>
                  </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
                <div class="col-lg-12 text-center">
                  <button type="button" class="btn btn-danger btn-sm" style="
                    border-radius: 20px;
                    font-size: 24px;
                  ">Load more</button>
                </div>
            </div>
    </div>
    <!-- end -->
    <!-- ขอบคุณ -->
    <div id="contentThx">
      <div class="container">
            
        </div>
        <br>
    </div>
    <!-- end -->
    <!-- Start Footer -->
    <footer class="footer-box">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 text-center">
            <div align="center">
            <img src="<?=base_url('./assets/images/LOGOjumnumjod.png');?>" class="img-responsive logo-footer" style="
              width: 50px;
              height: auto;
            ">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 text-center">
            <p class="crp" style="color: #ffffff" >Copyright © 2021. All Rights Reserved.</p>
          </div>
        </div>
      </div>
    </footer>
    <!-- End Footer -->

      <div class="icon-bar" id="icontab">
        <a class="red-x" onclick="Toggle()"><i class="fa fa-chevron-left" aria-hidden="true"></i> ปิด</a>
        <a href="#" target="_blank" class="socailback"><img class="scl" src="<?=base_url('./assets/images/icon/fbk.png');?>" ></a> 
        <a href="" target="_blank" class="socailback">
          <img class="scl" src="<?=base_url('./assets/images/icon/ig.png');?>" ></a> 
        <a href="https://line.me/R/ti/p/~0991101119 " target="_blank" class="socailback">
        <img class="scl" src="<?=base_url('./assets/images/icon/line.png');?>" ></a> 
        <a href="" target="_blank" class="socailback">
          <img class="scl" src="<?=base_url('./assets/images/icon/yt.png');?>" ></a> 
        <a href="" target="_blank" class="socailback">
          <img class="scl" src="<?=base_url('./assets/images/icon/mp.png');?>" ></a>
      </div>

      <div class="icon-bar-2" id="icontab2">
        <a class="red-x" onclick="Toggle()">เปิด <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
      </div>

    <a href="#" id="scroll-to-top" class="hvr-radial-out"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="<?=base_url('./assets/js/jquery.min.js');?>"></script>
    <script src="<?=base_url('./assets/js/popper.min.js');?>"></script>
    <script src="<?=base_url('./assets/js/bootstrap.min.js');?>"></script>
    <!-- ALL PLUGINS -->
    <script src="<?=base_url('./assets/js/jquery.magnific-popup.min.js');?>"></script>
    <script src="<?=base_url('./assets/js/jquery.pogo-slider.min.js');?>"></script>
    <script src="<?=base_url('./assets/js/slider-index.js');?>"></script>
    <script src="<?=base_url('./assets/js/smoothscroll.js');?>"></script>
    <script src="<?=base_url('./assets/js/form-validator.min.js');?>"></script>
    <script src="<?=base_url('./assets/js/contact-form-script.js');?>"></script>
    <script src="<?=base_url('./assets/js/isotope.min.js');?>"></script>
    <script src="<?=base_url('./assets/js/images-loded.min.js');?>"></script>
    <script src="<?=base_url('./assets/js/custom.js');?>"></script>
    <script src="<?=base_url('./assets/js/script.js');?>"></script>
	<!-- Initiate Portoflio Script -->
	<script src="<?=base_url('./assets/extensions/portfolio/isotope.min.js');?>"></script>
    <script src="<?=base_url('./assets/extensions/portfolio/portfolio.js');?>"></script>

    <!-- Fancybox/Lightbox -->
    <script type="text/javascript" src="<?=base_url('./assets/extensions/fancybox/jquery.fancybox.js');?>"></script>
    <script type="text/javascript" src="<?=base_url('assets/extensions/fancybox/jquery.fancybox.pack.js');?>"></script>
    <link rel="stylesheet" type="text/css" href="<?=base_url('./assets/extensions/fancybox/jquery.fancybox.css');?>" media="screen" />
    <script type="text/javascript" src="<?=base_url('./assets/extensions/fancybox/jquery.fancybox-media.js');?>"></script>
    <script>
        function Toggle() {
            var x = document.getElementById("icontab");
            var y = document.getElementById("icontab2");
            if (x.style.display === "none") {
                x.style.display = "block";
                y.style.display = "none";
            } else {
                x.style.display = "none";
                y.style.display = "block";
            }
            }
    </script>
    </div>
</body>

</html>
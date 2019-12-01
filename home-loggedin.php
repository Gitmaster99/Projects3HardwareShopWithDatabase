<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: home-loggedin.php');
	exit();
}
?>

<!--https://www.asus.com/websites/global/products/sIVMVmQPw67EGfbB/v1/features/images/medium/2x/01-kv.jpg
https://storage-asset.msi.com/global/picture/image/feature/vga/NVIDIA/GTX1080Ti/1080Ti-Custom-main.jpg
https://storage-asset.msi.com/global/picture/banner/banner2_15735497035dca7687c1a3e.jpg
https://www.asus.com/websites/global/products/6ZYZANfT5qz5QT3p/v1/features/images/large/2x/01_kv.jpg

-->
<!DOCTYPE html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<head>
    <title>Bld | We've got you covered</title>
    <link rel="stylesheet" type="text/css" href="css/page1.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>



    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>


    
</head>

<body>

    <nav class="navbar navbar-expand-xl sticky-top navbar-dark">
        <a href="home-loggedin.php" class="navbar-brand"><i class="fa fa-houzz fa-3x"></i></a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <div class="navbar-nav">
                <a href="about.php" class="nav-item nav-link active">What is Bld</a>

                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Bld Prebuilds</a>
                    <div class="dropdown-menu">
                        <a href="starter.php" class="dropdown-item">Starter Bld</a>
                        <a href="gaming.php" class="dropdown-item">Gaming Bld</a>
                        <a href="creator.php" class="dropdown-item">Creator Bld</a>
                        <a href="streamer.php" class="dropdown-item disabled">Streamer Bld</a>
                    </div>
                </div>

                <a href="#" class="nav-item nav-link disabled">Laptops</a>
                <div class="nav-item dropdown">
                    <a href="accessories.php" class="nav-link dropdown-toggle" data-toggle="dropdown">Accessories</a>
                    <div class="dropdown-menu">
                        <a href="keyboards.php" class="dropdown-item">Keyboards</a>
                        <a href="mice.php" class="dropdown-item">Mice</a>
                        <a href="mousepads.php" class="dropdown-item">mousepads</a>
                        <a href="monitors.php" class="dropdown-item">Monitors</a>

                        <a href="cables.php" class="dropdown-item">Cables</a>
                        <a href="psucables.php" class="dropdown-item">Custom PSU Cables</a>
                        <a href="caselighting.php" class="dropdown-item">Case Lighting</a>
                        <a href="roomlighting.php" class="dropdown-item">Room Lighting</a>

                        <a href="headsets.php" class="dropdown-item">Headsets</a>
                        <a href="chairs.php" class="dropdown-item">Gaming Chairs</a>
                        <a href="controllers.php" class="dropdown-item">Gaming Controllers</a>

                    </div>
                </div>


                <a href="configurator.html" class="nav-item nav-link disabled">Bld Configurator</a>
                <div class="nav-item dropdown">
                    <a href="components.php" class="nav-link dropdown-toggle" data-toggle="dropdown">Components</a>
                    <div class="dropdown-menu">
                        <a href="amd.php" class="dropdown-item">Amd CPU's</a>
                        <a href="intel.php" class="dropdown-item">Intel CPU's</a>
                        <a href="motherboards.php" class="dropdown-item">Motherboards</a>
                        <a href="ram.php" class="dropdown-item">RAM</a>

                        <a href="case.php" class="dropdown-item">PC Case</a>
                        <a href="psu.php" class="dropdown-item">Power Supply</a>
                        <a href="gpu.php" class="dropdown-item">Graphics Card</a>
                        <a href="hdd.php" class="dropdown-item">HDD</a>

                        <a href="ssd.php" class="dropdown-item">SSD</a>
                        <a href="cooler.php" class="dropdown-item">CPU Cooler</a>
                        <a href="fans.php" class="dropdown-item">Case Fans</a>

                    </div>
                </div>
                <a href="contact.php" class="nav-item nav-link">Contact</a>


            </div>

            <form class="form-inline">
                <div class="navbar-nav">
                

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-user fa-2x"></i>
                            </a>
                        </a>
                        <div class="dropdown-menu">
                            <a href="myorders.php" class="dropdown-item">My Orders</a>
                            <a href="changepassowrd.php" class="dropdown-item">Change password</a>
                            <a href="changepersonaldata.php" class="dropdown-item">Change personal data</a>
                            <a href="mydata.php" class="dropdown-item">My personal data</a>

                            <a href="myreturns.php" class="dropdown-item">My returns</a>
                            <a href="shoppingcart.php" class="dropdown-item">Shopping Cart</a>
                            <a href="logout.php" class="dropdown-item">Log Out</a>


                        </div>
                    </div>
                    <a href="#" class="nav-link">
                            <i class="fa fa-shopping-cart fa-2x"></i>
                            </a>
                </div>
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search">
                    <div class="input-group-append">
                        <button type="button" class="btn btn-secondary"><i class="fa fa-search"></i></button>
                    </div>
                </div>

            </form>

        </div>
    </nav>
<center>
<div class="container-fluid top-section">
    <div class="row">
        <div class="col-sm-12 col-md-8">
        <img class="img-top" src="https://cdn.letsbld.com/landing-pages/69/sections/194/logo_5d5da1f069d8b.png">
        </div>
      
        
        <div class="col-sm-12 col-md-4 header-text text-left">
        <h1 class="text-black">DESKTOP PCs MADE SIMPLE</h1>
            <h3 class="text-black m-t">Pick your usecase, set a budget, and we'll Bld it</h3>
            <a href="configurator.html" class="btn m-y-md">
              GET STARTED
            </a>
        </div>
    </div>
</div>
</center>
<div class="container-fluid msi-img">
    <div class="row">
        <div class="col-sm-12 col-md-12">
            <img class="section-img " src="https://storage-asset.msi.com/global/picture/banner/banner_15731125705dc3cafaa4500.jpg">
        </div>
    </div>
</div>








 <!-- Grid row -->

    <!-- Grid row -->

    <!-- Grid row -->
    <div class="gallery col-12" id="gallery">

      <!-- Grid column -->
      <div class="mb-3 pics animation all 2">
        <div class="col-sm-12 col-md-12">

          <a href="components.html" data-size="1600x1067">
            <img class="img-fluid"
              src="https://storage-asset.msi.com/global/picture/banner/banner_15706040575d9d841929845.jpg"
              alt="Card image cap">



            <div class="carousel-caption" style="padding-top:7%; color:#FFFFFF">
            <h1>Our Configurator</h1>
              <p>Put together your dream computer</p>
            </div>

        </div>
        </a>
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="mb-3 pics animation all 2">
        <div class="col-sm-12 col-md-12">

          <a href="components.html" data-size="1600x1067">
            <img class="img-fluid" src="images/X570feature-696x464.jpg" alt="Card image cap">



            <div class="carousel-caption" style="padding-top:7%; color:#FFFFFF">
              <h1>Motherboards</h1>
              <p>The heart of your pc</p>
            </div>

        </div>
        </a>
      </div>

      <div class="mb-3 pics animation all 2">
        <div class="col-sm-12 col-md-12">

          <a href="components.html" data-size="1600x1067">
            <img class="img-fluid"
              src="https://www.asus.com/media/global/products/g2Pl47nZaToiPUKg/P_setting_000_1_90_end_500.png"
              alt="Card image cap">



            <div class="carousel-caption" style="padding-top:7%; color:#FFFFFF">
              <h1>Pick a PC Case</h1>
              <p>Choose one that fits it all</p>
            </div>

        </div>
        </a>
      </div>

      <div class="mb-3 pics animation all 2">
        <div class="col-sm-12 col-md-12">

          <a href="components.html" data-size="1600x1067">
            <img class="img-fluid"
              src="https://cwsmgmt.corsair.com/pdp/vengeance-rgb-pro/Content/Vengeance_RGB_Pro_PDP_Black_07.jpg"
              alt="Card image cap">



            <div class="carousel-caption" style="padding-top:7%; color:#FFFFFF">
              <h1>Keyboards</h1>
              <p>Get your typing game up a notch</p>
            </div>

        </div>
        </a>
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="mb-3 pics animation all 2">
        <div class="col-sm-12 col-md-12">

          <a href="components.html" data-size="1600x1067">
            <img class="img-fluid" src="//cwsmgmt.corsair.com/hybris/homepage/images/cia_ql_rgb_690x690.jpg"
              alt="Card image cap">



            <div class="carousel-caption" style="padding-top:7%; color:#FFFFFF">
              <h1>Adressable RGB Fans and Lightstrips</h1>
              <p>Light up your room in style</p>
            </div>

        </div>
        </a>
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="mb-3 pics animation all 2">
        <div class="col-sm-12 col-md-12">

          <a href="components.html" data-size="1600x1067">
            <img class="img-fluid" src="images/34a8b2917baf842126ae02b0152a473f.jpg" alt="Card image cap">



            <div class="carousel-caption" style="padding-top:7%; color:#FFFFFF">
              <h1>Choose your CPU</h1>
              <p>AMD or Intel? What is it gonna be?</p>
            </div>

        </div>
        </a>
      </div>
      <!-- Grid column -->

      <!-- Grid column -->

      <div class="mb-3 pics animation all 2">
        <div class="col-sm-12 col-md-12">

          <a href="accessories.html" data-size="1600x1067">
            <img class="img-fluid" src="//cwsmgmt.corsair.com/hybris/homepage/images/cia_ironclaw_wireless_690x340.jpg"
              alt="Card image cap">



            <div class="carousel-caption" style="padding-top:7%; color:#FFFFFF">
              <h1>Gaming Mice</h1>
              <p>Get some grip on your games</p>
            </div>

        </div>
        </a>
      </div>

      <div class="mb-3 pics animation all 2">
        <div class="col-sm-12 col-md-12">

          <a href="accessories.html" data-size="1600x1067">
            <img class="img-fluid" src="https://cwsmgmt.corsair.com/pdp/virtuoso/img/carousel-rgb-01.jpg"
              alt="Card image cap">



            <div class="carousel-caption" style="padding-top:7%; color:#FFFFFF">
              <h1>Headsets</h1>
              <p>Get your premium audio going </p>
            </div>

        </div>
        </a>
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="mb-3 pics animation all 2">
        <div class="col-sm-12 col-md-12">

          <a href="accessories.html" data-size="1600x1067">
            <img class="img-fluid"
              src="https://www.corsair.com/corsairmedia/sys_master/productcontent/CH-9440020-NA-Build_it_Beautiful_03.png"
              alt="Card image cap">



            <div class="carousel-caption" style="padding-top:7%; color:#FFFFFF">
              <h1>Mousepads</h1>
              <p>Get a grip on your favorite work</p>
            </div>

        </div>
        </a>
      </div>

      <div class="mb-3 pics animation all 2">
        <div class="col-sm-12 col-md-12">

          <a href="components.html" data-size="1600x1067">
            <img class="img-fluid" src="images/P_setting_000_1_90_end_500.jpg" alt="Card image cap">



            <div class="carousel-caption" style="padding-top:7%; color:#FFFFFF">
              <h1>Get your Graphics Card</h1>
              <p>For some extra power in games and heavy tasks</p>
            </div>

        </div>
        </a>
      </div>
      <!-- Grid row -->
      <div class="mb-3 pics animation all 2">
        <div class="col-sm-12 col-md-12">

          <a href="components.html" data-size="1600x1067">
            <img class="img-fluid"
              src="https://edgeup.asus.com/wp-content/uploads/2019/09/asus-ryzen-build-3-696x464.jpg"
              alt="Card image cap">



            <div class="carousel-caption" style="padding-top:7%; color:#FFFFFF">
              <h1>Keep your CPU nice and cool</h1>
              <p>Watercooling or Air cooling? Let's find out what's best for you</p>
            </div>

        </div>
        </a>
      </div>



      <div class="mb-3 pics animation all 2">
        <div class="col-sm-4 col-md-12">

          <a href="components.html" data-size="1600x1067">
            <img class="img-fluid"
              src="https://cwsmgmt.corsair.com/pdp/vengeance-rgb-pro/Content/Vengeance_RGB_Pro_PDP_Black_03.jpg"
              alt="Card image cap">



            <div class="carousel-caption" style="padding-top:7%; color:#FFFFFF">
              <h1>Pick your RAM</h1>
              <p>Let's get some memory, how much do you need? Lets find out</p>
            </div>

        </div>

      </div>
      </a>
    </div>


    <br><br><br>

   

<center>
<div class="container-fluid ">
    <div class="row header">
        
    <div class="col-sm-12 col-md-2 header-text text-left">
</div>

        
        <div class="col-sm-12 col-md-4 header-text text-left">
        <h1 class="text-black">BUILT BY EXPERTS, WITH AN EYE FOR DESIGN</h1><br>
        <p class="text-black m-t text-left">
          We at Bld have more than 12 years of experience selling
          high-quality PC components and building prebuild Desktop Computers. But now we also launched a new desktop
          building service. </p>

        <p class="text-black m-t text-left">
          By using our configurator you can customize your own computer and when ordered we will build it for you.
        </p>

        <p class="text-black m-t text-left">
          By using the very best components,
          assembled by highly-trained builders, we can deliver a meticulously
          crafted gaming PC, backed by a comprehensive 2-year warranty.</p>
        <a href="configurator.html" class="btn m-y-md">
          LEARN MORE
        </a>
        </div>

        <div class="col-sm-12 col-md-6 header-text text-left">
        <img class="img-top" src="https://www.corsair.com/medias/sys_master/images/images/hd2/hb1/9319998423070/-CS-9030006-NA-Gallery-VENGEANCE-5181-01.png">
</div>
    </div>
</div>
</center>
    





<div class="warranty container-fluid">
      <div class="warranty-row row text-center text-white">
        <div class="col-garantee col">
          <br>
          <img src="https://www.hsenidmobile.com/wp-content/uploads/2015/09/tools-icon-white.png">
          <h1>CONFIGURED FOR YOUR NEEDS</h1>
          <p>Our computer experts take care of your purchase. Every computer is optimized
            for your specific usecase to ensure you get maximum performance. </p>
          <a href="about.html#config" class="btn m-y-md">
            LEARN MORE
          </a>
        </div>
        <div class="col-garantee col">
          <br>
          <img src="https://flaticons.net/gd/makefg.php?i=icons/Shopping/Dollar-Tag.png&r=255&g=255&b=255">

          <h1>TRANSPARENT PRICING</h1>
          <p>Customize your build with our curated parts with straight forward pricing and a flat €79 assembly fee. No
            extra costs, no hassle.</p>
          <a href="about.html#price" class="btn m-y-md">
            LEARN MORE
          </a>
        </div>
        <div class="col-garantee col">
          <br>
          <img src="https://www.eurekagarages.com.au/wp-content/uploads/2015/04/DeliveryWhiteLogo1.png">
          <h1>36-HOUR TURNAROUND</h1>
          <p>We understand you want to get going as soon as possible. We have experts that deliver fast and great work,
            so you can get going fast!</p>
          <a href="about.html#delivery" class="btn m-y-md">
            LEARN MORE
          </a>
        </div>
        <div class="col-garantee col">
          <br>
          <img src="https://s3.amazonaws.com/dpec/assets/images/logos/2year.png">
          <h1>ALL-IN-ONE WARRANTY</h1>
          <p>2 Years warranty on every product. All components under one warranty plan – Bld will manage any problems
            for you. </p>
          <a href="about.html#warranty" class="btn m-y-md">
            LEARN MORE
          </a>
        </div>
      </div>
    </div>

    <br><br><br>

    <div class="brands">
    <div class="container-fluid container-partners">
        <div class="row">
            <div class="col">
              <center>
            <h1>OUR PARTNERS</h1>
            </center>
            <br>
                <div class="brands_slider_container">
                
                    <div class="owl-carousel owl-theme brands_slider">
                        <div class="owl-item">
                            <div class="brands_item d-flex flex-column justify-content-center "><img src="images/nzxt.png" alt=""></div>
                        </div>
                        <div class="owl-item">
                            <div class="brands_item d-flex flex-column justify-content-center"><img src="images/corsair.png" alt=""></div>
                        </div>
                        <div class="owl-item">
                            <div class="brands_item d-flex flex-column justify-content-center"><img src="images/Asus.png" alt=""></div>
                        </div>
                        <div class="owl-item">
                            <div class="brands_item d-flex flex-column justify-content-center"><img src="images/intel.png" alt=""></div>
                        </div>
                        <div class="owl-item">
                            <div class="brands_item d-flex flex-column justify-content-center"><img src="images/AMD.png" alt=""></div>
                        </div>
                        <div class="owl-item">
                            <div class="brands_item d-flex flex-column justify-content-center"><img src="images/msi.png" alt=""></div>
                        </div>
                        <div class="owl-item">
                            <div class="brands_item d-flex flex-column justify-content-center"><img src="images/Coolermaster.png" alt=""></div>
                        </div>
                        <div class="owl-item">
                            <div class="brands_item d-flex flex-column justify-content-center"><img src="images/lianli.png" alt=""></div>
                        </div>
                       
                        
                        
                    </div> 
                </div>
            </div>
        </div>
    </div>
</div>

<br><br>




<footer class="footer-area footer--light">
    <div class="footer-big">

      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-12">
            <div class="footer-widget">
              <div class="widget-about">
                <a href="#"><i class="fa fa-houzz fa-5x"></i></a><br><br>
                <p>In search for an awesome desktop computer, but don't have the urge to build it yourself?
                  Look no furture, we have a variety of pre-builds systems and an advanced configurator where you can
                  customize your desktop to your liking without the hassle of choosing the wrong components.</p>
                <p>Bld, We've got you covered.</p>
                <ul class="contact-details">
                  <li>
                    <span class="icon-earphones"></span> Call Us:
                    <a href="tel:344-755-111">0642536743</a>
                  </li>
                  <li>
                    <span class="icon-envelope-open"></span>
                    <a href="mailto:support@aazztech.com">support@Bld.com</a>
                  </li>
                </ul>
              </div>
            </div>

          </div>

          <div class="col-md-3 col-sm-4">
            <div class="footer-widget">
              <div class="footer-menu footer-menu--1">
                <h4 class="footer-widget-title">Bld</h4>
                <ul>
                  <li>
                    <a href="home.html">Home</a>
                  </li>
                  <li>
                    <a href="about.html">What is Bld</a>
                  </li>
                  <li>
                    <a href="configurator.html">Our Configurator</a>
                  </li>
                  <li>
                    <a href="starter.html">Starter Build</a>
                  </li>
                  <li>
                    <a href="gaming.html">Gaming Build</a>
                  </li>
                  <li>
                    <a href="creator.html">Creator Build</a>
                  </li>
                  <li>
                    <a href="accessories.html">Accessories</a>
                  </li>
                  <li>
                    <a href="components.html">Components</a>
                  </li>
                  <li>
                    <a href="contact.html">Contact</a>
                  </li>
                </ul>
              </div>

            </div>

          </div>


          <div class="col-md-3 col-sm-4">
            <div class="footer-widget">
              <div class="footer-menu">
                <h4 class="footer-widget-title">Contact</h4>
                <ul>
                  <div class="contact-options">
                    <li>
                      <a href="tel:344-755-111">
                        <p>0642536743</p>
                      </a>
                    </li>
                    <li>
                      <a href="mailto:support@Bld.com">
                        <p>support@Bld.com</p>
                      </a>
                    </li>
                    <li>
                      <a href="mailto:warranty@Bld.com">
                        <p>warranty@Bld.com</p>
                      </a>
                    </li>
                    <li>
                      <a href="contact.html#contact">
                        <p>Contact Form</p>
                      </a>
                    </li>
                  </div>
                </ul>
              </div>
            </div>

          </div>


          <div class="col-md-3 col-sm-4">
            <div class="footer-widget">
              <div class="footer-menu no-padding">
                <h4 class="footer-widget-title">Help Support</h4>
                <ul>
                  <li>
                    <a href="#">Support Forum</a>
                  </li>
                  <li>
                    <a href="#">Terms &amp; Conditions</a>
                  </li>
                  <li>
                    <a href="#">Support Policy</a>
                  </li>
                  <li>
                    <a href="#">Refund Policy</a>
                  </li>
                  <li>
                    <a href="#">FAQs</a>
                  </li>
                  <li>
                    <a href="#">Buyers Faq</a>
                  </li>
                  <li>
                    <a href="#">Sellers Faq</a>
                  </li>
                </ul>
              </div>

            </div>
          </div>


        </div>

      </div>

    </div>


    <div class="mini-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="copyright-text">
              <p>© 2019
                <a href="#">Bld</a>. All rights reserved.

              </p>
            </div>

            <div class="go_top">
              <div id="scroll">
                <span id="icon-arrow-up"> <i class="fa fa-houzz fa-3x"></i></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

<script>
$(document).ready(function(){

if($('.brands_slider').length)
{
var brandsSlider = $('.brands_slider');

brandsSlider.owlCarousel(
{
loop:true,
autoplay:true,
autoplayTimeout:2500,
nav:false,
dots:false,
autoWidth:true,
items:8,
margin:42
});

if($('.brands_prev').length)
{
var prev = $('.brands_prev');
prev.on('click', function()
{
brandsSlider.trigger('prev.owl.carousel');
});
}

if($('.brands_next').length)
{
var next = $('.brands_next');
next.on('click', function()
{
brandsSlider.trigger('next.owl.carousel');
});
}
}


});


$(document).ready(function () {
    $(".menu-icon").on("click", function () {
      $("nav ul").toggleClass("showing");
    });
  });

  // Scrolling Effect

  $(window).on("scroll", function () {
    if ($(window).scrollTop()) {
      $('nav').addClass('black');
    }

    else {
      $('nav').removeClass('black');
    }
  })


  $(document).ready(function () {
    $(window).scroll(function () {
      if ($(this).scrollTop() > 100) {
        $('#scroll').fadeIn();
      } else {
        $('#scroll').fadeOut();
      }
    });
    $('#scroll').click(function () {
      $("html, body").animate({ scrollTop: 0 }, 600);
      return false;
    });
  });

</script>
  </body>

</html>
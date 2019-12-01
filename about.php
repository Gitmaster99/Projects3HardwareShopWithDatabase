<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.html');
	exit();
}
?>

<!--https://www.asus.com/websites/global/products/sIVMVmQPw67EGfbB/v1/features/images/medium/2x/01-kv.jpg
https://storage-asset.msi.com/global/picture/image/feature/vga/NVIDIA/GTX1080Ti/1080Ti-Custom-main.jpg
https://storage-asset.msi.com/global/picture/banner/banner2_15735497035dca7687c1a3e.jpg

-->
<!DOCTYPE html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<head>
    <title>Bld | We've got you covered</title>
    <link rel="stylesheet" type="text/css" href="css/about.css">
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
<div class="container-fluid ">
    <div class="row header">
        
    <div class="col-sm-12 col-md-6 header-text text-left">
</div>

        
        <div class="col-sm-12 col-md-4 header-text text-left">
        <h1 class="text-black text-left">THE €79 BLD SERVICE </h1>
        <p class="text-black m-t text-left">Built by experts from the ground up to power the games you love. 
          BLD provides a custom, simple solution for a hassle-free Desktop PC experience. 
          Upgrade and tweak for max performance as much as you’d like: pay the same flat build fee.
</p>

            <p class="text-black m-t text-left"> Choose a usecase, pick the parts you like, we'll build it.</p>
        <a href="starter.php" class="btn m-y-md">
          GET BUILDING
        </a>
        </div>

        <div class="col-sm-12 col-md-2 header-text text-left">
</div>
    </div>
</div>
</center>


<center>
<div class="container-fluid ">
    <div class="row pricing">
        
    <div class="col-sm-12 col-md-2 pricing-text text-left">
</div>

        
        <div class="col-sm-12 col-md-4 pricing-text text-left">
        <h1 class="text-black w-90 text-left">TRANSPARENT PRICING</h1>
              <p class="text-black m-t text-left">
                  Customize your build with our curated parts with straight forward pricing. 
                  Crafted from trusted award-winning brands, we show you what we put in, and what they cost. 
                  We package it all together with a flat €79 assembly fee.
</p>
        </div>

        <div class="col-sm-12 col-md-6 pricing-text text-left">
</div>
    </div>
</div>
</center>

<center>
<div class="container-fluid ">
    <div class="row delivery">
        
    <div class="col-sm-12 col-md-6 delivery-text text-left">
</div>

        
        <div class="col-sm-12 col-md-4 delivery-text text-left">
        <h1 class="text-black text-left">36-HOUR TURNAROUND</h1>
              <p class="text-black m-t text-left">
                  Once you’ve finished customizing your recommended Bld system, we’ll start building and have it on its way to you within 36 hours, at no additional cost.</p>

                  
              <a href="starter.php" class="btn m-y-md">
                START YOUR BUILD
              </a>
        </div>

        <div class="col-sm-12 col-md-2 delivery-text text-left">
</div>
    </div>
</div>
</center>

   
<center>
<div class="container-fluid ">
    <div class="row warranty">
        
    <div class="col-sm-12 col-md-2 warranty-text text-left">
</div>

        
        <div class="col-sm-12 col-md-4 warranty-text text-left">
        <h1 class="text-black text-left">ALL-IN-ONE WARRANTY</h1>
              <p class="text-black m-t text-left">
                  Two-year warranty coverage on all parts and labor. Peace of mind with Bld management of any related component issues. </p>
                  <p class="text-black m-t text-left">
                      Forget paperwork: enjoy what you like!</p>
                  
        </div>

        <div class="col-sm-12 col-md-6 warranty-text text-left">
</div>
    </div>
</div>
</center>
   


    

    

  



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
</script>
  </body>

</html>
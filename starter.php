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
        <div class="col-sm-12 col-md-6">
        <div id="demo" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->


        <!-- The slideshow -->
        <div class="carousel-inner">
          <div class="carousel-item active">
          <img
              src="https://cdn.letsbld.com/products/374/191/5d8b73364f649_5d8b73364f8ad.png"
              alt="Los Angeles">
          </div>
          <div class="carousel-item">
            <img
              src="https://cdn.letsbld.com/products/374/191/5d8b7336718b5_5d8b733671a10.png"
              alt="Chicago">
          </div>
          <div class="carousel-item">
            <img
              src="https://cdn.letsbld.com/products/374/191/5d8b73368cfe8_5d8b73368d272.png"
              alt="New York">
          </div>
          <div class="carousel-item">
            <img
              src="https://cdn.letsbld.com/products/374/191/5d8b7336b0f4b_5d8b7336b10b7.png"
              alt="Los Angeles">
          </div>
          <div class="carousel-item">
            <img
              src="https://cdn.letsbld.com/products/374/191/5d8b7336c1506_5d8b7336c16b5.png"
              alt="Chicago">
          </div>
          <div class="carousel-item">
            <img
              src="https://cdn.letsbld.com/products/374/191/5d8b7336ddb04_5d8b7336ddc7c.png"
              alt="New York">
          </div>
        </div>
        *Some of the components may not match exact model pictured.
        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a>

      </div>
        </div>
      
        
        <div class="col-sm-12 col-md-4 header-text text-left">
        <h1 class="text-black">Epic-Bld Custom 2980 Starter PC</h1>
        <h3>€999 Euro</h3>
        <p>Thanks to our co-operation with Corsair we can present you the ultimate performance powerhouse for a very
          good price.
        </p>
        <p class="text-black m-t">Do you want a good performing desktop computer but don't have tons to spend?</p>

        <p>Then step up your game with our Epic-Bld Starter PC boasting an AMD Ryzen 5 3600 six core CPU, NVIDIA GeForce
          GTX 1660 Graphics,
          and 16 gb of high performance DDR4 memory.</p>
        <p class="text-black m-t">Save €150 when subscribing to our <a href="newsletter.html">newsletter</a>.</p>
        <a href="shopping-cart" class="btn m-y-md">
        PLACE IN SHOPPING CART
        </a>
        </div>
    </div>
</div>
</center>
<br><br><br>

<div class="container">
        <div class="row ">
          <div class="col-md-6">
            <img class="mx-auto d-block mt-50" src="images/icons8-processor-50.png">
            <h3 class="text-center">PROCESSOR</h3>
            <p class="text-center">AMD Ryzen 5 3600</p><br>

            <img class="mx-auto d-block" src="images/icons8-memory-slot-50.png">
            <h3 class="text-center">MEMORY</h3>
            <p class="text-center">16GB CORSAIR VENGEANCE LPX DDR4-3200</p><br>

            <img class="mx-auto d-block" src="images/icons8-motherboard-50.png">
            <h3 class="text-center">MOTHERBOARD</h3>
            <p class="text-center">MSI X570-A PRO ATX AM4 Motherboard</p>

          </div>
          <div class="col-md-6">
            <img class="mx-auto d-block" src="images/icons8-video-card-50.png">
            <h3 class="text-center">GRAPHICS CARD</h3>
            <p class="text-center">NVIDIA GeForce GTX™ 1660Ti 6GB</p><br>

            <img class="mx-auto d-block" src="images/icons8-ssd-50.png">
            <h3 class="text-center">STORAGE</h3>
            <p class="text-center">Intel 660p Series 1.02 TB M.2-2280 NVME Solid State Drive</p><br>

            <img class="mx-auto d-block" src="images/icons8-server-50.png">
            <h3 class="text-center">COMPUTER CASE</h3>
            <p class="text-center">Corsair Crystal Series 280X RGB Tempered Glass Micro ATX Case</p>

          </div>
</div>
</div>
<br><br><br>

          <div class="container  container-specs align-right">
            <h3 class="text-center">PRODUCT DESCRIPTION</h3>
            <br>
            <div class="row">
              <div class="col-md-2">
                </div>
                <div class="col-md-8">
                <p>Step up your work with our amazing looking and performing Epic-Bld Custom 2980 Starter PC.</p>
                <p>Get serious work done with AMD's Ryzen 5 3600 six core CPU. At a TDP off 65W, this CPU can be kept cool quiete easily, so you can get the best performance while keeping your components cool. with it's six cores and 12 Threads, you can be sure of very good performance.</p> 
                  <p>Paired with 16Gb of blazing fast 3200Mhz RAM and a fast 1Tb NVME SSD from Intel, you're computer loades every application or program blazing fast.</p>
                  <p>Done working? Are you in need of a little relaxing time? Thanks to a very capable NVIDIA GeForce GTX™ 1660Ti with 6GB of GDDR6 Video Memory, you can play games at some seriously high settings in your downtime.</p>
                  <p>Thanks to the MSI X570-A PRO ATX AM4 Motherboard and the Corsair Crystal Series 280X RGB Tempered Glass Micro ATX Case, you have a large selection off ports to connect you favorite peripherals.</p>
                  <p>All in all, The Epic-Bld Custom 2980 Starter PC is an all-round monster when it comes to getting work done and also gaming, but at an affordable price.</p>
                
              </div>
              <div class="col-md-2">
              </div>
</div>
</div>
<br><br><br>


            <div class="container  container-specs align-right">
                <h3 class="text-center">TECHNICAL SPECIFICATIONS</h3>
                <br>
                <div class="row">
                  <div class="col-md-6">

                    <table class="table">

                      <tbody>
                        <tr>

                          <td>Warranty</td>
                          <td>Two Years</td>

                        </tr>
                        <tr>

                          <td>Weight</td>
                          <td>12.15kg</td>

                        </tr>
                        <tr>

                          <td>Dimensions</td>
                          <td>395mm x 280mm x 355mm</td>

                        </tr>
                        <tr>
                          <td>Form Factor</td>
                          <td>Micro-ATX</td>

                        </tr>
                        <tr>

                          <td>CPU</td>
                          <td>AMD Ryzen 5 3600</td>

                        </tr>
                        <tr>

                          <td>GPU</td>
                          <td>NVIDIA GeForce GTX™ 1660Ti 6GB</td>

                        </tr>
                        <tr>

                          <td>DRAM</td>
                          <td>2 x 8GB CORSAIR VENGEANCE LPX DDR4-3200</td>

                        </tr>
                        <tr>

                          <td>Cooling</td>
                          <td>Air CPU, Air GPU</td>

                        </tr>
                        <tr>

                          <td>Storage</td>
                          <td>Intel 660p Series 1.02 TB M.2-2280 NVME Solid State Drive</td>

                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="col-md-6">

                    <table class="table">

                      <tbody>
                        <tr>

                          <td>Motherboard</td>
                          <td>MSI X570-A PRO ATX AM4 Motherboard</td>

                        </tr>
                        <tr>

                            <td>Computer Case</td>
                            <td>Corsair Crystal Series 280X RGB Tempered Glass Micro ATX Case</td>
  
                          </tr>
                        <tr>

                          <td>Operating System</td>
                          <td>Windows 10 Home</td>

                        </tr>
                        <tr>

                          <td>Networking</td>
                          <td>Gigabit Ethernet, 802.11ac</td>

                        </tr>
                        <tr>

                          <td>Power Supply</td>
                          <td>Corsair CXM 550W 80+ Bronze Semi-modular ATX Power Supply</td>

                        </tr>
                        <tr>

                          <td>External Connections</td>
                          <td>FRONT: 2x USB 3.1 Gen 1, Headphone Jack, Mic Jack<br><br>REAR: 2x USB 3.1 Gen 2 (Type-A
                            and Type-C), 4x USB 2.0, Audio, Ethernet, PS/2, 3x DisplayPort , 1x HDMI</td>

                        </tr>

                      </tbody>
                    </table>



                  </div>
                  <div class="col-md-4">
                  </div>

                </div>
              </div>

              
</div>



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
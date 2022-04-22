<?php
     session_start();

     include("connection.php");
     include("functions.php");
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
  
    <title>Road Master</title>
<!--

CSS files

-->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/Abtcss.css">

    </head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
      <div class="preloader-inner">
        <span class="dot"></span>
        <div class="dots">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </div>
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <nav class="main-nav">
                      <!-- ***** Logo Start ***** -->
                      <a href="Home.php" class="logo">Travel<em> Life</em></a>
                      <!-- ***** Logo End ***** -->
                      <!-- ***** Menu Start ***** -->
                      <ul class="nav">
                          <li class="scroll-to-section"><a href="Home.php">Home</a></li>
                          <li class="scroll-to-section"><a href="AboutUs.php" class="active">About</a></li>
                          <li class="scroll-to-section"><a href="Tours.php" >Tours</a></li>
                          <li class="scroll-to-section"><a href="Blog.php">Blog</a></li>
                          <li class="scroll-to-section"><a href="contact.php" >Contact</a></li> 
                          <?php
                                if(!(isset($_SESSION['Mem_Id']))){echo"
                                    <li class='main-button'><a href='Login.php'>Log In</a></li>";
                                }
                                else{echo"<li class='main-button'><a href='logout.php'>Log Out</a></li>";}
                                ?>
                      </ul>        
                      <a class='menu-trigger'>
                          <span>Menu</span>
                      </a>
                      <!-- ***** Menu End ***** -->
                  </nav>
              </div>
          </div>
      </div>
  </header>
  <!-- ***** Header Area End ***** -->
  <section class="section" id="call-to-action">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="cta-content">
                    <br>
                    <h2>Know <em>Us</em>, Join Us <em>Today</em>!</h2>
                    <br>
                    <?php
                                if(!(isset($_SESSION['Mem_Id']))){echo"
                    <div class='main-button scroll-to-section'>
                        <a href='Signin.php'>Become a member</a>
                    </div>
                    ";}
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
    <!-- ***** Our Classes Start ***** -->
    <section class="section" id="our-classes">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Our <em>Services</em></h2>
                        <img src="assets/Img2/line-decgg.png" alt="">
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 offset-lg-2">
                <section class='tabs-content'>
                  <article id='tabs-1'>
                    <img src="assets/Img2/Sl TOur g1 Ps.jpg" alt="First Class">
                    <h4>Trusted Guides</h4>
                    <p>Explore the mesmerising wilderness in Sri Lanka with 'Travel Nature' tour package. Find uniqueness away from the typical paths of travels with the help of our guides. Enjoy the comfort in pre-arranged destinations or feel the nature in outdoor camping.</p>
                    
                  </article>
                  <br>
                  <article id='tabs-2'>
                    <img src="assets/Img2/Sl19Ps.jpg" alt="Second Training">
                    <h4>Exotic Travels</h4>
                    <p>Uncover Sri Lankan history, discover the culture of locals and embark on a journey through time. See the man-made wonders such as Temples, Lakes, Castles and more. Seize your opportunity to have the equal experience in pilgrim tours and religious activities. </p>
                    
                  </article>
                  <br>
                  <article id='tabs-3'>
                    <img src="assets/Img2/SL tour g2 Ps.jpg" alt="Third Class">
                    <h4>Exclusive Experiences</h4>
                    <p>Country side Mountains of Sri Lanka packs a huge wonder to the sight of its viewers. Discover the roads untraveled, with our trusted guides where you will rediscover yourselves. Climb or hike on different terrains within short distances while grasping all kinds of plesure.</p>
                    
                  </article>
                  <br>
                  <article id='tabs-4'>
                    <img src="assets/Img2/Sl21 Ps.jpg" alt="Fourth Training">
                    <h4>Affordable Costs</h4>
                    <p>Visit the marvelous Beaches of Sri Lanka, with limitless fun and freedom. Enjoy the cozy rest inns and surroundings. Feel the breeze of the sunset in the western seaboard, have the joy of peeking into the horizon in the sunrise in the eastern beaches. Be prepared to enjoy the peaceful joy of the ocean.</p>
                    
                  </article>
                  <br>
                </section>
                </div>
              </div>
            </div>
        </div>
    </section>
    <!-- ***** Our Classes End ***** -->
    
    <!-- ***** Footer Start ***** -->
    <footer>
      <div class="container">
          <div class="row">
              <div class="col-lg-12">
                  <p>Copyright &copy; 2020 Road Master
                  
                  - Designed by <a rel="nofollow" href="Home.php" class="tm-text-link" >Travel Team</a></p>

                  
              </div>
          </div>
      </div>
  </footer>

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/mixitup.js"></script> 
    <script src="assets/js/accordions.js"></script>
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>

  </body>
</html>
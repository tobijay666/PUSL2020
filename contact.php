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

    <link rel="stylesheet" href="assets/css/test2.css">

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
                          <li class="scroll-to-section"><a href="AboutUs.php">About</a></li>
                          <li class="scroll-to-section"><a href="Tours.php" >Tours</a></li>
                          <li class="scroll-to-section"><a href="Blog.php">Blog</a></li>
                          <li class="scroll-to-section"><a href="contact.php" class="active">Contact</a></li> 
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
   <!-- ***** Contact Us Area Starts ***** -->
   <section class="section" id="features">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="section-heading">
                    <h2>Contact <em>Us</em></h2>
                    <img src="assets/Img2/line-decgg.png" alt="waves">
                    <p>Road Master is an open world adventure for the seekers of wonder. Your dream ventures can be reality with us</p>
                </div>
            </div>
            <div class="col-lg-6">
                <ul class="features-items">
                    <li class="feature-item">
                        <div class="left-icon">
                            <img src="assets/Img2/telephonePs.png" alt="First One">
                        </div>
                        <div class="right-content">
                            <h4>Call Us</h4>
                            <p>Tel: 031-099 8685 <br> Mobile: 077-433 0911 <br> <a href="#" class="text-button">Go To Page</a></p> <p style="color: #fff;">aaaaaaaaaaa aaaaa aaa a aaaa aaaaa aaaaa aaaaa aaa aaaa </p>      

                        </div>
                    </li>
                    <li class="feature-item">
                        <div class="left-icon">
                            <img src="assets/Img2/gmailPs.png" alt="second one">
                        </div>
                        <div class="right-content">
                          <h4>Mail Us</h4>
                          <p>Email: TravellkLife111@gmail.com <br> <a href="#" class="text-button">Go To Page</a></p> <p style="color: #fff;">aaaaaaaaaaa aaaaa aaa a aaaa aaaaa aaaaa aaaaa aaa aaaa </p>      

                        </div>
                    </li>
                    
                </ul>
            </div>
            <div class="col-lg-6">
                <ul class="features-items">
                    <li class="feature-item">
                        <div class="left-icon">
                            <img src="assets/Img2/facebookPs2.png" alt="fourth muscle">
                        </div>
                        <div class="right-content">
                          <h4>Facebook</h4>
                          <p>Leave a Like and Follow Us Now. <br> <a href="#" class="text-button">Go To Page</a></p> <p style="color: #fff;">aaaaaaaaaaa aaaaa aaa a aaaa aaaaa aaaaa aaaaa aaa aaaa </p>      

                        </div>
                    </li>
                    <li class="feature-item">
                        <div class="left-icon">
                            <img src="assets/Img2/instagramPs.png" alt="training fifth">
                        </div>
                        <div class="right-content">
                          <h4>Instagram</h4>
                          <p>Leave a Like and Follow Us Now. <br> <a href="#" class="text-button">Go To Page</a></p> <p style="color: #fff;">aaaaaaaaaaa aaaaa aaa a aaaa aaaaa aaaaa aaaaa aaa aaaa </p>      

                        </div>
                    </li>
                    
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- ***** Contact Us Area Ends ***** -->
    
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
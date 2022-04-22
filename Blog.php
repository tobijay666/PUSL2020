<?php
     session_start();

     include("connection.php");
     include("functions.php");

     if($_SERVER['REQUEST_METHOD'] == "POST")
      {
          //declaring variables for the user inputs

          
          $memID = $_SESSION['Mem_Id'];
          $name = $_POST['name'];
          $sub = $_POST['subject'];
          $msg = $_POST['message'];
          $img = $_POST['image'];


                          if(!empty($name) && !empty($msg)&& !empty($sub)) 
                          {

                              //save to the database
                              $query = "insert into blog (Mem_Id,name,Subject,Message) values ('$memID','$name','$sub','$msg' )";

                              mysqli_query($con, $query);

                              header("Location: blog.php");
                              die;
                          }
                          else
                          {
                              echo "Please enter some valid information!";
                              
                          }
                      }
                      $sqry="SELECT * FROM blog ";

                      if(!($squ= mysqli_query($con,$sqry))){
                          echo"Data retrival failed";
              }              

?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
  
    <title>Travel Life</title>
<!--

CSS files

-->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/Blog.css">

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
                          <li class="scroll-to-section"><a href="Blog.php" class="active">Blog</a></li>
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
  <?php
    if(!(isset($_SESSION['Mem_Id']))){echo"
        <section class='section' id='call-to-action'>
            <div class='container'>
                <div class='row'>
                    <div class='col-lg-10 offset-lg-1'>
                        <div class='cta-content'>
                            <br>
                            <h2>Tell <em>Us</em> Your <em>Thoughts</em>!</h2>
                            <br>
                            <div class='main-button scroll-to-section'>
                                <a href='Signin.php'>Become a member</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>";}
        ?>
    <!-- ***** Our Classes Start ***** -->
    <section class="section" id="our-classes">
         <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Our <em>Blog</em></h2>
                        <img src="assets/Img2/line-decgg.png" alt="">
                        <p></p>
                    </div>
                </div>
            </div> 
            
            
                  
                  <?php
                  $n = 0;
                  while( $row = mysqli_fetch_assoc($squ) ){
                    echo"
                    <div class='col-lg-9 offset-lg-2'>
                    <section class='tabs-content'>
                  <article id='tabs-$n'>
                    <!-- <img src='assets/Img2/Sl21 Ps.jpg' alt='Fourth Training'> -->
                    <h4>{$row['Subject']}</h4>
                    <p>{$row['Message']}</p>
                    <h6>-{$row['name']}</h6>
                  </article>
                  <br>
                  </section>
                  </div>";
                    $n = $n +1;
                }
                  ?>
               
              </div>
            </div>
        </div>
    </section>
    <!-- ***** Our Classes End ***** -->
    <?php
                                if(isset($_SESSION['Mem_Id'])){echo"
    <section class='section' id='contact-us'>
        <div class='container-fluid'>
            <div class='row'>
                
                <div class='col-lg-12 col-md-6 col-xs-6'>
                    <div class='contact-form'>
                        <form method='post'>
                          <div class='row'>
                            <div class='col-md-12 col-sm-12'>
                              <fieldset>
                                <input name='name' type='text' id='name' placeholder='Your Name*' required=''>
                              </fieldset>
                            </div>
                           
                            <div class='col-md-12 col-sm-12'>
                              <fieldset>
                                <input name='subject' type='text' id='subject' placeholder='Subject'>
                              </fieldset>
                            </div>
                            <div class='col-lg-12'>
                              <fieldset>
                                <textarea name='message' rows='6' id='message' placeholder='Message' required=''></textarea>
                              </fieldset>
                            </div>
                            
                            <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
                              <fieldset>
                                <button type='submit' id='form-submit' class='main-button'>Send Message</button>
                              </fieldset>
                            </div>
                          </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>";}
    else{
        echo("");
    }
    ?>


    <!-- ***** Footer Start ***** -->
    <footer>
      <div class="container">
          <div class="row">
              <div class="col-lg-12">
                  <p>Copyright &copy; 2020 Travel Life
                  
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
<?php 
     session_start();

      include("connection.php");
      include("functions.php");

      
      if($_SERVER['REQUEST_METHOD'] == "POST")
      {
          //declaring variables for the user inputs

          
          $did = $_SESSION['D_Id'];
          $doa = $_SESSION['doa'];
          $vreg = $_POST['VReg'];
        

          



                          if(!empty($vreg)  )
                          {

                              $qry2 = "SELECT * FROM report where Driver_Id = '$did' AND Date_of_Acc = '$doa' ";
                              $result2 = mysqli_query($con,$qry2);
                              if($result2 && mysqli_num_rows($result2) > 0)
                                {

                                    $Report_data = mysqli_fetch_assoc($result2);
                                    $repID = $Report_data['Rep_Id'];
                                }
                                $query3 = "insert into veh_rep (Vehicle_Id,Rep_Id) values ('$vreg','$repID' )";
                                mysqli_query($con, $query3);

                              

                              header("Location: ReportPic.php");
                              die;
                            }
                          else
                          {
                              echo "Please enter some valid information!";
                              
                          }
                      }
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
                      <a href="Home.php" class="logo">Road<em> Master</em></a>
                      <!-- ***** Logo End ***** -->
                      <!-- ***** Menu Start ***** -->
                      <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                            
                            <?php
                                if(!(isset($_SESSION['D_Id']))){echo"
                                    
                                    <li class='main-button'><a href='Login.php'>Log In</a></li>";
                                }
                                else{echo"
                                    <li class='scroll-to-section'><a href='#rep' >Report</a></li>
                                    <li class='scroll-to-section'><a href='#pro' >Profile</a></li>
                                    <li class='main-button'><a href='logout.php'>Log Out</a></li>";}
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

  <!-- ***** Call to Action Start ***** -->
  <section class="section" id="features">
    <div class="container" >
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="section-heading">
                    <h2>Create <nbsp><nbsp><em> Report</em></h2>
                    <img src="assets/Img2/line-dec.png" alt="waves">
                    <p>We are sorry for your unfortunate incident. Try to fill out every necessary detail.</p>



                    <form method = "post">
                    <table border=0>
                      
                        <tr height="60px">
                            <td width="400px" >
                               <h6> Vehicle Reg. No.</h6>
                            </td>
                            <td width="600px">
                                <input type="text" name="VReg" placeholder="Enter Vehicle Reg. No" required>
                            </td>
                        </tr>
        
                        
                        <br>

                        <tr height="30px"><td>

                        </td></tr>
                        
                        
               
                        <tr height="60px">
                            <td colspan=2 align="center">
                                <div class="main-button scroll-to-section">
                                <input type="Submit" value="Next Page">
                                <!--  -->
                                </div>
                
                            </td>
        
                        </tr>
                    </table>
                    
                    </form>
                    </div>
                </div>   
            </div>
        </div>
    </div>
</section>
<!-- ***** Call to Action End ***** -->

    
    <!-- ***** Footer Start ***** -->
    <footer>
      <div class="container">
          <div class="row">
              <div class="col-lg-12">
                  <p>Copyright &copy; 2020 Road Master
                  
                  - Designed by <a rel="nofollow" href="Home.php" class="tm-text-link" >Code Brigade</a></p>

                  
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
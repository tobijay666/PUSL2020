<?php
     session_start();

     include("connection.php");
     include("functions.php");
     $userdata=check_login($con);
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

    <link rel="stylesheet" href="assets/css/test2.css">
    
    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css" />
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="assets/css/responsive.css" rel="stylesheet" />

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
<br>
<br>
<br>
<br>


<div class="layout_padding">

    <section class="layout_padding story_section ">
    <div class="container-fluid">
        <div class="row">
        <!-- <div class=" col-md-6">
            <div>
            <img class="img-fluid" src="images/security.jpg" alt="" />
            </div> -->
        </div>
        <div class="col-lg-6 offset-lg-3">
        <div class="box">
		<p><img src="assets/img2/avatar.jpg" style="width: 150px; border-radius:75px"></p>
		<div id="ho2"> <h2 >My Profile</h2></div>
		<form ><fieldset style="width:500px" disabled="disabled" style="color: #000;">
			<legend style="color: #000;"><font color="black">Personal Details</font></legend>
			<?php
            while( !empty($userdata) ){
                			echo"
                		<table class='pdtable'>
                			<tr><td><label>Name</label></td><td><input type='text' name='fname' placeholder='{$userdata['Name']}'></td></tr>
                			// <tr><td><label>Last Name</label></td><td><input type='text' name='lname' placeholder='{$row['last_name']}'></td></tr>
                			// <tr><td><label>User Name</label></td><td><input type='text' name='uname' placeholder='{$row['user_name']}'></td></tr>
                			// <tr><td><label>Date of Birth</label></td><td><input type='text' name='dob' placeholder='{$row['date_of_birth']}'></td></tr>
                			// <tr><td><label>Gender</label></td><td><input type='text' name='gender' placeholder='{$row['gender']}'></td></tr>
                			// <tr><td><label>Email</label></td><td><input type='email' name='email' placeholder='{$row['email']}'></td></tr>
                			// <tr><td><label>Phone No.</label></td><td><input type='text' name='number' placeholder='{$row['ph_number']}'></td></tr>
                        
                		</table>";}
	// 		 while( $row = mysqli_fetch_assoc($squ) ){
	// 			echo"
	// 		<table class='pdtable'>
	// 			<tr><td><label>First Name</label></td><td><input type='text' name='fname' placeholder='{$row['first_name']}'></td></tr>
	// 			<tr><td><label>Last Name</label></td><td><input type='text' name='lname' placeholder='{$row['last_name']}'></td></tr>
	// 			<tr><td><label>User Name</label></td><td><input type='text' name='uname' placeholder='{$row['user_name']}'></td></tr>
	// 			<tr><td><label>Date of Birth</label></td><td><input type='text' name='dob' placeholder='{$row['date_of_birth']}'></td></tr>
	// 			<tr><td><label>Gender</label></td><td><input type='text' name='gender' placeholder='{$row['gender']}'></td></tr>
	// 			<tr><td><label>Email</label></td><td><input type='email' name='email' placeholder='{$row['email']}'></td></tr>
	// 			<tr><td><label>Phone No.</label></td><td><input type='text' name='number' placeholder='{$row['ph_number']}'></td></tr>
			
	// 		</table>
			 
	// 	</fieldset></form><br>
	// 	<form action='http://localhost/coderunners/Profile.php' method='POST' enctype='multipart/form-data'>
    //   <fieldset style='width: 500px'>
	// 		<legend><font color='white'>Health Details</font></legend>
			

      
        
    //   <table>
	// 			<tr><td><label>Weight</label></td><td><input type='text' name='weight' placeholder='{$row['weight']}'></td></tr>
	// 			<tr><td><label>Height</label></td><td><input type='text' name='height' placeholder='{$row['height']}'></td></tr>
	// 			<tr><td><label>BMI</label></td><td><input type='text' name='bmi' placeholder='{$row['bmi']}'></td></tr>
	// 			<tr><td><label>Blood Group</label></td><td><input type='text' name='blood' placeholder='{$row['blood_group']}'></td></tr>
	// 			<br>
	// 			<tr><br> <td></td><td><input class='buttons' type='submit' value='submit'  ></td></tr>
			
      
    //     </table>
    //     ";}
        ?>
        </div>
    </div>
    </section>
</div>

    
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
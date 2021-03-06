
<?php
session_start();
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/ico/favicon.ico">
<title>SabKuch</title>
<link href="./css/bootstrap.css" rel="stylesheet">
<link rel="stylesheet" href="./css/swiper.css">

<link href="./css/style.css" rel="stylesheet">


    <link href="./css/font-awesome.min.css" rel="stylesheet">

 <script src="./js/modernizr.js"></script>
</head>
<body>
	<div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.htm">SabKuch</a>
        </div>
        <div class="navbar-collapse collapse navbar-right">
          <ul class="nav navbar-nav">
            <li><a href="index.php">HOME</a></li>
            <li><a href="./aboutus.php">ABOUT</a></li>
             <?php if(isset($_SESSION['logged_in']))       
            {
              echo '<li><a href="./login-system/logout.php">LOGOUT</a></li>';
            }
            else 
            {
              echo '<li><a href="./login-system/index2.php">LOGIN OR SIGNUP</a></li>';
              
        }
            ?>
            <li class="dropdown">
              <a href="./index.htm" class="dropdown-toggle" data-toggle="dropdown">STORES<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="food.htm">Food</a></li>
                <li><a href="dailyneeds.htm">Daily Needs</a></li>
                <li><a href="medical.htm">Medical</a></li>
                
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>


<div id="blue">
      <div class="container">
      <div class="row">
        <h3>About Us</h3>
      </div><!-- /row -->
      </div> <!-- /container -->
  </div><!-- /blue -->

<div class="container mtb">
    <div class="row">
      <div class="col-lg-6">
        <img class="img-responsive" src="./images/1.png" alt="">
      </div>
      
      <div class="col-lg-6">
        <h4>More About Our Agency.</h4>
        <p>Sab-Kuch is a general purpose e-commerce website which is aiming to provide you all your basic needs at your door </p>
                <p><br/><a href="contactus.htm" class="btn btn-theme">Contact Us</a></p>
      </div>
    </div><! --/row -->
   </div><! --/container -->





<div class="container mtb">
    <div class="row centered">
      <h3 class="mb">MEET OUR TEAM</h3>
      
      <div class="col-lg-4 col-md-4 col-sm-6">
        <div class="he-wrap tpl6">
        <img src="./images/hri.jpg" alt="hrishabh">
          <div class="he-view">
            <div class="bg a0" data-animate="fadeIn">
                            <h3 class="a1" data-animate="fadeInDown">Contact Me:</h3>
                            <a href="https://mail.google.com/mail/u/0/?view=cm&fs=1&tf=1&to=30hrs1999@gmail.com&su=To%20Sab-Kuch&shva=1" class="dmbutton a2" data-animate="fadeInUp"><i class="fa fa-envelope"></i></a>
                            <a href="https://www.facebook.com/hrishabh.sharma.33" class="dmbutton a2" data-animate="fadeInUp"><i class="fa fa-facebook"></i></a>
                      </div><!-- he bg -->
          </div><!-- he view -->    
        </div><!-- he wrap -->
        <h4>Hrishabh Sharma</h4>
        <h5 class="ctitle">CHIEF DESIGNER</h5>
        <p>Currently,i`m pursuing B.Tech from NIT Surat</p>
        <div class="hline"></div>
      </div><! --/col-lg-3 -->

      <div class="col-lg-4 col-md-4 col-sm-6">
        <div class="he-wrap tpl6">
        <img src="./images/aman.jpg" alt="">
          <div class="he-view">
            <div class="bg a0" data-animate="fadeIn">
                            <h3 class="a1" data-animate="fadeInDown">Contact Me:</h3>
                            <a href="https://mail.google.com/mail/u/0/?view=cm&fs=1&tf=1&to=aman0902pandey@gmail.com&su=To%20Sab-Kuch&shva=1" class="dmbutton a2" data-animate="fadeInUp"><i class="fa fa-envelope"></i></a>
                            <a href="https://www.facebook.com/profile.php?id=100015696249292" class="dmbutton a2" data-animate="fadeInUp"><i class="fa fa-facebook"></i></a>
                      </div><!-- he bg -->
          </div><!-- he view -->    
        </div><!-- he wrap -->
        <h4>AMAN PANDEY</h4>
        <h5 class="ctitle">CONTENT MANAGEMENT</h5>
        <p>Mere paas spice ka keypad wala phone hai</p>
        <div class="hline"></div>
      </div><! --/col-lg-3 -->

      <div class="col-lg-4 col-md-4 col-sm-6">
        <div class="he-wrap tpl6">
        <img src="./images/kunal.jpg" alt="">
          <div class="he-view">
            <div class="bg a0" data-animate="fadeIn">
                            <h3 class="a1" data-animate="fadeInDown">Contact Me:</h3>
                            <a href="https://mail.google.com/mail/u/0/?view=cm&fs=1&tf=1&to=krkband@gmail.com&su=To%20Sab-Kuch&shva=1" class="dmbutton a2" data-animate="fadeInUp"><i class="fa fa-envelope"></i></a>
                            <a href="https://www.facebook.com/iamkunalkatariya" class="dmbutton a2" data-animate="fadeInUp"><i class="fa fa-facebook"></i></a>
                      </div><!-- he bg -->
          </div><!-- he view -->    
        </div><!-- he wrap -->
        <h4>KUNAL KATARIYA</h4>
        <h5 class="ctitle">GRAPHICS & STYLING</h5>
        <p>Main Bada Aadmi hoon,mere paas i-phone hai. </p>
        <div class="hline"></div>
      </div><! --/col-lg-3 -->

            
      
    </div><! --/row -->
   </div><! --/container -->
   <div id="footerwrap">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <h4>About</h4>
          <div class="hline-w"></div>
          <p>SabKuch is One place for more than one things</p>
        </div>
        <div class="col-lg-4">
          <h4>Social Links</h4>
          <div class="hline-w"></div>
          <p>
            <a href="#"><i class="fa fa-dribbble"></i></a>
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
            <a href="#"><i class="fa fa-tumblr"></i></a>
          </p>
        </div>
        <div class="col-lg-4">
          <h4>Our Bunker</h4>
          <div class="hline-w"></div>
          <p>
            NIT Surat Campus,<br>
            Surat,<br>
            Gujarat.          </p>
        </div>
      
      </div><! --/row -->
    </div><! --/container -->
   </div><! --/footerwrap -->
 



   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/retina-1.1.0.js"></script>
  <script src="assets/js/jquery.hoverdir.js"></script>
  <script src="assets/js/jquery.hoverex.min.js"></script>
  <script src="assets/js/jquery.prettyPhoto.js"></script>
    <script src="assets/js/jquery.isotope.min.js"></script>
    <script src="assets/js/custom.js"></script>




 </body>
</html>
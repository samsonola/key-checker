<?php 
ini_set('SMTP','myserver');
ini_set('smtp_port',25);
include 'config.php'; 
include 'sendmail.php';
error_reporting(0); 
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Afolayan Oladimeji Samson">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Contact Us | Check Key</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-plot-listing.css">
    <link rel="stylesheet" href="assets/css/animated.css">
    <link rel="stylesheet" href="assets/css/owl.css">

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
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <!-- <a href="index.html" class="logo">
            </a> -->
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
            <li><a href="index" class="active" style="color:yellowgreen;">Home</a></li>
              <li ><a href="how-to" style="color:yellowgreen;">How To use</a></li> 
              <li ><a href="contact" style="color:yellowgreen;">Contact Us</a></li> 
              <li><div class="main-white-button"><a href="add-key"><i class="fa fa-plus"></i> Add New Key</a></div></li> 
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

  <div class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="top-text header-text">
            <h6>Have suggestions for Us?</h6>
            <h2>Feel free to send us a message</h2>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="contact-page">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="inner-content">
            <div class="row">
              <div class="col-lg-6">
                <div id="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3940.912496482138!2d7.355768775544097!3d8.98019938974985!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x104e722c12932eb7%3A0x95f13a4e11ca6f34!2sKapwa%20Lugbe%2C%20Federal%20Capital%20Territory%20Abuja!5e0!3m2!1sen!2sng!4v1682499250445!5m2!1sen!2sng" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
              </div>
              <div class="col-lg-6 align-self-center">
                <form id="contact" action="" method="POST">
                  <div class="row">
                    <div class="col-lg-6">
                      <fieldset>
                        <input type="text" name="name" id="name" placeholder="Name" autocomplete="on" required>
                      </fieldset>
                    </div>
                    <div class="col-lg-6">
                      <fieldset>
                        <input type="text" name="phone" id="surname" placeholder="Phone" autocomplete="on" required>
                      </fieldset>
                    </div>
                    <div class="col-lg-12">
                      <fieldset>
                        <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email" required="">
                      </fieldset>
                    </div>
                    
                    <div class="col-lg-12">
                      <fieldset>
                        <textarea name="message" type="text" class="form-control" id="message" placeholder="Message" required=""></textarea>  
                      </fieldset>
                    </div>
                    <div class="col-lg-12">
                      <fieldset>
                        <button id="form-submit" class="main-button" name="submit"><i class="fa fa-paper-plane"></i> Send Message</button>
                      </fieldset>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<!-- PHP SEND MAIL -->
<?php
// global $server;
// if (isset($_POST['submit'])){
// $to = 'info@pappyshub.com'; 
// $from = mysqli_real_escape_string($server,strtolower($_POST['email'])); 
// $phone = mysqli_real_escape_string($server,$_POST['phone']); 
// $name = mysqli_real_escape_string($server,uwords($_POST['name'])); 
// $message = mysqli_real_escape_string($server,$_POST['message']); 
 
// $subject = "Message from key Checker"; 
 
// $htmlContent = "
//     <html> 
//     <head> 
//         <title>$name sent a message to key checker</title> 
//     </head> 
//     <body> 
//          <div style='background-color:black;height:30px;width:100%'><p style='text-align:center;background-color:white'>Holla!</p><div>
//         <h1>Hi Key checker, my name is $name</h1> 
//         <p>My phone is $phone and my email is $email, Find my message down below</p> 
//         <p>$message</p> 

//         <div style='background-color:black;height:50px;width:100%'><p style='text-align:center;background-color:white'>Holla!</p><div>
//     </body> 
//     </html>"; 
 
// Set content-type header for sending HTML email 
// $headers = "MIME-Version: 1.0" . "\r\n"; 
// $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
 
// Additional headers 
// $headers .= 'From: '.$name.'<'.$from.'>' . "\r\n"; 
// $headers .= 'Cc: welcome@example.com' . "\r\n"; 
// $headers .= 'Bcc: welcome2@example.com' . "\r\n"; 
 
// Send email 
// if(mail($to, $subject, $htmlContent, $headers)){ 
//     echo 'Email has sent successfully.'; 
// }else{ 
//    echo 'Email sending failed.'; 
// }

// }

 ?>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="sub-footer">
            <p>Copyright © 2023 PappysHub. All Rights Reserved.
            <br>
			<!-- Design: -->
       <a rel="nofollow" href="https://templatemo.com" title="CSS Templates">
        <!-- TemplateMo -->
      </a></p>
          </div> 
        </div>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/animation.js"></script>
  <script src="assets/js/imagesloaded.js"></script>
  <script src="assets/js/custom.js"></script>

</body>

</html>

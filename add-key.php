<?php
include "config.php";
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Add more keys online">
    <meta name="author" content="Afolayan Oladimeji Samson">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Add new Key | Check key</title>

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
            <!-- <a href="index.html" class="logo"> -->
            <!-- </a> -->
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

  <div class="main-banner">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="top-text header-text">
            <h2>Help us add keys!</h2>
            <h6>Make it easier for others to find keys by adding more</h6>
            <br>
          </div>
        </div>
        <div class="col-lg-12">
          <form id="search-form" name="gs" method="POST" role="search" action="">
            <div class="row">
              <div class="col-lg-3 align-self-center">
                <fieldset>
                  <input type="address" name="song_title" class="searchText" placeholder="Enter Song title" autocomplete="on" required>
              </fieldset>
              </div>
              <div class="col-lg-3 align-self-center">
                  <fieldset>
                      <input type="address" name="artiste" class="searchText" placeholder="Enter Artiste name" autocomplete="on" required>
                  </fieldset>
              </div>
              <div class="col-lg-3 align-self-center">
                  <fieldset>
                      <input type="address" name="song_key" class="searchText" placeholder="Enter key here" autocomplete="on" required>
                  </fieldset>
              </div>
              <div class="col-lg-3">                        
                  <fieldset>
                      <button name="submit" class="main-button"><i class="fa fa-search"></i> Add key Now</button>
                  </fieldset>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <?php
  if (isset($_POST["submit"])) {
  $key = mysqli_real_escape_string($server,$_POST['song_key']);
  $artiste = mysqli_real_escape_string($server,strtoupper($_POST['artiste']));
  $song_title = mysqli_real_escape_string($server,ucfirst($_POST['song_title']));
  date_default_timezone_set("Africa/Lagos");
	$time = time();
	$format_time = date('d-m-Y',$time);
	$key_verified = '0';
  $possible_keys = ['A','a','B','b','C','c','D','d','E','e','F','f','G','g','A#','a#','Bb','C#','c#','d#','D#','db','Db','Eb','eb','f#','F#','G#','g#','Gb','gb'];
  global $server;
  $check_sql = "SELECT * FROM `song_key` WHERE `artist`= '$artiste' and `song_title` = '$song_title'";
  $check_query =  mysqli_query($server, $check_sql);
  $nums = mysqli_num_rows($check_query);
  if (!in_array($key,$possible_keys)) {
   echo "<script>alert('You can only add musical keys from A-G#')</script>";
  }elseif($nums >= "1"){
  echo "<script>alert('Song already exist!')</script>";
  }else{
    $sql = "INSERT INTO `song_key`(`artist`,`song_title`,`song_key`,`key_verified`,`date_posted`,`time_now`)VALUES('$artiste','$song_title','$key','$key_verified','$format_time','$time')";
    $query =  mysqli_query($server, $sql);
    sleep(2);
          if ($query) {
            echo "<script>alert('You have added the key of the song \'$song_title\' by $artiste, thank you!')</script>";
          }else{
            echo "<script>alert('Error occured, your song and key couldn't be added!')</script>";
          }
  }
}
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

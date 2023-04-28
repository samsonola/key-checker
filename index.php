<?php

$artiste = $song = "";
include "config.php";

?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Check keys of any song online">
    <meta name="description" content="Key checker">
    <meta name="author" content="Afolayan Oladimeji Samson">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Home | Check Key</title>

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
            <h6>Over 36,500+ Song Keys</h6>
            <h2>Find Key to any Song Here</h2>
          </div>
        </div>
        <div class="col-lg-12">
          <form id="search-form"  method="GET"  action="" >
            <div class="row">
              <div class="col-lg-4 align-self-center">
                <fieldset>
                  <input type="text" name="song" class="searchText" placeholder="Enter Song title" autocomplete="on" required>
              </fieldset>
              </div>
              <div class="col-lg-5 align-self-center">
                  <fieldset>
                      <input type="text" name="artiste" class="searchText" placeholder="Enter Artiste name" autocomplete="on" required>
                  </fieldset>
              </div>
              <div class="col-lg-3">                        
                  <fieldset>
                      <button  name="submit"><i class="fa fa-search"></i> Search Now</button>
                  </fieldset>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>


  <div class="popular-categories">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
      <?php          
      if (isset($_GET['submit'])) {
        $artiste = $_GET['artiste'];
        $song = $_GET['song'];
        $sql = "SELECT * FROM `song_key` WHERE `artist` LIKE '%$artiste%' and `song_title` LIKE '%$song%'";
        $query = mysqli_query($server,$sql);
        $num = mysqli_num_rows($query);
        if ($num >= 1) {
          foreach($query as $querys){
            $song_db = $querys['song_title'];
            $artiste_db = $querys['artist'];
            $key = $querys['song_key'];
            $key_verified = $querys['key_verified'];
            echo "<h2 style='color:yellowgreen;'>Song and Key Found!</h2><br>";
            echo "<p>Song Title: $song_db</p><br>";
            echo "<p>Artiste: $artiste_db</p><br>";
            echo "<p style='color:yellowgreen;'>Key: <strong>$key</strong></p><br>";
            if($key_verified == "0"){
              echo "<div><p>Key Verification Status: Not verified yet</p> <br>
              </div>";
           }else {
           echo  "<p>key Verification Status: Verified</p><br>";
            }}
      }else{
        echo "<h2 style='color:red;'>Song and Key Not Found!</h2><br>";
        echo "<p>Kindly go  <a href ='add-key'>here</a> to help add the key to this song when you find it!</p><br>";
      }
    }

      ?>
            
          </div>
        </div>
       
      </div>
    </div>
  </div>


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

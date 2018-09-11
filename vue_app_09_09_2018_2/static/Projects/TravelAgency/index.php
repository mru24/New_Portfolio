<?php
define("TITLE", "Woopa! Travels");
include('includes/header.php');
?>

  <div class="landing valign-wrapper hidden">
<!-- IN CASE JAVASCRIPT DISABLED -->
<noscript>
  <div class="landing hidden">
</noscript>
    <img src="img/travel-style-logo.png" alt="">
    <div class="fullscreen-video-wrap">
      <video preload="true" autoplay="true" loop="true" volume="0">
        <source src="video/vid01.mp4" type="video/mp4">
      </video>
    </div>
    <div class="title">
      <h1> <a href="#main">Let's Go!</a></h1>
    </div>
  </div>
</div>

<!-- NAVBAR -->

<?php include('includes/navbar.php'); ?>

<!-- MAIN PAGE -->

  <div id="main" class="mainPage scrollspy">
    <div class="container">

      <div class="row">
        <div class="col s12 m9">
          <div class="row">
            <div class="col s12">
              <!-- IMAGE SLIDER -->
              <?php include('includes/imageSlider.php'); ?>
            </div>

              <!-- OFFERS MENU -->
              <?php include('includes/offers.php'); ?>

          </div> <!-- ROW END -->

        </div>

          <!-- LAST MINUTE MENU -->
          <?php include('includes/lastMinute.php'); ?>

      </div> <!-- ROW END -->
    </div> <!-- CONTAINER END -->
  </div> <!-- MAIN DIV END -->

<!-- FOOTER WITH NEWSLETTER AND INFO BOXES -->
<?php include('includes/footer.php'); ?>

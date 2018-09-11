<?php
define("TITLE", "Woopa! | Destinations");
include('includes/header.php');
?>

<!-- NAVBAR -->

<?php include('includes/navbar.php'); ?>

<!-- MAIN PAGE -->

  <div id="main" class="mainPage scrollspy">
    <div class="container">

      <div class="row">

          <!-- IMAGE SLIDER -->
          <?php include('includes/destinations.php'); ?>

          <!-- LAST MINUTE MENU -->
          <?php include('includes/lastMinute.php'); ?>

      </div>

      <div class="row">
          <!-- OFFERS MENU -->
          <?php include('includes/offers.php'); ?>

      </div> <!-- ROW END -->
    </div> <!-- CONTAINER END -->
  </div> <!-- MAIN DIV END -->

<!-- FOOTER WITH NEWSLETTER AND INFO BOXES -->

<?php include('includes/footer.php'); ?>

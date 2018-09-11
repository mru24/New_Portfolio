<?php

define('TITLE', 'Woopa! | Country Page');
include('includes/arrays.php');

include('includes/header.php');

// PREVENT CODE INJECTION  // preg_replace //
function strip_bad_chars( $input ) {
  $output = preg_replace( "/[^a-zA-Z0-9_-]/", " ", $input );
  return $output;
}

if(isset($_GET['country']) && isset($_GET['region'])) {
  $country = strip_bad_chars($_GET['country']);
  $region = strip_bad_chars($_GET['region']);
}

$places = $destinations[$region]['country'][$country]['places'];

?>

<!-- NAVBAR -->

<?php include('includes/navbar.php'); ?>

<!-- MAIN PAGE -->

  <div id="main" class="mainPage scrollspy">
    <div class="container">

      <div class="row">

        <!-- COUNTRY PLACES MENU -->

        <div class="col s12 m9">
          <h4 class="heading">City Breaks</h4>

          <?php foreach ($places as $place => $placeData) { ?>
          <div class="col s12 m4" data-aos="fade-up">
            <div class="card">
              <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="" alt="<?php echo $place; ?> Image">
              </div>
              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">
                  <?php echo $place; ?>
                  <i class="material-icons right">more_vert</i>
                </span>
              </div>
              <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">
                  <?php echo $place; ?>
                  <i class="material-icons right">close</i>
                </span>
                <p>Here is some more information about this product that is only revealed once clicked on.</p>
              </div>
            </div>
          </div>

          <?php } ?>

        </div>

          <!-- LAST MINUTE MENU -->
          <?php include('includes/lastMinute.php'); ?>

      </div> <!-- ROW END -->

      <div class="row">
          <!-- OFFERS MENU -->
          <?php include('includes/offers.php'); ?>

      </div> <!-- ROW END -->
    </div> <!-- CONTAINER END -->
  </div> <!-- MAIN DIV END -->

<!-- FOOTER WITH NEWSLETTER AND INFO BOXES -->

<?php include('includes/footer.php'); ?>

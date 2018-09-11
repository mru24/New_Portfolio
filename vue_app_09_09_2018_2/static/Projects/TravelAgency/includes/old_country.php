<?php
define('TITLE', 'Country Page');
include('arrays.php');

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

foreach ($places as $place) {
  if(in_array('places', $places)) {
    echo $place['name'];
  }
}



?>

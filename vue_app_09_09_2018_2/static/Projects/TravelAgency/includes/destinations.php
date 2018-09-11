<?php include('includes/arrays.php'); ?>

<div class="col s12 m9">
  <h4 class="heading">Our Destinations</h4>  

<?php foreach ($destinations as $region => $data) { ?>
  <div class="col s12 m4" data-aos="fade-up">
    <div class="card">
      <div class="card-image waves-effect waves-block waves-light">
        <img class="activator" src="img/destinations/<?php echo $data['image']; ?>" alt="<?php echo $region; ?> Image">
      </div>
      <div class="card-content">
        <span class="card-title activator grey-text text-darken-4">
          <?php echo $region; ?>
          <i class="material-icons right">more_vert</i>
        </span>
      </div>
      <div class="card-reveal">
        <span class="card-title grey-text text-darken-4">
          <?php echo $region; ?>
          <i class="material-icons right">close</i>
        </span>
        <ul>
        <?php
        $countries = $data['country'];
        foreach ($countries as $country => $countryData) { ?>
          <li>
            <a href="country.php?country=<?php echo $country ?>&region=<?php echo $region; ?>">
              <?php echo $country; ?>
            </a>
          </li>
        <?php } ?>
        </ul>
      </div>
    </div>
  </div>

<?php } ?>

</div>

<!-- LAST MINUTE MENU -->

<?php include('includes/arrays.php'); ?>

<div class="col s8 offset-s2 m3">

<?php foreach ($lastMinute as $item) { ?>

  <div class="row">
    <div class="col s12">
      <div class="card lastMinute" data-aos="zoom-in-left">
        <div class="card-image waves-effect waves-block waves-light">
          <img src="img/mainPage/<?php echo $item['image']; ?>" alt="Last Minute Image <?php echo $item['title']; ?>" class="activator responsive-img">
        </div>
        <div class="card-content">
          <span class="card-title activator grey-text text-darken-4">
            <?php echo $item['title']; ?>
          </span>
        </div>
        <div class="card-reveal">
          <span class="card-title activator grey-text text-darken-4">
            <?php echo $item['title']; ?>
            <i class="material-icons right">close</i>
          </span>
          <p><?php echo $item['content']; ?></p>
        </div>
      </div>
    </div>
  </div>

<?php } ?>

</div>

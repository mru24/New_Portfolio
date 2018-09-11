<!-- IMAGE SLIDER -->

<?php include('includes/arrays.php'); ?>

<div class="slider z-depth-1">
  <noscript>
    <h3>Plesae enable JavaScript</h3>
  </noscript>
  <ul class="slides">

  <?php foreach ($slides as $slide) { ?>

    <li><img src="img/slider/<?php echo $slide['image']; ?>" alt="">
      <div class="caption <?php echo $slide['captionAlign']; ?>-align">
        <h3><?php echo $slide['title']; ?></h3>
      </div>
    </li>

  <?php } ?>

  </ul>
</div>

<?php include('includes/arrays.php'); ?>

<div class="navbar-fixed">
  <nav class="z-depth-1">
    <div class="nav-wrapper"><a href="#" class="brand-logo"><img src="img/travel-style-logo.png" alt="Woopa! Travels Logo"></a><a href="#" data-target="mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">

      <?php foreach ($navbar as $item) { ?>
        <li>
          <a href="<?php echo $item['link']; ?>">
            <?php echo $item['name']; ?>
          </a>
        </li>
      <?php } ?>

      </ul>
    </div>
  </nav>
</div>
<ul id="mobile" class="sidenav sidenav-close">

  <?php foreach ($navbar as $item) { ?>
    <li>
      <a href="<?php echo $item['link']; ?>">
        <?php echo $item['name']; ?>
      </a>
    </li>
  <?php } ?>

</ul>

<!-- OFFERS MENU -->

<?php include('includes/arrays.php'); ?>

<div class="col s12">

<?php foreach ($offers as $item) { ?>

  <div class="col s12 l4 m8 offset-m2 offer" data-aos="fade-up">
    <div class="card">
      <div class="card-image hide-on-med-only">
        <img src="img/mainPage/<?php echo $item['image']; ?>" alt="">
      </div>
      <div class="card-content"><span class="card-title"> <strong class="<?php echo $item['color']; ?>-text text-accent-3"><?php echo $item['title']; ?></strong></span>
        <p><?php echo $item['content']; ?></p>
      </div>
      <div class="card-action">
        <a href="<?php echo $item['link']; ?>">Find out more >> </a></div>
    </div>
  </div>

<?php } ?>

</div>

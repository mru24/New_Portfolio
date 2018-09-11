<?php include('includes/arrays.php');

foreach ($infoBox as $item) { ?>

    <div class="col s12 l3 m8 offset-m2">
      <div class="infoBox" data-aos="fade-up">
        <h6 class="center-align"> <strong><?php echo $item['title']; ?></strong></h6>
        <ul>
        <?php for ($i=0; $i < count($item['content']); $i++) { ?>
          <li><?php echo $item['content'][$i] ?></li>
        <?php } ?>
        </ul>
    <?php if(array_key_exists('info', $item)) {
        for ($i=0; $i < count($item['info']); $i++) { ?>
        <p><?php echo $item['info'][$i]; ?></p>
      <?php } ?>
    <?php } ?>
      </div>
    </div>

<?php } ?>

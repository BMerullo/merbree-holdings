


<?php $gallery = $DATA->gallery?>

<section class="gallery">
  <div class="gallery-container"> 
    <div class="row">
      <?php foreach ($gallery as $image): ?>
        <div class="col-lg-4 gallery-img-container anim-up anim-no-load">
          <img src="<?php echo $image['url']?>" alt="<?php echo $image['alt']?>">
        </div>
      <?php endforeach?>  
    </div>
  </div>
</section>
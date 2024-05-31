
<?php $background = $DATA->background['url']?>
<?php $title = $DATA->title?>
<?php $image = $DATA->image['url']?>
<?php $alt = $DATA->image['alt']?>
<?php $text = $DATA->text?>

<section class="banner " style="background-image:url(<?php echo $background ?>)">
  <div class="banner-container">
    <div class="row flex">
      <div class="col-lg-2 banner-img anim-right anim-no-load">
        <img src="<?php echo $image?>" alt="<?php echo $alt?>">
      </div>
      <div class="col-lg-6 anim-left anim-no-load">
        <h4 class="banner-text"><?php echo $title?></h4>
        <p class="banner-text"><?php echo $text?></p>  
      </div>
    </div>
  </div>
</section>
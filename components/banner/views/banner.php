
<?php $background = $DATA->background['url']?>
<?php $title = $DATA->title?>
<?php $text = $DATA->text?>


<section class="banner " style="background-image:url(<?php echo $background ?>)">
  <div class="banner-container">
    <div class="row flex">
      <?php
      if($DATA->image):?>
      <div class="col-lg-2 banner-img anim-up anim-no-load">
        <img src="<?php echo $DATA->image['url'] ?>" alt="<?php echo $DATA->image['alt']?>">
      </div>
      <?php else:?>
        <p class="no-link">no link</p>
      <?php endif;?>  
      <div class="col-lg-5 anim-up anim-no-load">
        <?php
        if ( $DATA->title):?>
        <h4 class="banner-text"><?php echo $title?></h4>
        <?php else:?>
          <p class="no-link">no link</p>
        <?php endif;?>
        <?php
        if ( $DATA->text):?>
        <p class="banner-text"><?php echo $text?></p>  
        <?php else:?>
          <p class="no-link">no link</p>
        <?php endif;?>
      </div>
      <?php         
      if ( $DATA->link):?>
      <div class="col-lg-2 anim-up anim-no-load banner-btn-container">
        <a href="<?php echo $DATA->link['url']?>">
          <button class="banner-btn"><?php echo $DATA->link['title']?></button>
        </a>
      </div>
      <?php else:?>
        <p class="no-link">no link</p>
      <?php endif;?>

    </div>
  </div>
</section>



<?php $background = $DATA->background["url"];?>
<?php $alt = $DATA->background["alt"];?>


  
<section class="page-hero" >
  <div class="background-container">
          <img src="<?php echo ($background)?>" alt="<?php echo $alt?>">
          <div class=" hero-title">       
            <?php         
      $title = $DATA->title; 
      if ($title) :?>
        <h1 class="hero-text"><?php echo ($title)?></h1>
        <?php else:?>
          <p>no text</p>
          <?php endif;?>
        </div>  
      </div>     
  </div>
</section>
    

    
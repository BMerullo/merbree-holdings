
<?php $count = 0; ?>
<?php $slides = $DATA->slides?>
<?php $title = $DATA->title?>
<?php $text = $DATA->text?>

<section>
  <div class="slider">
    <?php foreach ($slides as $key => $slide): ?>
      <div class="slide">
        <div class="hero-slide" style="background-image:url(<?php echo $slide['slider_image']['sizes']['2048x2048']; ?>)">
          <img class="background" src="<?php echo $slide['slider_image']['sizes']['2048x2048']; ?>" alt="<?php echo $slide['slider_caption']; ?>">
        </div>        
      </div>
      <?php endforeach; ?>    
    </div>
    <div class="title-container">           
        <h2 class="hero-text"><?php echo $title?></h2>        
    </div>
  
</section>



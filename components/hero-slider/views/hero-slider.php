<?php var_dump($DATA->slides[0])?>
<?php $count = 0; ?>
<?php $slides = $DATA->slides?>

<section>
  <div class="slider">
    <?php foreach ($slides as $key => $slide): ?>
        <div class="slide">
            <h3>Slide <?php echo $key + 1; ?></h3>
            <img src="<?php echo $slide['slider_image']['sizes']['2048x2048']; ?>" alt="<?php echo $slide['slider_caption']; ?>">
            <div class="caption"><?php echo $slide['slider_caption']; ?></div>
        </div>
    <?php endforeach; ?>    
  </div>
</section>

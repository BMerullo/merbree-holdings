
<?php $count = 0; ?>
<?php $slides = $DATA->slides?>


  <div class="slider">
    <?php foreach ($slides as $key => $slide): ?>
        <div class="slide">
          <section class="hero-slide" style="background-image:url(<?php echo $slide['slider_image']['sizes']['2048x2048']; ?>)">
            <img class="background" src="<?php echo $slide['slider_image']['sizes']['2048x2048']; ?>" alt="<?php echo $slide['slider_caption']; ?>">
          </section>
            <div class="caption"><?php echo $slide['slider_caption']; ?></div>
        </div>
    <?php endforeach; ?>    
  </div>
</section>

<?php var_dump($DATA->slides[0])?>

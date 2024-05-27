

<?php $slides = $DATA->slides?>
<?php $title = $DATA->title?>
<?php $text = $DATA->text?>

<section class="hero-slider">
  <div class="slider">
    <?php foreach ($slides as $key => $slide): ?>
      <div class="slide">
        <div class="hero-slide" style="background-image:url(<?php echo $slide['slider_image']['sizes']['2048x2048']; ?>)">
          <img class="background" src="<?php echo $slide['slider_image']['sizes']['2048x2048']; ?>" alt="<?php echo $slide['slider_caption']; ?>">
        </div>        
        <div class="title-flex"> 
            <div class="word-content">
              <h1 class="hero-title">
                <?php echo $title?></h1>  
              <h5 class="hero-text"><?php echo $text?></h5>       
            </div>          
        </div>  
      </div>
    <?php endforeach; ?>    
  </div>
</section>



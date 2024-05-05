<?php $img1 = $DATA->gallery[0]['url']?>
<?php $img2 = $DATA->gallery[1]['url']?>
<?php $img3 = $DATA->gallery[2]['url']?>
<?php $alt1 = $DATA->gallery[0]['alt']?>
<?php $alt2 = $DATA->gallery[1]['alt']?>
<?php $alt3 = $DATA->gallery[2]['alt']?>
<?php $text = $DATA->text?>
<?php $link1 = $DATA->web['url']?>
<?php $link2 = $DATA->location['url']?>
<?php $title1 = $DATA->web['title']?>
<?php $title2 = $DATA->location['title']?>
<?php $logo = $DATA->logo['url']?>
<?php $class = $DATA->class?>
<?php $link = $DATA->link?>







<section class="brands" id="<?php echo $link;?>">

  <div class="row gallery">   
    <div class="col-lg-4 none img">
      <img src="<?php echo $img1?>" alt="Sandwich">
    </div>
    <div class="col-lg-4 img">
      <img src="<?php echo $img2?>" alt="Sandwich">
    </div>
    <div class="col-lg-4 none img">
      <img src="<?php echo $img3?>" alt="Sandwich">
    </div>
  </div>
  <div class="logo-container">
    <img class="logo" src="<?php echo $logo?>" alt="logo">
  </div>
  <div class="text-container">
    <p class="text"><?php echo $text?></p>
  </div>
  <div class="link-container">
    <a href="<?php echo $link1?>"><button class="brand-btn" id="<?php echo $class;?>"><?php echo $title1?></button></a>
    <a href="<?php echo $link2?>"><button class="brand-btn" id="<?php echo $class;?>"><?php echo $title2?></button></a>
    
  </div>
</section>







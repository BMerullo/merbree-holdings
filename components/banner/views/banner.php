<?php var_dump($DATA)?>
<?php $background = $DATA->background['url']?>
<?php $title = $DATA->title?>
<?php $image = $DATA->image['url']?>
<?php $alt = $DATA->image['alt']?>
<?php $text = $DATA->text?>

<section class="banner">
  <div class="row">
    <div class="col-lg-1">
      <img src="<?php echo $image?>" alt="<?php echo $alt?>">
    </div>
    <div class="col-lg-6">
      <h4><?php echo $title?></h4>
      <p><?php echo $text?></p>  
    </div>
  </div>
</section>
<?php $title = $DATA->title?>
<?php $text = $DATA->text?>
<?php $image = $DATA->image['url']?>
<?php $imageAlt = $DATA->image['alt']?>



<section class="media-right ">
  <div class="row ">
    <div class="col-lg-7 order-lg-2 anim-left anim-no-load">      
      <div class="flex">
        <h2><?php echo $title?></h2>
      </div>
      <p><?php echo $text?></p>     
    </div>
    <div class="col-lg-5 img-col flex order-lg-1 anim-right anim-no-load">
      <img class="img" src="<? echo $image?>" alt="<?php echo $imageAlt?>">
    </div>
  </div>

</section>
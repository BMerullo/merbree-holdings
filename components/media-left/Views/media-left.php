<?php $title = $DATA->title?>
<?php $text = $DATA->text?>
<?php $image = $DATA->image['url']?>
<?php $imageAlt = $DATA->image['alt']?>



<section class="media-left">
  <div class="row">
    <div class="col-lg-7 anim-right">      
        <div class="flex">
          <h2><?php echo $title?></h2>
        </div>
        <p><?php echo $text?></p>     
    </div>
    <div class="col-lg-5 img-col flex anim-left anim-no-load">
      <img class="img" src="<? echo $image?>" alt="<?php echo $imageAlt?>">
    </div>
  </div>

</section>








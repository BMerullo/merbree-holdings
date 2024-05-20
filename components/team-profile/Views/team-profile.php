

<?php $image = $DATA->image['url']?>
<?php $alt = $DATA->image['alt']?>
<?php $name = $DATA->name?>
<?php $title = $DATA->title?>
<?php $description = $DATA->description?>



<section class="team-profile">
  <div class="row profile-title">
    <div class="col-lg-6 ">
      <img class="profile-img" src="<?php echo $image?>" alt="<?php echo $alt?>">
    </div>
    <div class="col-lg-6 anim-left anim-no-load name-title-container">
      <div class="name-title">
        <p class="name"><?php echo $name?></p>
        <p class="title"><?php echo $title?></p>
      </div>
    </div>
  </div>
  <div class="text">
    <p><?php echo $description?></p>
  </div>

</section>
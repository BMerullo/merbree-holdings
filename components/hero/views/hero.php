
<?php $background = $DATA->background["sizes"]["2048x2048"];?>


  
<section class="page-hero" >
        
        <div class="background-container">
          <img src="<?php echo ($background)?>" alt="phil">
        </div>     
        <div class=" hero-title">       
          <?php         
            $title = $DATA->title; 
            if ($title) :?>
            <div class="text-container">
              <h1 class="hero-text"><?php echo ($title)?></h1>
          <?php else:?>
            <p>no text BOB</p>
          <?php endif;?>
        
    </div>

    
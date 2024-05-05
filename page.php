<?php
/**
 * Standard Page Template
 */

get_header();

	while ( have_posts() ) : the_post(); 

		if( have_rows('flex') ):
		while ( have_rows('flex') ) : the_row();
			if( get_row_layout() == 'hero' ):
      $hero = new StdClass;
      $hero->title = get_sub_field('hero_title');
      $hero->background = get_sub_field('hero_background');                  
      Components\View::render('hero', 'hero', $hero);
    endif; 
    endwhile;
  endif;
	
		

  endwhile;

get_footer(); ?>
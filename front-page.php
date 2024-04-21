<?php
/**
 * The Front Page
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
    if( get_row_layout() == 'hero_slider' ):
      $hero_slider = new StdClass;
      $hero_slider->slides = get_sub_field('hero_slider');
      $hero_slider->title = get_sub_field('hero_slider_title'); 
      $hero_slider->text = get_sub_field('hero_slider_text');                 
      Components\View::render('hero-slider', 'hero-slider', $hero_slider);    
    endif;            
    endwhile;
  endif;


    endwhile;

    

get_footer(); ?>

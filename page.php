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
      if(get_row_layout() == 'media_left'):
        $media_left = new StdClass;
        $media_left->title = get_sub_field('media_left_title');
        $media_left->text = get_sub_field('media_left_text');
        $media_left->image = get_sub_field('media_left_image');
        Components\View::render('media-left', 'media-left', $media_left);
      endif;
      if(get_row_layout() == 'media_right'):
        $media_right = new StdClass;
        $media_right->title = get_sub_field('media_right_title');
        $media_right->text = get_sub_field('media_right_text');
        $media_right->image = get_sub_field('media_right_image');
        Components\View::render('media-right', 'media-right', $media_right);
      endif;
      if(get_row_layout() == 'team_profile'):
        $team_profile = new StdClass;
        $team_profile->image = get_sub_field('team_profile_image');
        $team_profile->name = get_sub_field('team_profile_name');
        $team_profile->title = get_sub_field('team_profile_title');
        $team_profile->description = get_sub_field('team_profile_description');
        Components\View::render('team-profile', 'team-profile', $team_profile);
      endif;
      if(get_row_layout() == 'banner'):
        $banner = new StdClass;
        $banner->background = get_sub_field('banner_background');
        $banner->title = get_sub_field('banner_title');
        $banner->image = get_sub_field('banner_image');
        $banner->text = get_sub_field('banner_text');
        Components\View::render('banner', 'banner', $banner);
      endif;
      if(get_row_layout() == 'title'):
        $title = new StdClass;
        $title->title = get_sub_field('title');
        Components\View::render('title', 'title', $title);
      endif;
    endwhile;
      
  endif;
	
		

  endwhile;

get_footer(); ?>
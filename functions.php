<?php

/**
 * Autoload Setup with Composer
 */
include_once(__DIR__.'/vendor/autoload.php');

/**
 * Load our environment variables from .env file
 * Using the .env file prevents us from committing private keys to the repository
 */
$root_dir = dirname(__FILE__);
$dotenv = new Dotenv\Dotenv($root_dir);
if (file_exists($root_dir . '/.env')) {
    $dotenv->load();
}

Setup\Environment::init();
Setup\Cleanup::init();
Setup\ThemeSupport::init();
Setup\Widgets::init();
Setup\Scripts::init();
Setup\Menus::init();
Setup\ACF::init();
Setup\Helpers::init();
Setup\Shortcodes::init();

Setup\Widgets\RelatedPosts::register();

//REMOVE GUTENBERG
add_filter( 'use_block_editor_for_post', '__return_false' );

// DISABLE COMMENTS

function df_disable_comments_post_types_support() {
   $post_types = get_post_types();
   foreach ($post_types as $post_type) {
      if(post_type_supports($post_type, 'comments')) {
         remove_post_type_support($post_type, 'comments');
         remove_post_type_support($post_type, 'trackbacks');
      }
   }
}

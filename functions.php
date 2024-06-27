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

// CONTACT FORM 7

// function create_form7_post_type() {
//    register_post_type('form7',
//       array(
//             'labels'      => array(
//                'name'          => __('Form7s'),
//                'singular_name' => __('Form7'),
//             ),
//             'public'      => true,
//             'has_archive' => true,
//             'supports'    => array('title', 'editor'),
//       )
//    );
// }
// add_action('init', 'create_form7_post_type');

// function my_acf_save_post($post_id) {
//     // Check if the post is of type 'form7'
//    if (get_post_type($post_id) == 'form7') {
//         // Get form field values
//       $name = get_field('name', $post_id);
//       $email = get_field('email', $post_id);
//       $message = get_field('message', $post_id);

//         // Email details
//       $to = 'bmerullo85@gmail.com';
//       $subject = 'New Form Submission';
//       $headers = array('Content-Type: text/html; charset=UTF-8');

//         // Compose email message
//       $body = '<h2>New Form Submission</h2>';
//       $body .= '<p><strong>Name:</strong> ' . $name . '</p>';
//       $body .= '<p><strong>Email:</strong> ' . $email . '</p>';
//       $body .= '<p><strong>Message:</strong><br />' . nl2br($message) . '</p>';

//         // Send email
//       wp_mail($to, $subject, $body, $headers);
//    }
// }
// add_action('acf/save_post', 'my_acf_save_post', 20);
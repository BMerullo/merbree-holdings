<?php
// Include WordPress
define('WP_USE_THEMES', false);
require_once('path/to/your/wp-load.php');

// Fetch data from ACF repeater field
$slides = get_field('hero_slider');

// Output the data as JSON
echo json_encode($slides);
?>

<?php

define('WP_USE_THEMES', false);
require_once('path/to/your/wp-load.php');


$slides = get_field('hero_slider');


echo json_encode($slides);
?>

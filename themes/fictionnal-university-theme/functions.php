<?php




add_action('wp_enqueue_scripts', 'university_files');

function university_files()
{
    wp_enqueue_style('university-main-styles', get_stylesheet_uri());
}

?>
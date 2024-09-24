<?php
function bongani_enqueue_scripts() {
    // Load Bootstrap CSS
    wp_enqueue_style('bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css');

    // Load custom styles
    wp_enqueue_style('main-styles', get_stylesheet_uri());

    // Load Bootstrap JS and jQuery
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js', array('jquery'), '', true);
}
add_action('wp_enqueue_scripts', 'bongani_enqueue_scripts');
?>

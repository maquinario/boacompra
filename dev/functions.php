<?php

// Adds post thumbnail support
add_theme_support('post-thumbnails');

// Custom excerpt mysql_fetch_lengths
function excerptLength($length) {
    return 10;
}
add_filter('excerpt_length', 'excerptLength');

// Add excerpt to pages
add_post_type_support( 'page', 'excerpt' );
add_post_type_support( 'products', 'excerpt' );

// Add order to posts
add_action('admin_init', 'posts_order');
function posts_order(){
  add_post_type_support( 'post', 'page-attributes' );
}

// Header and footer menus registration
function register_my_menus() {
  register_nav_menus( array(
    'top_menu' => 'Top Menu',
    'navigation' => 'Navigation'
  ) );
}
add_action( 'init', 'register_my_menus' );

// Hide admin bar
show_admin_bar(false);

// Allow SVG upload
function upload_svg_files( $allowed ) {
    if ( !current_user_can( 'manage_options' ) )
        return $allowed;
    $allowed['svg'] = 'image/svg+xml';
    return $allowed;
}
add_filter( 'upload_mimes', 'upload_svg_files');

// settings page
Function test_custom_settings () {
add_settings_section (
'first_section', //section name for the section to add
'New Reading Settings', //section title visible on the page
'reading_section_description', //callback for section description
'Reading'//page to which section will be added.
);
}

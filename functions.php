<?php
add_theme_support('post-thumbnails');

function post_has_archive($args, $post_type)
  {
    if('post' == $post_type) {
        $args['rewrite'] = true;
        $args['has_archive'] = 'voice';
    }
    return $args;
  }
add_filter('register_post_type_args', 'post_has_archive', 10,2);

function enqueue_custom_styles_and_scripts() {
    // Google Fonts
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Merriweather+Sans&family=Noto+Sans+JP&family=Noto+Serif+JP&family=Shippori+Mincho&display=swap');

    // Slick Carousel
    wp_enqueue_style('slick-carousel', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.css');
    wp_enqueue_style('slick-carousel-theme', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.min.css');

    // Reset CSS
    wp_enqueue_style('reset-css', 'https://unpkg.com/modern-css-reset/dist/reset.min.css');

    // Custom Stylesheets
    wp_enqueue_style('custom-style', get_template_directory_uri() . '/css/style.css');

    // Add specific stylesheets based on page condition
    if (is_front_page()) {
        wp_enqueue_style('front-page-style', get_template_directory_uri() . '/css/top.css');
    } elseif (is_page('about')) {
        wp_enqueue_style('about-page-style', get_template_directory_uri() . '/css/about.css');
    } elseif (is_page('course')) {
        wp_enqueue_style('course-page-style', get_template_directory_uri() . '/css/course-price.css');
    } elseif (is_home()) {
        wp_enqueue_style('home-page-style', get_template_directory_uri() . '/css/information.css');
    } elseif (is_archive()) {
        wp_enqueue_style('archive-page-style', get_template_directory_uri() . '/css/voice.css');
    } elseif (is_single()) {
        wp_enqueue_style('single-page-style', get_template_directory_uri() . '/css/information-detail.css');
    } elseif (is_page('contact')) {
        wp_enqueue_style('contact-page-style', get_template_directory_uri() . '/css/contact.css');
    } elseif (is_page('contact-thanks')) {
        wp_enqueue_style('contact-thanks-page-style', get_template_directory_uri() . '/css/contact-thanks.css');
    } elseif (is_category()) {
        wp_enqueue_style('category-page-style', get_template_directory_uri() . '/css/information.css');
    }
    // jQuery
    wp_enqueue_script('jquery', 'https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.min.js', array(), null, true);

    // Slick Carousel
    wp_enqueue_script('slick-carousel', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery'), null, true);

    // Main JavaScript
    wp_enqueue_script('main-js', get_template_directory_uri() . '/main.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_custom_styles_and_scripts');
?>


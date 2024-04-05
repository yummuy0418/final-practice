add_action('wp_enqueue_scripts', 'remove_default_jquery');
 add_theme_support('post-thumbnails','post','page');

 function post_has_archive($args, $post_type)
  {
    if('post' == $post_type) {
        $args['rewrite'] = true;
        $args['has_archive'] = 'voice';
    }
    return $args;
  }
add_filter('register_post_type_args', 'post_has_archive, 5'2);


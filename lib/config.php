<?php
/**
 * Configuration values.
 * */

/**
 * Theme Setup.
 * */
add_action('after_setup_theme', function () {
    /*
   * Enable plugins to manage the document title
   * @source http://codex.wordpress.org/Function_Reference/add_theme_support#Title_Tag
   * */
    add_theme_support('title-tag');

  /*
   * Register wp_nav_menus() menus
   * @source    http://codex.wordpress.org/Function_Reference/register_nav_menus
   * */
    register_nav_menus([
      'primary_navigation' => __('Navigation principale', 'quai10'),
      'footer1'            => __('Pied de page – colonne 1', 'quai10'),
      'footer2'            => __('Pied de page – colonne 2', 'quai10'),
      'footer3'            => __('Pied de page – colonne 3', 'quai10'),
    ]);

  /*
   * Add post thumnails
   * @source http://codex.wordpress.org/Post_Thumbnails
   * */
    add_theme_support('post-thumbnails');
    set_post_thumbnail_size(250, 250);

  /*
   * Add post formats
   * @source http://codex.wordpress.org/Post_Formats
   * */
    add_theme_support('post-formats', [/*'aside', 'gallery', 'link', */'image'/*, 'quote', 'video', 'audio'*/]);

  /*
   * Add HTML5 Markup for captions
   * @source http://codex.wordpress.org/Function_Reference/add_theme_support#HTML5
   * */
    add_theme_support('html5', ['caption', 'comment-form', 'comment-list']);
});


/*
 * Add a body class with page slug if existing
 * */
add_filter('body_class', function ($classes) {
    if (is_single() || is_page() && !is_front_page()) {
        if (!in_array(basename(get_permalink()), $classes)) {
            $classes[] = basename(get_permalink());
        }
    }

    return $classes;
});

<?php
/**
 * Config class.
 */
namespace Quai10;

/**
 * Class used to configure the theme.
 */
class Config
{
    /**
     * Cleaning up wp_head().
     *
     * @return void
     *
     * @link http://mwanoz.fr/nettoyer-le-contenu-de-wp_head-sur-wordpress/
     */
    public static function cleanup()
    {
        remove_action('wp_head', 'feed_links_extra', 3); // remove extra RSS links (as category)
        remove_action('wp_head', 'rsd_link');
        remove_action('wp_head', 'wlwmanifest_link');
        remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
        remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);
        remove_filter('dbem_notes', 'wpautop');

        global $wp_widget_factory;
        remove_action('wp_head', [$wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style']);
    }

    /**
     * Theme Setup.
     *
     * @return void
     */
    public static function setupTheme()
    {
        /**
       * Enable plugins to manage the document title
       * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Title_Tag
       * */
        add_theme_support('title-tag');

      /**
       * Register wp_nav_menus() menus
       * @link    http://codex.wordpress.org/Function_Reference/register_nav_menus
       * */
        register_nav_menus([
          'primary_navigation' => __('Navigation principale', 'quai10'),
          'footer1'            => __('Pied de page – colonne 1', 'quai10'),
          'footer2'            => __('Pied de page – colonne 2', 'quai10'),
          'footer3'            => __('Pied de page – colonne 3', 'quai10'),
        ]);

      /**
       * Add post thumnails
       * @link http://codex.wordpress.org/Post_Thumbnails
       * */
        add_theme_support('post-thumbnails');
        set_post_thumbnail_size(250, 250);

      /**
       * Add post formats
       * @link http://codex.wordpress.org/Post_Formats
       * */
        add_theme_support('post-formats', ['image']);

      /**
       * Add HTML5 Markup for captions
       * @link http://codex.wordpress.org/Function_Reference/add_theme_support#HTML5
       * */
        add_theme_support('html5', ['caption', 'comment-form', 'comment-list']);
    }

    /**
     * Add a body class with page slug if existing.
     *
     * @param array $classes Classes
     */
    public static function addBodyClass(array $classes)
    {
        if (is_single() || is_page() && !is_front_page()) {
            if (!in_array(basename(get_permalink()), $classes)) {
                $classes[] = basename(get_permalink());
            }
        }

        return $classes;
    }
}

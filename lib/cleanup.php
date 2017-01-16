<?php
/**
 * Cleaning up wp_head().
 *
 * @source http://mwanoz.fr/nettoyer-le-contenu-de-wp_head-sur-wordpress/
 * */
add_action('init', function () {
    remove_action('wp_head', 'feed_links_extra', 3); // remove extra RSS links (as category)
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
    remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);
    remove_filter('dbem_notes', 'wpautop');

    global $wp_widget_factory;
    remove_action('wp_head', [$wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style']);
});

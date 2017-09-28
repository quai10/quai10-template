<?php

/////////////////////////////////////////////////////////////////////////////////////////
	// Loop Article Blog
function GetArticle($nbposts) {
		$args = array(
			'post_type' => 'post',
			'category_name' => 'blog',
			'posts_per_page' => $nbposts,
			'order' => "DESC"
		);
		$loop = new WP_Query( $args );
		while ( $loop->have_posts() ) : $loop->the_post();
			require(TEMPLATEPATH.'/template-parts/blog-article.php');
		endwhile;
		wp_reset_query();
	}
	add_action('Articles','GetArticle',1,1);
///////////////////////////////
// Custom thumbnail size
add_image_size( 'blog', 250, 250, true );
///////////////////////////////
/**
 * Filter the except length to 20 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

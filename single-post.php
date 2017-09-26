<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<div id="single-post" role="main" class="content-box container margin-large grid no-padding-left">

<?php while ( have_posts() ) : the_post(); ?>
	<div id="single-blog-thumbnail-wrapper">
		<img src="<?php the_post_thumbnail_url('blog') ?>" alt="<?php the_title() ?>">
	</div>
	<article <?php post_class('main-content') ?> id="post-<?php the_ID(); ?>">
		<?php do_action( 'foundationpress_post_before_entry_content' ); ?>
		<div class="entry-content">
			<?php the_content(); ?>
		</div>
	</article>
<?php endwhile;?>

<?php //get_sidebar(); ?>
</div>
<?php get_footer();

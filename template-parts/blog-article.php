<article class="tpl_articlesBlog">
	<div class="tpl_articleThumb">
		<?php if (has_post_thumbnail()) : ?>
            <img src="<?php the_post_thumbnail_url('blog'); ?>" alt="<?php the_title() ?>">
        <?php else : ?>
            <img src="<?= get_template_directory() ?>/assets/src/img/map-marker.png" alt="Quai 10">
        <?php endif; ?>
    </div>
    <div class="tpl_articleContent">
        <a href="<?php the_permalink(); ?>">
            <h2><?php the_title(); ?></h2>
        </a>
        <p><?php the_excerpt(); ?></p>
        <a href=<?php the_permalink(); ?> class="cta">&rarr;</a>
    </div>
</article>

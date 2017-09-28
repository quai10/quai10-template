<?php
/**
 * Blog class.
 */

namespace Quai10;

/**
 * Class used to manage blog posts.
 */
class Blog
{

    /**
     * Loop Article Blog.
     *
     * @param int $nbposts Number of posts to display.
     *
     * @return void
     */
    public static function getArticles($nbposts)
    {
        $args = [
                'post_type'      => 'post',
                'category_name'  => 'blog',
                'posts_per_page' => $nbposts,
                'order'          => 'DESC',
            ];
        $loop = new \WP_Query($args);
        while ($loop->have_posts()) :
            $loop->the_post();
            get_template_part('template-parts/blog', 'article');
        endwhile;
        wp_reset_query();
    }

    /**
     * Filter the except length to 20 words.
     *
     * @param int $length Excerpt length.
     *
     * @return int Modified excerpt length.
     */
    public static function getExcerptLength($length)
    {
        return 20;
    }
}

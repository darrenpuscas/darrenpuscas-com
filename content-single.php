<?php
/**
 * @package darrenpuscas
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <div class="single-blog blog-content text-content-area">

        <header class="entry-header blogtitle page-links">
            <?php the_date(); ?>
            <h2>
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h2>
        </header><!-- .entry-header -->

        <div class="entry-content">
            <?php the_content(); ?>
            <div class="blog-meta">
                <div class="view-category"><?php echo get_the_category_list(); ?></div>
            </div>
            <?php
                wp_link_pages( array(
                    'before' => '<div class="page-links">' . __( 'Pages:', 'darrenpuscas' ),
                    'after'  => '</div>',
                ) );
            ?>
        </div><!-- .entry-content -->

    </div><!-- .blog-content -->


</article><!-- #post-## -->


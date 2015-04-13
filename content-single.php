<?php
/**
 * @package darrenpuscas
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <div class="single-blog blog-content">

        <header class="entry-header blogtitle page-links text-content-area">
            <?php the_date(); ?>
            <h2>
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h2>
        </header><!-- .entry-header -->

        <div class="entry-content text-content-area">

            <div class="content-area-1">
                <?php the_field('content_area_1'); ?>
            </div>

            <div class="media-area-1">
                <?php the_field('media_area_1'); ?>
            </div>



            <div class="content-area-2">
                <?php the_field('content_area_2'); ?>
            </div>

            <div class="media-area-2">
                <?php the_field('media_area_2'); ?>
            </div>

            <div class="content-area-3">
                <?php the_field('content_area_3'); ?>
            </div>

            <div class="media-area-3">
                <?php the_field('media_area_3'); ?>
            </div>

            <div class="content-area-4">
                <?php the_field('content_area_4'); ?>
            </div>

            <?php echo do_shortcode("[mashshare]"); ?>

            <div class="blog-meta">
                <div class="view-category"><?php echo get_the_category_list(); ?></div>
                </div>




        </div><!-- .entry-content -->

    </div><!-- .blog-content -->


</article><!-- #post-## -->


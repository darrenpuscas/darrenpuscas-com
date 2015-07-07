<?php
/**
 * @package darrenpuscas
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>



    <div class="single-blog blog-content">



        <header class="entry-header page-links blogtitle text-content-area">

            <div class="author-date">
                <span class="date"><?php the_date(); ?></span>
            </div>

            <h1>
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h1>


        </header><!-- .entry-header -->

        <div class="entry-content">

            <div class="content-area-1 text-content-area">
                <?php the_field('content_area_1'); ?>
            </div>

            <figure class="media-area-1 text-content-area figure-content-margin-blog">

                <?php the_field('media_area_1'); ?>

            </figure>

            <div class="content-area-2 text-content-area">
                <?php the_field('content_area_2'); ?>
            </div>

            <div class="content-area-3 text-content-area">
                <?php the_field('content_area_3'); ?>
            </div>

            <div class="content-area-4 text-content-area">
                <?php the_field('content_area_4'); ?>
            </div>

            <div class="author text-content-area">
                Author: <?php the_author_posts_link(); ?></a>
            </div>

            <div class="share text-content-area">
                <?php echo do_shortcode("[mashshare]"); ?>
            </div>




        </div><!-- .entry-content -->



    </div><!-- .blog-content -->


</article><!-- #post-## -->



<?php
/**
 * @package darrenpuscas
 */
?>
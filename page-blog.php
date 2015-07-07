<?php
/*
Template Name: Blog Page
*/
?>

<?php get_header(); ?>


<section id="blog-bodycontent" class="text-content-area row-tb-pad">

        <?php $the_query = new WP_Query( 'showposts=12' ); ?>
        <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
            <div class="bloghome-meta">
                <div class="date">
                    <?php the_date(); ?>
                </div>
            </div>


            <div class="blog-content blog-content-main nonscroll-fadeInUp">


                <div class="blog-links">

                    <div class="blogtitle">

                        <h1>
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?>
                            </a>
                        </h1>

                       <?php the_excerpt(); ?>

                    </div>
                    <div class="author">
                        by <?php the_author_posts_link(); ?></a>
                    </div>

                </div>


            </div><!-- .blog-content  -->

        <?php endwhile;?>

    <!-- <a class="frontpage-more image-content-area row-tb-pad" href="../darrenpuscas/archive" target="_parent">More news articles...</a> -->


</section><!-- #blog-bodycontent -->




<?php get_footer(); ?>



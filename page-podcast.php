<?php
/*
Template Name: Podcast Page
*/
?>

<?php get_header(); ?>





<section id="front-bodycontent" class="row-tb-pad grid">

    <div class="blog image-content-area">

        <?php $the_query = new WP_Query( 'cat=5' ); ?>
        <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>



            <a class="blog-content" href="<?php the_permalink(); ?>">


                <div class="thegroup">
                    <div class="blog-thumb image-content-area">
                        <?php the_post_thumbnail(); ?>
                    </div>


                    <div class="blog-textcontent text-content-area">

                        <div class="blogtitle indiv-blog-posts">
                            <h5>
                                <?php the_title(); ?>
                            </h5>
                        </div>

                    </div>
                </div>

                <div class="blog-excerpt text-content-area">
                    <?php the_excerpt(); ?>
                    <div class="blog-readmore">Read More</div>

                </div>

            </a><!-- .blog-content  -->



        <?php endwhile;?>

        <div class="more-news">
            <a class="frontpage-more" href="../darrenpuscas/blog" target="_parent">More news articles...</a>
        </div>


    </div><!-- .blog  -->


</section><!-- #front-bodycontent -->

`


<?php get_footer(); ?>

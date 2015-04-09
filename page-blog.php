<?php
/*
Template Name: Blog Page
*/
?>

<?php get_header(); ?>


<section id="blog-bodycontent">



            <div class="blog row-tb-pad">



                <?php $the_query = new WP_Query( 'showposts=6' ); ?>
                <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>



                    <div class="blog-content">
	                    <div class="page-links text-content-area">

	                        <div class="blogtitle">
		                        <?php the_date(); ?>
                                <h2>
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

                                </h2>
                                <p><?php the_excerpt(); ?></p>
                                <h5> Read more...</h5>


                            </div>

                        </div>

                    </div><!-- .blog-content  -->

                <?php endwhile;?>

	            <header class="description-header text-content-area">
		            <a class="frontpage-button-link button-link button" href="../darrenpuscas/blog" target="_parent">More news articles...</a>
	            </header>

            </div>



</section><!-- #blog-bodycontent -->


<?php get_footer(); ?>

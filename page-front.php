<?php
/*
Template Name: Front Page
*/
?>

<?php get_header(); ?>


<section id="frontpage-description" class="grid row-tb-pad">

    <div class="front-content text-content-area">

        <header class="front-description-header">
            <div class="front-description-text">
                <h2>Web design<br /> </h2>
            </div>
            <div class="front-description-text">
                <h4>Web design<br /> </h4>
                <p>vfuowebvoregnbe wrpogner;lg bwe'ilfwepf wepfhwefpiwh g[oehg wpeghwo;bh vfuowebv oregn bewrp ogner;lgb we'iwh</p>
            </div>
            <div class="front-description-text">
                <h4>& WordPress<br /> </h4>
                <p>vfuowebvoregn bewrpo gner;lgbw e'ilfwepfw epfhwefpiwhg[ oehgwpe ner;l ssgbwe 'ilfwepfwepfh wefpiwhg[oehg wpeghwo;bh</p>
            </div>



            <div class="front-description-text">
                <h4>& User Experience </h4>
                <p>vfuowebv oregnbewrpog ner;lgbwe'ilfw epfwepf hwefpi whg[oehgwpeghwo;bh </p>
            </div>





        </header>

        <div class="home_image home_image-1">

            <div class="">


                <div class="front-description-text">
                    <h4>& Communications / Content Strategy </h4>
                    <p>vfuowebv oregnbewrpog ner;lgbwe'ilfw epfwepf hwefpi whg[oehgwpeghwo;bh </p>
                </div>

                <p><?php if( get_field('dp_site_description_image') ): ?>

                    <img src="<?php the_field('dp_site_description_image'); ?>" />

                <?php endif; ?></p>

                <div class="front-description-text">
                    <h4>& problem-solving </h4>
                    <p>vfuowebv oregnbewrpog ner;lgbwe'ilfw epfwepf hwefpi whg[oehgwpeghwo;bh </p>
                </div>

                <div class="front-description-text">
                    <a class="frontpage-button-link button-link button" href="<?php the_field('have_project_button'); ?>">Do you have a project you need help with?</a>
                </div>



            </div>

        </div>
    </div>

</section>






<section id="frontpage-description-2" class="grid row-bottom-pad">

	<div class="home-description-list text-content-area">
		<h1><?php the_field('dp_site_description_notes'); ?></h1>
		<h5>User experience design, Email design and marketing, WordPress site design & development, WordPress support.</h5>
	</div>

	<figure class="home-thumb image-content-area figure-content-margin">

		<?php if( get_field('darren_puscas_home_image_2') ): ?>

			<img src="<?php the_field('darren_puscas_home_image_2'); ?>" />

		<?php endif; ?>

	</figure>

</section>



<section id="front-bodycontent">

            <div class="front-work row-bottom-pad">
                <div class="section-header text-content-area"><h1>Recent work</h1></div>

                <div class="frontpage-links recent-work-1">
                    <div class="recent-work text-content-area"><?php the_field('recent_work_1'); ?></div>
                </div>
                <div class="frontpage-links recent-work-2">
                    <div class="recent-work text-content-area"><?php the_field('recent_work_2'); ?></div>
                </div>
                <div class="frontpage-links recent-work-3">
                    <div class="recent-work text-content-area"><?php the_field('recent_work_3'); ?></div>
                </div>


            </div>


            <div class="blog row-bottom-pad">

                <div class="blog-section-header text-content-area"><h1>Latest news</h1></div>

                <?php $the_query = new WP_Query( 'showposts=3' ); ?>
                <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>



                    <div class="blog-content">
	                    <div class="page-links text-content-area">

	                        <div class="blogtitle">
		                        <?php the_date(); ?>

	                            <h3>
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h3>
	                        </div>
	                    </div>

                    </div><!-- .frontblog-content  -->

                <?php endwhile;?>

	            <header class="description-header text-content-area">
		            <a class="frontpage-button-link button-link button" href="../darrenpuscas/blog" target="_parent">More news articles...</a>
	            </header>

            </div>



</section><!-- #front-bodycontent -->


<?php get_footer(); ?>

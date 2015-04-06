<?php
/*
Template Name: Front Page
*/
?>

<?php get_header(); ?>


<section id="frontpage-description" class="row-tb-pad">

    <header class="front-description-header text-content-area">
        <div class="front-description-text">
            <h2>Web design<br /> </h2>
            <p>vfuowebvoregnbe wrpogner;lg bwe'ilfwepf wepfhwefpiwh g[oehgwpeghwo;bh vfuowebv oregnbewrpogner;lgbwe'iwh</p>
            <h2>& WordPress<br /> </h2>
            <p>vfuowebvoregn bewrpogner;lgbwe'ilfwepfw epfhwefpiwhg[ oehgwpe ner;lgbwe'ilfwepfwepfh wefpiwhg[oehg wpeghwo;bh</p>
            <h2>& problem-solving </h2>
            <p>vfuowebv oregnbewrpog ner;lgbwe'ilfw epfwepfhwefpi whg[oehgwpeghwo;bh </p>
            <a class="frontpage-button-link button-link button" href="<?php the_field('have_project_button'); ?>">Do you have a project you need help with?</a>

        </div>

    </header>

    <figure class="home-main-thumb image-content-area main-figure-content-margin">

        <?php if( get_field('dp_site_description_image') ): ?>

            <img src="<?php the_field('dp_site_description_image'); ?>" />

        <?php endif; ?>

    </figure>


</section>

<section id="frontpage-description-2" class="grid row-bottom-pad">

	<div class="home-description-list text-content-area">
		<h1><?php the_field('dp_site_description_notes'); ?></h1>
		<p>User experience design, Email design and marketing, WordPress site design & development, WordPress support.</p>
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


            <div class="frontblog row-bottom-pad">

                <div class="section-header text-content-area"><h1>Latest news</h1></div>

                <?php $the_query = new WP_Query( 'showposts=3' ); ?>
                <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>



                    <div class="frontblog-content">
	                    <div class="frontpage-links">

	                        <div class="front-blogtitle text-content-area">
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

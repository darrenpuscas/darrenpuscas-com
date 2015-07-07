<?php
/*
Template Name: WP Care Page
*/
?>

<?php get_header(); ?>





<section id="skills-content" class="row-top-pad grid">


    <header class="care-header text-content-area nonscroll-fadeIn">
        <h1> <?php the_field('care_header'); ?></h1>
        <?php the_field('care_text'); ?>
    </header>


    <div class="skills-area">

        <div class="front-skills front-skills-1 nonscroll-fadeIn-2">

            <div class="front-skills-text care-1">

                <h2><?php the_field('care_tier_1_header'); ?></h2>

                <div class="skills-image">

                    <?php if( get_field('care_tier_1_image') ): ?>

                        <img src="<?php the_field('care_tier_1_image'); ?>" />

                    <?php endif; ?>

                </div>



                <?php the_field('care_tier_1_text'); ?>
                <h4><a href="<?php the_field('have_project_button'); ?>">Contact me for more "Elevate" details.</a></h4>

            </div>

        </div>

        <div class="front-skills front-skills-2 nonscroll-fadeIn-2">


            <div class="front-skills-text care-2">

                <h2><?php the_field('care_tier_2_header'); ?></h2>

                <div class="skills-image">

                    <?php if( get_field('care_tier_2_image') ): ?>

                        <img src="<?php the_field('care_tier_2_image'); ?>" />

                    <?php endif; ?>

                </div>

                <?php the_field('care_tier_2_text'); ?>
                <h4><a href="<?php the_field('have_project_button'); ?>">Contact me for more "Glide" details.</a></h4>

            </div>


        </div>

        <div class="front-skills front-skills-3 nonscroll-fadeIn-2">



            <div class="front-skills-text care-3">

                <h2><?php the_field('care_tier_3_header'); ?></h2>

                <div class="skills-image">

                    <?php if( get_field('care_tier_3_image') ): ?>

                        <img src="<?php the_field('care_tier_3_image'); ?>" />

                    <?php endif; ?>

                </div>


                <?php the_field('care_tier_3_text'); ?>
                <h4><a href="<?php the_field('have_project_button'); ?>">Contact me for more "Propel" details.</a></h4>

            </div>

        </div>




    </div>


</section>


<div class="site-description text-content-area row-bottom-pad">
    <small><?php the_field('care_text_2'); ?></small>
</div>






<?php get_footer(); ?>

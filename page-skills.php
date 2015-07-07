<?php
/*
Template Name: Skills Page
*/
?>

<?php get_header(); ?>





<section id="skills-content" class="row-tb-pad">


    <header class="about-header text-content-area">
        <h1> <?php the_field('about_skills_header'); ?></h1>
        <?php the_field('about_skills_text'); ?>
    </header>


    <div class="skills-area image-content-area figure-content-margin row-bottom-pad">


        <div class="front-skills front-skills-1 animatable fadeInUp">



            <div class="front-skills-text front-skills-text-1">

                <div class="skills-image">

                    <?php if( get_field('skills_image_1') ): ?>

                        <img src="<?php the_field('skills_image_1'); ?>" />

                    <?php endif; ?>

                </div>

                <h2><?php the_field('skills_header_1'); ?></h2>

                <h6><?php the_field('skills_text_1'); ?></h6>

            </div>

        </div>


        <div class="front-skills front-skills-2 animatable fadeInUp">


            <div class="front-skills-text front-skills-text-2">

                <div class="skills-image">

                    <?php if( get_field('skills_image_2') ): ?>

                        <img src="<?php the_field('skills_image_2'); ?>" />

                    <?php endif; ?>

                </div>

                <h2><?php the_field('skills_header_2'); ?></h3>
                <h6><?php the_field('skills_text_2'); ?></h6>
            </div>

        </div>





    </div>

    <header class="about-header text-content-area">
        <h1> <?php the_field('about_skills_header_2'); ?></h1>
        <p><?php the_field('about_skills_text_2'); ?></p>
    </header>


</section>





<?php get_footer(); ?>

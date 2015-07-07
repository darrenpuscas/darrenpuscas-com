<?php
/*
Template Name: Work Page
*/
?>


<?php get_header(); ?>


<div class="workpage">


<section id="workpage-description" class="grid row-top-pad nonscroll-fadeIn">

    <header class="work-header text-content-area">
        <h1> <?php the_field('work_header_1'); ?></h1>
        <p><?php the_field('work_text_1'); ?></p>
    </header>

</section>




<section id="work-example-1" class="grid">
    <div class="work-example-header image-content-area">
    </div>

    <div class="work-example work-example-content image-content-area nonscroll-fadeIn-2">



        <div class="work-area text-content-area">
            <div class="work-header-left">
                <p><?php the_field('work_example_1_header'); ?></p>

                <h2><?php the_field('work_example_1_text'); ?></h2>
                <div class="work-links"><?php the_field('work_example_1_link'); ?></div>
            </div>

            <div class="work-image-right">

                <div class="work-image">

                    <?php if( get_field('work_example_1_image') ): ?>

                        <img src="<?php the_field('work_example_1_image'); ?>" />

                    <?php endif; ?>

                </div>

            </div>

        </div>

    </div>
    <div class="text-content-area"><?php the_field('work_example_1_bodytext'); ?></div>

</section>

<section id="work-example-2" class="grid">
    <div class="work-example-header image-content-area">
    </div>

    <div class="work-example work-example-content image-content-area">



        <div class="work-area text-content-area">
            <div class="work-header-left animatabl fadeIn">
                <p><?php the_field('work_example_2_header'); ?></p>

                <h2><?php the_field('work_example_2_text'); ?></h2>
                <div class="work-links"><?php the_field('work_example_2_link'); ?></div>
            </div>

            <div class="work-image-right">

                <div class="work-image">

                    <?php if( get_field('work_example_2_image') ): ?>

                        <img src="<?php the_field('work_example_2_image'); ?>" />

                    <?php endif; ?>

                </div>

            </div>

        </div>

    </div>
    <div class="text-content-area"><?php the_field('work_example_2_bodytext'); ?></div>

</section>

<section id="work-example-3" class="grid">
    <div class="work-example-header image-content-area">
    </div>

    <div class="work-example work-example-content image-content-area">



        <div class="work-area text-content-area">
            <div class="work-header-left animatabl fadeIn">
                <p><?php the_field('work_example_3_header'); ?></p>

                <h2><?php the_field('work_example_3_text'); ?></h2>
                <div class="work-links"><?php the_field('work_example_3_link'); ?></div>
            </div>

            <div class="work-image-right">

                <div class="work-image">

                    <?php if( get_field('work_example_3_image') ): ?>

                        <img src="<?php the_field('work_example_3_image'); ?>" />

                    <?php endif; ?>

                </div>

            </div>

        </div>

    </div>
    <div class="text-content-area"><?php the_field('work_example_3_bodytext'); ?></div>

</section>

<section id="work-example-4" class="grid">
    <div class="work-example-header image-content-area">
    </div>

    <div class="work-example work-example-content image-content-area">



        <div class="work-area text-content-area">
            <div class="work-header-left animatabl fadeIn">
                <p><?php the_field('work_example_4_header'); ?></p>

                <h2><?php the_field('work_example_4_text'); ?></h2>
                <div class="work-links"><?php the_field('work_example_4_link'); ?></div>
            </div>

            <div class="work-image-right">

                <div class="work-image">

                    <?php if( get_field('work_example_4_image') ): ?>

                        <img src="<?php the_field('work_example_4_image'); ?>" />

                    <?php endif; ?>

                </div>

            </div>

        </div>

    </div>
    <div class="text-content-area"><?php the_field('work_example_4_bodytext'); ?></div>

</section>






<?php get_footer(); ?>

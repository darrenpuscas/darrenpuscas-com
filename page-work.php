<?php
/*
Template Name: Work Page
*/
?>


<?php get_header(); ?>


<section id="workpage-description" class="grid row-top-pad">

    <header class="work-header text-content-area">
        <h1> <?php the_field('work_header_1'); ?></h1>
        <h5><?php the_field('work_text_1'); ?></h5>
    </header>

</section>




<section id="work-example-1" class="grid">

    <div class="work-example work-example-content image-content-area">

        <header class="work-header">
            <div class="work-header-left site-header">
                <h5> <?php the_field('work_example_1_header'); ?></h5>
                <h2><?php the_field('work_example_1_text'); ?></h2>
            </div>


            <div class="work-header-right">
                <div class="work-image">

                    <?php if( get_field('work_example_1_image') ): ?>

                        <img src="<?php the_field('work_example_1_image'); ?>" />

                    <?php endif; ?>

                </div>

            </div>

        </header>
    </div>


</section>

<section id="work-example-2" class="grid">

    <div class="work-example work-example-content image-content-area">

        <header class="work-header">
            <div class="work-header-left site-header">
                <h3> <?php the_field('work_example_1_header'); ?></h3>
                <h2><?php the_field('work_example_1_text'); ?></h2>
            </div>


            <div class="work-header-right">
                <div class="work-image">

                    <?php if( get_field('work_example_1_image') ): ?>

                        <img src="<?php the_field('work_example_1_image'); ?>" />

                    <?php endif; ?>

                </div>

            </div>

        </header>
    </div>


</section>

<section id="work-example-3" class="grid">

    <div class="work-example work-example-content image-content-area">

        <header class="work-header">
            <div class="work-header-left site-header">
                <h3> <?php the_field('work_example_1_header'); ?></h3>
                <h2><?php the_field('work_example_1_text'); ?></h2>
            </div>


            <div class="work-header-right">
                <div class="work-image">

                    <?php if( get_field('work_example_1_image') ): ?>

                        <img src="<?php the_field('work_example_1_image'); ?>" />

                    <?php endif; ?>

                </div>

            </div>

        </header>
    </div>


</section>

<section id="work-example-4" class="grid row-bottom-pad">

    <div class="work-example work-example-content image-content-area">

        <header class="work-header">
            <div class="work-header-left site-header">
                <h3> <?php the_field('work_example_1_header'); ?></h3>
                <h2><?php the_field('work_example_1_text'); ?></h2>
            </div>


            <div class="work-header-right">
                <div class="work-image">

                    <?php if( get_field('work_example_1_image') ): ?>

                        <img src="<?php the_field('work_example_1_image'); ?>" />

                    <?php endif; ?>

                </div>

            </div>

        </header>
    </div>


</section>




<section id="work-example-2" class="grid image-content-area figure-content-margin">

    <header class="work-header text-content-area">
        <h1><?php the_field('work_example_2_header'); ?> </h1>
        <p><?php the_field('work_example_2_text'); ?></p>
    </header>


    <figure class="work-thumb image-content-area figure-content-margin">

        <?php if( get_field('work_example_2_image') ): ?>

            <img src="<?php the_field('work_example_2_image'); ?>" />

        <?php endif; ?>

    </figure>


</section>

<section id="work-example-3" class="grid image-content-area figure-content-margin">

    <header class="work-example text-content-area">
        <h1> <?php the_field('about_header'); ?></h1>
        <p><?php the_field('about_text_3'); ?></p>
    </header>


    <figure class="work-thumb image-content-area figure-content-margin">

        <?php if( get_field('about_image_4') ): ?>

            <img src="<?php the_field('about_image_4'); ?>" />

        <?php endif; ?>

    </figure>


</section>

<section id="work-example-4" class="work-example grid image-content-area figure-content-margin">

    <header class="work-example text-content-area">
        <h1> <?php the_field('about_header_5'); ?></h1>
        <p><?php the_field('about_text_5'); ?></p>
    </header>


    <figure class="work-thumb image-content-area figure-content-margin">

        <?php if( get_field('about_image_5') ): ?>

            <img src="<?php the_field('about_image_5'); ?>" />

        <?php endif; ?>

    </figure>


</section>






<?php get_footer(); ?>

<?php
/*
Template Name: About Page
*/
?>

<?php get_header(); ?>


<section id="aboutpage-description" class="grid row-tb-pad">

    <header class="about-header text-content-area">
        <h1> <?php the_field('about_header_1'); ?></h1>
        <p><?php the_field('about_text_1'); ?></p>
    </header>


	<figure class="about-thumb image-content-area figure-content-margin">

	    <?php if( get_field('about_image_1') ): ?>

		    <img src="<?php the_field('about_image_1'); ?>" />

	    <?php endif; ?>

    </figure>


</section>

<section id="aboutpage-description-2" class="grid row-bottom-pad">

    <header class="about-header text-content-area">
        <h1> <?php the_field('about_header_2'); ?></h1>
        <p><?php the_field('about_text_2'); ?></p>
    </header>


    <figure class="about-thumb image-content-area figure-content-margin">

        <?php if( get_field('about_image_2') ): ?>

            <img src="<?php the_field('about_image_2'); ?>" />

        <?php endif; ?>

    </figure>


</section>

<section id="aboutpage-description-3" class="grid row-bottom-pad">

    <header class="about-header text-content-area">
        <h1><?php the_field('about_header_3'); ?> </h1>
        <p><?php the_field('about_text_3'); ?></p>
    </header>


    <figure class="about-thumb image-content-area figure-content-margin">

        <?php if( get_field('about_image_3') ): ?>

            <img src="<?php the_field('about_image_3'); ?>" />

        <?php endif; ?>

    </figure>


</section>

<section id="aboutpage-description-4" class="grid row-bottom-pad">

    <header class="about-header text-content-area">
        <h1> <?php the_field('about_header_4'); ?></h1>
        <p><?php the_field('about_text_4'); ?></p>
    </header>


    <figure class="about-thumb image-content-area figure-content-margin">

        <?php if( get_field('about_image_4') ): ?>

            <img src="<?php the_field('about_image_4'); ?>" />

        <?php endif; ?>

    </figure>


</section>

<section id="aboutpage-description-5" class="grid row-bottom-pad">

    <header class="about-header text-content-area">
        <h1> <?php the_field('about_header_5'); ?></h1>
        <p><?php the_field('about_text_5'); ?></p>
    </header>


    <figure class="about-thumb image-content-area figure-content-margin">

        <?php if( get_field('about_image_5') ): ?>

            <img src="<?php the_field('about_image_5'); ?>" />

        <?php endif; ?>

    </figure>


</section>






<?php get_footer(); ?>
<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package darrenpuscas
 */
get_header(); ?>


<section id="###-page-description" class="grid row-tb-pad">

    <header class="###-header text-content-area">
        <h1> <?php the_field('###_header_1'); ?></h1>
        <h3><?php the_field('###_text_1'); ?></h3>
    </header>


    <figure class="###-thumb image-content-area figure-content-margin">

        <?php if( get_field('###_image_1') ): ?>

            <img src="<?php the_field('###_image_1'); ?>" />

        <?php endif; ?>

    </figure>


</section>



<?php get_footer(); ?>

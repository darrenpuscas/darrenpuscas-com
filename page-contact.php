<?php
/*
Template Name: Contact Page
*/
?>

<?php get_header(); ?>


    <section id="contact-page-description" class="grid row-tb-pad">

        <header class="contact-header text-content-area">
            <h1> <?php the_field('contact_header_1'); ?></h1>

        </header>
        <div class="contact-form text-content-area">
            <?php the_field('contact_text_1'); ?>
        </div>

        <figure class="contact-thumb image-content-area figure-content-margin">

            <?php if( get_field('contact_image_1') ): ?>

                <img src="<?php the_field('contact_image_1'); ?>" />

            <?php endif; ?>

        </figure>


    </section>



<?php get_footer(); ?>
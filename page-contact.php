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



        <div class="contact-form text-content-area">
            <?php the_field('contact_form'); ?>
        </div>

    </section>



<?php get_footer(); ?>
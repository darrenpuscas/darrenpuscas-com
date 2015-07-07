<?php
/*
Template Name: WP Audits Page
*/
?>

<?php get_header(); ?>



<section id="audit-description" class="row-top-pad grid">


    <header class="care-header text-content-area nonscroll-fadeIn">
        <h1> <?php the_field('audit_header'); ?></h1>
        <?php the_field('audit_text'); ?>

    </header>






    <div class="audit-image nonscroll-fadeIn-2">
        <div class="audit-image-vector">
            <?php if( get_field('audit_image') ): ?>

                <img src="<?php the_field('audit_image'); ?>" />

            <?php endif; ?>
        </div>
        <div class="care-4 image-content-area">

            <div class="audit-content-1 ext-content-area"><?php the_field('audit_content'); ?></div>
            <div class="audit-content-2 ext-content-area"><?php the_field('audit_content_2'); ?></div>
        </div>


    </div>


</section>

<div class="site-description text-content-area row-top-pad">
    <a class="frontpage-button-link button-link button" href="http://127.0.0.1/darrenpuscas/contact/">Contact me for more WordPress Site Audit details</a>
</div>

<div class="site-description text-content-area row-bottom-pad">
    <small><?php the_field('audit_text_2'); ?></small>
</div>








<?php get_footer(); ?>

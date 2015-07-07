
<?php
/*
Template Name: Default No Image Page
*/
?>

<?php get_header(); ?>



<section id="page-description" class="grid row-tb-pad">

    <div class="page-content text-content-area">
        <h1> <?php the_title(''); ?></h1>

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
            the_content(); // displays whatever you wrote in the wordpress editor
        endwhile; endif; //ends the loop
        ?>

    </div>

    <figure class="###-thumb image-content-area figure-content-margin">

        <?php if( get_field('###_image_1') ): ?>

            <img src="<?php the_field('###_image_1'); ?>" />

        <?php endif; ?>

    </figure>


</section>



<?php get_footer(); ?>
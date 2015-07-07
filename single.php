<?php
/**
 * The template for displaying all single posts.
 *
 * @package darrenpuscas
 */

get_header(); ?>

	<div id="primary" class="grid row-tb-pad">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>

			<div class="post-naigation text-content-area"><?php the_post_navigation(); ?></div>

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>



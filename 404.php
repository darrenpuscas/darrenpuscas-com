<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package darrenpuscas
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found text-content-area row-tb-pad">
				<header class="page-header row-bottom-pad">
					<h1 class="page-title"><?php _e( 'Sorry. That page doesn&rsquo;t exist.', 'darrenpuscas' ); ?></h1>
                    <p><?php _e( 'But have a look around here, I bet you can find something you are looking for. Maybe try one of the links below or a search?', 'darrenpuscas' ); ?></p>

                    <?php get_search_form(); ?>
				</header><!-- .page-header -->

				<div class="page-content row-top-pad">

                        <?php the_widget( 'WP_Widget_Recent_Posts' ); ?>

                        <?php if ( darrenpuscas_categorized_blog() ) : // Only show the widget if site has multiple categories. ?>
                        <div class="widget widget_categories">
                            <h2 class="widget-title"><?php _e( 'Most Used Categories', 'darrenpuscas' ); ?></h2>
                            <ul>
                            <?php
                                wp_list_categories( array(
                                    'orderby'    => 'count',
                                    'order'      => 'DESC',
                                    'show_count' => 1,
                                    'title_li'   => '',
                                    'number'     => 10,
                                ) );
                            ?>
                            </ul>
                        </div><!-- .widget -->
                        <?php endif; ?>

                        <?php
                            /* translators: %1$s: smiley */
                            $archive_content = '<p>' . sprintf( __( 'Try looking in the monthly archives.', 'darrenpuscas' ), convert_smilies( ':)' ) ) . '</p>';
                            the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content" );
                        ?>
				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

<?php
/**
 * The template for displaying 404 pages (not found)
 * The main template file.
 * @package Fresh Theme
 */

get_header(); ?>

<section id="home_wall" class="twoborders home_wall_small">

    <div class="gallerycontainer nocarousel" style="background-image: url('<?php bloginfo( 'template_directory' ); ?>/img/404.jpg');">
    </div>

</section>

	<section class="error-404 not-found">
		<header class="page-header">
			<h1 class="page-title"><?php esc_html_e( 'Oops, nothing found!', 'cygnific' ); ?></h1>
		</header><!-- .page-header -->

		<div class="page-content">
			<p>We could not find what you were looking for. Please try again with different key words or <a href="./contact/">contact</a> us. Thanks!</p>

			<?php
				get_search_form();

				the_widget( 'WP_Widget_Recent_Posts' );
			?>

		</div><!-- .page-content -->
	</section><!-- .error-404 -->


<?php 
get_footer();

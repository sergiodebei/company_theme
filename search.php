<?php
/**
 * The template for displaying search results pages.
 * Template Name: Search
 * Description: Search
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Cygnific
 */

get_header(); ?>

<section id="home_wall" class="twoborders home_wall_small">

    <div class="gallerycontainer nocarousel" style="background-image: url('<?php bloginfo( 'template_directory' ); ?>/img/search.jpg');">
    </div>

</section>

	<section id="searchresults">

		<div class="container">

<!--                     <p class="title">Search results</p> -->
					
					<?php
						if ( have_posts() ) : ?>
				
							<header class="page-header">
								<h1 class="page-title"><?php printf( esc_html__( 'Search results: %s', 'cygnific' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
							</header><!-- .page-header -->
				
							<?php
							/* Start the Loop */
							while ( have_posts() ) : the_post();
				
								/**
								 * Run the loop for the search to output the results.
								 * If you want to overload this in a child theme then include a file
								 * called content-search.php and that will be used instead.
								 */
								 get_template_part( 'template-parts/content', 'search' );
				
							endwhile;
							

							get_search_form();

							the_widget( 'WP_Widget_Recent_Posts' );

						else :
							
							get_template_part( 'template-parts/content', 'none' );
				
						endif;
					?>

        </div>

	</section>

<?php
get_footer();

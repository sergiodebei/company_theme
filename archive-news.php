<?php
/**
 * Template Name: News
 * Description: News 
 * The template for displaying archive pages
 * @package Fresh Theme
 */

get_header(); ?>

<section id="home_wall" class="twoborders home_wall_small">

    <div class="gallerycontainer nocarousel" style="background-image: url('<?php the_field('wall_background'); ?>');">
    </div>

</section>

<section id="home_subwall">
    <div class="container">
        <h2 class="topbuttons">Cygnific news</h2>
    </div>
</section>

<?php 
	$url = site_url(); 
	$section = "news";
?>


<section id="cn_articles">
    <div class="container">

		<?php if ( is_paged() ):  ?>

	    <button class="button button_blue load-more load-previous" data-prev="1" data-page="<?php echo check_paged(1); ?>" data-url="<?php echo admin_url('admin-ajax.php') ?>">
	    	<span class="icon loading"></span>
	    	<span class="text">Load previous</span>
	    </button>

	    <?php endif; ?>

		<div class="row rowflex news-container">
	    <?php 

	      	$query_args = array(
				'post_type' => 'post',
				'cat'  => 'news'

	          // 'order' => 'ASC'
	        );

	      	$the_query = new WP_Query( $query_args ); ?>

	      	<?php if ( $the_query->have_posts() ) : ?>
	    	<?php $count = 1; ?>

	    		<?php echo '<div class="rowflex page-limit" data-page="'. $url .'/'. $section . '/' .check_paged().'">' ?>

		        <!-- the loop -->
		        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

					<?php
			        	// $class = 'reveal';
			        	// set_query_var('post-class', $class);
		        	?>

		        	<?php get_template_part( 'template-parts/content', get_post_format() ); ?>
		            
	                <?php 

	    	            // if ( ( $count + 1) % 2 ){
	    	            //     echo "</div><div class='row rowflex'>";
	    	            // }

	                ?>

				<?php $count++; endwhile; ?>
				<!-- end of the loop -->

				<?php echo '</div>' ?>

			<?php else:  ?>
			<?php endif; ?>

	    </div>

        <button class="button button_blue load-more" data-page="<?php echo check_paged(1); ?>" data-url="<?php echo admin_url('admin-ajax.php') ?>">
        	<span class="icon loading"></span>
        	<span class="text">Load more</span>
        </button>

    </div>
</section>

<?php 
get_footer();
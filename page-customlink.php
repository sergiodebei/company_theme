<?php
/**
 * Template Name: CustomLink
 * Description: CustomLink 
 * The template for displaying custom links in the footer
 * @package Fresh Theme
 */

get_header(); ?>

<section id="home_wall" class="twoborders home_wall_small">

    <div class="gallerycontainer nocarousel" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id() );?>);">
    </div>

</section>

<section id="home_subwall">
    <div class="container">
        <h2 class="topbuttons"><?php the_title(); ?></h2>
    </div>
</section>

<section class="cl_article" id="post-<?php the_ID(); ?>">
    <div class="container">            

        <?php the_content(); ?>

    </div>
</section><!-- #post-## -->
			
<?php 
get_footer();
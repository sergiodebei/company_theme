<?php
/**
 * The template part for displaying single posts
 * @package Fresh Theme
 */
?>

<section id="home_wall" class="twoborders home_wall_small">

    <div class="gallerycontainer nocarousel" style="background-image: url(<?php if( !get_field("header_image") ) echo bloginfo( 'template_directory' ) . '/img/news-default.jpg'; else {  echo the_field('header_image'); } ?>);">
    </div>

</section>

<section id="home_subwall">
    <div class="container">
        <h2 class="topbuttons"><?php the_title(); ?></h2>
    </div>
</section>

<section class="sa_article" id="post-<?php the_ID(); ?>">
    <div class="container">
        <div class="row rowflex single_article">
            <div class="col-m-6 col-xs-12">
                <?php if ( get_field("video_url") ) : ?>
                    <div class="single_article_video">
                        <?php echo get_field( "video_url" ); ?>
                    </div>
                <?php endif; ?>
                <div class="single_article_image">
                    <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id() );?>" alt="" class="sa_image">
<!--                     <svg viewBox="-10 -10 140 144">
                        <path id="circle" d="M23.6,3C23.6,3-0.2,10,0,41.6c0.2,31.6,19.2,63.7,46.4,76.2c27.2,12.4,47.7,2.8,55.6-2.8 c7.9-5.6,26.8-24.4,16.6-58.4S83.3,10.5,70.3,5.3C57,0.1,35.2-2.3,23.6,3"/>
                        <path id="triangle" d="M50.6,36.7l33.1,24.8L50.6,86.2V36.7z"/>
                    </svg> -->
                </div>
            </div>
            <div class="col-m-6 col-xs-12"id="post-<?php the_ID(); ?>">

				<?php the_content(); ?>

                <a href="<?php echo site_url();; ?>/news/" class="button button_grey">back to news</a>
            </div>
        </div>
    </div>
</section><!-- #post-## -->
<?php
/**
 * Template part for displaying posts.
 * @package Fresh Theme
 */
?>

<?php  

    // $class = get_query_var('post-class', $class);

?>

<div class="col-m-6 col-xs-12">
    <article id="post-<?php the_ID(); ?>" <?php post_class( array( 'article' )); ?>>
        <a href="<?php echo get_permalink( $post->ID ); ?>">
          <div class="article_image" style="background: url('<?php the_field('article_preview'); ?>') no-repeat center / cover;">


            <?php // echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>

          </div>
        </a>
        <div class="article_description">
            <h2 class="title"><a href="<?php echo get_permalink( $post->ID ); ?>"><?php the_title(); ?></a></h2>
            <p class="article_preview">

                <?php 

                if ( has_excerpt() ) {
                   the_excerpt();
                } else {
                    echo get_first_paragraph();
                }

                 ?>
                <?php  ?>
            </p>
            <a href="<?php echo get_permalink( $post->ID ); ?>" class="button button_grey">Read more</a>
        </div>
    </article><!-- #post-## -->
</div>

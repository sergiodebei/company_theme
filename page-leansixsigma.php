<?php
/**
 * Template Name: Lean six sigma 
 * Description: Lean six sigma 
 * The main template file.
 * @package Fresh Theme
 */

get_header(); ?>

<section id="home_wall" class="twoborders home_wall_small">

	<div class="gallerycontainer nocarousel" style="background-image: url('<?php the_field('wall_background'); ?>');">
	</div>

</section>

<section id="home_subwall">
    <div class="container">
        <h2 class="topbuttons">Lean Six Sigma</h2>
        <div class="row divff divffwithbuttons">
            <a href="#ls_whatis" class="button button_white">What is Lean Six Sigma</a>
            <a href="#ls_popup" class="button button_white">Lean Six Sigma & Cygnific</a>
            <a href="#ls_visitus" class="button button_white">Lean Six Sigma Tour</a>
        </div> 
    </div>
</section>

<section id="ls_whatis">
    <div class="container">
        <h2 class="title">
            <?php the_field('introduction_intro'); ?>
        </h2>
        <div class="row rowflex">

			<?php /*
				$data = get_field('introduction_text');
				$string = strip_tags($data);
				$half = intval(strlen($string)/2); */
			?>

            <div class="col-m-6 col-xs-12">

                <?php the_field('introduction_text_first_column'); ?>
<!--                 <p><?php /* echo substr($string, 0, strpos($string, '.', $half)+1); */ ?></p> -->

            </div>
            <div class="col-m-6 col-xs-12">
    
                <?php the_field('introduction_text_second_column'); ?>
<!--                 <p><?php /* echo substr($string, strpos($string, '.', $half)+1); */ ?></p> -->

            </div>
        </div>
        <div class="row gallery">

            <?php 

            $images = get_field('gallery');

            if( $images ): ?>
                <?php foreach( $images as $image ): ?>
                    <a href="<?php echo $image['url']; ?>" rel="lightbox">
                         <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                    </a>
                <?php endforeach; ?>
            <?php endif; ?>

        </div>
    </div>
</section>

<section class="testimonial2 testimonial_small2" id="ls_testimonial">
    <div class="slider-control ts1" id="control-left">
        <svg viewBox="0 0 30 60">
            <g filter="">
                <use xlink:href="#arrowleft"></use>
            </g>
        </svg>
    </div>
    <div class="slider-control ts1" id="control-right">
        <svg viewBox="0 0 30 60">
            <g filter="">
                <use xlink:href="#arrowright"></use>
            </g>
        </svg>
    </div>
    <ul>

        <?php

            if( have_rows('testimonial') ):

                while ( have_rows('testimonial') ) : the_row();
            ?>
            		
            		<li style="background-image: url(<?php the_sub_field('background_image'); ?>);">
            		    <div class="container">
            		        <div class="row rowflex">
            		            <div class="col-m-6 col-xs-3">
            		            </div>
            		            <div class="col-m-6 col-xs-9 colflex">
            		                <p class="bluearea_message">
            		                    <?php the_sub_field('message'); ?>
            		                </p>
            		            </div>
            		        </div>
            		    </div>
            		</li>

            <?php

               	endwhile;

            else :
            endif;

        ?>

    </ul>
</section>

<section id="ls_popup">
    <div class="container">
        <h2 class="title"><?php the_field('title'); ?></h2>
        <p class="intro"><?php the_field('intro_text'); ?></p>
        <div class="row">
            <div class="col-m-6 col-xs-12">
                <div class="row content">
                    <div class="col-m-12 col-xs-12">

                        <?php

                            if( have_rows('paragraph_one') ):
                        
                                while ( have_rows('paragraph_one') ) : the_row();
                            ?>
                                    
                                    <h3><?php the_sub_field('article_title'); ?></h3>
                                    <p><?php the_sub_field('article_text'); ?></p>


                                    <?php if ( get_sub_field("button_on_off") ) : ?>

                                        <a href="<?php the_sub_field('internal_link'); ?><?php the_sub_field('external_link'); ?>" target="_blank" class="button button_grey"><?php the_sub_field('button_text'); ?></a>

                                    <?php endif; ?>

                            <?php

                                endwhile;

                            else :
                            endif;

                        ?>

                    </div>
                </div>
            </div>

            <div class="col-m-6 col-xs-12">
                <div class="row content">
                    <div class="col-m-12 col-xs-12">

                        <?php

                            if( have_rows('paragraph_two') ):
                        
                                while ( have_rows('paragraph_two') ) : the_row();
                            ?>
                                    
                                    <h3><?php the_sub_field('article_title'); ?></h3>
                                    <p><?php the_sub_field('article_text'); ?></p>


                                    <?php if ( get_sub_field("button_on_off") ) : ?>

                                        <a href="<?php the_sub_field('internal_link'); ?><?php the_sub_field('external_link'); ?>" target="_blank" class="button button_grey"><?php the_sub_field('button_text'); ?></a>

                                    <?php endif; ?>

                            <?php

                                endwhile;

                            else :
                            endif;

                        ?>

                    </div>
                </div>
            </div>
        </div>
        <div class="row gallery">

            <?php 

            $images = get_field('gallery2');

            if( $images ): ?>
                <?php foreach( $images as $image ): ?>
                    <a href="<?php echo $image['url']; ?>" rel="lightbox">
                         <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                    </a>
                <?php endforeach; ?>
            <?php endif; ?>

        </div>
    </div>
</section>

<section id="ls_visitus">
    <div class="container">
        <div class="row">
            <div class="col-m-12 col-xs-12 content">
                <h2 class="title inpadding"><?php the_field('visitus_intro'); ?></h2>
                <p class="intro"><?php the_field('visitus_text'); ?></p>
                <?php if ( get_field("visitus_button_on_off") ) : ?>

                    <?php 
                        // the_field('visitus_link_internal'); 
                    ?><?php 
                        // the_field('visitus_link_external'); 
                    ?>
                    <a href="#ls_visitus" class="button button_blue showform"><?php the_field('visitus_button_text'); ?></a>

                <?php endif; ?>

                <div class="formcontainer" id="gf5">
                    <?php  gravity_form( 5, false, false, false, '', false );   ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php 
get_footer();
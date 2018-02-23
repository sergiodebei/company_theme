<?php
/**
 * Template Name: Homepage
 * Description: Homepage 
 * The main template file.
 * @package Fresh Theme
 */

get_header(); ?>

        <section id="home_wall" class="twoborders">

            <div class="container">
                <div class="wall_message_container">

                <?php if ( get_field("wall_message_on_off") ) : ?>

                    <div class="wall_message twoborders">
                        <p class="wall_message_title"><?php the_field('wall_title'); ?></p>
                        <p class="wall_message_text"><?php the_field('wall_text'); ?></p>

                        <?php if ( get_field("wall_button_on_off") ) : ?>

                            <a href="<?php the_field('wall_button_link_internal'); ?><?php the_field('wall_button_link_external'); ?>" class="button button_grey"><?php the_field('wall_button'); ?></a>

                        <?php endif; ?>
                        
                    </div>

                <?php endif; ?>

                </div>
            </div>

            <?php if ( get_field("videoclip_on_off") ) : ?>

                <div class="gallerycontainer videoclip" style="">
                    <video poster="<?php the_field("videoclip_poster"); ?>" id="bgvid" playsinline autoplay muted loop>
                        <source src="<?php the_field("videoclip_mp4"); ?>" type="video/mp4">
    <!--                     <source src="http://thenewcode.com/assets/videos/polina.webm" type="video/webm">
                        <source src="http://thenewcode.com/assets/videos/polina.mp4" type="video/mp4"> -->
                    </video>
                </div>

            <?php endif; ?>

            <?php if ( get_field("gallery_on_off") ) : ?>

                <div class="gallerycontainer" id="index_gallery">
                    <div class="slider-control ts3" id="control-left">
                        <svg viewBox="0 0 30 60">
                            <g filter="">
                                <use xlink:href="#arrowleft"></use>
                            </g>
                        </svg>
                    </div>
                    <div class="slider-control ts3" id="control-right">
                        <svg viewBox="0 0 30 60">
                            <g filter="">
                                <use xlink:href="#arrowright"></use>
                            </g>
                        </svg>
                    </div>
                    <ul>

                        <?php

                            if( have_rows('picture') ):
                
                                while ( have_rows('picture') ) : the_row();
                            ?>
                                    
                                    <li style="height: 400px ;background-image: url(<?php the_sub_field('photo'); ?>);background-size: cover;"></li>

                            <?php

                                endwhile;

                            else :
                            endif;

                        ?>

                    </ul>
                </div>

            <?php endif; ?>

        </section>

        <section id="home_subwall">
            <div class="container">
                <div class="row divff divfficons">
                    <div class="divoof">
                        <div class="imgcentered">
                            <img src="<?php bloginfo( 'template_directory' ); ?>/img/service_support.svg" alt="" class="subwall_service">
                        </div> 
                        <p class="subwall_service_description">24 / 7 support</p>
                    </div>
                    <div class="divoof">
                        <div class="imgcentered">
                            <img src="<?php bloginfo( 'template_directory' ); ?>/img/service_calls.svg" alt="" class="subwall_service">
                        </div> 
                        <p class="subwall_service_description">Customer service</p>
                    </div>
                    <div class="divoof">
                        <div class="imgcentered">
                            <img src="<?php bloginfo( 'template_directory' ); ?>/img/service_mails.svg" alt="" class="subwall_service">
                        </div> 
                        <p class="subwall_service_description">Email & File</p>
                    </div>
                    <div class="divoof">
                        <div class="imgcentered">
                            <img src="<?php bloginfo( 'template_directory' ); ?>/img/service_social.svg" alt="" class="subwall_service">
                        </div> 
                        <p class="subwall_service_description">Social Media</p>
                    </div>
                    <div class="divoof">
                        <div class="imgcentered">
                            <img src="<?php bloginfo( 'template_directory' ); ?>/img/service_multilingual.svg" alt="" class="subwall_service">
                        </div> 
                        <p class="subwall_service_description">Multi-lingual</p>
                    </div>
                </div> 
            </div>
        </section>

        <section id="home_areas">
            <div class="container">
                <h1 class="title">
                    <?php the_field('section_title'); ?>
                </h1>
                <div class="row rowflex">

					<?php

					if( have_rows('area') ):
                        $count = 1;
					    while ( have_rows('area') ) : the_row();
					?>
							
				        <a class="col-m-3 col-xs-6 col_padding <?php if ($count % 2 == 0) echo("border_blue_dark"); else echo("border_blue_light"); ?> border_grey_bottom" href="./our-services?tab=<?php echo $count; ?>/#cs_areasof"">
<!--                             <a href=""> -->
					            <div class="area_title">
					                <p><?php the_sub_field('area_title'); ?></p>
					            </div> 
					            <div class="area_text">
					                <p><?php the_sub_field('area_description'); ?></p>
					            </div> 
<!--                             </a> -->
				        </a>
 
					<?php

					    $count++; endwhile;

					else :
					endif;

					?>

                </div>
                <a href="<?php the_field('area_button_link_internal'); ?><?php the_field('area_button_link_external'); ?>#<?php the_field('area_button_link_internal_section'); ?>" class="button button_blue">
                    <?php the_field('area_button_text'); ?>
                </a>
            </div>
        </section>

        <section class="testimonial2" id="index_testimonial">
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
		            		
		                    <li style="background-image: url('<?php the_sub_field('background_image'); ?>');">
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
            <div class="container sentence_container">
                <div class="row rowflex multiborder">
                    <div class="col-m-3 col-xs-12">
                        <img src="<?php the_field('testimonial_window_picture'); ?>" alt="" class="testimonial_rounded">
                    </div>
                    <div class="col-m-9 col-xs-12 colflex">
                        <p class="testimonial_sentence">
                            <?php the_field('testimonial_window_sentence'); ?>
                        </p>
                        <p class="testimonial_sign">
                            <?php the_field('testimonial_window_sign'); ?>
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section id="home_discover">
            <div class="container">
                <h1 class="title">
                    <?php the_field('discover_title'); ?>
                </h1>
                <h2>
                    <?php the_field('discover_subtitle'); ?>
                </h2>

                <?php include( get_template_directory(). '/includes/home_vacancies.php' ); ?>

                <div class="row faces rowflex">
                    <div class="col-m-4 col-xs-12 tricktohide">
                        <div class="row">

                            <?php
                            if( have_rows('discover_faces_left') ):
                                while ( have_rows('discover_faces_left') ) : the_row(); ?>
                                    <div class="col-m-4 col-xs-4">
                                        <div class="face" style="background-image: url(<?php the_sub_field('face'); ?>"></div>
                                    </div>
                            <?php
                                endwhile;
                            else :
                                // no rows found
                            endif;
                            ?>
                            
                        </div>
                    </div>
                    <div class="col-m-4 col-xs-12 facebutton">
                        <a href="./vacancies/" class="button button_blue">
                            All vacancies 
                        </a>
                    </div>
                    <div class="col-m-4 col-xs-12 tricktohide">
                        <div class="row">

                            <?php
                            if( have_rows('discover_faces_left') ):
                                while ( have_rows('discover_faces_right') ) : the_row(); ?>
                                    <div class="col-m-4 col-xs-4">
                                        <div class="face" style="background-image: url(<?php the_sub_field('face'); ?>"></div>
                                    </div>
                            <?php
                                endwhile;
                            else :
                                // no rows found
                            endif;
                            ?>
                            
                        </div>
                    </div>
                </div>

            </div>
        </section>

<?php 
get_footer();
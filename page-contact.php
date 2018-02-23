<?php
/**
 * Template Name: Contact
 * Description: Contact 
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
                <h2 class="topbuttons">Contact</h2>
            </div>
        </section>

        <section id="cnt_intro">
            <div class="container">
                <div class="row rowflex">
                    <div class="col-m-6 col-xs-12">
                        <h3>Cygnific</h3>
                        <ul class="notbullets">
                            <li>Tel: <a href="tel:<?php the_field('telephone_general'); ?>"><?php the_field('telephone_general'); ?></a></li>
                        </ul>
                        <br>
                        <h3>Recruitment</h3>
                        <ul class="notbullets">
                            <li>Tel: <a href="tel:<?php the_field('telephone'); ?>"><?php the_field('telephone'); ?></a></li>
                            <li><a href="mailto:<?php the_field('mail'); ?>"><?php the_field('mail'); ?></a></li>
                        </ul>
                        <div class="cnt_intro_icon-container">

                            <a href="<?php the_field('facebook', 10); ?>" target="_blank" class="icon">
                                <svg viewBox="0 0 383.9 383.9">
                                    <g filter="">
                                        <use xlink:href="#facebook"></use>
                                    </g>
                                </svg>
                            </a> 

                            <a href="<?php the_field('twitter', 10); ?>" target="_blank" class="icon">
                                <svg viewBox="0 0 383.9 383.9">
                                    <g filter="">
                                        <use xlink:href="#twitter"></use>
                                    </g>
                                </svg>
                            </a> 

                            <a href="<?php the_field('linkedin', 10); ?>" target="_blank" class="icon">
                                <svg viewBox="0 0 383.9 383.9">
                                    <g filter="">
                                        <use xlink:href="#linkedin"></use>
                                    </g>
                                </svg>
                            </a>
                        </div>
                        <h3>Postal address</h3>
                        <ul class="notbullets">

                            <?php

                	            if( have_rows('address') ):
                	                while ( have_rows('address') ) : the_row();
                	            ?>
                	            		
                	            		<li><?php the_sub_field('address_line'); ?></li>

                	            <?php

                	              	endwhile;

                	            else :
                	            endif;

            	            ?>

                        </ul>

                        <a href="#cnt_maps" class="button button_blue">Get directions</a>
                    </div>
                    <div class="col-m-6 col-xs-12">
                        <!-- <h3>Have a question? Send us a message!</h3> -->
                        <h3>Select your contact reason below</h3>
                        <div class="formcontainer">
                            <?php  gravity_form( 2, false, false, false, '', false );   ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="cnt_maps">
            <div class="container">
                <div class="row rowflex">

                    <?php

        	            if( have_rows('location') ):
        	            	$count = 1;
        	                while ( have_rows('location') ) : the_row();
        	            ?>
        	            		
	        	            <div class="col-m-6 col-xs-12">
	        	                <h2 class="title inpadding"><?php the_sub_field('name'); ?></h2>
	        	                <div class="cnt_address">
	        	                    <ul class="notbullets">

	                                    <?php
	                        	            if( have_rows('location_address') ):
	                        	                while ( have_rows('location_address') ) : the_row();
	                        	            ?>
	                        	            		<li><?php the_sub_field('location_address_line'); ?></li>
	                        	            <?php
	                        	              	endwhile;
	                        	            else :
	                        	            endif;
	                    	            ?>

	        	                    </ul>
	        	                </div>
	        	                <div class="cnt_map">
	        	                    <img src="<?php the_sub_field('picture'); ?>" alt="">
	        	                </div>
	        	                <div class="cnt_googlemap">
	        	                    <iframe width="100%" height="200" frameborder="0" style="border:0" src="<?php the_sub_field('iframe'); ?>" allowfullscreen></iframe>
	        	                </div>
	        	                <a href="<?php the_sub_field('direction_link'); ?>" class="button button_blue" target='_blank'>Get directions</a>
	        	            </div>

        	            <?php

	        	            if ( ( $count + 1) % 2 ){
	        	                echo "</div><div class='row rowflex'>";
	        	            }

        	               	$count++; endwhile;

        	            else :
        	            endif;

    	            ?>

                </div>
            </div>
        </section>

<?php 
get_footer();
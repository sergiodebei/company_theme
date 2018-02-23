<?php
/**
 * Template Name: About
 * Description: About 
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
                <h2 class="topbuttons">About Cygnific</h2>
                <div class="row divff divffwithbuttons">
                    <a href="#ab_operational" class="button button_white">Departments</a>
                    <a href="#ab_bluesection" class="button button_white">Facts & figures</a>
                    <a href="#ab_map" class="button button_white">Locations</a>
                </div> 
            </div>
        </section>

        <section id="ab_weare">
            <div class="container">
                <h2 class="title">
                    <?php the_field('weare_title'); ?>
                </h2>
                <div class="intro">
                    <?php the_field('weare_text'); ?>
                </≈>
            </div>
        </section>

        <section id="ab_operational" class="tabbed">
            <div class="container">
                <h2 class="title inpadding">
                    <?php the_field('departments_title'); ?>
                </h2>
                <p class="intro">
                    <?php the_field('departments_text'); ?>
                </p>
                <div class="thumbs2">

                    <?php

        	            if( have_rows('department') ):
        	            	$count = 1;
        	                while ( have_rows('department') ) : the_row();
        	            ?>
        	            		
        	            		<img class="department <?php if ($count == 1) { ?> thumb-active <?php } ?>" data-id="<?php echo $count; ?>"  src="<?php the_sub_field('badge'); ?>">

        	            <?php

        	               	$count++; endwhile;

        	            else :
        	            endif;

    	            ?>

                </div>
                <div class="row tabs tabsdepartment">

                    <?php

        	            if( have_rows('department') ):
        	            	$count = 1;
        	                while ( have_rows('department') ) : the_row();
        	            ?>
        	            		
    		                    <div class="row tab <?php if ($count == 1) { ?> tab-active <?php } ?>" data-tab-id="<?php echo $count; ?>" id="" style="border-top: 5px solid <?php the_sub_field('main_color'); ?>">
    		                        <div class="col-m-3 col-xs-12">
    		                            <img src="<?php the_sub_field('tab_image'); ?>">
    		                        </div>
    		                        <div class="col-m-9">
    		                            <h3><?php the_sub_field('tab_title'); ?></h3>
    		                            <p class="tab_thought"><?php the_sub_field('tab_text'); ?></p>

                                        <?php
                                            if( have_rows('tab_download') ):
                                                while ( have_rows('tab_download') ) : the_row();
                                            ?>
    
                                                <?php if ( get_sub_field("download_on_off") ) : ?>

                                                    <a href="<?php the_sub_field('download_file'); ?>" target="_blank" class="button button_grey"><?php the_sub_field('download_text'); ?></a>

                                                <?php endif; ?>

                                            <?php
                                                endwhile;
                                            else :
                                            endif;
                                        ?>

    		                        </div>
    		                    </div>

        	            <?php

        	               	$count++; endwhile;

        	            else :
        	            endif;

    	            ?>

                </div>
            </div>
        </section>

        <section id="ab_bluesection">
            <div class="container">
                <h2 class="title inpadding">
                    <?php the_field('numbers_title'); ?>
                </h2>

                <div class="nafs">

                    <?php

        	            if( have_rows('data') ):
        	            	$count = 1;
        	                while ( have_rows('data') ) : the_row();
        	            ?>
        	            		<?php if ( get_sub_field("data_on_off") ) : ?>

            	            		<div class="naf">
            	            		    <p class="title"><?php the_sub_field('data_title'); ?></p>
            	            		    <p class="numbers count" data-max="<?php the_sub_field('data_value'); ?>">0</p>
            	            		    <div class="icon">
            	            		        <img src="<?php the_sub_field('data_icon'); ?>" alt="">
            	            		    </div>
            	            		</div>

                                <?php endif; ?>

        	            <?php

        	               	$count++; endwhile;

        	            else :
        	            endif;

    	            ?>

                </div>
            </div>
        </section>

        <section id="ab_map">
            <div class="container">
                <h2 class="title">
                    <?php the_field('map_title'); ?>
                </h2>
                <div class="distribution-map">
                    <img src="<?php bloginfo( 'template_directory' ); ?>/img/map.svg" alt="">
                    <div class="pin pin_active" id="p1" data-id="1">
                        <!-- <p>1</p> -->
                    </div>
                    <div class="pin pin_active" id="p2" data-id="2">
                        <!-- <p>2</p> -->
                    </div>
                    <div class="pin pin_active" id="p3" data-id="3">
                        <!-- <p>3</p> -->
                    </div>
                    <div class="pin pin_active" id="p4" data-id="4">
                        <!-- <p>4</p> -->
                    </div>
                    <div class="pin pin_active" id="p5" data-id="5">
                        <!-- <p>5</p> -->
                    </div>
                </div>
                <div class="citylist">
                    <ol class="citylist_ol">

                        <?php

            	            if( have_rows('citieslist') ):
            	            	$count = 1;
            	                while ( have_rows('citieslist') ) : the_row();
            	            ?>	

								<li data-pin-id="<?php echo $count; ?>" class="active"><?php the_sub_field('city_name'); ?></li>

            	            <?php

            	               	$count++; endwhile;

            	            else :
            	            endif;

        	            ?>

                    </ol>
                </div>
            </div>
        </section>

<?php 
get_footer();
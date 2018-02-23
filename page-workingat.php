<?php
/**
 * Template Name: Working at
 * Description: Working at 
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
            <div class="gallerycontainer" id="wa_gallery">
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

        </section>

        <section id="home_subwall">
            <div class="container">
                <div class="row divff divffwithbuttons">

                    <a href="#wa_companyculture" class="button button_white">company culture</a>
                    <a href="#wa_ourpeople" class="button button_white">Our people</a>
                    <a href="#wa_workingin" class="button button_white">working in NL</a>
                    <a href="#wa_recruitment" class="button button_white">Recruitment process</a>

                </div> 
            </div>
        </section>

        <section id="wa_companyculture">
            <div class="container">
                <h2 class="title">
                    <?php the_field('title'); ?>
                </h2>
                <p class="intro"><?php the_field('intro_text'); ?></p>
                <div class="row rowflex">
                    <div class="col-m-6 col-xs-12">

                        <?php

                            if( have_rows('paragraph_one') ):
        
                                while ( have_rows('paragraph_one') ) : the_row();
                            ?>

                                    <div class="paragraph">
                                    
                                        <h3><?php the_sub_field('article_title'); ?></h3>
                                        <p><?php the_sub_field('article_text'); ?></p>


                                        <?php if ( get_sub_field("button_on_off") ) : ?>

                                            <a href="<?php the_sub_field('internal_link'); ?><?php the_sub_field('external_link'); ?>" target="_blank" class="button button_grey"><?php the_sub_field('button_text'); ?></a>
                                            
                                        <?php endif; ?>

                                        <?php if ( get_sub_field("download_on_off") ) : ?>

                                            <a href="<?php the_sub_field('download_file'); ?>" class="button button_grey" target="_blank" download="<?php the_sub_field('download_file_name'); ?>"><?php the_sub_field('download_button_text'); ?></a>
                                            
                                        <?php endif; ?>

                                    </div>


                            <?php

                                endwhile;

                            else :
                            endif;

                        ?>

                    </div>
                    <div class="col-m-6 col-xs-12">

                        <?php

                            if( have_rows('paragraph_two') ):
                        
                                while ( have_rows('paragraph_two') ) : the_row();
                            ?>

                                    <div class="paragraph">
                                    
                                        <h3><?php the_sub_field('article_title'); ?></h3>
                                        <p><?php the_sub_field('article_text'); ?></p>


                                        <?php if ( get_sub_field("button_on_off") ) : ?>

                                            <a href="<?php the_sub_field('internal_link'); ?><?php the_sub_field('external_link'); ?>" target="_blank" class="button button_grey"><?php the_sub_field('button_text'); ?></a>
                                            
                                        <?php endif; ?>

                                        <?php if ( get_sub_field("download_on_off") ) : ?>

                                            <a href="<?php the_sub_field('download_file'); ?>" class="button button_grey" target="_blank" download="<?php the_sub_field('download_file_name'); ?>"><?php the_sub_field('download_button_text'); ?></a>
                                            
                                        <?php endif; ?>

                                    </div>

                            <?php

                                endwhile;

                            else :
                            endif;

                        ?>

                    </div>
                </div>
            </div>
        </section>

        <section class="testimonial2 testimonial_small2" id="wa_testimonial">
            <div class="slider-control ts2" id="control-left">
                <svg viewBox="0 0 30 60">
                    <g filter="">
                        <use xlink:href="#arrowleft"></use>
                    </g>
                </svg>
            </div>
            <div class="slider-control ts2" id="control-right">
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

        <section id="wa_popup">
            <div class="container">
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
                <div class="row">
                    <div class="col-m-6 col-xs-12">
                        <div class="row content">
                            <div class="col-m-12 col-xs-12">

                                <?php

                                    if( have_rows('paragraph_three') ):
                                
                                        while ( have_rows('paragraph_three') ) : the_row();
                                    ?>

                                            <div class="paragraph">
                                            
                                                <h3><?php the_sub_field('article_title'); ?></h3>
                                                <p><?php the_sub_field('article_text'); ?></p>


                                                <?php if ( get_sub_field("button_on_off") ) : ?>

                                                    <a href="<?php the_sub_field('internal_link'); ?><?php the_sub_field('external_link'); ?>" target="_blank" class="button button_grey"><?php the_sub_field('button_text'); ?></a>
                                                    
                                                <?php endif; ?>

                                                <?php if ( get_sub_field("download_on_off") ) : ?>

                                                    <a href="<?php the_sub_field('download_file'); ?>" class="button button_grey" target="_blank" download="<?php the_sub_field('download_file_name'); ?>"><?php the_sub_field('download_button_text'); ?></a>
                                                    
                                                <?php endif; ?>

                                            </div>

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

                                    if( have_rows('paragraph_four') ):
                                
                                        while ( have_rows('paragraph_four') ) : the_row();
                                    ?>

                                        <div class="paragraph">
                                            
                                            <h3><?php the_sub_field('article_title'); ?></h3>
                                            <p><?php the_sub_field('article_text'); ?></p>


                                            <?php if ( get_sub_field("button_on_off") ) : ?>

                                                <a href="<?php the_sub_field('internal_link'); ?><?php the_sub_field('external_link'); ?>" target="_blank" class="button button_grey"><?php the_sub_field('button_text'); ?></a>
                                                
                                            <?php endif; ?>

                                            <?php if ( get_sub_field("download_on_off") ) : ?>

                                                <a href="<?php the_sub_field('download_file'); ?>" class="button button_grey" target="_blank" download="<?php the_sub_field('download_file_name'); ?>"><?php the_sub_field('download_button_text'); ?></a>
                                                
                                            <?php endif; ?>

                                        </div>

                                    <?php

                                        endwhile;

                                    else :
                                    endif;

                                ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="wa_ourpeople">
            <div class="container">
                <h2 class="title inpadding"><?php the_field('our_people_title'); ?></h2>
                <p class="intro"><?php the_field('our_people_text'); ?></p>
                <div class="thumbs2">

                    <?php

                        if( have_rows('person') ):
                            $count = 1;
                            while ( have_rows('person') ) : the_row();
                        ?>
                                
                                <img class="people_rounded <?php if ($count == 1) { ?> thumb-active <?php } ?>" data-id="<?php echo $count; ?>"  src="<?php the_sub_field('photo'); ?>">

                        <?php

                            $count++; endwhile;

                        else :
                        endif;

                    ?>

<!--                     <img class="people_rounded thumb-active" data-id="1"  src="./img/people1.jpg">
                    <img class="people_rounded" data-id="2"  src="./img/people2.jpg">
                    <img class="people_rounded" data-id="3"  src="./img/people3.jpg"> -->
                </div>
                <div class="row tabs tabs_people">


                    <?php

                        if( have_rows('person') ):
                            $count = 1;
                            while ( have_rows('person') ) : the_row();
                        ?>
                                
                                <div class="row tab <?php if ($count == 1) { ?> tab-active <?php } ?>" data-tab-id="<?php echo $count; ?>">
                                    <div class="col-m-3 col-xs-12">
                                        <img class="rounded"  src="<?php the_sub_field('photo'); ?>">
                                    </div>
                                    <div class="col-m-9">
                                         <h3><?php the_sub_field('name'); ?></h3>
                                        <p class="tab_introduction"><?php the_sub_field('introduction'); ?></p>
                                        <p class="tab_thought">“<?php the_sub_field('thought'); ?>”</p>

                                        <?php if ( get_field("button_on_off") ) : ?>

                                            <a href="<?php the_field('internal_link'); ?><?php the_field('external_link'); ?>" class="button button_grey"><?php the_field('button_text'); ?></a>

                                        <?php endif; ?>

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

        <section id="wa_workingin">
            <div class="container">
                <h2 class="title"><?php the_field('questions_intro'); ?></h2>
                <p class="intro"><?php the_field('questions_text'); ?></p>
                <div class="row">
                    <div class="col-m-6 col-xs-12">
                        <div class="accordion">
                    
                    <?php $total = count( get_field('question')); ?>

                    <?php

                        if( have_rows('question') ):
                            $count = 1;
                            while ( have_rows('question') ) : the_row();
                        ?>

                            <div class="accordion-section">
                                <div class="accordion-section-title" href="#accordion-<?php echo $count; ?>"><?php the_sub_field('question_text'); ?></div>
                                <div id="accordion-<?php echo $count; ?>" class="accordion-section-content">
                                    <p><?php the_sub_field('question_answer'); ?></p>
                                </div>
                            </div>

                        <?php

                            if ( $count == ceil($total / 2) ){
                                echo "</div></div><div class='col-m-6 col-xs-12'><div class='accordion'>";
                            }

                            $count++; endwhile;

                        else :
                        endif;

                    ?>

                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section id="wa_recruitment">
            <div class="container">
                <div class="row">
                    <div class="col-m-12 col-xs-12 content">
                        <h2 class="title inpadding"><?php the_field('process_intro'); ?></h2>
                        <p class="intro"><?php the_field('process_text'); ?></p>
                        <img src="<?php the_field('process_image'); ?>" alt="">
                        
                        <?php if ( get_field("process_button_on_off") ) : ?>

                            <a href="<?php the_field('process_link_internal'); ?><?php the_field('process_link_external'); ?>" class="button button_blue"><?php the_field('process_button_text'); ?></a>

                        <?php endif; ?>

                    </div>
                </div>
            </div>
        </section>

<?php 
get_footer();
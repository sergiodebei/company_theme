<?php

get_header();

$languages = [
	'DAN' => 'Danish',
	'DEU' => 'German',
	'FRA' => 'French',
	'ENG' => 'English',
	'ITA' => 'Italian',
	'DUT' => 'Dutch',
	'NOR' => 'Norwegian',
	'POR' => 'Portuguese',
	'SPA' => 'Spanish',
	'SWE' => 'Swedish',
	'FIN' => 'Finnish'
];

?>
<section id="home_wall" class="twoborders home_wall_small">
    <div class="gallerycontainer nocarousel"
         style="background-image: url(<?php bloginfo('stylesheet_directory'); ?>/img/vacancies_header.png);">
    </div>
</section>

<?php while ( have_posts() ) : the_post(); ?>
	<?php
	$external_link = null;
	$talentpitch = get_field('TALENTPITCH');
	$vacatureid = get_field('VACATUREID');
	switch ($talentpitch) {
		case 'Cygnific Generieke TalentPitch':
			$external_link = 'https://cygnific.harver.com/vacancy_id/' . $vacatureid;
			break;
		case 'Cygnific BFC TalentPitch':
			$external_link = 'https://cygnificbfc.harver.com/vacancy_id/' . $vacatureid;
			break;
		case 'Cygnific SCM TalentPitch':
			$external_link = 'https://cygnificscm.harver.com/vacancy_id/' . $vacatureid;
			break;
		case 'Cygnific B2T TalentPitch':
			$external_link = 'https://cygnificb2t.harver.com/vacancy_id/' . $vacatureid;
			break;
	}
	?>
    <section id="home_subwall">
        <div class="container">
            <!--                 <h2 class="topbuttons">Client solutions</h2> -->
            <div class="row divff divffwithbuttons">
                <?php if($standplaats = get_field('STANDPLAATS')): ?>
                    <a href="#" class="button button_white button_withcontent">
                        <span class="button_title">City</span>
                        <span class="button_text"><?php echo esc_html($standplaats); ?></span>
                    </a>
                <?php endif; ?>

                <!--<a href="#" class="button button_white button_withcontent">
                    <span class="button_title">Company department</span>
                    <span class="button_text">Business To Consumer</span>
                </a>-->

                    <?php if(array_key_exists(get_field('LANGUAGE1'), $languages) || array_key_exists(get_field('LANGUAGE1'), $languages)): ?>
                    <a href="#" class="button button_white button_withcontent">
                        <span class="button_title">Language</span>
                        <span class="button_text">
                            <?php if(array_key_exists(get_field('LANGUAGE1'), $languages)): ?>
                                <?php echo esc_html($languages[get_field('LANGUAGE1')]); ?>
	                            <?php if(array_key_exists(get_field('LANGUAGE2'), $languages)): ?>
	                            ,
	                            <?php endif; ?>
                            <?php endif; ?>
                            <?php if(array_key_exists(get_field('LANGUAGE2'), $languages)): ?>
                                <?php echo esc_html($languages[get_field('LANGUAGE2')]); ?>
                           <?php endif; ?>
                        </span>
                    </a>
                <?php endif; ?>

                <?php if($salary = get_field('SALARY')): ?>
                    <a href="#" class="button button_white button_withcontent">
                        <span class="button_title">Salary</span>
                        <span class="button_text"><?php echo esc_html($salary); ?></span>
                    </a>
                <?php endif; ?>

                <?php if($aantaluren = get_field('AANTALUREN')): ?>
                    <a href="#" class="button button_white button_withcontent">
                        <span class="button_title">Hour per week</span>
                        <span class="button_text"><?php echo esc_html($aantaluren); ?></span>
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <section id="vs_introduction">
        <div class="container">
			<a id="vacancy-back" href="<?php echo get_post_type_archive_link( 'vacancies' ); ?>">
				<img id="vacancy-back-button" src="<?php echo get_template_directory_uri(); ?>/img/vacancies-back-button.png" width="40" height="40" alt="Back" />
			</a>
            <h2 class="title"><?php echo esc_html(get_field('NAAM')) ?></h2>
            <?php if($introductietekst = get_field('INTRODUCTIETEKST')): ?>
                <p class="intro"><?php echo esc_html(strip_tags($introductietekst)); ?></p>
            <?php endif; ?>

			<?php if(is_null($external_link)): ?>
				<a hr ef="#" class="button button_blue applynow">Apply now</a>
			<?php else: ?>
				<a href="<?php echo $external_link; ?>" class="button button_blue">Apply now</a>
			<?php endif; ?>
        </div>
    </section>

    <section id="vs_job">
        <div class="container">
            <div class="row">
                <div class="col-m-12 col-xs-12">
					<div id="vacancydetaildata">
	                    <?php echo get_field('VEREISTEOPLEIDING'); ?>
						<?php /*
	                    <div id="contact_into" class="job_part">
	                        <h3>Contact information</h3>
	                        <p>
	                            If you are ready to take this challenge, please click on the link below. <br/>
	                            <?php if ($contactnaam = get_field('REACTIENAAMCONTACTPERSOON')): ?>
	                                For questions or more information you can contact <?php echo esc_html($contactnaam); ?>
	                                <?php if ($contactfunctie = get_field('REACTIEFUNCTIECONTACTPERSOON')): ?>
	                                    , <?php echo esc_html($contactfunctie); ?>
	                                <?php endif; ?>.
	                            <?php endif; ?>
	                        </p>
	                    </div>
						*/ ?>

	                    <div>
							<?php if(is_null($external_link)): ?>
								<a href="#" class="button button_blue applynow">Apply now</a>
							<?php else: ?>
								<a href="<?php echo $external_link; ?>" class="button button_blue">Apply now</a>
							<?php endif; ?>
						</div>
	                    <?php if($contactnaam = get_field('REACTIENAAMCONTACTPERSOON')): ?>
	                        <div class="contactperson twoborders">
	                            <div class="row">
	                                <div class="col-m-3">
										<?php $filename = sanitize_title($contactnaam) . '.jpg'; ?>
										<!-- expected file: <?php echo $filename; ?> -->
										<?php if (file_exists(__DIR__ . '/img/' . $filename)): ?>
											<img class="cp_rounded" src="<?php bloginfo('stylesheet_directory'); ?>/img/<?php echo $filename; ?>">
										<?php endif ?>
	                                </div>
	                                <div class="col-m-9">
	                                    <p class="cp_for">Contact for this vacancy:</p>
	                                    <p class="cp_name"><?php echo esc_html($contactnaam); ?></p>

	                                    <?php if ($contactemail = get_field('REACTIEEMAIL')): ?>
	                                        <div class="cp_mail">
	                                            <svg viewBox="0 0 477.16 477.07">
	                                                <g filter="">
	                                                    <use xlink:href="#mail"></use>
	                                                </g>
	                                            </svg>
	                                            <a href="mailto:<?php echo esc_html($contactemail); ?>">
	                                                <?php echo esc_html($contactemail); ?>
	                                            </a>
	                                        </div>
	                                    <?php endif; ?>

	                                    <?php if($contacttelefoon = get_field('REACTIETELEFOON')): ?>
	                                        <div class="cp_phone">
	                                            <svg viewBox="0 0 477.16 477.07">
	                                                <g filter="">
	                                                    <use xlink:href="#phone"></use>
	                                                </g>
	                                            </svg>
	                                            <a href="tel:+<?php echo esc_html($contacttelefoon); ?>">
	                                                <?php echo esc_html($contacttelefoon); ?>
	                                            </a>
	                                        </div>
	                                    <?php endif; ?>
	                                </div>
	                            </div>
	                        </div>
	                    <?php endif; ?>
					</div>
                </div>
            </div>
        </div>
    </section>

    <section id="vs_interested">
        <div class="container">
            <div class="row">
                <div class="col-m-12 col-xs-12 content">
                    <p>Interested in the job of</p>
                    <h2 class="title"><?php echo esc_html(get_field('NAAM')); ?>?</h2>
                    <div>
						<a href="#" class="button button_blue applynow">Apply now</a>
					</div>
                </div>
            </div>
        </div>
        <div id="applynowform" class="container" style="display: none">
            <div class="row">
                <div class="col-m-12 col-xs-12 content">
                    <h2 class="title">Application</h2>
                    <?php echo do_shortcode("[gravityform id=1 title=false description=false ajax=true]"); ?>
                </div>
            </div>
        </div>
    </section>

    <script type="text/javascript">
        jQuery(document).ready(function() {
           $(".applynow").click(function(e) {
               e.preventDefault();

               $("#vs_interested div.container").hide();
               $("#applynowform").show();

               $('html, body').animate({
                   scrollTop: $("#applynowform").offset().top - 200
               }, 1000);
           });
		   
		   $("#field_1_5 .gfield_label").append(" <a href=\"http://www.cygnific.com/privacy-statement/\" target=\"_blank\">Read our privacy statement.</a>");
        });
    </script>
<?php endwhile; ?>

<?php get_footer(); ?>
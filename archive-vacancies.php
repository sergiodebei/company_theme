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
<section id="va_vacancies">
    <div class="container">
        <h2 class="title">vacancies at Cygnific</h2>
        <form id="filter-form" action="" method="GET">
            <!-- Search field -->
            <div class="thefield">
                <input name="NAAM"
                       class=""
                       type="text"
                       placeholder="Search..."
                       <?php if(isset($_GET['naam']) && $_GET['NAAM']) { echo 'value="'.esc_html($_GET['NAAM']) . '"'; }; ?>>
            </div>

            <!-- City field -->
            <div class="thefield checkboxes">
                <div class="select-styled">City</div>
                <ul class="select-options">
                    <?php foreach(get_meta_values('STANDPLAATS', 'vacancies') as $value): ?>
                        <li>
                            <label class="control control--checkbox">
                                <?php echo esc_html($value); ?>
                                <input type="checkbox"
                                       name="STANDPLAATS[]"
                                       value="<?php echo esc_html($value); ?>"
                                       <?php if(isset($_GET['STANDPLAATS']) && in_array($value, $_GET['STANDPLAATS'])) { echo ' checked'; };?>>
                                <div class="control__indicator"></div>
                            </label>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <!-- Language field -->
            <div class="thefield checkboxes">
                <div class="select-styled">Language</div>
                <ul class="select-options">
                    <?php foreach($languages as $code => $language): ?>
                         <li>
                            <label class="control control--checkbox">
                                <?php echo esc_html($language); ?>
                                <input type="checkbox"
                                       name="LANGUAGE1[]"
                                       value="<?php echo $code; ?>"
                                       <?php if(isset($_GET['LANGUAGE1']) && is_array($_GET['LANGUAGE1']) && in_array($code, $_GET['LANGUAGE1'])) { echo ' checked'; };?>>
                                <div class="control__indicator"></div>
                           </label>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <!-- Department field -->
            <div class="thefield checkboxes">
                <div class="select-styled">Department</div>
                <ul class="select-options">
                    <?php foreach(get_meta_values('DEPARTMENT', 'vacancies') as $value): ?>
                        <li>
                            <label class="control control--checkbox">
                                <?php echo esc_html($value); ?>
                                <input type="checkbox"
                                       name="DEPARTMENT[]"
                                       value="<?php echo esc_html($value); ?>"
                                       <?php if(isset($_GET['DEPARTMENT']) && in_array($value, $_GET['DEPARTMENT'])) { echo ' checked'; };?>>
                                <div class="control__indicator"></div>
                            </label>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <!-- Submit button -->
            <div class="thefield tosubmit">
                <button type="submit" class="button button_grey">
                    Find vacancy
                    <svg viewBox="0 0 383.9 383.9">
                        <g filter="">
                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#search"></use>
                        </g>
                    </svg>
                </button>
            </div>
        </form>
        <p class="intro">
			<?php if (!have_posts() && ($_GET['NAAM']||$_GET['STANDPLAATS']||$_GET['LANGUAGE1']||$_GET['DEPARTMENT'])): ?>
				<p id="vacancies_noresults">We currently have no vacancies that match your search criteria. Still want to share your interest in working at Cygnific? You can always send in your application via our <a href="<?php echo get_permalink( get_page_by_path('general-vacancy', OBJECT, 'vacancies')); ?>" target="_self">General Vacancy</a>. We will then approach you as soon as a suitable position becomes vacant.</p>
			<?php else: ?>
            We currently have <?php echo wp_count_posts('vacancies')->publish; ?> jobs available. Interested in working at Cygnific? Apply now, and we will contact you about your application as soon as we can. Want to find out a bit more about what working at Cygnific means first? Just take your time and get to know us <a href="<?php echo get_page_link(17); ?>">here</a>. Did not see a vacancy that matches your language skills? We handle customer service in Dutch, English, German, French, Italian, Spanish, Portuguese, Norwegian, Swedish, Danish, Finnish, Hebrew, Turkish and Greek. If you master either of these languages, we strongly encourage you to keep a close eye on our vacancies page to make sure you’re up-to-date whenever a new vacancy comes up. We look forward to hearing from you!
			<?php endif; ?>
        </p>
    </div>
</section>
<section id="va_offers">
    <div class="container">
        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
            <div class="offer">
                <div class="offer_description">
                    <div class="offer_title"><a href="<?php the_permalink() ?>"><?php echo get_field('NAAM'); ?></a></div>
                    <ul class="offer_details">
                        <?php if($standplaats = get_field('STANDPLAATS')): ?>
                            <li><?php echo $standplaats; ?></li>
                        <?php endif; ?>
                        <?php if(array_key_exists(get_field('LANGUAGE1'), $languages) || array_key_exists(get_field('LANGUAGE1'), $languages)): ?>
                        <li>
                            <?php if(array_key_exists(get_field('LANGUAGE1'), $languages)): ?>
                                <?php echo esc_html($languages[get_field('LANGUAGE1')]); ?>
	                            <?php if(array_key_exists(get_field('LANGUAGE2'), $languages)): ?>
	                            ,
	                            <?php endif; ?>
                            <?php endif; ?>
                            <?php if(array_key_exists(get_field('LANGUAGE2'), $languages)): ?>
                                <?php echo esc_html($languages[get_field('LANGUAGE2')]); ?>
                           <?php endif; ?>
                        </li>
                        <?php endif; ?>

                        <?php if($department = get_field('DEPARTMENT')): ?>
                            <li><?php echo $department; ?></li>
                        <?php endif; ?>

                        <?php if($aantaluren = get_field('AANTALUREN')): ?>
                            <li><?php echo $aantaluren; ?> uur</li>
                        <?php endif; ?>
                    </ul>
                </div>
                <a href="<?php the_permalink() ?>" class="button button_grey">Read more</a>
            </div>
        <?php endwhile; endif; ?>
		
        <!--<a href="" class="button button_grey button_more">Load more vacancies</a>-->
    </div>
</section>

<?php get_footer(); ?>

<div class="row rowflex">
	<?php
	$args = [
		'numberposts' => 3,
		'orderby'     => 'post_date',
		'order'       => 'DESC',
		'post_type'   => 'vacancies',
		'post_status' => 'publish',
	];
	$recent_posts = wp_get_recent_posts($args, ARRAY_A);
	
	foreach ($recent_posts as $vacancy) { ?>
        <a href="<?php echo $vacancy['guid']; ?>" class="col-m-4 col-xs-12 col_padding">
            <div class="area_title">
                <p><?php echo get_field('NAAM', $vacancy['ID']); ?></p>
            </div> 
            <div class="area_text">
                <p><?php echo wp_trim_words(strip_tags(get_field('INTRODUCTIETEKST', $vacancy['ID'])), 20); ?></p>
                <p class="apply">Apply now!</p>
            </div> 
        </a>
	<?php } ?>
</div>

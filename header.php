<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link www.cygnific.com
 * @package Cygnific Theme
 */

?><!doctype html>
<html class="no-js" lang="">
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Cygnific <?php if(!is_front_page()){ echo html_entity_decode("&#45; " .get_the_title()); } ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="<?php bloginfo( 'template_directory' ); ?>/img/favicon.ico" />   

        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">

        <script type="text/javascript">
            var templateUrl = '<?= get_bloginfo("template_url"); ?>';
        </script>

        <?php wp_head(); ?>
		<!-- Piwik -->
		<script type="text/javascript">
			var _paq = _paq || [];
			_paq.push(["setDomains", ["*.www.cygnific.com"]]);
			_paq.push(['trackPageView']);
			_paq.push(['enableLinkTracking']);
			(function() {
				var u="//geminidesign.piwikpro.com/";
				_paq.push(['setTrackerUrl', u+'piwik.php']);
				_paq.push(['setSiteId', 35]);
				var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
				g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
			})();
		</script>
		<noscript><p><img src="//geminidesign.piwikpro.com/piwik.php?idsite=35" style="border:0;" alt="" /></p></noscript>
		<!-- End Piwik Code -->
    </head>

    <body>

    <header class="fixheader">
        <div class="container">
            <div class="row withmargin">
                <div class="col-m-3 col-xs-12">
                    <div class="thebuttonscontainer">

                        <div class="" id="menu_mobile">
                            <span class="button__top"></span>
                            <span class="button__middle_1"></span>
                            <span class="button__middle_2"></span>
                            <span class="button__bottom"></span>
                        </div>

                        <a href="<?php bloginfo('url'); ?>" class="logo"><img src="<?php bloginfo( 'template_directory' ); ?>/img/cygnific_logo.svg" alt=""></a>

                        <a href="#" class="" id="search_mobile">
                            <svg viewBox="0 0 383.9 383.9">
                                <g filter="">
                                    <use xlink:href="#search"></use>
                                </g>
                            </svg>
                        </a> 
                    </div>
                </div>
                <div class="col-m-9">
                    <div class="row">
                        <div class="col-m-12">
                            <div class="icon-container tohide">

                                <div id="searchoverlay">
                                    <div class="sb-search">

                                        <form role="search" method="get" class="search-form" action="<?php bloginfo('url'); ?>">
                                            <input type="search" class="sb-search-input search-field" placeholder="Search here…" name="s" onkeyup="buttonUp();"> 
                                            <input type="submit" class="sb-search-submit search-submit" value="" >
                                            <span class="sb-icon-search">
                                                <svg viewBox="0 0 383.9 383.9">
                                                    <g filter="">
                                                        <use xlink:href="#search"></use>
                                                    </g>
                                                </svg>
                                            </span>
                                        </form>

                                        
<!-- 
                                        <form role="search" method="get" action="http://any1.eu/cygnific/">
                                            <input class="sb-search-input" placeholder="search here.." type="search" value="" name="s" onkeyup="buttonUp();">
                                            <input class="sb-search-submit" type="submit"  value="">
                                            <span class="sb-icon-search">
                                                <svg viewBox="0 0 383.9 383.9">
                                                    <g filter="">
                                                        <use xlink:href="#search"></use>
                                                    </g>
                                                </svg>
                                            </span>
                                        </form> -->
                                    </div>
                                </div>

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
                        </div>
                    </div>
                    <div class="row navoverlay">

                            ​<?php wp_nav_menu( array( 'container'=> false, 'theme_location' => 'primary','menu_class' => 'nav tohide') ); ?>​
                                                 <!--            <ul class="nav tohide">
                    <li class="active"><a href="./index.html">Home</a></li>
                            <li><a href="./about.html">About</a></li>
                            <li><a href="./workingat.html">working at</a></li>
                            <li><a href="./clientsolutions.html">Client solutions</a></li>
                            <li><a href="./leansixsigma.html">Lean Six Sigma</a></li>
                            <li><a href="./news.html">News</a></li>
                            <li><a href="./contact.html">Contact</a></li>
                            <li><a href="" class="button button_blue">Vacancies</a></li> 
                             </ul>-->
                       
                    </div>
                </div>
            </div>
        </div>
        <progress value="0">
            <div class="progress-container">
                <span class="progress-bar"></span>
            </div>
        </progress>     
    </header>

    <main <?php body_class(); ?>>

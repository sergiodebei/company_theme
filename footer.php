<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link www.cygnific.com
 * @package Cygnific Theme
 */

?>

    <div class="flying">
        <a href="#0" class="cd cd__top">Top</a>
    </div>

    </main>

    <footer>
        <img src="<?php bloginfo( 'template_directory' ); ?>/img/city.png" alt="" class="centerimage">
        <div class="footercontainer">
            <div class="container">
                <div class="row rowflex">
                    <div class="col-m-4 col-xs-12">
                        <a href="<?php bloginfo('url'); ?>" class="logo"><img src="<?php bloginfo( 'template_directory' ); ?>/img/cygnific_logo_white.svg" alt=""></a>
                        <p class="copyright">© Copyright <?php echo date("Y"); ?> Cygnific </p>
                    </div>
                    <div class="col-m-4 col-xs-12 levels">
<!--                         <p class="quicklink">Quick links</p> -->

                        <?php wp_nav_menu( array( 'container'=> false, 'theme_location' => 'secondary','menu_class' => 'dash') ); ?>​

                       <!--    <ul class="dash">
                          <li><a href="">About Cygnific</a></li>
                            <li>Working in the Netherlands</li>
                        </ul> -->
                        <div class="icon-container">

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
                    <div class="col-m-4 col-xs-12 levels">
                        <p class="quicklink">Cygnific B.V.</p>
                        <ul class="">
                            <li>PO Box 69359 </li>
                            <li>1060 CK Amsterdam</li>
                        </ul>
                        <ul class="">
                            <li>Office: <a href="tel:+31(0)20 201 3000">+31(0)20 201 3000</a></li>
                            <li>Recruitment: <a href="tel:+31(0)20 201 3137">+31(0)20 201 3137</a></li>
                        </ul>
                    </div>
                </div>
            </div> 
        </div>
    </footer>

 	<!-- ICONS -->
    <svg id="svg-source" height="0" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="display: none;">

        <g id="arrowleft">
            <polygon points="29.1,60 0,30 29.1,0 30,1.5 2.4,30 30,58.4 "/>
        </g>

        <g id="arrowright">
            <polygon points="0,58.4 27.6,30 0,1.5 0.9,0 30,30 0.9,60 "/>
        </g>
        
        <g id="search">
            <path class="st0" d="M321.3,288.5L258.8,226c10.6-16.9,16.8-36.8,16.8-58.2c0-60.6-49.1-109.7-109.7-109.7
                S56.2,107.2,56.2,167.8s49.1,109.7,109.7,109.7c23.3,0,44.9-7.3,62.6-19.7l61.7,61.7c4.3,4.3,9.9,6.4,15.5,6.4s11.2-2.1,15.5-6.4
                C329.8,310.9,329.8,297,321.3,288.5z M165.9,241.9c-40.9,0-74.1-33.2-74.1-74.1s33.2-74.1,74.1-74.1s74.1,33.2,74.1,74.1
                S206.9,241.9,165.9,241.9z"/>
        </g>
        <g id="linkedin">
            <path class="st0" d="M124.2,310.6V152.1H73.3v158.6H124.2L124.2,310.6z M100.6,128.1c17,0,27.5-12.1,27.5-27.3
                c-0.3-15.5-10.6-27.3-27.2-27.3s-27.5,11.9-27.5,27.3c0,15.2,10.6,27.3,26.9,27.3H100.6L100.6,128.1z"/>
            <path class="st0" d="M251.9,148.4c-27,0-38.6,15.2-46,25.8v-22.1h-51v158.5h51v-90.3c0-4.6,0.4-9.3,1.8-12.5
                c3.7-9.3,12-18.8,26.1-18.8c18.4,0,25.9,14.2,25.9,34.9v86.7h51V218C310.6,170.5,285.4,148.4,251.9,148.4z"/>
        </g>
        <g id="facebook">
            <path class="st0" d="M213.9,340.3V208.5h43.9l11-54.9h-54.9v-22c0-22,11-33,33-33h22V43.7c-11,0-24.6,0-43.9,0
                c-40.4,0-65.9,31.6-65.9,76.9v33h-43.9v54.9H159v131.8H213.9z"/>
        </g>
        <g id="twitter">
            <path class="st0" d="M325.5,110.7c-9.8,4.3-20.6,7.1-31.5,8.7c11.4-6.5,20.1-17.4,23.9-30.4c-10.9,6.5-22.2,10.9-34.7,13.6
                c-9.8-10.9-24.4-17.4-40.1-17.4c-30.4,0-54.8,24.4-54.8,54.8c0,4.3,0.5,8.7,1.6,12.5C144.3,149.7,104.1,128,77,94.9
                c-4.9,8.1-7.6,17.4-7.6,27.7c0,19,9.8,35.8,24.4,45.6c-9.2-0.5-17.4-2.7-25-7.1v0.5c0,26.6,19,48.8,43.9,53.7
                c-4.3,1.1-9.2,2.2-14.6,2.2c-3.8,0-7.1-0.5-10.3-1.1c7.1,21.7,27.1,37.4,51,38c-17.9,14.6-41.8,23.9-67.3,23.9c-4.3,0-8.7,0-13-0.5
                c24.4,15.7,53.2,24.4,84.1,24.4c100.9,0,156.2-83.5,156.2-156.2c0-2.2,0-4.9,0-7.1C309.2,131.3,318.4,121.5,325.5,110.7z"/>
        </g>
        <g id="phone">
            <path d="M475,380.32l-2.37-7.16c-5.62-16.72-24.06-34.16-41-38.75l-62.69-17.12c-17-4.62-41.25,1.59-53.69,14L292.57,354A240.66,240.66,0,0,1,123.21,184.63l22.69-22.69c12.44-12.44,18.66-36.66,14-53.66L142.84,45.56c-4.62-17-22.09-35.41-38.78-41L96.9,2.19c-16.72-5.56-40.56.06-53,12.5L10,48.66C3.9,54.69,0,71.94,0,72A400.55,400.55,0,0,0,404.2,477.1c.56,0,18.31-3.81,24.38-9.85l33.94-33.94C474.95,420.88,480.57,397,475,380.32Z" transform="translate(0 -0.04)"/>
        </g>
        <g id="mail">
            <path d="M476.4,358.83V118.33c0-25.39-18.71-46.1-42.09-46.1H42.83C19.45,72.23.74,92.94.74,118.33v240.5c0,25.39,18.71,46.1,42.09,46.1H434.31C457.69,404.92,477.07,384.21,476.4,358.83ZM435.89,113.76,238.57,228.56,45.4,113.65H434.31A11.71,11.71,0,0,1,435.89,113.76Zm-1.58,251.08H42.83c-5.34,0-8-3.34-8-5.34V152.05L237.9,273.32,442.33,154V359.5C442.33,361.5,439,364.84,434.31,364.84Z" transform="translate(0 -0.04)"/>
        </g>

    </svg>
    <!-- ICONS -->

	<?php wp_footer(); ?>
    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->


<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-96355005-1', 'auto');
    ga('send', 'pageview');
</script>

	</body>
</html>
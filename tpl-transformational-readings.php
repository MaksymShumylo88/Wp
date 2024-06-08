<?php
/*Template Name: Transformational Readings Page*/
get_header();
?>

<section class="hsection">
    <div class="hsection-inner psection-inner">
        <div class="container">
            <div class="row">
                <div class="col-8">
                    <p class="readings-top-description"><?php the_field('top_description_text') ?></p>
                </div>
                <div class="col-4" style="text-align: center; margin-top:1.5rem">
                    <img src="<?php the_field('top_description_image') ?>" alt="Paul Image" width="90%">
                </div>
            </div>
        </div>
        <div style='background-image:url("<?php the_field('schedule_reading_background') ?>");' class="schedule-reading-div">
            <div style="padding: 14rem 0px 1rem 0px">
                <p class="schedule-reading-description"><?php the_field('schedule_reading_description') ?></p>
                <a href="<?php the_field('schedule_reading_button_url') ?>">
                    <div style='background-image:url("<?php the_field('schedule_reading_button_image') ?>");' class="schedule-reading-button">
                        <span style="color:white; font-size: 21px; text-align:center"><?php the_field('schedule_reading_button_text') ?></span>
                        <!-- <img src="<?php //the_field('schedule_reading_nav_icon') ?>" alt="Button Nav Icon" width="32px"> -->
                    </div>
                </a>
            </div>
        </div>
        <div class="container" style="margin-top: 5rem">
            <div class="sh-des">
                <h3 class="sh-title"><?php echo get_field('shankara_master_title'); ?></h3>
                <p class="sh-sub-title"><?php echo get_field('shankara_master_sub_title'); ?></p>
            </div>
            <?php if (have_rows('shankara_master_list')) ?>
                <?php while (have_rows('shankara_master_list')): the_row(); ?>
                    <div class="sh-list row">
                        <div class="sh-list-left" style='background-image:url("<?php echo get_sub_field('shankara_left_image')['url'] ?>");'>
                            <p><?php echo get_sub_field('shankara_left_image_description'); ?></p>
                        </div>
                        <div class="sh-list-right" style='background-image:url("<?php echo get_sub_field('shankara_right_image')['url']; ?>");'>
                            <p><?php echo get_sub_field('shankara_right_image_description'); ?></p>
                        </div>
                    </div>
                <?php endwhile; ?>
        </div>
    </div>
</section>
<section class="hsection hsection-testi" style="margin-top: 3rem">
    <div class="hsection-inner" style='background-image: url("<?php the_field('testi_bg', 'option'); ?>");'>
        <div class="container">
        
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <div class="st-sprtr">
                            <div class="stsprtr-in"></div>
                        </div>
                        <h2><?php the_field('testi_title', 'option'); ?></h2>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-12">
                    <div class="htesti-wrap">
                   		<?php echo do_shortcode('[gs_testimonial id=1]') ?>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>
<section class="hsection">
    <div class="hsection-inner psection-inner">
        <div class="container">
            <div class="row" style="margin-top: 3rem;">
                <?php if( have_rows('grid') ):
                while ( have_rows('grid') ) : the_row(); ?>
                    <div class="col-6">
                        <div style='background-image:url("<?php the_sub_field('background'); ?>");' class="transformational-schedule-grid">
                            <img src="<?php the_sub_field('avatar') ?>" alt="Transformational Readings Avatar" width="20%">
                            <p><?php the_sub_field('description') ?></p>
                        </div>
                    </div>
                <?php endwhile; endif; ?>
            </div>
            <div>
                <a href="<?php the_field('schedule_reading_button_url') ?>">
                    <div style='background-image:url("<?php the_field('schedule_reading_button_image') ?>");' class="schedule-reading-button">
                        <span style="color:white; font-size: 16px; text-align:center"><?php the_field('schedule_reading_button_text') ?></span>
                        <img src="<?php the_field('schedule_reading_nav_icon') ?>" alt="Button Nav Icon" width="32px">
                    </div>
                </a>
            </div>
        </div>
        <div style='background-image:url("<?php the_field('what_happens_background') ?>");' class="what-happens-div">
            <div style="padding: 1rem 0px 1rem 0px">
                <img src="<?php the_field('what_happens_avatar') ?>">
                <p class="why-programs-title"><?php the_field('what_happens_title') ?></p>
                <p class="schedule-reading-description"><?php the_field('what_happens_description') ?></p>
            </div>
        </div>
    </div>
</section>
<section class="psection psection-joinour">
    <div class="psection-inner">
        <div class="container">

            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <div class="st-sprtr">
                            <div class="stsprtr-in"></div>
                        </div>
                        <h2><?php the_field('subscription_title', 'option'); ?></h2>
                        <p><?php the_field('subscription_text', 'option'); ?></p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="pjoinour-form">
                        <div class="pjoinourform-in dark-section">

                            <div class="signupnews-btn">
                                <a class="popmake-12950" href="javascript:void(0)">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/signupnews-btn.png" alt="">
                                </a>
                            </div>
                            <?php /*?><div class="pjoinourform-btns">
                                <div class="pjoinourformbtns-in">
                                    <a class="popmake-12950" href="javascript:void(0)">CLICK TO RECEIVE NEWSLETTERS & LOVE!</a>
                                </div>
                            </div><?php */?>
                            <?php echo do_shortcode('[gravityform id="3" title="false" description="false" ajax="true"]') ?>
                            <?php /*?><div class="pjoinourform-text">
                                <?php the_field('subscription_form_text', 'option'); ?>
                            </div><?php */?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

</div><!-- #content -->

	<div class="sitefooter-wrap">
        <footer id="colophon" class="site-footer" role="contentinfo">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="fcol fcol-logo">
                            <div class="flogo">
                                <img src="<?php echo site_url(); ?>/wp-content/uploads/2020/10/logo-white.png" alt="" />
                            </div>
                        </div>
                        <div class="fcol fcol-text">

                            <div class="social-menus">
                                <ul>
                                    <?php if (get_field('facebook_url', 'option') == NULL || get_field('facebook_url', 'option') == ""){ ?>
                                    <?php }else{ ?>
                                        <li>
                                            <a target="_blank" href="<?php the_field('facebook_url', 'option'); ?>">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                    <?php } ?>

                                    <?php if (get_field('instagram_url', 'option') == NULL || get_field('instagram_url', 'option') == ""){ ?>
                                    <?php }else{ ?>
                                        <li>
                                            <a target="_blank" href="<?php the_field('instagram_url', 'option'); ?>">
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                        </li>
                                    <?php } ?>

                                    <?php if (get_field('youtube_url', 'option') == NULL || get_field('youtube_url', 'option') == ""){ ?>
									<?php }else{ ?>
                                        <li>
                                            <a target="_blank" href="<?php the_field('youtube_url', 'option'); ?>">
                                                <i class="fa fa-youtube-play"></i>
                                            </a>
                                        </li>
                                    <?php } ?>

                                    <?php if (get_field('linkedin_url', 'option') == NULL || get_field('linkedin_url', 'option') == ""){ ?>
                                    <?php }else{ ?>
                                        <li>
                                            <a target="_blank" href="<?php the_field('linkedin_url', 'option'); ?>">
                                                <i class="fa fa-linkedin"></i>
                                            </a>
                                        </li>
                                    <?php } ?>

                                    <?php if (get_field('twitter_url', 'option') == NULL || get_field('twitter_url', 'option') == ""){ ?>
                                    <?php }else{ ?>
                                        <li>
                                            <a target="_blank" href="<?php the_field('twitter_url', 'option'); ?>">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                    <?php } ?>

                                </ul>
                            </div>

                            <div class="fmenu">
                                <nav class="footer-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Menu', 'twentyseventeen' ); ?>">
                                    <?php
                                        wp_nav_menu(
                                            array(
                                                'theme_location' => 'footer',
                                                'menu_class'     => 'footer-menu',
                                                'depth'          => 1,
                                            )
                                        );
                                    ?>
                                </nav><!-- .footer-navigation -->
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </footer><!-- #colophon -->
    </div>

	</div><!-- .site-content-contain -->
</div><!-- #page -->


<?php $current_url="https://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>

<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/jquery.bxslider.min.js"></script>

<script type="text/javascript">
	if (screen && screen.width <= 1024) {
		jQuery(document).ready(function(){
			jQuery('.hposts .bxslider').bxSlider({
				touchEnabled: true
			});
		});
	}
</script>

<script type="text/javascript">
	jQuery(document).ready(function(){
		jQuery('.hposts .bxslider').bxSlider({
			minSlides: 4,
			maxSlides: 4,
			moveSlides: 0,
			touchEnabled: false
		});
	});
</script>

<script type="text/javascript">
	jQuery(".hsearch-btn").click(function(){
		jQuery(".header-form").toggleClass("search-open");
	});
	jQuery(document).click(function(e) {
		if (jQuery(e.target).is(".hsearch-btn, .header-form, .search_field"))  return false;
		else jQuery(".header-form").removeClass("search-open");
	});
</script>

<script type="text/javascript">
	jQuery(document).ready(function(){
		jQuery('.single-post article p, .woocommerce-product-details__short-description p').each(function(){
			var value = jQuery.trim(jQuery(this).html());
			if(value == '&nbsp;'){
				jQuery(this).remove();
			}
		});
	});
</script>

<script type="text/javascript">
	jQuery(document).ajaxComplete(function() {
		jQuery('.woocommerce-form__label a.arrow').click(function () {
			jQuery('.consent-and-waiver').slideToggle('2000', function () {
				// Animation complete.
			});
			jQuery(this).toggleClass('active');
		});
	});
</script>

<script type="text/javascript">
	jQuery(document).ready(function(){

      //  alert('dfsdf');
		jQuery("ul.hlogin-menu > li").hover(function(){
			jQuery(".ht-login ul.sub-menu").addClass("active");
		}, function(){
			jQuery(".ht-login ul.sub-menu").removeClass("active");
		});

        jQuery("#custom_enroll_button").click(function(){

             alert('Please wait while we proceed your order');
            // setTimeout("pageRedirect()", 10000);



            var delay = 1000;
            var url = "<?php echo $current_url; ?>";

            setTimeout(function(){ window.location = url; }, delay);


          //  window.location.replace("http://pw.testserver.co.in/waiting/");

        });



        jQuery("button[name = 'apply_coupon']").click(function(){
                setTimeout(location.reload.bind(location), 2000);
        });


	});
</script>

<?php wp_footer(); ?>

</body>
</html>


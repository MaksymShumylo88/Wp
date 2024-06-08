<?php
/*Template Name: Webiner Page*/
get_header();
?>

<section class="hsection">
	<div class="hsection-inner">
		<div style='background-image:url("<?php the_field('join_background') ?>"); padding-top: 2rem' class="video-summary">
			<div class="container">
				<div class="row">
					<div class="col-6">
					    <img src="<?php the_field('join_me_with_arrow') ?>" alt="Join With Paul" class="webiner-join-paul-arrow">
						<p class="webiner-join-paul-name"><?php the_field('join_paul_name') ?></p>
						<p class="webiner-join-description"><?php the_field('join_description') ?></p>
						<div style='background-image:url("<?php the_field('join_button_background') ?>");' class="webiner-join-button webiner-join-button-margin">
							<span style="color:white; font-size: 20px; text-align:center"><?php the_field('join_button_label') ?></span>
							<img src="<?php the_field('join_button_nav_icon') ?>" alt="Button Nav Icon" width="32px">
						</div>
					</div>
					<div class="col-6">
						<img src="<?php the_field('join_right_image') ?>" alt="Button Nav Icon">
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="hsection">
	<div class="hsection-inner">
		<div style='background-image:url("<?php the_field('are_you_ready_background') ?>");' class="video-summary">
			<div class="container">
				<p class="personality-questions-title"><?php the_field('are_you_ready_description') ?></p>
			</div>
		</div>
	</div>
</section>
<section class="hsection">
	<div class="hsection-inner">
		<div class="container work-with-me-div">
			<div class="row">
				<div class="col-2"></div>
				<div class="col-2">
					<img src="<?php the_field('over_course_avatar') ?>" class="webinar-over-course-avatar">
				</div>
				<div class="col-6">
					<p class="over-course-title"><?php the_field('over_course_title') ?></p>
				</div>
			</div>
			<div class="row" style="margin-top: 1rem">
				<?php if( have_rows('over_course_grid') ):
				while ( have_rows('over_course_grid') ) : the_row(); ?>
					<div class="col-6">
						<div style='background-image:url("<?php the_sub_field('background'); ?>");' class="webiner-over-course-individual">
							<p class="webiner-over-course-title"><?php the_sub_field('title') ?></p>
						</div>
					</div>
				<?php endwhile; endif; ?>
			</div>
			<div style='background-image:url("<?php the_field('join_button_background') ?>");' class="webiner-join-button webiner-course-button-margin">
				<span style="color:white; font-size: 20px; text-align:center"><?php the_field('join_button_label') ?></span>
				<img src="<?php the_field('join_button_nav_icon') ?>" alt="Button Nav Icon" width="32px">
			</div>
		</div>
	</div>
</section>
<section class="hsection">
	<div class="hsection-inner">
		<div style='background-image:url("<?php the_field('mentor_guide_background') ?>");' class="with-bg-div">
			<div class="container">
				<p class="mentor-guide-title"><?php the_field('mentor_guide_title') ?></p>
				<div class="row">
					<div class="col-7">
						<p class="mentor-guide-description"><?php the_field('mentor_guide_description') ?></p>
					</div>
					<div class="col-5">
						<img src="<?php the_field('mentor_guide_image') ?>" alt="Paul mentor guide" class="mentor-guide-photo">
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="hsection">
	<div class="hsection-inner">
		<div style='background-image:url("<?php the_field('gain_access_background') ?>");' class="video-summary">
			<div class="container" style="text-align:center">
				<img src="<?php the_field('gain_access_avatar') ?>" class="embark-top-avatar">
				<p class="gain-access-title"><?php the_field('gain_access_title') ?></P>
				<?php if( have_rows('gain_access_grid') ):
				while ( have_rows('gain_access_grid') ) : the_row(); ?>
					<div class="embark-grid-item">
						<img src="<?php the_sub_field('avatar') ?>" width="100" height="100">
						<h3 class="gain-access-description-individual"><?php the_sub_field('description') ?></h3>
					</div>
				<?php endwhile; endif; ?>
			</div>
		</div>
	</div>
</section>
<section class="hsection">
	<div class="hsection-inner">
		<div style='background-image:url("<?php the_field('reserve_background') ?>");' class="video-summary">
			<div class="container" style="text-align:center">
				<p class="webiner-reserve-description"><?php the_field('reserve_description') ?></p>
				<p class="webiner-reserve-title"><?php the_field('reserve_title') ?></p>
				<p class="webiner-reserve-time-text"><?php the_field('reserve_time_text') ?></p>
				<div style='background-image:url("<?php the_field('reserve_signup_button_background') ?>"); margin-top: 3rem;' class="webiner-join-button">
					<span style="color:white; font-size: 20px; text-align:center"><?php the_field('reserve_signup_button_label') ?></span>
					<img src="<?php the_field('reserve_signup_nav_icon') ?>" alt="Button Nav Icon" width="32px">
				</div>
				<p class="webiner-reserve-signup-text"><?php the_field('reserve_signup_text') ?></p>
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

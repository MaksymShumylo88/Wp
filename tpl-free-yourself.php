<?php
/*Template Name: Free Yourself Page*/
get_header();
?>

<section class="hsection">
	<div class="hsection-inner">
		<div style='background-image:url("<?php the_field('its_time_background') ?>"); padding-top: 0.5rem' class="video-summary">
			<div class="container" style="text-align:center; ">
				<p class="fy-its-time-description"><?php the_field('its_time_description') ?></p>
				<img src="<?php the_field('its_time_are_you_image') ?>" alt="Are you..." class="fy-its-time-image">
				<div class="row" style="margin-top: 0.5rem">
					<?php if( have_rows('its_time_grid') ):
					while ( have_rows('its_time_grid') ) : the_row(); ?>
						<div class="col-6">
							<div style='background-image:url("<?php the_sub_field('background'); ?>");' class="fy-its-time-individual">
								<p class="fy-its-time-title"><?php the_sub_field('title') ?></p>
							</div>
						</div>
					<?php endwhile; endif; ?>
				</div>
				<div class="row">
					<div class="col-3"></div>
					<div class="col-6">
						<div style='background-image:url("<?php the_field('last_are_you_background'); ?>");' class="fy-its-time-individual fy-last-its-time-individual-margin">
							<p class="fy-its-time-title"><?php the_field('last_are_you_title') ?></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="hsection">
	<div class="hsection-inner">
		<div style='background-image:url("<?php the_field('ready_free_background') ?>");' class="video-summary">
			<div class="container">
				<p class="fy-ready-free-description"><?php the_field('ready_free_description') ?></p>
				<a href="<?php the_field('ready_free_button_url'); ?>">
    				<div style='background-image:url("<?php the_field('ready_free_button_background') ?>");' class="webiner-join-button fy-ready-free-btn-margin">
    					<span class="ready-free-button-label"><?php the_field('ready_free_button_label') ?></span>
    					<img src="<?php the_field('ready_free_nav_icon') ?>" alt="Button Nav Icon" width="32px" style="margin-bottom: 6px; margin-left: 4px">
    				</div>
				</a>
			</div>
		</div>
	</div>
</section>
<section class="hsection">
	<div class="hsection-inner">
		<div style='background-image:url("<?php the_field('paul_introduction_background') ?>");' class="with-bg-div">
			<div class="container" style="margin-top: 2rem;">
				<div class="row">
					<div class="col-8">
						<p class="fy-paul-intro-title"><?php the_field('paul_introduction_left_title') ?></p>
						<p class="icebreaker-left-description"><?php the_field('paul_introduction_left_description') ?></p>
					</div>
					<div class="col-4">
						<img src="<?php the_field('paul_introduction_right_image') ?>" class="fy-paul-right-image">
					</div>
				</div>
				<div>
					<p class="icebreaker-left-description"><?php the_field('paul_introduction_bottom_description') ?></p>
					<p class="icebreaker-left-description" style="font-weight: bold"><?php the_field('paul_introduction_last_sentence') ?></p>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="hsection">
	<div class="hsection-inner">
		<div style='background-image:url("<?php the_field('introducing_background') ?>");' class="fy-introducing-div">
			<div class="container" style="text-align: center">
				<img src="<?php the_field('introducing_arrow_image') ?>" alt="Are you..." class="fy-introducing-image">
				<p class="fy-introducing-title"><?php the_field('introducing_title') ?></p>
				<p class="fy-its-time-description"><?php the_field('introducing_description') ?></p>
				<div class="row" style="margin-top: 0.5rem; margin-bottom: 2rem">
					<?php if( have_rows('introducing_grid') ):
					while ( have_rows('introducing_grid') ) : the_row(); ?>
						<div class="col-4">
							<div style='background-image:url("<?php the_sub_field('background'); ?>");' class="fy-introducing-div fy-introducing-individual">
								<p class="fy-testimonial-name"><?php the_sub_field('name') ?></p>
								<p class="fy-testimonial-role"><?php the_sub_field('role') ?></p>
								<div class="fy-testimonial-divider"></div>
								<p style="color:white;"><?php the_sub_field('description') ?></p>
							</div>
						</div>
					<?php endwhile; endif; ?>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="hsection">
	<div class="hsection-inner">
		<div style='background-image:url("<?php the_field('inside_program_background') ?>");' class="personality-cards-div">
			<div class="container">
				<p class="fy-inside-program-title"><?php the_field('inside_program_title') ?></p>
				<div class="row" style="margin-top: 0.5rem; margin-bottom: 1rem">
					<?php if( have_rows('inside_program_grid') ):
					while ( have_rows('inside_program_grid') ) : the_row(); ?>
						<div class="col-6">
							<div style='background-image:url("<?php the_sub_field('background'); ?>");' class="fy-inside-program-div">
								<p class="fy-inside-program-individual-title"><?php the_sub_field('title') ?></p>
							</div>
						</div>
					<?php endwhile; endif; ?>
				</div>
				<p class="fy-inside-program-individual-title" style="text-align: center;"><?php the_field('inside_program_bottom_description') ?></p>
			</div>
		</div>
	</div>
</section>
<section class="hsection">
	<div class="hsection-inner">
		<div style='background-image:url("<?php the_field('join_thousands_background') ?>");' class="video-summary">
			<div class="container">
				<div class="row">
					<div class="col-6">
						<p class="webiner-join-description fy-join-description"><?php the_field('join_thousands_description') ?></p>
						<p class="fy-join-thousands-question"><?php the_field('join_thousands_question') ?></p>
					</div>
					<div class="col-6">
						<img src="<?php the_field('join_thousands_right_image') ?>" alt="Join Thousands" class="fy-join-thousands-image">
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="hsection">
	<div class="hsection-inner">
		<div style='background-image:url("<?php the_field('free_yourself_background') ?>"); padding: 1.5rem 0px' class="fy-introducing-div">
			<div class="container">
				<p class="fy-free-yourself-title"><?php the_field('free_yourself_title') ?><span style="font-weight: bold;">Free Yourself</span></p>
				<p class="personality-questions-title"><?php the_field('free_yourself_description') ?></p>
			</div>
		</div>
	</div>
</section>
<section class="hsection">
	<div class="hsection-inner">
		<div style='background-image:url("<?php the_field('gain_access_background') ?>");' class="with-bg-div">
			<div class="container">
				<p class="fy-gain-access-title"><?php the_field('gain_access_title') ?></p>
				<p class="fy-gain-access-description"><?php the_field('gain_access_description') ?></p>
				<p class="fy-gain-access-sub-title"><?php the_field('gain_access_sub_title') ?></p>
				<div class="row fy-gain-access-books">
					<?php if( have_rows('books') ):
					while ( have_rows('books') ) : the_row(); ?>
						<div class="col-6">
							<div style='background-image:url("<?php the_sub_field('background'); ?>");' class="fy-books-individual-div">
								<p class="fy-books-individual-title"><?php the_sub_field('title') ?></p>
								<p class="fy-books-individual-sub-title"><?php the_sub_field('sub_title') ?></p>
							</div>
						</div>
					<?php endwhile; endif; ?>
				</div>
				<p class="fy-gain-access-description" style="text-align: center;"><?php the_field('gain_access_bottom_description') ?></p>
				<p class="fy-gain-access-description" style="text-align: center; font-style: italic;"><?php the_field('gain_access_last_sentence') ?></p>
				<p class="fy-gain-access-sub-title" style="text-align: center; font-weight: bold"><?php the_field('gain_access_price_text') ?></p>
				<a href="<?php the_field('free_myself_button_url'); ?>">
    				<div style='background-image:url("<?php the_field('free_myself_button_background') ?>");' class="webiner-join-button fy-free-myself-btn-margin">
    					<span class="fy-free-myself-btn-label"><?php the_field('free_myself_button_label') ?></span>
    				</div>
				</a>
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

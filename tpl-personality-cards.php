<?php
/*Template Name: Personality Cards Page*/
get_header();
?>

<section class="hsection">
	<div class="hsection-inner">
		<div style='background-image:url("<?php the_field('package_of_cards_background') ?>"); text-align: center;' class="with-bg-div">
			<div class="container">
				<img src="<?php the_field('package_of_cards_image') ?>" class="package-of-cards-image">
				<p class="personality-cards-description"><?php the_field('package_of_cards_description') ?></p>
			</div>
		</div>
	</div>
</section>
<section class="hsection">
	<div class="hsection-inner">
		<div style='background-image:url("<?php the_field('quote_background') ?>");' class="video-summary">
			<p class="personality-cards-quote-title"><?php the_field('quote_title') ?></p>
		</div>
	</div>
</section>
<section class="hsection">
	<div class="hsection-inner">
		<div style='background-image:url("<?php the_field('history_intro_background') ?>"); text-align:center;' class="personality-cards-div">
			<div class="container">
				<p class="history-intro-description"><?php the_field('history_intro_top_description') ?></p>
				<div class="row" style="margin: 3rem 0px">
					<div class="col-4">
						<img src="<?php the_field('history_intro_image_1') ?>">
					</div>
					<div class="col-4">
						<img src="<?php the_field('history_intro_image_2') ?>">
					</div>
					<div class="col-4">
						<img src="<?php the_field('history_intro_image_3') ?>">
					</div>
				</div>
				<p class="history-intro-description"><?php the_field('history_intro_bottom_description') ?></p>
			</div>
		</div>
	</div>
</section>
<section class="hsection">
	<div class="hsection-inner">
		<div style='background-image:url("<?php the_field('personality_questions_background') ?>");' class="video-summary">
			<div class="container">
				<p class="personality-questions-title"><?php the_field('personality_questions_title') ?></p>
			</div>
		</div>
	</div>
</section>
<section class="hsection">
	<div class="hsection-inner">
		<div style='background-image:url("<?php the_field('cards_book_background') ?>");' class="personality-cards-div">
			<div class="container">
				<div class="row">
					<div class="col-6">
						<p class="video-summary-description"><?php the_field('cards_book_description') ?></p>
					</div>
					<div class="col-6">
						<img src="<?php the_field('cards_book_image') ?>" class="personality-cards-book-image">
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="hsection">
	<div class="hsection-inner">
		<div style='background-image:url("<?php the_field('great_professional_background') ?>");' class="personality-cards-div">
			<div class="container">
				<div class="row">
					<div class="col-6">
						<p class="great-professional-title"><?php the_field('great_professional_title') ?></p>
						<p class="great-professional-description"><?php the_field('great_professional_description') ?></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="hsection">
	<div class="hsection-inner">
		<div style='background-image:url("<?php the_field('icebreaker_background') ?>");' class="personality-cards-div">
			<div class="container">
				<p class="icebreaker-title"><?php the_field('icebreaker_title') ?></p>
				<div class="row">
					<div class="col-7">
						<p class="icebreaker-left-description"><?php the_field('icebreaker_left_description') ?></p>
					</div>
					<div class="col-5">
						<img src="<?php the_field('icebreaker_right_image') ?>" class="icebreaker-right-image">
					</div>
				</div>
				<p class="icebreaker-left-description"><?php the_field('icebreaker_bottom_description') ?></p>
				<a href="<?php the_field('icebreaker_button_url') ?>">
    				<div style='background-image:url("<?php the_field('icebreaker_button_background') ?>");' class="icebreaker-button">
    					<span class="icebreaker-button-label"><?php the_field('icebreaker_button_label') ?></span>
    					<img src="<?php the_field('icebreaker_button_nav_icon') ?>" alt="Button Nav Icon" class="exuberant-life-button-nav">
    				</div>
				</a>
			</div>
		</div>
	</div>
</section>
<section class="hsection">
	<div class="hsection-inner">
		<div style='background-image:url("<?php the_field('join_circle_background') ?>");' class="personality-cards-div">
			<div class="container">
				<div class="row">
					<div class="col-6">
						<p class="join-circle-description"><?php the_field('join_circle_description') ?></p>
						<a href="#" class="popmake-12950">
    						<div style='background-image:url("<?php the_field('join_circle_button_background') ?>");' class="join-circle-button">
    							<span style="color: #6e287e; font-size: 18px; text-align:center; font-weight: bold"><?php the_field('join_circle_button_label') ?></span>
    							<img src="<?php the_field('join_circle_nav_icon') ?>" alt="Button Nav Icon" class="exuberant-life-button-nav">
    						</div>
						</a>
					</div>
					<div class="col-6">
						<img src="<?php the_field('join_circle_right_image') ?>" class="join-circle-right-image">
					</div>
				</div>
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

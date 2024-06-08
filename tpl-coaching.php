<?php
/*Template Name: Coaching Page*/
get_header();
?>

<section class="hsection">
	<div class="hsection-inner">
		<div style='background-image:url("<?php the_field('top_quote_background') ?>");' class="top-quote">
			<div class="container">
				<img src="<?php the_field('top_quote_avatar') ?>" width="100" height="100">
				<p class="top-quote-description"><?php the_field('top_quote_description') ?>
					<span style="font-style: italic; color: #c51ec7;">Paul Wagner</span>
				</p>
			</div>
		</div>
	</div>
</section>
<section class="hsection">
	<div class="hsection-inner">
		<div style='background-image:url("<?php the_field('coaching_introduction_background') ?>");' class="video-summary">
			<div class="container">
				<div class="row">
					<div class="col-6">
						<p class="video-summary-description" style="color: white"><?php the_field('coaching_introduction_description') ?></p>
					</div>
					<div class="col-6">
						<img src="<?php the_field('coaching_introduction_photo') ?>" style="margin-top: 8px">
					</div>
				</div>
				<div class="site-btn" style="margin-top: 18px">
				    <a href="#" style="line-height: 14px" class="popmake-16032"><?php the_field('book_call_button_label') ?></a>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="hsection">
	<div class="hsection-inner">
		<div class="container work-with-me-div">
			<img src="<?php the_field('with_me_top_avatar') ?>" width="100" height="100">
			<p class="work-with-me-title"><?php the_field('with_me_title') ?></p>
			<div class="row">
				<?php if( have_rows('with_me_grid') ):
				while ( have_rows('with_me_grid') ) : the_row(); ?>
					<div class="col-6">
						<div style='background-image:url("<?php the_sub_field('background'); ?>");' class="work-with-me-individual">
							<p class="explore-title"><?php the_sub_field('title') ?></p>
						</div>
					</div>
				<?php endwhile; endif; ?>
			</div>
		</div>
	</div>
</section>
<section class="hsection hsection-testi">
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
	<div class="hsection-inner">
		<div style='background-image:url("<?php the_field('embark_background') ?>");' class="video-summary">
			<div class="container" style="text-align:center">
				<img src="<?php the_field('embark_top_avatar') ?>" class="embark-top-avatar">
				<p class="embark-title"><?php the_field('embark_title') ?></P>
				<h5 style="margin-bottom: 3.5rem" class="embark-description"><?php the_field('embark_description') ?></h5>
				<?php if( have_rows('embark_grid') ):
				while ( have_rows('embark_grid') ) : the_row(); ?>
					<div class="embark-grid-item">
						<img src="<?php the_sub_field('avatar') ?>" width="80" height="80">
						<h3 style="color: #a942ed; font-weight: bold; margin-top: 10px"><?php the_sub_field('title') ?></h3>
						<h5><?php the_sub_field('description') ?></h5>
					</div>
				<?php endwhile; endif; ?>
				<div class="site-btn" style="margin-top: 36px">
				    <a href="#" style="line-height: 14px" class="popmake-16032"><?php the_field('book_call_button_label') ?></a>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="hsection">
	<div class="hsection-inner">
		<div style='background-image:url("<?php the_field('faqs_background') ?>");' class="faqs-section">
			<div class="container">
				<p class="why-programs-title"><?php the_field('faqs_title') ?></P>
				<div class="faqs-div">
					<?php echo do_shortcode('[WPSM_AC id=15454]') ?>
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


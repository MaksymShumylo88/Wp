<?php
/*Template Name: Ebooks */
?>
<?php
/**
 * The header for Ebook page
 */
if ( post_password_required(  $post ) )
{
	echo get_the_password_form();
	echo '<p>THIS POST IS PASSWORD PROTECTED: PLEASE ENTER IT!</p>';
	exit;
}
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<link rel='stylesheet' id=''  href='<?php echo get_stylesheet_directory_uri(); ?>/assets/css/font-awesome.min.css' type='text/css' media='all' />

	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<div class="site-content-contain">
			<div id="content">
				<section class="hsection hsection-banner" style='background-image:url("<?php the_field('ebook_banner_bg'); ?>");'>
					<div class="row ebook-hsection-top">
						<div class="col-9">
							<img src="<?php the_field('ebook_banner_logo'); ?>" alt="logo">
						</div>
						<div class="social-menus col-3" style="margin-top: 20px">
							<span class="ebook-social-label">Share on</span>
							<ul>
								<?php
								if (get_field('facebook_url', 'option') !== NULL && get_field('facebook_url', 'option') !== "") {
									?>
									<li>
										<a target="_blank" href="<?php the_field('facebook_url', 'option'); ?>" style="color: #b206c9">
											<i class="fa fa-facebook"></i>
										</a>
									</li>
									<?php
								}
								if (get_field('twitter_url', 'option') !== NULL && get_field('twitter_url', 'option') !== "") {
									?>
									<li>
										<a target="_blank" href="<?php the_field('twitter_url', 'option'); ?>" style="color: #b206c9">
											<i class="fa fa-twitter"></i>
										</a>
									</li>
									<?php
								}
								if (get_field('instagram_url', 'option') !== NULL && get_field('instagram_url', 'option') !== "") {
									?>
									<li>
										<a target="_blank" href="<?php the_field('instagram_url', 'option'); ?>" style="color: #b206c9">
											<i class="fa fa-instagram"></i>
										</a>
									</li>
									<?php
								}
								if (get_field('linkedin_url', 'option') !== NULL && get_field('linkedin_url', 'option') !== "") {
									?>
									<li>
										<a target="_blank" href="<?php the_field('linkedin_url', 'option'); ?>" style="color: #b206c9">
											<i class="fa fa-linkedin"></i>
										</a>
									</li>
									<?php
								}
								?>
							</ul>
						</div>
					</div>
					<!-- Header Menu Start -->
					<div class="header-menu">
						<div class="container">
							<div class="row">

								<div class="hm-col">
									<?php if ( has_nav_menu( 'top' ) ) : ?>
										<div class="navigation-top col-11">
											<?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
										</div><!-- .navigation-top -->
									<?php endif; ?>

									<div class="hsearch-wrap col-1">
										<div class="hsearch-btn">
										</div>

										<div class="header-form">
											<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
												<div class="search_box">
													<input type="search" id="<?php echo $unique_id; ?>" class="search_field" placeholder="<?php echo esc_attr_x( 'Enter your search term &hellip;', 'placeholder', 'twentyseventeen' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
													<button type="submit" class="header-search">Search</button>
												</div>
											</form>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>
					<!-- End -->
					<div class="ebook-banner-bundle-books">
						<img src="<?php the_field('ebook_banner_bundle_books'); ?>" alt="Bundle of downloadable books">
					</div>
					<div class="ebook-section-inner">
						<div class="container">
							<div class="ebook-hbanner-info">
								<div>
									<span class="ebook-top-banner-title"><?php the_field('ebook_top_banner_title'); ?></span>
								</div>
								<div>
									<span class="ebook-middle-banner-text"><?php the_field('ebook_middle_banner_text'); ?></span>
								</div>
								<p class="ebook-bottom-banner-text"><?php the_field('ebook_bottom_banner_text'); ?></P>
									<div class="ebook-banner-btn">
										<a href="<?php the_field('ebook_banner_button_url'); ?>"><?php the_field('ebook_banner_button_text'); ?></a>
									</div>
								</div>
							</div>
						</div>
					</section>
					<section style="" class="ebook-space-section">
						<p class="ebook-top-space-text"><?php the_field('ebook_top_space_text'); ?></p>
						<p class="ebook-bottom-banner-text"><?php the_field('ebook_bottom_space_text'); ?></p>
					</section>
					<section class="ebook-section" style='background-image:url("<?php the_field('ebook_glance_bg'); ?>");'>
						<div class="container">
							<p class="ebook-sub-title"><?php the_field('ebook_glance_sub_title'); ?></p>
							<p class="ebook-glance-main-title"><?php the_field('ebook_glance_main_title'); ?></p>
						</div>
						<div class="row">
							<?php if( have_rows('ebook_glance_list') ):
								while ( have_rows('ebook_glance_list') ) : the_row(); ?>
									<div class="col-4">
										<div class="ebook-glance-item">
											<img src="<?php the_sub_field('ebook_glance_image'); ?>" alt="ebook cover">
											<span class="ebook-description-title"><?php the_sub_field('ebook_glance_title'); ?></span>
										</div>
									</div>
								<?php endwhile;
							endif; ?>
						</div>
					</section>
					<section class="ebook-deepen-section">
						<p class="ebook-deepen-title"><?php the_field('ebook_deepen_title'); ?></p>
						<p style="font-size: 18px;"><?php the_field('ebook_deepen_text'); ?></p>
						<div class="ebook-custom-btn">
							<a class="get-now" href="<?php the_field('ebook_deepen_button_url'); ?>" style='background-image:url("<?php the_field('ebook_deepen_button_background'); ?>");'><?php the_field('ebook_deepen_button_text'); ?></a>
						</div>
					</section>
					<section class="ebook-section" style='background-image:url("<?php the_field('ebook_whybuy_background'); ?>");'>
						<div class="row">
							<div class="col-5"></div>
							<div class="col-7">
								<p class="ebook-title"><?php the_field('ebook_whybuy_title'); ?></p>
								<?php if( have_rows('ebook_whybuy_reasons') ):
									while ( have_rows('ebook_whybuy_reasons') ) : the_row(); ?>
										<div class="ebook-whybuy-item">
											<img src="<?php the_sub_field('ebook_whybuy_reason_image'); ?>" alt="ebook cover">
											<span class="ebook-description-title"><?php the_sub_field('ebook_whybuy_reason_title'); ?></span>
										</div>
									<?php endwhile;
								endif; ?>
							</div>
						</div>
					</section>
					<?php if( have_rows('ebook_introduction_list') ):
						while ( have_rows('ebook_introduction_list') ) : the_row(); ?>
							<?php 

								$ebook_bg = get_sub_field('ebook_introduction_bg_color');
								if ($ebook_bg === '#ffffff') {
									$ebook_title_color = '#a81dd0';
									$ebook_description_color = 'black';
									$ebook_introduction_benefits_color = "black";
								} else {
									$ebook_title_color = 'white';
									$ebook_description_color = 'white';
									$ebook_introduction_benefits_color = "white";
								}
							 ?>
							<?php if (get_row_index() % 2 == 1) { ?>
								<section class="ebook-section" style='background-color: <?php the_sub_field('ebook_introduction_bg_color'); ?>;'>
									<p class="ebook-title" style="color: <?php echo $ebook_title_color; ?>"><?php the_sub_field('ebook_introduction_title'); ?></p>
									<div class="row">
										<div class="col-5" style="text-align: center;">
											<img src="<?php the_sub_field('ebook_introduction_image'); ?>" alt="ebook introduction image">
										</div>
										<div class="col-7" style="display: flex; justify-content: center;">
											<div>
												<div class="ebook-introduction-benefits" style="color: <?php echo $ebook_introduction_benefits_color ?>">
													<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
													<span>Key Benfits</span>
												</div>
												<div class="ebook-description-title" style="color: <?php echo $ebook_description_color; ?>;"><?php the_sub_field('ebook_introduction_description'); ?></div>
												<div class="ebook-introduction-btn">
													<a href="<?php the_sub_field('ebook_introduction_button_url'); ?>"><?php the_sub_field('ebook_introduction_button_text'); ?></a>
												</div>
											</div>
										</div>
									</div>
								</section>
							<?php } else { ?>
								<section class="ebook-section" style='background-color: <?php the_sub_field('ebook_introduction_bg_color'); ?>;'>
									<p class="ebook-title" style="color: <?php echo $ebook_title_color ?>"><?php the_sub_field('ebook_introduction_title'); ?></p>
									<div class="row">
										<div class="col-7" style="display: flex; justify-content: center;">
											<div>
												<div class="ebook-introduction-benefits" style="color: <?php echo $ebook_introduction_benefits_color ?>">
													<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
													<span>Key Benfits</span>
												</div>
												<div class="ebook-description-title" style="color: <?php echo $ebook_description_color; ?>"><?php the_sub_field('ebook_introduction_description'); ?></div>
												<div class="ebook-introduction-btn">
													<a href="<?php the_sub_field('ebook_introduction_button_url'); ?>"><?php the_sub_field('ebook_introduction_button_text'); ?></a>
												</div>
											</div>
										</div>
										<div class="col-5" style="text-align: center;">
											<img src="<?php the_sub_field('ebook_introduction_image'); ?>" alt="ebook introduction image">
										</div>
									</div>
								</section>
							<?php } ?>
							<?php if (get_row_index() == 4) { ?>
					<!-- <section class="ebook-section ebook-review" style='background-image:url("<?php //the_field('ebook_review_background'); ?>");'>
						<p class="ebook-sub-title"><?php //the_field('ebook_review_title'); ?></p>
						<div class="row">
		                    <div class="col-12">
		                        <div class="htesti-wrap">
		                            <?php //echo do_shortcode('[gs_testimonial id=7]') ?>
		                        </div>
		                    </div>
		                </div>

		            </section> -->
		        <?php } ?>
		        <?php if (get_row_index() == 8) { ?>
		        	<section class="ebook-section" style='background-image:url("<?php the_field('ebook_healthy_life_bg'); ?>");'>
		        		<div class="row">
		        			<div class="col-5"></div>
		        			<div class="col-7">
		        				<p class="ebook-title"><?php the_field('ebook_healthy_life_title'); ?></p>
		        				<!-- <p class="ebook-healthy-life-sub-title" style='width: 90%; background-image:url("<?php //the_field('ebook_healthy_life_sub_title_bg'); ?>");'><?php //the_field('ebook_healthy_life_sub_title'); ?></p> -->
		        				<?php if( have_rows('ebook_healthy_life_list') ):
		        					while ( have_rows('ebook_healthy_life_list') ) : the_row(); ?>
		        						<div class="ebook-healthy-life-item">
		        							<img src="<?php the_sub_field('ebook_healthy_life_item_image'); ?>" alt="ebook healthy life">
		        							<span class="ebook-description-title"><?php the_sub_field('ebook_healthy_life_item_title'); ?></span>
		        						</div>
		        					<?php endwhile;
		        				endif; ?>
		        			</div>
		        		</div>
		        	</section>
		        <?php } ?>
		    <?php endwhile;
		endif; ?>
		<!-- <section class="ebook-section">
			<p class="ebook-sub-title" style="color: black;"><?php //the_field('ebook_bonus_prefix'); ?></p>
			<p class="ebook-title" style="color: #b206c9;"><?php //the_field('ebook_bonus_title'); ?></p>
			<div>
				<?php //echo do_shortcode( '[the-post-grid id="14921" title="Bonuses"]' ); ?>
			</div>
		</section> -->
		<section class="ebook-payment-section" style='background-image:url("<?php the_field('ebook_payment_background'); ?>");'>
			<p class="ebook-sub-title"><?php the_field('ebook_payment_prefix'); ?></p>
			<p class="ebook-payment-title"><?php the_field('ebook_payment_title'); ?></p>
			<p class="ebook-sub-title"><?php the_field('ebook_payment_sub_title'); ?></p>
			<p class="ebook-payment-text"><?php the_field('ebook_payment_text'); ?></p>
			<div class="ebook-custom-btn" style="text-align: center;">
				<a> href="<?php the_field('ebook_payment_button_url'); ?>" style='background-image:url("<?php the_field('ebook_payment_button_image'); ?>");'><?php the_field('ebook_payment_button_text'); ?></a>
			</div>
		</section>
		<section class="ebook-payment-section">
			<p class="ebook-title" style="color: #a81dd0;"><?php the_field('ebook_about_author_title'); ?></p>
			<div class="row ebook-author-content">
				<div class="col-4" style="text-align: center; margin-top: 10px;">
					<img src="<?php the_field('ebook_about_author_photo'); ?>" alt="ebook author photo">
				</div>
				<div class="col-8" style="margin-top: 10px;">
					<p class="ebook-sub-title"><?php the_field('ebook_about_author_text'); ?></p>
				</div>
			</div>
		</section>
		<?php
		get_footer();
		?>

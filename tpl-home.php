<?php
/*Template Name: Home Page*/
get_header();
?>

<section class="hsection">
	<div class="hsection-inner video-summary" style='background-image:url("<?php the_field('video_summary_background') ?>");'>
		<div class="container">
			<div class="row dk-section">
				<div class="col-6">
					<p class="video-summary-description"><?php the_field('video_summary_top_description') ?></p>
					<p class="video-summary-description"><?php the_field('video_summary_bottom_description') ?></p>
				</div>
				<div class="col-6">
					<div class="hbannervideo">
						<?php the_field('video_summary_video') ?>
					</div>
				</div>
			</div>
			<div class="mb-section">
				<p class="video-summary-description"><?php the_field('video_summary_top_description') ?></p>
				<div class="hbannervideo" style="padding-bottom: 20px">
					<?php the_field('video_summary_video') ?>
				</div>
				<p class="video-summary-description"><?php the_field('video_summary_bottom_description') ?></p>
			</div>
		</div>
	</div>
</section>
<section class="hsection">
	<div class="hsection-inner">
		<div style='background-image:url("<?php the_field('exuberant_life_background') ?>");' class="exuberant-life-div">
			<div class="row">
				<div class="col-3">
					<img src="<?php the_field('exuberant_life_book') ?>" class="exuberant-life-book">
				</div>
				<div class="col-5">
					<p class="exuberant-life-description"><?php the_field('exuberant_life_description') ?></p>
					<div style='background-image:url("<?php the_field('exuberant_life_button_background') ?>");' class="exuberant-life-button popmake-12948">
						<span class="exuberant-life-button-text"><?php the_field('exuberant_life_button_text') ?></span>
						<img src="<?php the_field('exuberant_life_button_nav') ?>" alt="Button Nav Icon" class="exuberant-life-button-nav">
					</div>
				</div>
			</div>
		</div>
  </div>
</section>
<section class="hsection">
	<div class="hsection-inner">
		<div class="spiritual-journey-div" style='background-image:url("<?php the_field('spiritual_journey_background') ?>");'>
			<div class="container">
				<p class="spiritual-journey-title"><?php the_field('spiritual_journey_title') ?></p>
				<p class="spiritual-journey-description"><?php the_field('spiritual_journey_description') ?></p>
			</div>
		</div>
	</div>
</section>
<section class="hsection">
	<div class="hsection-inner">
		<div style='background-image:url("<?php the_field('explore_background') ?>");' class="explore-div">
			<div class="row">
				<?php if( have_rows('explore_grid') ):
				while ( have_rows('explore_grid') ) : the_row(); ?>
					<div class="col-4">
						<div style='background-image:url("<?php the_sub_field('background'); ?>");' class="explore-individual">
							<p class="explore-title"><?php the_sub_field('title') ?></p>
							<p class="explore-description"><?php the_sub_field('description') ?></p>
							<a href="<?php the_sub_field('button_url') ?>">
    							<div style='background-image:url("<?php the_field('explore_button_background') ?>");' class="explore-button-link">
    								<span style="color:white; font-size: 18px; text-align:center"><?php the_sub_field('button_label') ?></span>
    								<img src="<?php the_field('explore_button_nav_icon') ?>" alt="Button Nav Icon" class="exuberant-life-button-nav">
    							</div>
							</a>
						</div>
					</div>
				<?php endwhile; endif; ?>
			</div>
		</div>
	</div>
</section>
<section class="hsection">
	<div class="hsection-inner">
		<div class="spiritual-journey-div" style='background-image:url("<?php the_field('introduction_background') ?>");'>
			<div class="container">
				<div class="row dk-section">
					<div class="col-7">
						<p class="introduction-title"><?php the_field('introduction_title') ?></p>
						<p class="introduction-sub-title"><?php the_field('introduction_sub_title') ?></p>
						<p class="introduction-description"><?php the_field('introduction_description_1') ?></p>
						<p class="introduction-description"><?php the_field('introduction_description_2') ?></p>
						<a href="<?php the_field('introduction_button_url') ?>">
							<div style='background-image:url("<?php the_field('explore_button_background') ?>"); margin-top: 2rem;' class="explore-button-link">
								<span style="color:white; font-size: 18px; text-align:center"><?php the_field('introduction_button_label') ?></span>
								<img src="<?php the_field('explore_button_nav_icon') ?>" alt="Button Nav Icon" class="exuberant-life-button-nav">
							</div>
						</a>
					</div>
					<div class="col-5">
						<img src="<?php the_field('paul_photo') ?>" class="introduction-paul-photo">
					</div>
				</div>
				<div class="mb-section">
					<p class="introduction-title"><?php the_field('introduction_title') ?></p>
					<p class="introduction-sub-title"><?php the_field('introduction_sub_title') ?></p>
					<p class="introduction-description"><?php the_field('introduction_description_1') ?></p>
					<img src="<?php the_field('paul_photo') ?>" class="introduction-paul-photo">
					<p class="introduction-description"><?php the_field('introduction_description_2') ?></p>
					<a href="<?php the_field('introduction_button_url') ?>">
						<div style='background-image:url("<?php the_field('explore_button_background') ?>"); margin-top: 2rem;' class="explore-button-link">
							<span style="color:white; font-size: 18px; text-align:center"><?php the_field('introduction_button_label') ?></span>
							<img src="<?php the_field('explore_button_nav_icon') ?>" alt="Button Nav Icon" class="exuberant-life-button-nav">
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>
<?php
get_footer();
?>

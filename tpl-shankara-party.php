<?php
/*Template Name: Shankara Party Page*/
get_header();
?>

<section class="video-sec">
    <div class="row">
        <div class="col-8">
            <?php the_field('video_summary'); ?>
        </div>
    </div>
</section>
<section class="hsection paulsofferring-section">
    <div class="hsection-inner psection-inner">
        <div class="container">
            <div class="row" style="margin-top: 1.2rem">
                <div class="col-12">
                    <h2 class="service-begins-here-title"><?php the_field('begins_here_title') ?></h2>
                </div>
            </div>
            <div class="row" style="margin-top: 2.5rem">
                <div class="col-4">
                    <img src="<?php the_field('begins_here_avatar') ?>" alt="Paul Image" width="88%" style="margin-left: 15px">
                </div>
                <div class="col-8">
                    <p class="service-begins-here-description"><?php the_field('begins_here_description') ?></p>
                </div>
            </div>
        </div>
        <div style='background-image:url("<?php the_field('start_journey_background') ?>");' class="services-start-journey">
            <p class="start-journey-title"><?php the_field('start_journey_title'); ?></p>
        </div>
    </div>
</section>
<section class="psection psection-sproduct">
	<div class="psection-inner">
    	<div class="container">
            <div class="row serproduct-row">
            	<div class="serproduct-col">
                	<div class="serproductcol-in">
                        <div style='background-image:url("<?php the_field('digital_person_background'); ?>");' class="services-specific-subject">
                            <h3><?php the_field('digital_person_title'); ?></h3>
                            <p style="top: 180px"><?php the_field('digital_person_description'); ?></p>
                            <a href="<?php the_field('digital_person_button_url') ?>">
                                <div style='background-image:url("<?php the_field('service_button_background') ?>");' class="services-specific-link">
                                    <span style="color:white; font-size: 18px"><?php the_field('digital_person_button_label') ?></span>
                                </div>
                            </a>
                        </div>
                	</div>
                	<div class="serproductcol-in">
                        <div style='background-image:url("<?php the_field('transformational_readings_background'); ?>");' class="services-specific-subject">
                            <h3><?php the_field('transformational_readings_title'); ?></h3>
                            <p style="top: 180px"><?php the_field('transformational_readings_description'); ?></p>
                            <a href="<?php the_field('transformational_readings_button_url') ?>">
                                <div style='background-image:url("<?php the_field('service_button_background') ?>");' class="services-specific-link">
                                    <span style="color:white; font-size: 18px"><?php the_field('transformational_readings_button_label') ?></span>
                                </div>
                            </a>
                        </div>
                	</div>
                	<div class="serproductcol-in">
                        <div style='background-image:url("<?php the_field('life_coaching_background'); ?>");' class="services-specific-subject">
                            <h3><?php the_field('life_coaching_title'); ?></h3>
                            <p style="top: 180px"><?php the_field('life_coaching_description'); ?></p>
                            <a href="<?php the_field('life_coaching_button_url') ?>">
                                <div style='background-image:url("<?php the_field('service_button_background') ?>"); margin-top: 33px !important' class="services-specific-link">
                                    <span style="color:white; font-size: 18px"><?php the_field('life_coaching_button_label') ?></span>
                                </div>
                            </a>
                        </div>
                	</div>
                </div>
                <div class="serproduct-col">
                	<div class="serproductcol-in">
                        <div style='background-image:url("<?php the_field('personality_cards_background'); ?>");' class="services-specific-subject">
                            <h3><?php the_field('personality_cards_title'); ?></h3>
                            <p style="top: 156px"><?php the_field('personality_cards_description'); ?></p>
                            <a href="<?php the_field('personality_cards_button_url') ?>">
                                <div style='background-image:url("<?php the_field('service_button_background') ?>");' class="services-specific-link">
                                    <span style="color:white; font-size: 18px"><?php the_field('personality_cards_button_label') ?></span>
                                </div>
                            </a>
                        </div>
                	</div>
                	<div class="serproductcol-in">
                        <div style='background-image:url("<?php the_field('shankara_oracle_background'); ?>");' class="services-specific-subject">
                            <h3><?php the_field('shankara_oracle_title'); ?></h3>
                            <p style="top: 156px"><?php the_field('shankara_oracle_description'); ?></p>
                            <a href="<?php the_field('shankara_oracle_button_url') ?>" target="_blank">
                                <div style='background-image:url("<?php the_field('service_button_background') ?>");' class="services-specific-link">
                                    <span style="color:white; font-size: 18px"><?php the_field('shankara_oracle_button_label') ?></span>
                                </div>
                            </a>
                        </div>
                	</div>
                	<div class="serproductcol-in">
                        <div style='background-image:url("<?php the_field('business_consulting_background'); ?>");' class="services-specific-subject">
                            <h3><?php the_field('business_consulting_title'); ?></h3>
                            <p style="top: 156px"><?php the_field('business_consulting_description'); ?></p>
                            <a href="<?php the_field('business_consulting_button_url') ?>" class="popmake-16008">
                                <div style='background-image:url("<?php the_field('service_button_background') ?>"); margin-top: 33px !important' class="services-specific-link">
                                    <span style="color:white; font-size: 18px"><?php the_field('business_consulting_button_label') ?></span>
                                </div>
                            </a>
                        </div>
                	</div>
                </div>
            </div>
            <div class="row" style="text-align:center;">
                <div class="site-btn fscol-btn">
                    <a href="<?php the_field('connect_button_url'); ?>" target="_blank" data-wpel-link="internal"><?php the_field('connect_button_text'); ?></a>
                </div>
            </div>
    	</div>
   	</div>
</section>
<?php
get_footer();
?>

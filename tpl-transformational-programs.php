<?php
/*Template Name: Transformational Programs Page*/
get_header();
?>

<section class="hsection">
    <div class="hsection-inner psection-inner">
        <div class="container">
            <p class="service-programs-you-title" style="margin-top: 2.5rem"><?php the_field('start_journey_title') ?></p>
            <div class="row">
                <div class="col-1"></div>
                <div class="col-5" style="margin-top: 1rem">
                    <img src="<?php the_field('mini_program_banner') ?>" alt="Mini Program Banner" class="program-banner">
                    <div style='background-image:url("<?php the_field('mini_program_description_background') ?>");' class="program-info">
                        <div class="program-title"><?php the_field('mini_program_title') ?></div>
                        <p><?php the_field('mini_program_description') ?></p>
                        <a href="<?php the_field('mini_program_button_link') ?>">
                            <div style='background-image:url("<?php the_field('mini_program_button_background') ?>");' class="mini-program-specific-link">
                                <span style="color:white; font-size: 18px; text-align:center"><?php the_field('mini_program_button_label') ?></span>
                                <img src="<?php the_field('program_nav_icon') ?>" alt="Button Nav Icon" width="32px">
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-5" style="margin-top: 1rem">
                    <img src="<?php the_field('platter_program_banner') ?>" alt="Mini Program Banner" class="program-banner">
                    <div style='background-image:url("<?php the_field('mini_program_description_background') ?>");' class="program-info">
                        <div class="program-title"><?php the_field('platter_program_title') ?></div>
                        <p><?php the_field('platter_program_description') ?></p>
                        <a href="<?php the_field('platter_program_button_link') ?>">
                            <div style='background-image:url("<?php the_field('mini_program_button_background') ?>");' class="mini-program-specific-link">
                                <span style="color:white; font-size: 18px; text-align:center"><?php the_field('platter_program_button_label') ?></span>
                                <img src="<?php the_field('program_nav_icon') ?>" alt="Button Nav Icon" width="32px">
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-1"></div>
            </div>
            <div class="row">
                <div class="col-1"></div>
                <div class="col-10" style="margin-top: 3rem; margin-bottom: 2rem;">
                    <div style='background-image:url("<?php the_field('free_yourself_banner') ?>");' class="free-yourself-hero">
                        <div class="free-yourself-title"><?php the_field('free_yourself_title') ?></div>
                        <p class="free-yourself-sub-title"><?php the_field('free_yourself_sub_title') ?></p>
                    </div>
                    <div style='background-image:url("<?php the_field('free_yourself_description_background') ?>");' class="free-yourself-info">
                        <p class="free-yourself-description"><?php the_field('free_yourself_description') ?></p>
                        <a href="<?php the_field('free_yourself_button_link') ?>">
                            <div style='background-image:url("<?php the_field('free_yourself_button_background') ?>");' class="mini-program-specific-link">
                                <span style="color:white; font-size: 18px; text-align:center"><?php the_field('free_yourself_button_label') ?></span>
                                <img src="<?php the_field('program_nav_icon') ?>" alt="Button Nav Icon" width="32px">
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-1"></div>
            </div>
        </div>
    </div>
</section>
<?php
get_footer();
?>

<?php
/*Template Name: Transformational Courses Page*/
    get_header();
?>

<section class="hsection">
    <div class="hsection-inner psection-inner">
        <div class="container">
            <p class="service-programs-login">Login to your course <a href="<?php the_field('course_login_link') ?>" style="color: #e93ae4">HERE.</a></p>
        </div>
        <div class="container">
            <p class="service-programs-you-title" style="margin-top: 2.5rem"><?php the_field('start_journey_title') ?></p>

            <!-- Double Course -->
            <?php if (have_rows('double_course')) ?>
                <?php while (have_rows('double_course')): the_row(); ?>
                    <?php if (get_row_index() % 2) { ?>
                        <div class="row">
                    <?php } ?>
                            <div class="col-1"></div>
                            <div class="col-5" style="margin-top: 1rem">
                                <img src="<?php echo get_sub_field('double_course_banner')['url']; ?>" alt="Mini Program Banner" class="program-banner">
                                <div style='background-image:url("<?php echo get_sub_field('double_course_description_bg')['url']; ?>");' class="program-info">
                                    <div class="program-title"><?php echo get_sub_field('double_course_title'); ?></div>
                                    <p><?php echo get_sub_field('double_course_description'); ?></p>
                                    <a href="<?php echo get_sub_field('double_course_button_link'); ?>">
                                        <div style='background-image:url("<?php echo get_field('double_course_button_bg')['url']; ?>");' class="mini-program-specific-link">
                                            <span style="color:white; font-size: 18px; text-align:center"><?php echo get_sub_field('double_course_button_label'); ?></span>
                                            <img src="<?php echo get_field('double_course_arrow')['url']; ?>" alt="Button Nav Icon" width="32px">
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-1"></div>
                    <?php if (!(get_row_index() % 2)) { ?>
                        </div>
                    <?php } ?>
                <?php endwhile; ?>

            
            <!-- Display Single Course -->
            <?php if (have_rows('shankara_master')) ?>
                <?php while (have_rows('shankara_master')): the_row(); ?>
                    <div class="row">
                        <div class="col-1"></div>
                        <div class="col-10" style="margin-top: 3rem; margin-bottom: 2rem;">
                            <div style='background-image:url("<?php echo get_sub_field('shankara_master_banner')['url']; ?>");' class="free-yourself-hero">
                            </div>
                            <div style='background-image:url("<?php echo get_sub_field('shankara_master_description_background')['url']; ?>");' class="free-yourself-info">
                                <p class="free-yourself-description"><?php echo get_sub_field('shankara_master_description'); ?></p>
                                <a href="<?php echo get_sub_field('shankara_master_button_link') ?>">
                                    <div style='background-image:url("<?php echo get_field('single_course_button_bg')['url']; ?>");' class="mini-program-specific-link">
                                        <span style="color:white; font-size: 18px; text-align:center"><?php echo get_sub_field('shankara_master_button_label') ?></span>
                                        <img src="<?php echo get_field('single_course_arrow')['url']; ?>" alt="Button Nav Icon" width="32px">
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-1"></div>
                    </div>
                <?php endwhile; ?>
        </div>
    </div>
</section>
<?php
    get_footer();
?>

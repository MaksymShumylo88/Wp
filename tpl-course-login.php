<?php
/*Template Name: Course-login Page */
get_header();
?>

<section class="psection psection-courselogin">
	<div class="psection-inner">
       <div class="container">

           <div class="row">
               <div class="col-12">
                   <div class="courselogin-form">
                       <div class="courseloginform-in">
                            <!-- <div class="section-title">
                            	<div class="st-sprtr">
                                    <div class="stsprtr-in"></div>
                                </div>
                                <h2><?php //the_field('courseloginform_maintitle'); ?></h2>
                            </div> -->
                            <!-- <div class="site-btn courselogin-btn">
                            	<a href="<?php //the_field('courseloginform_btnurl'); ?>"><?php //the_field('courseloginform_btntext'); ?></a>
                            </div> -->
                            <!-- <div class="courseloginform-subtitle">
                                <h3><?php //the_field('courseloginform_subtitle'); ?></h3>
                            </div> -->
                            <!-- <p style="color: red; display:none" id="course-login-error"><strong>ERROR:</strong> Invalid username and/or password.</p> -->
                            <h1 style="text-align: center;"><span style="font-size: 30px;"><strong><span style="color: #ff00ff;">Login To The Courses: Click The Images</span></strong></span></h1>

                            <!-- Display Images -->
                            <?php if (have_rows('course_image')) ?>
                                <?php while (have_rows('course_image')): the_row(); ?>
                                    <div class="course-image">
                                        <p style="text-align: center;"><span style="font-size: 23px;">
                                            <strong><span style="color: #ff00ff;"><?php echo get_sub_field('course_image_title'); ?></span>
                                            </strong></span>
                                        </p>
                                        <p style="text-align: center;"><a href="<?php echo get_sub_field('course_image_detail_url'); ?>">
                                            <img class="alignnone size-medium wp-image-17276" src="<?php echo get_sub_field('course_image_url')['url']; ?>" alt="" width="300" height="283" /></a>
                                        </p>
                                        <p style="text-align: center;"><a href="<?php echo get_sub_field('course_image_purchase_url'); ?>">
                                            <strong><span style="color: #ff00ff;">
                                                <?php echo get_sub_field('course_image_purchase_title'); ?>
                                            </span></strong></a>
                                        </p>
                                    </div>
                                <?php endwhile; ?>
                            <?php 
                                the_content();
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


    <?php 
    get_footer();
    ?>

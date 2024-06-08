<?php
    /*Template Name: New course */
    get_header();
    ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap"
    rel="stylesheet">
<style>
    body {
    font-family: 'Poppins', sans-serif;
    }
    .banner {
    padding: 20px;
    background-image: url('<?php echo get_theme_file_uri();?>/course-images/banner.jpg');
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
    width: 100%;
    height: 350px;
    text-align: center;
    position: relative;
    }
    h1 {
    font-family: 'Poppins', sans-serif;
    font-size: 60px;
    line-height: normal;
    font-weight: 400;
    color: #fff;
    position: absolute;
    transform: translate(-50%, -50%);
    left: 50%;
    top: 50%;
    }
    .twoblocks {
    margin: 30px 0;
    }
    .blockText {
    display: flex;
    }
    .blockOne {
    background-image: url('<?php echo get_theme_file_uri();?>/course-images/leftImg.jpg');
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
    width: 100%;
    padding: 25px;
    }
    .numeric {
    width: 125px;
    height: 125px;
    display: flex;
    color: rgb(255 255 255 / 50%);
    border: 1px dashed rgb(255 255 255 / 50%);
    font-size: 73px;
    justify-content: center;
    align-items: center;
    font-weight: 700;
    font-family: 'Poppins', sans-serif;
    margin-right: 15px;
    }
    .cousre h2 {
    color: #fff;
    font-size: 38px;
    font-family: 'Poppins', sans-serif;
    font-weight: 600;
    }
    .oneblock span {
    color: transparent;
    -webkit-text-stroke-width: 1px;
    -webkit-text-stroke-color: rgba(255, 255, 255, 0.5);
    font-size: 90px;
    font-weight: 600;
    font-family: 'Poppins', sans-serif;
    line-height: 65px;
    }
    .oneblock {
    display: flex;
    align-items: center;
    }
    .oneblock button { 
    margin-left: 20px;
    background: transparent;
    border: none;
    }
    .levelblock {
    margin-top: 100px;
    }
    .levelblockText h2 {
    color: #692567;
    font-size: 44px;
    max-width: 55%;
    margin: auto;
    font-family: 'Poppins', sans-serif;
    position: relative;
    }
    .levelblockText h2::after {
    content: '';
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
    width: 100px;
    height: 3px;
    background-color: #b79fbd;
    top: -35px;
    }
    .levelblockText p {
    color: #70386c;
    font-family: 'Poppins', sans-serif;
    font-size: 20px;
    font-weight: 400;
    max-width: 68%;
    margin: 20px auto;
    }
    button.registerBtn.btn.btn-primary {
    background: linear-gradient(90deg, rgba(99,40,124,1) 0%, rgba(99,40,124,1) 0%, rgba(151,39,131,1) 100%);
    border: none;
    width: 280px;
    height: 70px;
    border-radius: 100px;
    font-size: 20px;
    letter-spacing: 0.8px;
    text-transform: uppercase;
    box-shadow: 23px 0 65px rgb(0 0 0 / 38%);
    margin-top: 45px;
    }
    .levelblockText {
    margin-bottom: 90px;
    margin-top: 50px;
    }
    .videoBox {
    position: relative;
    width: 100%;
    }
    .videoBox img {
    width: 100%;
    }
    .playbtn {
    position: absolute;
    left: 50%;
    transform: translate(-50%, -50%);
    top: 50%;
    background-color: transparent;
    border: none;
    }
    .boxText {
    background-image: url('<?php echo get_theme_file_uri();?>/course-images/blockbgtext.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    width: 100%;
    }
    .boxText.boxbgsecond {
    background-image: url('<?php echo get_theme_file_uri();?>/course-images/blockbgtextwo.jpg');
    }
    .boxText.boxbgthird {
    background-image: url('<?php echo get_theme_file_uri();?>/course-images/blockbgtexthree.jpg');
    }
    .boxTextInner {
    padding: 40px 30px 0 30px;
    }
    h2 {
    font-size: 24px;
    font-family: 'Poppins', sans-serif;
    color: #fff;
    font-weight: 400;
    }
    .boxText p {
    color: #fff;
    font-size: 14px;
    font-family: 'Poppins', sans-serif;
    margin-bottom: 50px;
    }
    .boxText p span {
    color: #eb9edf;
    font-size: 14px;
    font-family: 'Poppins', sans-serif;
    }
    .learnmore {
    background: transparent;
    border: none;
    color: #fff;
    text-transform: uppercase;
    font-size: 14px;
    font-family: 'Poppins', sans-serif;
    font-weight: 500;
    }
    .learnmore img {
    margin-left: 15px;
    }   
    /* switch button   */
    .toggle {
    /* --width: 85px;
    --height: calc(var(--width) / 3); */
    position: relative;
    display: inline-block;
    width: 85px;
    height: 35px;
    border-radius: var(--height);
    cursor: pointer;
    }
    .toggle input {
    display: none;
    }
    .toggle .slider {
    position: absolute;
    top: 10px;
    left: 0;
    width: 100%;
    height: 100%;
    border-radius: 50px;
    border: 2px solid #12203a;
    transition: all 0.4s ease-in-out;
    background: #12203a;
    }
    .toggle .slider::before {
    content: '';
    position: absolute;
    top: 5px;
    left: 2px;
    width: 20px;
    height: 20px;
    border-radius: 50px;
    background-color: #fff;
    box-shadow: 0px 1px 3px rgb(0 0 0 / 30%);
    transition: all 0.4s ease-in-out;
    }
    .toggle input:checked+.slider {
    border: 2px solid #e337a4;
    background-color: #e337a4;
    }
    .toggle input:checked+.slider::before {
    background-color: #fff;
    }
    .toggle .labels {
    position: absolute;
    top: 10px;
    left: 28px;
    width: 100%;
    height: 100%;
    color: #fff;
    font-size: 10px;
    transition: all 0.4s ease-in-out;
    }
    .toggle .labels::after {
    content: attr(data-off);
    position: absolute;
    opacity: 1;
    text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.4);
    transition: all 0.4s ease-in-out;
    top: 10px;
    }
    .toggle .labels::before {
    content: attr(data-on);
    position: absolute;
    opacity: 0;
    text-shadow: 1px 1px 2px rgba(255, 255, 255, 0.4);
    transition: all 0.4s ease-in-out;
    top: 10px;
    }
    .toggle input:checked~.labels::after {
    opacity: 0;
    }
    .toggle input:checked~.labels::before {
    opacity: 1;
    }
    .twoBtns {
    justify-content: space-between;
    align-items: center;
    }
    /* switch button   */
    .viewBtn {
    background: transparent;
    border: none;
    font-size: 14px;
    color: #9a959a;
    }
    .commentview {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 1px 10px;
    border-top: 1px solid #fff;
    margin-top: 20px;
    }
    .commentview button:hover {
    font-size: 14px !important;
    padding: 0;
    margin: 0;
    }
    .viewBtn  img{
    margin-left: 10px;
    }
    .commentbtn  img {
    margin-left: 10px;
    }
    .commentbtn {
    background: transparent;
    display: flex;
    border: none;
    color: #fff;
    font-size: 14px;
    padding: 0;
    }
    .site-content {
    padding: 0px 0 0 0; 
    }
    .banner-cnt {
    display: none !important;
    }
    .videoBox .wp-post-image {
    height: 260px;
    }
    .course-column {
    margin-bottom: 50px;
    }
    button.playbtn {
    background: none;
    }
    .hsection.hsection-testi {
    display: none !important;
    }
    .wrapper {
    background-image: url(<?php echo get_theme_file_uri();?>/course-images/bgmain.png);
    background-size: contain;
    }
    button:hover {
    background: none;
    }
    .learnmore{
    text-align: left;
    left: 0px;
    font-size: 14px;
    margin-left: -33px;
    }
</style>
<div class="wrapper">
    <div class="banner">
        <h1> Paul's Courses</h1>
    </div>
    <!-- Two Blocks html start -->
    <div class="twoblocks">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="blockOne">
                        <div class="blockText">
                            <div class="numeric">01</div>
                            <div class="cousre">
                                <h2>COURSE LEVEL</h2>
                                <div class="oneblock">
                                    <span>ONE</span>
                                    <button>
                                        <image src="<?php echo get_theme_file_uri();?>/course-images/arrow.png" alt="" />
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="blockOne">
                        <div class="blockText">
                            <div class="numeric">02</div>
                            <div class="cousre">
                                <h2>COURSE LEVEL</h2>
                                <div class="oneblock">
                                    <span>TWO</span>
                                    <button>
                                        <image src="<?php echo get_theme_file_uri();?>/course-images/arrow.png" alt="" />
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Two Blocks html End -->
    <!-- Level one HTML Start -->
    <div class="levelblock">
        <div class="levelblockText text-center">
            <h2>Level 1: Personal Expansion And Spiritual Freedom</h2>
            <p>With over 5 hours of Paul's teachings, this course will help you find new meaning in your life.
                It will help you forgive others, find your personal power, establish effective, operational
                plans, and give you the inspiration you need to achieve your goals. It's time to let go of
                the past and become the person you were meant to be.
            </p>
            <a href="/course-register/"><button class="registerBtn btn btn-primary">Register</button></a>
        </div>
        <div class="boxes_wrap mb-5">
            <div class="container">
                <div class="row">
                    <?php
                        $loop = new WP_Query( array( 'post_type' => 'lp_course') );
                        if ( $loop->have_posts() ) :
                            while ( $loop->have_posts() ) : $loop->the_post(); ?>
                    <div class="col-md-4 course-column">
                        <div class="oneBox">
                            <div class="videoBox">
                                <?php if ( has_post_thumbnail() ) { ?>
                                <?php the_post_thumbnail( 'medium' ); ?>
                                <?php } ?>
                                <button class="playbtn"><img src="<?php echo get_theme_file_uri();?>/course-images/videoBtn.png" alt="video button"/></button>
                            </div>
                            <div class="boxText">
                                <div class="boxTextInner">
                                    <h2><?php echo get_the_title(); ?></h2>
                                    <p>By: Paul Wagner | <span><?php echo the_date();?></span></p>
                                    <div class="twoBtns d-flex">
                                        <a href="<?php the_permalink(); ?>"><button class="learnmore">
                                        LEARN MORE
                                        <img src="<?php echo get_theme_file_uri();?>/course-images/arrowhite.png" alt=""/>
                                        </button></a>
                                        <div class="">
                                            <label class="toggle">
                                            <input type="checkbox" checked>
                                            <span class="slider"></span>
                                            <span class="labels" data-on="OPENING" data-off="CLOSING"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="commentview">
                                    <button class="viewBtn">
                                    159 views <img src="<?php echo get_theme_file_uri();?>/course-images/eye.png" alt="eye icon"/>
                                    </button>
                                    <button class="commentbtn">Write a Comment<img src="<?php echo get_theme_file_uri();?>/course-images/editBtn.png" alt="eye icon"/> </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endwhile;
                        endif;
                        wp_reset_postdata();
                        ?>
                    <div class="levelblockText text-center">
                        <h2>Level 2: Mastering Your Life</h2>
                        <small>Level 1 Required</small>
                        <p>With over 5 hours of Paul's teachings, this course will help you find new meaning in your life.
                            It will help you forgive others, find your personal power, establish effective, operational
                            plans, and give you the inspiration you need to achieve your goals. It's time to let go of
                            the past and become the person you were meant to be.
                        </p>
                        <a href="/course-register/"><button class="registerBtn btn btn-primary">Register</button></a>
                    </div>
                </div>
                <div class="row">
                    <?php
                        $loop = new WP_Query( array( 'post_type' => 'lp_course') );
                        if ( $loop->have_posts() ) :
                            while ( $loop->have_posts() ) : $loop->the_post(); ?>
                    <div class="col-md-4 course-column">
                        <div class="oneBox">
                            <div class="videoBox">
                                <?php if ( has_post_thumbnail() ) { ?>
                                <?php the_post_thumbnail( 'medium' ); ?>
                                <?php } ?>
                                <button class="playbtn"><img src="<?php echo get_theme_file_uri();?>/course-images/videoBtn.png" alt="video button"/></button>
                            </div>
                            <div class="boxText">
                                <div class="boxTextInner">
                                    <h2><?php echo get_the_title(); ?></h2>
                                    <p>By: Paul Wagner | <span><?php echo the_date();?></span></p>
                                    <div class="twoBtns d-flex">
                                        <a href="<?php the_permalink(); ?>"><button class="learnmore">
                                        LEARN MORE
                                        <img src="<?php echo get_theme_file_uri();?>/course-images/arrowhite.png" alt=""/>
                                        </button></a>
                                        <div class="">
                                            <label class="toggle">
                                            <input type="checkbox" checked>
                                            <span class="slider"></span>
                                            <span class="labels" data-on="OPENING" data-off="CLOSING"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="commentview">
                                    <button class="viewBtn">
                                    159 views <img src="<?php echo get_theme_file_uri();?>/course-images/eye.png" alt="eye icon"/>
                                    </button>
                                    <button class="commentbtn">Write a Comment<img src="<?php echo get_theme_file_uri();?>/course-images/editBtn.png" alt="eye icon"/> </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endwhile;
                        endif;
                        wp_reset_postdata();
                        ?>
                    <div class="levelblockText text-center">
                        <h2>My Favourite Course</h2>
                        <p>With over 5 hours of Paul's teachings, this course will help you find new meaning in your life.
                            It will help you forgive others, find your personal power, establish effective, operational
                            plans, and give you the inspiration you need to achieve your goals. It's time to let go of
                            the past and become the person you were meant to be.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <?php
                        $loop = new WP_Query( array( 'post_type' => 'lp_course') );
                        if ( $loop->have_posts() ) :
                            while ( $loop->have_posts() ) : $loop->the_post(); ?>
                    <div class="col-md-4 course-column">
                        <div class="oneBox">
                            <div class="videoBox">
                                <?php if ( has_post_thumbnail() ) { ?>
                                <?php the_post_thumbnail( 'medium' ); ?>
                                <?php } ?>
                                <button class="playbtn"><img src="<?php echo get_theme_file_uri();?>/course-images/videoBtn.png" alt="video button"/></button>
                            </div>
                            <div class="boxText">
                                <div class="boxTextInner">
                                    <h2><?php echo get_the_title(); ?></h2>
                                    <p>By: Paul Wagner | <span><?php echo the_date();?></span></p>
                                    <div class="twoBtns d-flex">
                                        <a href="<?php the_permalink(); ?>"><button class="learnmore">
                                        LEARN MORE
                                        <img src="<?php echo get_theme_file_uri();?>/course-images/arrowhite.png" alt=""/>
                                        </button></a>
                                        <div class="">
                                            <label class="toggle">
                                            <input type="checkbox" checked>
                                            <span class="slider"></span>
                                            <span class="labels" data-on="OPENING" data-off="CLOSING"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="commentview">
                                    <button class="viewBtn">
                                    159 views <img src="<?php echo get_theme_file_uri();?>/course-images/eye.png" alt="eye icon"/>
                                    </button>
                                    <button class="commentbtn">Write a Comment<img src="<?php echo get_theme_file_uri();?>/course-images/editBtn.png" alt="eye icon"/> </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endwhile;
                        endif;
                        wp_reset_postdata();
                        ?>
                    <div class="col-md-12 levelblockText text-center viewall-button">
                        <button class="registerBtn btn btn-primary">View All Videos</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Level one HTML End -->
</div>
<?php 
    get_footer();
    ?>
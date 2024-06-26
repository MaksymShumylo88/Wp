<section class="hsection hsection-paul psection-paul">
	<div class="hsection-inner psection-inner">
        <div class="container">

            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <div class="st-sprtr">
                           <div class="stsprtr-in"></div>
                        </div>
                        <!-- Get ID of page defined ACF -->
                        <?php 

                            $page_id = get_page_by_title('About', OBJECT, 'page')->ID;
                         ?>
                        <h2><?php the_field('aboutpaul_heading_title', $page_id); ?></h2>
                        <p><?php the_field('aboutpaul_heading_text', $page_id); ?></p>
                   </div>
               </div>
            </div>

            <div class="row">
                <div class="col-7">
                    <div class="hpaulimg-wrap">
                        <div class="hpaulimg-in">
                             <div class="hpaul-img">
                                <img src="<?php //echo wp_upload_dir()['baseurl']; ?>/paul_product_bottom.png" alt="">
                             </div>
                         </div>
                     </div>
                 </div>

                <div class="col-5">
                    <div class="hpaul-text" style='background-image:url("<?php echo site_url(); ?>/wp-content/uploads/2020/10/commongraphic-bg.jpg");'>
                        <h2><?php //the_field('aboutpaul_title', $page_id); ?></h2>
                        <?php //the_field('aboutpaul_text', $page_id); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="psection psection-booksession" style='background-image:url("<?php echo site_url(); ?>/wp-content/uploads/promise.svg");'>
    <div class="psection-inner">
        <div class="container">
        
            <div class="row">
                <div class="col-12">
                    <div class="booksession">
                        <h2><?php the_field('booknow_title', $page_id); ?></h2>
                        <p><?php the_field('booknow_text', $page_id); ?></p>
                        <div class="row booksessionsign-row">
                            <div class="booksessionsign-col">
                                <div class="booksession-sign">
                                    <img src="<?php the_field('booknow_sign', $page_id); ?>" alt="" />
                                </div>
                            </div>
                            <div class="booksessionbtn-col">
                                <div class="site-btn booksession-btn">
                                    <a href="<?php the_field('booknow_btn_url', $page_id); ?>"><?php the_field('booknow_btn_text', $page_id); ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
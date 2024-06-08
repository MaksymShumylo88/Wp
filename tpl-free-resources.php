<?php
/*Template Name: Free Resources Page */
get_header();
?>

<section class="psection schedule">
    <div class="psection-inner">
        <div class="container">
            <div class="row">
                <div class="col-8">
                    <div class="schedule-content-part">
                        <p class="schedule-title"><?php the_field('schedule_title'); ?></p>
                        <div class="schedule-des">
                            <p><?php the_field('schedule_description'); ?></p>
                        </div>
                        <div class="site-btn fscol-btn">
                            <a href="<?php the_field('schedule_url');  ?>"  target="_blank"  data-wpel-link="internal"><?php the_field('schedule_button_name'); ?></a>
                        </div>
                    </div>
                </div>
                <div class="col-4" style="text-align: center; margin-top:1.5rem">
                    <div class="schedule-avatar">
                        <img src="<?php echo get_field('schedule_image')['url']; ?>" alt="Paul Image" width="90%">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="psection psection-fscols psection-fscolstop">
	<div class="psection-inner">
    	<div class="container">
        
        	<?php $i = 1; ?>
        	<div class="row fscols-row">
            
            <?php if( have_rows('freeresources_cnt1') ):
            // loop through the rows of data
        	while ( have_rows('freeresources_cnt1') ) : the_row(); ?>
            
            	<div class="col-6 frscol">
                	<div class="fscolimg-in">
                    	<div class="fscol-img">
                        	<a href="<?php the_sub_field('frs1_btn_url'); ?>" target="_blank" ><img src="<?php the_sub_field('frs1_image'); ?>" alt="" /></a>
        				</div>
        			</div>
                    <div class="fscol-title res">
                    	<div class="st-sprtr">
                       		<div class="stsprtr-in"></div>
                       	</div>
                       	<h2><?php the_sub_field('frs1_title'); ?></h2>
        			</div>
                        
                   	<div class="fscol-text">
                    	<?php echo get_sub_field('frs1_text'); ?>
        			</div>

                <?php if($i !=1 ){ ?>

                   	<div  class="site-btn fscol-btn">
                    	<a href="<?php the_sub_field('frs1_btn_url'); ?>" target="_blank" ><?php echo get_sub_field('frs1_btn_text'); ?></a>
        			      </div>
                 <?php }else{?>
                    
                    <div style="text-align: center; margin-bottom: 30px;">
						<div style="display: inline-block; padding: 8px 16px; background-color: #ff10f0; color: white; font-weight: bold; border-radius: 5px; font-size: 23px; height: 56px; line-height: 34px;">
							<a  target="_blank" style="color: white; text-decoration: none; display: flex; align-items: center; justify-content: center; height: 100%;" href="<?php the_sub_field('frs1_btn_url'); ?>"><?php echo get_sub_field('frs1_btn_text'); ?></a>
						</div>
					</div>
                 
                 <?php }?>   
        		</div>
                
            <?php if($i % 2 == 0) {echo '</div><div class="row fscols-row">';} ?>
         	<?php $i++; endwhile; endif; ?>
        	</div>
        
    	</div>
  	</div>
</section>
            
<section class="psection psection-fscols">
	<div class="psection-inner">
    	<div class="container">
        
        	<?php $i = 1; ?>
        	<div class="row fscols-row">
            
            <?php if( have_rows('freeresources_cnt2') ):
            // loop through the rows of data
        	while ( have_rows('freeresources_cnt2') ) : the_row(); ?>
            
            	<div class="col-6 frscol">
                	<div class="fscolimg-in">
                    	<div class="fscol-img">
                        	<a target="_blank"  href="<?php the_sub_field('frs2_btn_url'); ?>"><img src="<?php the_sub_field('frs2_image'); ?>" alt="" /></a>
        				</div>
        			</div>
                    <div class="fscol-title res">
                    	<div class="st-sprtr">
                       		<div class="stsprtr-in"></div>
                       	</div>
                       	<h2><?php the_sub_field('frs2_title'); ?></h2>
        			</div>
                        
                   	<div class="fscol-text">
                    	<?php the_sub_field('frs2_text'); ?>
        			</div>
                   	<div class="site-btn fscol-btn">
                    	<a target="_blank"  href="<?php the_sub_field('frs2_btn_url'); ?>"><?php echo get_sub_field('frs2_btn_text'); ?></a>
        			</div>
        		</div>
                
            <?php if($i % 2 == 0) {echo '</div><div class="row fscols-row">';} ?>
         	<?php $i++; endwhile; endif; ?>
        	</div>
        
    	</div>
  	</div>
</section>

<section class="psection psection-fsys">
	<div class="psection-inner">
    	<div class="container">
               
            <div class="row fsys-row">
            	<div class="col-12">
                	<div class="fsys-img">
                        <a target="_blank"  target="_blank" href="<?php the_field('frs_bannerlink'); ?>">
                            <img src="<?php the_field('frs_bannerimg'); ?>" alt="" />
                        </a>
                    </div>
                </div>
            </div>
            
     	</div>
  	</div>
</section>
                
                          
<?php 
get_footer();
?>

<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

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

    <header id="masthead" class="site-header" role="banner">
    	<div class="header-top">
        	<div class="container">
            	<div class="row">
                	<div class="ht-col ht-left">
                    	<div class="logo">
                        	<?php the_custom_logo(); ?>
                    	</div>
                    </div>
                    <div class="ht-col ht-right">
                    	<div class="headerpc-btn">
                       		<a href="https://www.paulwagner.com/shop/the-personality-cards-divine-inspiration-for-life-love-relationships/">
                         		<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/hpc-btn.png" alt="">
                       		</a>
                 		</div>
                        <div class="ht-cart">
                        	<?php echo do_shortcode('[woo-minicart]') ?>
                        </div>
                    </div>
        		</div>
        	</div>
        </div>

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
    </header><!-- #masthead -->

	<?php
		if (get_field('page_banner_image') == NULL || get_field('page_banner_image') == ""){

         if(! is_single()) {
            ?>
        <div class="banner-wrap">
       		<div class="banner-cnt" style='background-image:url("<?php the_field('banner_image', 'option'); ?>");'>
            	<div class="banner-inner">
                	<div class="banner-text">
                    	<?php if (get_field('page_banner_title') == NULL || get_field('page_banner_title') == ""){ ?>
                            <h1><?php echo get_the_title(); ?></h1>
                        <?php }else{ ?>
                            <h1><?php the_field('page_banner_title'); ?></h1>
                        <?php } ?>
                    </div>
            	</div>
          	</div>
      	</div>
        <?php } } else { ?>
        <div class="banner-wrap">
       		<div class="banner-cnt" style='background-image:url("<?php the_field('page_banner_image'); ?>");'>
                <?php if (get_field('hero_sub_title')) { ?>
                    <div class="banner-inner service-banner">
                        <div class="banner-text">
                            <p class="services-banner-title"><?php the_field('page_banner_title'); ?></p>
                        </div>
                        <div>
                            <p class="services-hero-sub-title"><?php the_field('hero_sub_title'); ?></p>
                            <!-- Check if current page use Business template. -->
                            <?php if (get_field('hero_button_title')){ ?>
                                <p>Visit <a style="text-decoration: underline; color:white;" href="<?php the_field('hero_button_url'); ?>" target="_blank"><?php the_field('hero_button_title'); ?></a>.</p>
                            <?php } ?>
                        </div>
                    </div>
                <?php } else { ?>
                    <div class="banner-inner">
                        <div class="banner-text">
                            <?php if (get_field('page_banner_title') == NULL || get_field('page_banner_title') == ""){ ?>
                                <p class="services-banner-title"><?php echo get_the_title(); ?></p>
                            <?php }else{ ?>
                                <p class="services-banner-title"><?php the_field('page_banner_title'); ?></p>
                            <?php } ?>
                        </div>
                    </div>
                <?php } ?>
          	</div>
      	</div>
    <?php } ?>

	<div class="site-content-contain">
		<div id="content" class="site-content">
		<?php

        $show_intu_banner = get_field('show_initiative_session_banner');

        if( !is_null($show_intu_banner) && count($show_intu_banner) && trim($show_intu_banner[0]) == 'Yes:Yes' ) { ?>
        	<section class="psection psection-fst">
                <div class="psection-inner">
                    <div class="container">

                        <div class="row">
                            <div class="col-12">
                                <div class="fst-wrap dark-section">
                                    <a href="<?php the_field('fbsession_url','option'); ?>">
                                        <div class="fst-row">
                                            <div class="fst-col fstcol-img">
                                                <div class="fstcol-in">
                                                    <div class="fstpaul-img">
                                                        <img src="<?php the_field('fbsession_img','option'); ?>" alt="" />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="fst-col fstcol-text">
                                                <div class="fstcol-in">
                                                    <h2><?php the_field('fbsession_title','option'); ?></h2>
                                                </div>
                                            </div>

                                            <div class="fst-col fstcol-sign">
                                                <div class="fstcol-in">
                                                    <div class="fstpaul-sign">
                                                        <img src="<?php the_field('fbsession_sign','option'); ?>" alt="" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

        <?php } ?>
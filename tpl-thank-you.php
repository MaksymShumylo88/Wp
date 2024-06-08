<?php
/*Template Name: Thank You Page*/
?>
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
                    	<?php /*?><div class="ht-btns">
                        	<a href="<?php the_field('free_yourself_course','option'); ?>"><?php the_field('label_one_header','option'); ?></a>
                            <a href="<?php the_field('coach_with_paul','option'); ?>"><?php the_field('label_two_heaber','option'); ?></a>
                        </div><?php */?>
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
                            <div class="navigation-top">
                                <?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
                            </div><!-- .navigation-top -->
                        <?php endif; ?>

                        <div class="hsearch-wrap">
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
    <section class="hsection">
        <div class="hsection-inner">
            <div class="video-summary" style='background-image:url("<?php the_field('background') ?>"); text-align:center;'>
                <div class="container">
                    <img src="<?php the_field('avatar') ?>" class="thk-avatar">
                    <p class="thk-txt"><?php the_field('text_1') ?></p>
                    <p class="thk-title"><?php the_field('main_text') ?>
                        <span class="thk-webinar-txt">webniar.</span>
                    </p>
                    <p class="thk-bottom-txt" style="font-style: italic;"><?php the_field('text_2') ?></p>
                    <a href="<?php the_field('return_url') ?>">
                        <p class="thk-return-txt"><?php the_field('return_text') ?></p>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <?php wp_footer(); ?>
</div>
</body>
</html>
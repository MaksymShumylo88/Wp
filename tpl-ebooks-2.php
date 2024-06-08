<?php
/*Template Name: Ebooks Landing */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <link rel='stylesheet' id='' href='<?php echo get_stylesheet_directory_uri(); ?>/assets/css/font-awesome.min.css'
        type='text/css' media='all' />

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <?php wp_head(); ?>
</head>

    <section class="hero">
        <div class="container">
            <header>
                <a href="" class="logo">
                    <img src="<?php echo get_field('ebook_logo')['url']; ?>" alt="logo">
                </a>
                <ul class="social-network">
                    <?php
								if (get_field('facebook_url', 'option') !== NULL && get_field('facebook_url', 'option') !== "") {
							?>
                    <li>
                        <a target="_blank" href="<?php the_field('facebook_url', 'option'); ?>">
                            <i class="fa fa-facebook"></i>
                        </a>
                    </li>
                    <?php
								}
								if (get_field('twitter_url', 'option') !== NULL && get_field('twitter_url', 'option') !== "") {
							?>
                    <li>
                        <a target="_blank" href="<?php the_field('twitter_url', 'option'); ?>">
                            <i class="fa fa-twitter"></i>
                        </a>
                    </li>
                    <?php
								}
								if (get_field('instagram_url', 'option') !== NULL && get_field('instagram_url', 'option') !== "") {
							?>
                    <li>
                        <a target="_blank" href="<?php the_field('instagram_url', 'option'); ?>">
                            <i class="fa fa-instagram"></i>
                        </a>
                    </li>
                    <?php
								}
								if (get_field('linkedin_url', 'option') !== NULL && get_field('linkedin_url', 'option') !== "") {
							?>
                    <li>
                        <a target="_blank" href="<?php the_field('linkedin_url', 'option'); ?>">
                            <i class="fa fa-linkedin"></i>
                        </a>
                    </li>
                    <?php
								}
							?>
                </ul>
            </header>
            <div class="hero-content">
                <h1 class="title"><?php the_title(); ?></h1>
                <p class="price">$<?php the_field('ebook_price'); ?></p>
                <p class="descrption"><?php the_field('ebook_descrption'); ?></p>
                <div class="block-buttons">
                    <a href="<?php the_field('button_link'); ?>" class="link-buy link-buy-now"><?php the_field('ebook_button_text'); ?></a>
                    <a href="<?php the_field('button_text_link'); ?>" class="link-buy link-buy-now-discount"><?php the_field('ebook_button_text_2'); ?></a>
                </div>
                <p class="nodes"><?php the_field('ebook_nodes'); ?></p>
            </div>
            <img src="<?php echo get_field('product_image')['url']; ?>" class="ebook-product"
                alt="<?php echo get_field('product_image')['alt']; ?>">
        </div>
    </section>
    <section class="learn">
        <div class="container">
            <h2 class="title-section"><?php the_field('ebook_learn_title'); ?></h2>
            <div class="learn-items">
                <?php if( have_rows('ebook_learn_items') ): ?>
                <?php $count=1; while( have_rows('ebook_learn_items') ): the_row(); 
        ?>
                <div class="learn-item">
                    <div class="counter"><?php echo $count; ?></div>
                    <p class="learn-item-title"><?php the_sub_field('ebook_learn_title'); ?></p>
                    <p class="learn-item-text"><?php the_sub_field('ebook_learn_text'); ?></p>
                </div>
                <?php $count++; endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <section class="buy" style="background-image: url(<?php echo get_field('ebook_buy_this_background')['url']; ?>);">
        <div class="container">
            <h2 class="title-section"><?php the_field('ebook_buy_this_title'); ?></h2>
            <p class="buy-text"><?php the_field('ebook_buy_this_text'); ?></p>
            <a href="<?php the_field('buy_this_button_url'); ?>" class="link-buy-gradient"><?php the_field('ebook_buy_this_button_text'); ?></a>
        </div>
    </section>
    <section class="gallery">
        <div class="container">
            <h2 class="title-section"><?php the_field('ebook_gallery_title'); ?></h2>
            <div class="gallery-photos">
                <?php if( have_rows('ebook_gallery_photos') ): ?>
                <?php while( have_rows('ebook_gallery_photos') ): the_row(); 
                $image = get_sub_field('ebook_gallery_photo');
        ?>
                <img src="<?php echo $image['url']; ?>" class="gallery-photo" alt="<?php echo $image['alt']; ?>">
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <section class="quote" style="background-image: url(<?php echo get_field('ebook_quote_background')['url']; ?>);">
        <div class="container">
            <div class="quote-text"><?php the_field('ebook_quote_text'); ?></div>
        </div>
    </section>
    <!-- <section class="newsletter">
        <h2 class="title-section-bg"><?php //the_field('ebook_newsletter_title'); ?></h2>
        <div class="container">
            <div class="inner-newletter">
                <div class="form">
                    <?php //echo do_shortcode( '[gravityform id="3" title="false" description="false" ajax="true"]' ); ?>
                </div>
                <img src="<?php //echo get_field('ebook_newsletter_photo')['url']; ?>" class="newsletter-photo"
                    alt="<?php //echo get_field('ebook_newsletter_photo')['alt']; ?>">
            </div>
        </div>
    </section> -->
    <section class="about">
        <h2 class="title-section-bg"><?php the_field('ebook_about_title'); ?></h2>
        <div class="container">
            <img src="<?php echo get_field('ebook_about_photo')['url']; ?>" class="about-photo"
                alt="<?php echo get_field('ebook_about_photo')['alt']; ?>">
            <div class="about-info">
                <h3 class="about-name"><?php the_field('ebook_about_author'); ?></h3>
                <div class="about-text"><?php the_field('ebook_about_text'); ?></div>
            </div>
        </div>
    </section>
    <section class="bundle-offer"
        style="background-image: url(<?php echo get_field('ebook_bundle_offer_background')['url']; ?>);">
        <div class="container">
            <h2 class="title-section"><?php the_field('ebook_bundle_offer_title'); ?></h2>
            <p class="bundle-offer-text"><?php the_field('ebook_bundle_offer_text'); ?></p>
            <img src="<?php echo get_field('ebook_bundle_offer_image')['url']; ?>" class="bundle-offer-photo"
                alt="<?php echo get_field('ebook_bundle_offer_image')['alt']; ?>">
            <p class="bundle-offer-price">
                <span class="bundle-offer-old-price"><?php the_field('ebook_bundle_offer_old_price'); ?></span>
                <span class="bundle-offer-new-price"><?php the_field('ebook_bundle_offer_new_price'); ?></span>
            </p>
            <a href="<?php the_field('bundle_offer_button_url'); ?>" class="link-buy-gradient"><?php the_field('ebook_bundle_offer_text_button'); ?></a>
        </div>
    </section>
    <section class="bottom-section"
        style="background-image: url(<?php echo get_field('bottom_section_background')['url']; ?>);">
        <div class="container container-bottom-section">
            <section class="join-our">
                <h2 class="title-section"><?php the_field('ebook_join_our_title'); ?></h2>
                <p class="join-our-text"><?php the_field('ebook_join_our_text'); ?></p>
                <div class="wrap-form"
                    style="background-image: url(<?php echo get_field('ebook_join_our_background_form')['url']; ?>);">
                    <?php echo do_shortcode( '[gravityform id="3" title="false" description="false" ajax="true"]' ); ?>
                    <p class="join-our-notes-form"><?php the_field('ebook_join_our_notes_form'); ?></p>
                </div>
            </section>
            <section class="book-now"
                style="background-image: url(<?php echo get_field('ebook_book_now_background')['url']; ?>);">
                <img src="<?php echo get_field('ebook_book_now_photo')['url']; ?>" class="book-now-photo"
                    alt="<?php echo get_field('ebook_book_now_photo')['alt']; ?>">
                <div class="book-now-info">
                    <h2 class="book-now-title"><?php the_field('ebook_book_now_title'); ?></h2>
                    <p class="book-now-text"><?php the_field('ebook_book_now_text'); ?></p>
                    <a href="<?php the_field('book_now_button_url'); ?>" class="book-now-link"><?php the_field('ebook_book_now_text_button'); ?></a>
                </div>
            </section>
        </div>
    </section>
    
    <?php get_footer(); ?>
    <script>
        jQuery(document).ready(function($){
            $('#gform_3 .ginput_container_checkbox input').prop("checked", "checked");
        });
    </script>

</html>
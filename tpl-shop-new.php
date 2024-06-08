<?php
/*Template Name: Shop New Page */
get_header();
?>

<div style="text-align: center; margin-bottom: 30px;">
	<div style="display: inline-block; padding: 8px 16px; background-color: #ff10f0; color: white; font-weight: bold; border-radius: 5px; font-size: 23px; height: 50px; line-height: 34px;">
		<a style="color: white; text-decoration: none; display: flex; align-items: center; justify-content: center; height: 100%;" href="https://Patreon.com/krishnakalesh">Join My Free Community</a>
	</div>
</div>

<section class="psection psection-shopproduct">
	<div class="psection-inner">
    <div class="container">
			<div style="margin-bottom: 30px">
				<h2>Best Sellers</h2>
			</div>
			<div class="row">
				<div class="col-12">
						<?php the_field('best_sellers'); ?>
					</div>
			</div>
    </div>
  </div>
</section>

<section class="psection psection-shopproduct">
	<div class="psection-inner">
        <div class="container">
			<div style="margin-bottom: 30px">
				<h2>Oracle Cards & Divination</h2>
			</div>
			<div class="row">
				<div class="col-12">
						<?php the_field('oracle_cards_more'); ?>
					</div>
			</div>
        </div>
    </div>
</section>

<section class="psection psection-shopproduct">
	<div class="psection-inner">
        <div class="container">
			<div style="margin-bottom: 30px">
				<h2>Readings & Sessions</h2>
			</div>
			<div class="row">
				<div class="col-12">
					<?php the_field('readings_consultations'); ?>
				</div>
			</div>
        </div>
    </div>
</section>

<section class="psection psection-shopproduct">
	<div class="psection-inner">
        <div class="container">
			<div style="margin-bottom: 30px">
				<h2>Courses & Workshops</h2>
			</div>
			<div class="row">
				<div class="col-12">
					<?php the_field('courses_workshops'); ?>
				</div>
			</div>
        </div>
    </div>
</section>

<section class="psection psection-shopproduct">
	<div class="psection-inner">
        <div class="container">
			<div style="margin-bottom: 30px">
				<h2>Transformational Value Bundles</h2>
			</div>
			<div class="row">
				<div class="col-12">
					<?php the_field('transformational_bundles'); ?>
				</div>
			</div>
        </div>
    </div>
</section>

<section class="psection psection-shopproduct">
	<div class="psection-inner">
    <div class="container">
			<div style="margin-bottom: 30px">
				<h2>Books (Softcover & Ebooks)</h2>
			</div>
			<div class="row">
				<div class="col-12">
					<div class="woocommerce columns-3">
						<ul class="products columns-3">
							<?php if( have_rows('books_grid') ):
                            while ( have_rows('books_grid') ) : the_row(); ?>
                                <li class="product">
									<a href="<?php the_sub_field('link') ?>" class="pimglink">
										<img width="250" height="250" src="<?php the_sub_field('avatar') ?>">
									</a>
									<div class="custom-product-wrapper">
										<a href="<?php the_sub_field('link') ?>" class="pimglink">
											<h2 class="woocommerce-loop-product__title"><?php the_sub_field('title') ?></h2>
										</a>
										<div class="product-short-description" style="margin-bottom: 10px;">
											<?php the_sub_field('short_description'); ?>  <!-- Assuming 'short_description' is your ACF field for the product's short description -->
										</div>
										<div>
											<span class="price">
												<span class="woocommerce-Price-amount amount">
												    <?php if ( get_sub_field( 'price' )) : ?>
													<bdi><span class="woocommerce-Price-currencySymbol">$</span><?php the_sub_field('price') ?></bdi>
													<?php endif; ?>
												</span>
											</span>
											<a href="<?php the_sub_field('link') ?>" class="paul button product_type_simple add_to_cart_button ">Buy Now</a>
										</div>
									</div>
								</li>
                            <?php endwhile; endif; ?>
						</ul>
					</div>
				</div>
			</div>
    </div>
  </div>
</section>

<?php
get_footer();
?>

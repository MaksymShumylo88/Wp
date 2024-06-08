<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
    wp_enqueue_style( 'child-style', get_stylesheet_uri(),
        array( 'parenthandle' ), 
        wp_get_theme()->get('Version') // this only works if you have Version in the style header
    );
    wp_enqueue_style( 'child-theme-css', get_stylesheet_directory_uri() . '/style.css', []);
}

// This theme uses wp_nav_menu() in two locations.
	register_nav_menus(
		array(
			'top'    => __( 'Top Menu', 'twentyseventeen' ),
			'header_login_menu' => __( 'Header Login Menu', 'twentyseventeen' ),
			'footer' => __( 'Footer Menu', 'twentyseventeen' ),
			'social' => __( 'Social Links Menu', 'twentyseventeen' ),
		)
	);
	 

/**
 * Global Setting.
 */

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Header Settings',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'theme-general-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Banner Settings',
		'menu_title'	=> 'Banner',
		'parent_slug'	=> 'theme-general-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Site Info Settings',
		'menu_title'	=> 'Site Info',
		'parent_slug'	=> 'theme-general-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Social Menu Settings',
		'menu_title'	=> 'Social Menus',
		'parent_slug'	=> 'theme-general-settings',
	));

  acf_add_options_sub_page(array(
    'page_title'  => 'Courser Detail',
    'menu_title'  => 'Courser Detail',
    'parent_slug' => 'theme-general-settings',
  ));

 acf_add_options_sub_page(array(
    'page_title'  => 'Shop Order Emails',
    'menu_title'  => 'Shop Order Emails',
    'parent_slug' => 'theme-general-settings',
  ));

  acf_add_options_sub_page(array(
    'page_title'  => 'Shop Marketing Emails',
    'menu_title'  => 'Shop Marketing Emails',
    'parent_slug' => 'theme-general-settings',
  )); 
  acf_add_options_sub_page(array(
    'page_title'  => 'Fields for New Shop',
    'menu_title'  => 'Fields for New Shop',
    'parent_slug' => 'theme-general-settings',
  )); 
}


// Extra Function :

// Add short description directly under the product title
add_action('woocommerce_shop_loop_item_title', 'add_product_short_description_in_category', 11);

function add_product_short_description_in_category() {
    global $product;
    if (!$product->get_short_description()) return;  // Ensures there is a short description before outputting.

    echo '<div class="category-product-short-description">';
    echo wp_trim_words($product->get_short_description(), 20); // Limits the word count to 20
    echo '</div>';
}

// Remove the short description (excerpt) from the single product summary
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );

// Add the full product description to the single product summary
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_description', 20 );

/**
 * Output the full product description.
 */
function woocommerce_template_single_description() {
    wc_get_template( 'single-product/tabs/description.php' );
}

function remove_postauthor_section($content) {
    // Regular expression pattern to remove the postauthor-section div and its content
    $pattern = '/<div class="postauthor-section">(?>[^<]+|<(?!\/div>)*|(?R))*<\/div>/is';
    $content = preg_replace($pattern, '', $content);

    return $content;
}
// Apply the filter only on product pages
function apply_remove_postauthor_section_filter() {
    if (is_product()) {
        add_filter('the_content', 'remove_postauthor_section', 20);
    }
}
add_action('wp', 'apply_remove_postauthor_section_filter');


/* to get the price*/
add_shortcode( 'cl_product_price', 'cl_woo_product_price_shortcode' );
function cl_woo_product_price_shortcode( $atts ) {	
	$atts = shortcode_atts( array(
		'id' => null
	), $atts, 'cl_product_price' ); 
	if ( empty( $atts[ 'id' ] ) ) {
		return '';
	} 
	$product = wc_get_product( $atts['id'] ); 
	if ( ! $product ) {
		return '';
	} 
	return $product->get_price_html();
}

/* to get description*/
add_shortcode( 'product_description', 'display_product_description' );
function display_product_description( $atts ){
    $atts = shortcode_atts( array(
        'id' => get_the_id(),
    ), $atts, 'product_description' );

    global $product;

    if ( ! is_a( $product, 'WC_Product') )
        $product = wc_get_product($atts['id']);

    return $product->get_description();
}

//search form
function shapeSpace_display_search_form() {
	return get_search_form(false);
}
add_shortcode('display_search_form', 'shapeSpace_display_search_form');

// Remove pages from search results
// function exclude_pages_from_search($query) {
//     if ( $query->is_main_query() && is_search() ) {
//         $query->set( 'post_type', 'post' );
//     }
//     return $query;
// }
// add_filter( 'pre_get_posts','exclude_pages_from_search' );



/*function category_single_product() {

    $product_cats = wp_get_post_terms( get_the_ID(), 'product_cat' );

    if ($product_cats && ! is_wp_error ($product_cats )) {

        $single_cat = array_shift( $product_cats );
        echo '<div class="product_category_title"><span>'.$single_cat->name.'</span></div>';

    }
}

add_action( 'woocommerce_before_shop_loop_item_title', 'category_single_product', 25 );*/


add_action('woocommerce_before_shop_loop_item_title', 'wp_store_wrapper_woocommerce_before_shop_loop_item_title1', 20);
add_action('woocommerce_after_shop_loop_item', 'wp_store_wrapper_woocommerce_after_shop_loop_item_title1', 12);
	// start wrap-image-sale div
	function wp_store_wrapper_woocommerce_before_shop_loop_item_title1() {
		echo '<div class="custom-product-wrapper">';
	}

	function wp_store_wrapper_woocommerce_after_shop_loop_item_title1() {
		echo '</div>';
	}
  
  
  /*override checkout fields for virtual products*/

function simplify_checkout_virtual( $fields ) {
    
   $only_virtual = true;
    
   foreach( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
      if (!$cart_item['data']->is_virtual())
      $only_virtual = false;   
   }
     
    if( $only_virtual ) {
       /*unset( $fields['billing']['billing_company'] );
       unset( $fields['billing']['billing_address_1'] );
       unset( $fields['billing']['billing_address_2'] );
       unset( $fields['billing']['billing_city'] );
       unset( $fields['billing']['billing_postcode'] );
       unset( $fields['billing']['billing_country'] );
       unset( $fields['billing']['billing_state'] );
       unset( $fields['billing']['billing_phone'] );*/

       unset( $fields['billing']['billing_company'] );
      // unset( $fields['billing']['billing_country']);
       unset( $fields['billing']['billing_phone'] );

     } else {
       unset( $fields['billing']['billing_company'] );
      // unset( $fields['billing']['billing_country']);
       unset( $fields['billing']['billing_phone'] );
     }
     
     return $fields;
}

 add_filter( 'woocommerce_checkout_fields' , 'simplify_checkout_virtual' );

/**
 * Remove related products output
 */
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );

/* cart empty message */
add_filter( 'wc_empty_cart_message', 'custom_wc_empty_cart_message' );
function custom_wc_empty_cart_message() {
  return '<span class="emptycart">Let\'s buy something fun.<br/> How about The Personality Cards! <a href="'.get_site_url().'/shop" class="toshop">CLICK HERE</a> to visit the store.</span>';
}

/*additional terms on particular product */
add_action( 'woocommerce_review_order_before_submit', 'bbloomer_add_checkout_per_product_terms', 9 );
    
function bbloomer_add_checkout_per_product_terms() {
  
$product_ids = array( 3921, 3939, 3940, 10255,10254,10051,7026,7061,7527,7525,7529,10118,9);
$is_in_cart = false;

// Iterating through cart items and check
foreach( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
    if( in_array( $cart_item['data']->get_id(), $product_ids ) ) {
        $is_in_cart = true; 
        break; 
    }
}

  
if ( $is_in_cart ) {
  
?>
<!-- <p class="form-row terms wc-terms-and-conditions validate-required w-100">
<label class="woocommerce-form__label woocommerce-form__label-for-checkbox checkbox">
<input type="checkbox" class="woocommerce-form__input woocommerce-form__input-checkbox input-checkbox" name="terms-1" <?php checked( apply_filters( 'woocommerce_terms_is_checked_default', isset( $_POST['terms-1'] ) ), true ); ?> id="terms-1"> <span>I agree to this site's <a href="<?php echo home_url('privacy-policy');?>" class="woocommerce-privacy-policy-link" target="_blank">Privacy Policy</a>, <a href="<?php echo home_url('terms-and-conditions');?>" class="woocommerce-privacy-policy-link" target="_blank">Terms and Conditions</a>.</span> <span class="required">*</span>
</label>
<input type="hidden" name="terms-1-field" value="true">
</p> -->

<p class="form-row terms wc-terms-and-conditions validate-required w-100">
<label class="woocommerce-form__label woocommerce-form__label-for-checkbox checkbox">
<input type="checkbox" class="woocommerce-form__input woocommerce-form__input-checkbox input-checkbox" name="terms-2" <?php checked( apply_filters( 'woocommerce_terms_is_checked_default', isset( $_POST['terms-2'] ) ), true ); ?> id="terms-2"> <span>I agree to this site's <a href="<?php echo home_url('consent-and-waiver');?>" class="woocommerce-privacy-policy-link" target="_blank">Consent and Waiver</a></span><a class="arrow" href="javascript:void(0)"></a> <span class="required">*</span>
</label>
<input type="hidden" name="terms-2-field" value="true">
</p>

<div class="consent-and-waiver" style="max-height: 200px; overflow: auto; display: none;">
  <?php echo get_field( "consent_and_waiver_details", 'option' ); ?>
</div>
   
<?php
 }
}


   
// Show notice if customer does not tick either terms
  
add_action( 'woocommerce_checkout_process', 'bbloomer_not_approved_terms_1' );
   
function bbloomer_not_approved_terms_1() {
    /*if ( $_POST['terms-1-field'] == true ) {
      if ( empty( $_POST['terms-1'] ) ) {
           wc_add_notice( __( 'Please agree to Privacy Policy' ), 'error' );         
      }
   }*/

   if ( $_POST['terms-2-field'] == true ) {
      if ( empty( $_POST['terms-2'] ) ) {
           wc_add_notice( __( 'Please agree to Consent and Waiver' ), 'error' );         
      }
   }

}


add_filter( 'woocommerce_product_tabs', 'woo_remove_product_tabs', 98 );

function woo_remove_product_tabs( $tabs ) {

    unset( $tabs['description'] );      	// Remove the description tab
    unset( $tabs['additional_information'] );  	// Remove the additional information tab

    return $tabs;

}

/**
 * Register a custom menu page.
 */
add_action( 'admin_menu', 'register_my_custom_menu_page' );
function register_my_custom_menu_page() {
  // add_menu_page( $page_title, $menu_title, $capability, $menu_slug, $function, $icon_url, $position );
  add_menu_page( 'Old Site Suscriber', 'Old Site Suscriber', 'manage_options', 'old_site.php', 'old_site_data', 'dashicons-welcome-widgets-menus', 90 );
}




function old_site_data(){
	include('old_site.php');
}




function download_resourse(){ 

  $download_resourse_form .= '<div class="hbook-graphic">
          <div class="hbookgraphic-container">
               <div class="hbookgraphic-inner">
                  <div class="hbookgraphic-row">
                      <div class="hbookgraphic-col hbookgraphic-book">
                          <div class="hbookgraphicbook-in">
                              <img src="'.site_url().'/wp-content/uploads/book-graphic.png" alt="How to live an exuberant life" />
                            </div>
                    </div>
                        
                        <div class="hbookgraphic-col hbookgraphic-text">
                          <div class="hbookgraphictext-in">
                              <p>Download My Free Report</p>
                                <h2>“How To Live An Exuberant Life”</h2>
                            </div>
                    </div>';
                        
                         $download_resourse_form .= '<div class="hbookgraphic-col hbookgraphic-form">';
                          $download_resourse_form .= '<div class="hbookgraphicform-in">';
                               $download_resourse_form .= do_shortcode('[gravityform id="4" title="false" description="false" ajax="true"]'); 
                             $download_resourse_form .='</div>
                    </div>
                  </div>
                 </div>
            </div>
        </div>';

     return $download_resourse_form;   
}
add_shortcode('download_resourse_form','download_resourse');


function personality_card(){
   return '<a href=""><img src="<?php echo site_url() ?>/wp-content/uploads/article-pc.jpg" alt="" width="275" height="397" class="alignright size-full" /></a>';
}
add_shortcode('personality_card','personality_card');

function one_hour_session(){
   return '<a href=""><img src="<?php echo site_url() ?>/wp-content/uploads/article-author.jpg" alt="" width="271" height="398" class="alignleft size-full" /></a>';
}
add_shortcode('one_hour_session','one_hour_session');

function reading_vedic_report(){
   return '<a href=""><img src="<?php echo site_url() ?>/wp-content/uploads/article-intuitivereading.jpg" alt="" width="274" height="400" class="alignright size-full" /></a>';
}
add_shortcode('reading_vedic_report','reading_vedic_report');



/**
 * Auto Complete all WooCommerce orders.
 */
// add_action( 'woocommerce_thankyou', 'custom_woocommerce_auto_complete_order' );
// function custom_woocommerce_auto_complete_order( $order_id ) { 
//     if ( ! $order_id ) {
//         return;
//     }

//     $order = wc_get_order( $order_id );
//     $order->update_status( 'completed' );
// }

// Review add quickly
add_filter('comment_flood_filter', '__return_false');

remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_upsell_display', 15 );
 
// ---------------------------
// 2. Echo Upsells In Another Position
 
add_action( 'woocommerce_after_single_product_summary', 'bbloomer_woocommerce_output_upsells', 5 );
 
function bbloomer_woocommerce_output_upsells() {
  woocommerce_upsell_display( 3,3 ); // Display max 3 products, 3 per row
}

// Custom Code featured image thumbnails in WordPress RSS Feeds
function wplogout_post_thumbnails_in_feeds( $content ) {
    global $post;
    if( has_post_thumbnail( $post->ID ) ) {
        $content = '<p>' . get_the_post_thumbnail( $post->ID ) . '</p>' . $content;
    }
    return $content;
}
add_filter( 'the_excerpt_rss', 'wplogout_post_thumbnails_in_feeds' );
add_filter( 'the_content_feed', 'wplogout_post_thumbnails_in_feeds' );


add_filter('woocommerce_get_availability_text', 'themeprefix_change_soldout', 10, 2 );

/**
* Change Sold Out Text to Something Else
*/
function themeprefix_change_soldout ( $text, $product) {
if ( !$product->is_in_stock() ) {
		$text = '<div class="apply_now_btn"><a href="https://www.paulwagner.com/session-questionnaire/">Apply Now</a></div>';
	}
	return $text;
}

// To change add to cart text on single product page
add_filter( 'woocommerce_product_single_add_to_cart_text', 'woocommerce_custom_single_add_to_cart_text' ); 
function woocommerce_custom_single_add_to_cart_text() {


    if(has_term( 4517, 'product_cat' )){
            return __( 'Buy Now', 'woocommerce' );
        }else{
           return __( 'ADD TO CART', 'woocommerce' );
        }

     
}

// To change add to cart text on product archives(Collection) page
add_filter( 'woocommerce_product_add_to_cart_text', 'woocommerce_custom_product_add_to_cart_text' );  
function woocommerce_custom_product_add_to_cart_text($text) {

	if( 'Read more' == $text ) {
        return __( 'Apply Now', 'woocommerce' );
    }else{

        if(has_term( 4517, 'product_cat' )){
            return __( 'Learn More', 'woocommerce' );
        }else{
            return __( 'Buy Now', 'woocommerce' );
        }
    	
	}
}

// Alter WooCommerce View Cart Text
add_filter( 'gettext', function( $translated_text ) {
    if ( 'View cart' === $translated_text ) {
        $translated_text = 'ADDED TO CART';
    }
    return $translated_text;
} );

add_filter( 'woocommerce_product_add_to_cart_url', 'out_of_stock_read_more_url', 50, 2 );
function out_of_stock_read_more_url( $link, $product  ) {
    // Only for "Out of stock" products
    if( $product->get_stock_status() == 'outofstock' ){

        // Here below we change the link
        $link = home_url("/session-questionnaire/");
    }
    return $link;
}

add_filter( 'woocommerce_loop_add_to_cart_link', 'ts_replace_add_to_cart_button', 10, 2 );
function ts_replace_add_to_cart_button( $button, $product ) {
//if (is_product_category() || is_shop()) {
            $button_text = __("View Product", "woocommerce");
            $button_link = $product->get_permalink();
            $product_id = $product->get_id();
            if ($product_id === 15758)
              $button = '<a href="'.$button_link.'" class="paul button product_type_simple add_to_cart_button" rel="nofollow" data-wpel-link="internal">Learn More</a>';
            else
              $button = '<a href="'.$button_link.'" class="paul button product_type_simple add_to_cart_button " rel="nofollow" data-wpel-link="internal">Buy Now</a>';

          //  $button = '<a class="button" href="' . $button_link . '">' . $button_text . '</a>';
            return $button;
//}
}

// add_filter( 'woocommerce_get_price_html', 'hide_price_target_product', 10, 2 );
// function hide_price_target_product( $price, $product ) {
//   $product_id = $product->get_id();
//   if (!is_product() && $product_id === 15758) {
//     return ''; // Empty string = no price!
//   }

//   return $price;
// }

/** 
*  Set product title as link to product page
**/
// define the woocommerce_shop_loop_item_title callback 
remove_action( 'woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10, 2 ); 

if ( ! function_exists( 'codeless_woocommerce_template_loop_product_title' ) ) { 
    /**
     * Show the product title in the product loop. By default this is an H2.
     */
    function codeless_woocommerce_template_loop_product_title() {
        global $product;

        $link = apply_filters( 'woocommerce_template_loop_product_title', get_the_permalink(), $product );

        

        echo '<a href="' . esc_url( $link ) . '"><h2 class="' . esc_attr( apply_filters( 'woocommerce_product_loop_title_classes', 'woocommerce-loop-product__title' ) ) . '">' . get_the_title() . '</h2></a>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
    } 
}; 
         
// add the action 
add_action( 'woocommerce_shop_loop_item_title', 'codeless_woocommerce_template_loop_product_title', 10, 2 ); 


/**
 * WooCommerce Product Reviews Shortcode
 */
 
add_shortcode( 'product_reviews', 'silva_product_reviews_shortcode' );
 
function silva_product_reviews_shortcode( $atts ) {
    
   if ( empty( $atts ) ) return '';
 
   if ( ! isset( $atts['id'] ) ) return '';
       
   $comments = get_comments( 'post_id=' . $atts['id'] );
    
   if ( ! $comments ) return '';


   // echo count($comments);
    
   $html .= '<div class="home_page_review"><div class="star-rating" role="img" aria-label="Rated 5.00 out of 5"><span style="width:100%">Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">'.count($comments).'</span> customer ratings</span></div><div class="preview">
                                <a href="#reviews" class="woocommerce-review-link" rel="nofollow">(<span class="count">'.count($comments).'</span> Reviews)</a>
                        </div></div>';
    
   /*foreach ( $comments as $comment ) {   
      $rating = intval( get_comment_meta( $comment->comment_ID, 'rating', true ) );
      $html .= '<li class="review">';
      $html .= get_avatar( $comment, '60' );
      $html .= '<div class="comment-text">';
      if ( $rating ) $html .= wc_get_rating_html( $rating );
      $html .= '<p class="meta"><strong class="woocommerce-review__author">';
      $html .= get_comment_author( $comment );
      $html .= '</strong></p>';
      $html .= '<div class="description">';
      $html .= $comment->comment_content;
      $html .= '</div></div>';
      $html .= '</li>';
   }*/
    
 //  $html .= '</ol></div></div>';
    
   return $html;
}

add_filter( 'learn-press/override-templates', function(){ return true; } );

// Generating the shortcode for wp_login_form and add it to the shortcode. When using this shortcode, do 'echo do_shortcode('[wp_course_login]')'
// function wp_course_login_shortcode() {

//   $args = array(
//     'echo'            => true,
//     'redirect'        => get_site_url()."/courses/personal-expansion-freedom/",
//     'remember'        => true,
//     'value_remember'  => false,
//   );

//   ob_start();
//   $login  = (isset($_GET['login']) ) ? $_GET['login'] : 0;
//   if ($login === "failed") {
//     echo '<p style="color: red"><strong>ERROR:</strong> Invalid username and/or password.</p>';
//   } 
//   wp_login_form($args);
//   return ob_get_clean();
// }
// add_shortcode( 'wp_course_login', 'wp_course_login_shortcode' );

add_action( 'wp_enqueue_scripts', 'handle_login_error' );
function handle_login_error() {
  if ( is_page(11198) || is_page('Course Login') ) {
    $login  = (isset($_GET['login']) ) ? $_GET['login'] : 0;
    if ($login === "failed") {
    ?>
      <script>
        document.addEventListener("DOMContentLoaded", () => {
          let login_error = document.getElementById("course-login-error");
          login_error.style.display = "block";
        });
      </script>
    <?php
    }
  }
}

add_filter('login_errors', 'validate_login_credential');
function validate_login_credential($error) {
  wp_redirect(get_site_url()."/course-login?login=failed");
  exit;
}

// adding admin email address to the recipient
function add_admin_email_recipient( $recipient, $order ) {
    // Get the admin email address
    $admin_email = "paul@creativelab.tv";

    // Add the admin email to the recipient list
    $recipient .= ',' . $admin_email;

    return $recipient;
}
add_filter( 'woocommerce_email_recipient_new_order', 'add_admin_email_recipient', 10, 2 );

//sending the emails when woocommerce order is received
add_action( 'woocommerce_new_order', 'send_custom_emails_on_order_received' );
function send_custom_emails_on_order_received( $order_id ) {
  $order = wc_get_order( $order_id );
  // Check if the order is completed
  if ( $order ) {
    $customer_email = $order->get_billing_email();
    $admin_email = "paul@creativelab.tv";

    $recipient_emails = array(
      $customer_email,
      $admin_email,
    );

    // sending the recommendation email to customer and admin
    $subject = 'Thank you! Please Read';

    $theme_directory = get_stylesheet_directory();
    $file_path = $theme_directory . '/woocommerce/emails/product-recommend-email.php';
    ob_start();
    include $file_path;
    $content = ob_get_clean();

    // Send emails to all recipients
    foreach ( $recipient_emails as $recipient_email ) {
      wp_mail( $recipient_email, $subject, $content );
    }
  }
}

add_action( 'woocommerce_single_product_summary', 'add_secondary_checkout_option', 30 );
function add_secondary_checkout_option() {
     $product_id = get_the_ID();
    
    if ($product_id === 16099) {
        $soft_cover_id = get_field('human_personalities_soft_cover_product_id', 'option');
        $soft_cover_product = wc_get_product( $soft_cover_id );
        $soft_cover_title = $soft_cover_product->get_title();
        $soft_cover_price = $soft_cover_product->get_price();
        $soft_cover_description = $soft_cover_product->get_short_description();
        
        echo "<h1 class='product_title entry-title' style='margin-top: 60px'>" . $soft_cover_title . "</h1>";
        echo "<p class='price'><span class='woocommerce-Price-amount amount'><bdi><span class='woocommerce-Price-currencySymbol'>$</span>" . $soft_cover_price . "</bdi></span></p>";
        echo "<div class='woocommerce-product-details__short-description'><p>" . $soft_cover_description . "</p></div>";
        echo "<a href='".$soft_cover_product->add_to_cart_url()."' class='custom-add-to-cart-btn'>ADD TO CART</a>";
    } else if ($product_id === 16109) {
        $soft_cover_id = get_field('start_up_confidential_soft_cover_product_id', 'option');
        $soft_cover_product = wc_get_product( $soft_cover_id );
        $soft_cover_title = $soft_cover_product->get_title();
        $soft_cover_price = $soft_cover_product->get_price();
        $soft_cover_description = $soft_cover_product->get_short_description();
        
        echo "<h1 class='product_title entry-title' style='margin-top: 60px'>" . $soft_cover_title . "</h1>";
        echo "<p class='price'><span class='woocommerce-Price-amount amount'><bdi><span class='woocommerce-Price-currencySymbol'>$</span>" . $soft_cover_price . "</bdi></span></p>";
        echo "<div class='woocommerce-product-details__short-description'><p>" . $soft_cover_description . "</p></div>";
        echo "<a href='".$soft_cover_product->add_to_cart_url()."' class='custom-add-to-cart-btn'>ADD TO CART</a>";
    }
}

add_filter( 'wc_product_sku_enabled', 'sv_remove_product_page_skus', 20 );
function sv_remove_product_page_skus( $enabled ) {
    $product_id = get_the_ID();
  
    if ($product_id !== 16099)
        return $enabled;

    return false;
}

add_action( 'woocommerce_order_status_processing', 'woo_order_complete_function', 10, 1 );
function woo_order_complete_function( $order_id ) {
  $product_ids = [];

  $order = wc_get_order( $order_id );
  foreach($order->get_items() as $item) {
    $product_id = $item->get_product_id();
    $product = wc_get_product( $product_id );

    array_push($product_ids, $product_id);
  }

  if (in_array(15761, $product_ids)) {
    // User id belonging to an order
    $customer_id = $order->get_customer_id();

    // Course IDs
    $item_ids= [9, 12860];

    $lp_order = array('post_type' => 'lp_order');

    $post_id = wp_insert_post($lp_order); // Create new order in LearnPress orders
    $lp_order = learn_press_get_order( $post_id );
    $lp_order_item_ids = $lp_order->add_items( $item_ids );//add courses to the order

    $lp_order->set_user_id( $customer_id ); // User into the course
    $lp_order->set_status( 'lp-completed' );
    // Setorder as paid and complete you can use status based on your requirements
    $lp_order->save();
  }
}

add_filter('the_content', 'add_bio_block_to_post', 10, 1);
function add_bio_block_to_post($content) {
  if( is_single() )
  write_to_custom_file($content);
    {
      if ( function_exists( 'learn_press_is_course' ) && !learn_press_is_course() ) {
    
          $add_html = '<div style="text-align: center; margin-bottom: 30px; margin-top: 30px;">
                        <div style="display: inline-block; padding: 8px 16px; background-color: #ff10f0; color: white; font-weight: bold; border-radius: 5px; font-size: 23px; height: 50px; line-height: 34px;">
                            <a style="color: white; text-decoration: none; display: flex; align-items: center; justify-content: center; height: 100%;" href="https://Patreon.com/krishnakalesh" data-wpel-link="external" target="_blank" rel="nofollow external noopener noreferrer">Join My Free Community</a>
                        </div>
                      </div>';
    
        $pattern = '/<img\b[^>]*>/';
        $content = preg_replace($pattern, '$0' . $add_html, $content, 1); // Replace only the first occurrence
      }
      
      $content .= '<div class="postauthor-section">
                    <div class="postauthor-inner">
                      <div class="postauthor-row">
                        <div class="postauthor-col postauthorcol-img">
                          <div class="postauthor-img">
                            <img src="' . get_field('author_image', 'option') . '" alt="" />
                          </div>
                        </div>
                        <div class="postauthor-col postauthorcol-text">
                          <div class="postauthor-text">'
                            . get_field('author_description', 'option') .
                          '</div>
                          <div style="background-image: url(' . get_field('author_btn_background', 'option') . '); cursor: pointer; margin-top: 20px;" class="exuberant-life-button">
                            <a href="https://www.paulwagner.com/shop/1-hour-intuitive-session-profound-experience/">
                              <span class="exuberant-life-button-text" style="color: black">' . get_field('author_btn_label', 'option') . '</span><img src="' . get_field('author_btn_nav_icon', 'option') . '" alt="Button Nav Icon" class="exuberant-life-button-nav">
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>';
    }
    return $content;
}

add_action( 'woocommerce_payment_complete', 'woocommerce_order_status_change_complete' );
function woocommerce_order_status_change_complete( $order_id ) {

    $order = wc_get_order( $order_id );
    $order->update_status( 'completed' );

}

function write_to_custom_file($content) {
    $file_path = WP_CONTENT_DIR . '/uploads/custom-log.txt'; // Change the path and filename as needed
    // $content_to_write = 'This is the content to write to the file.'; // Replace this with the content you want to write

    // Write to the file
    $result = file_put_contents( $file_path, $content );
}

// Kill Session

add_filter('auth_cookie_expiration', 'my_expiration_filter', 99, 3);
function my_expiration_filter($seconds, $user_id, $remember){

    //if "remember me" is checked;
    if ( $remember ) {
        //WP defaults to 2 weeks;
        $expiration = 14*24*60*60; //UPDATE HERE;
    } else {
        //WP defaults to 48 hrs/2 days;
        $expiration = 2*24*60*60; //UPDATE HERE;
    }

    //http://en.wikipedia.org/wiki/Year_2038_problem
    if ( PHP_INT_MAX - time() < $expiration ) {
        //Fix to a little bit earlier!
        $expiration =  PHP_INT_MAX - time() - 5;
    }

    return $expiration;
}


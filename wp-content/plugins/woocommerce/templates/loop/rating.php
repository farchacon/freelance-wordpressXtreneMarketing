<?php
/**
 * Loop Rating
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/rating.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $product; echo('Prducto Nuevo: 360');

			$post_thumbnail_id = $product->get_image_id();
			if($post_thumbnail_id==119){
				?>
				<iframe width="100%" height="300px" align="right" frameborder="0"  scrolling="no" src="http://localhost/wordpressXtreneMarketing/360-list/index.html" style="border-radius: 30px"></iframe>
				<?php
			}

if ( get_option( 'woocommerce_enable_review_rating' ) === 'no' ) { 
	return;
}

echo wc_get_rating_html( $product->get_average_rating() ); 

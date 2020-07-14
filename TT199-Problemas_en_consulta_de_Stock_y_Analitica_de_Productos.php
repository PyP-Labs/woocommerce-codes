add_filter('woocommerce_short_description', 'cththemes_woo_product_short_description',1);
if(!function_exists('cththemes_woo_product_short_description')){
	function cththemes_woo_product_short_description($des){

		if(!empty($des)){
			$ret = '<h4 class="product-short-description-title">'.__('Quick Overview','lambert').'</h4>'.$des;

			return $ret;
			/*
			$ret = '<h4 class="product-short-description-title">'._e('Quick Overview','lambert').'</h4>'.$des;
			return $ret;
			
			?>
			<h4 class="product-short-description-title"><?php _e('Quick Overview','lambert');?></h4>
		<?php
			echo wp_kses_post($des );
			*/
		}
	}
}

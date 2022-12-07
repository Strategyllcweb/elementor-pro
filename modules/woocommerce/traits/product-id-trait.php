<?php
namespace ElementorPro\Modules\Woocommerce\Traits;

trait Product_Id_Trait {

	public function get_product( $product_id = false ) {
		$product = wc_get_product( $product_id );
		if ( $product ) {
			return $product;
		}

		if ( 'product_variation' === get_post_type() ) {
			return $this->get_product_variation( $product_id );
		}

		return false;
	}

	public function get_product_variation( $product_id = false ) {
		return wc_get_product( get_the_ID() );
	}
}

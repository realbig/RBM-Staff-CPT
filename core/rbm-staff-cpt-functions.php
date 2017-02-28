<?php
/**
 * Provides helper functions.
 *
 * @since	  1.0.0
 *
 * @package	RBM_Staff_CPT
 * @subpackage RBM_Staff_CPT/core
 */
if ( ! defined( 'ABSPATH' ) ) {
	die;
}

/**
 * Returns the main plugin object
 *
 * @since		1.0.0
 *
 * @return		RBM_Staff_CPT
 */
function RBMSTAFFCPT() {
	return RBM_Staff_CPT::instance();
}
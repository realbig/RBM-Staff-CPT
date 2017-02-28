<?php

/**
 * Class RBM_CPT_Staff
 *
 * Creates the post type.
 *
 * @since {{VERSION}}
 */
class RBM_CPT_Staff extends RBM_CPT {

	public $post_type = 'staff';
	public $label_singular = null;
	public $label_plural = null;
	public $labels = array();
	public $icon = 'admin-post';
	public $post_args = array(
		'hierarchical' => false,
		'supports'     => array( 'title', 'editor', 'author' ),
		'has_archive'  => false,
		'rewrite'      => array(
			'slug'       => 'staff',
			'with_front' => false,
			'feeds'      => false,
			'pages'      => true
		),
	);

	/**
	 * RBM_CPT_Staff constructor.
	 *
	 * @since {{VERSION}}
	 */
	function __construct() {

		// This allows us to Localize the Labels
		$this->label_singular = __( 'Staff', RBM_Staff_CPT_ID );
		$this->label_plural   = __( 'Staff', RBM_Staff_CPT_ID );

		$this->labels = array(
			'menu_name' => __( 'Staff', RBM_Staff_CPT_ID ),
			'all_items' => __( 'All Staff', RBM_Staff_CPT_ID ),
		);

		parent::__construct();
		
	}
}
<?php

class WPML_LS_Shortcode_Actions_Slot extends WPML_LS_Slot {

	/**
	 * @return array
	 */
	protected function get_allowed_properties() {
		$allowed_properties = array(
			'show'       => array(
				'type'             => 'int',
				'force_missing_to' => 0,
			),
			'template'   => array(
				'type'             => 'string',
				'force_missing_to' => $this->get_core_template( 'list-horizontal' ),
			),
			'slot_group' => array(
				'type'             => 'string',
				'force_missing_to' => 'statics',
			),
			'slot_slug'  => array(
				'type'             => 'string',
				'force_missing_to' => 'shortcode_actions',
			),
		);

		return array_merge( parent::get_allowed_properties(), $allowed_properties );
	}

	public function is_enabled() {
		/**
		 * This filter allows to programmatically enable/disable the custom language switcher.
		 *
		 * @since 4.3.0
		 *
		 * @param bool $is_enabled The original status.
		 */
		return apply_filters( 'wpml_custom_language_switcher_is_enabled', parent::is_enabled() );
	}
}

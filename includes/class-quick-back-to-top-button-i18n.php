<?php
/**
 * Define the internationalization functionality
 *
 * @since      1.0.0
 *
 * @package    Quick_Back_To_Top_Button
 * @subpackage Quick_Back_To_Top_Button/includes
 */

class Quick_Back_To_Top_Button_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'quick-back-to-top-button',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}

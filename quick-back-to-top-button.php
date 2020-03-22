<?php
/**
 * Plugin Name:       Quick Back To Top Button
 * Description:       This is a very simple back to top button plugin. Just one click and you are done.
 * Version:           1.0.0
 * Author:            Rajan Karmaker
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       quick-back-to-top-button
 * Domain Path:       /languages
 */

/**
 * If this file is called directly, abort.
 */
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0
 */
define( 'QUICK_BACK_TO_TOP_BUTTON_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-quick-back-to-top-button-activator.php
 */
function activate_quick_back_to_top_button() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-quick-back-to-top-button-activator.php';
	Quick_Back_To_Top_Button_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-quick-back-to-top-button-deactivator.php
 */
function deactivate_quick_back_to_top_button() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-quick-back-to-top-button-deactivator.php';
	Quick_Back_To_Top_Button_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_quick_back_to_top_button' );
register_deactivation_hook( __FILE__, 'deactivate_quick_back_to_top_button' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-quick-back-to-top-button.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_quick_back_to_top_button() {

	$plugin = new Quick_Back_To_Top_Button();
	$plugin->run();

}
run_quick_back_to_top_button();

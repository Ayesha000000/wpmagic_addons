<?php
/**
 * Plugin Name: MagicWp_Addons
 * Plugin URI: https://magicwptools.com
 * Description: A Collection Of Widgets And Tools For WordPress Blogs. It Includes Free Widgets And Templates For Page Builders like Elementor , Gutenberg And Bricks . 
 * Version: 1.0.0
 * Requires at least: 6.4
 * Requires PHP: 7.4
 * Author: Ayesha
 * Author URI: https://magicwptools.com
 * License: GPL-2.0+
 * Text Domain: magicwp-addons
 * Domain Path: /languages
 */

// If this file is called directly, abort.
if (!defined('WPINC')) {
    die;
}

define('MAGICWP_ADDONS_VERSION', '1.0.0');
define('MAGICWP_ADDONS_PLUGIN_DIR', plugin_dir_path(__FILE__));
define('MAGICWP_ADDONS_PLUGIN_URL', plugin_dir_url(__FILE__));

/**
 * The code that runs during plugin activation.
 */
function activate_magicwp_addons() {
    require_once plugin_dir_path(__FILE__) . 'includes/class-activator.php';
    Magicwp_Addons\Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 */
function deactivate_magicwp_addons() {
    require_once plugin_dir_path(__FILE__) . 'includes/class-deactivator.php';
    Magicwp_Addons\Deactivator::deactivate();
}

register_activation_hook(__FILE__, 'activate_magicwp_addons');
register_deactivation_hook(__FILE__, 'deactivate_magicwp_addons');

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path(__FILE__) . 'includes/class-plugin.php';

/**
 * Begins execution of the plugin.
 */
function run_magicwp_addons() {
    $plugin = new Magicwp_Addons\Plugin();
    $plugin->run();
}
run_magicwp_addons();
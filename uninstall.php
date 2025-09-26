<?php
// If uninstall not called from WordPress, then exit.
if (!defined('WP_UNINSTALL_PLUGIN')) {
    exit;
}

// Clean up plugin data
function magicwp_addons_cleanup() {
    global $wpdb;
    
    // Delete options
    delete_option('magicwp-addons_version');
    
    // Delete custom tables
    // $wpdb->query("DROP TABLE IF EXISTS {$wpdb->prefix}magicwp-addons_example");
}

magicwp_addons_cleanup();
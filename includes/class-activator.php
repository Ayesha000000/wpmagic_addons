<?php
namespace Magicwp_Addons;

class Activator {
    public static function activate() {
        // Activation code here
        global $wpdb;
        $charset_collate = $wpdb->get_charset_collate();
        
        // Example table creation
        /*
        $sql = "CREATE TABLE IF NOT EXISTS `{$wpdb->prefix}magicwp-addons_example` (
            id mediumint(9) NOT NULL AUTO_INCREMENT,
            time datetime DEFAULT CURRENT_TIMESTAMP,
            name tinytext NOT NULL,
            text text NOT NULL,
            url varchar(55) DEFAULT '' NOT NULL,
            PRIMARY KEY  (id)
        ) $charset_collate;";

        require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
        dbDelta($sql);
        */
        
        // Add version to options
        add_option('magicwp-addons_version', '1.0.0');
    }
}
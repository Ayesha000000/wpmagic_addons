<?php
namespace Magicwp_Addons;

class Admin {
    private $plugin_name;
    private $version;

    public function __construct($plugin_name, $version) {
        $this->plugin_name = $plugin_name;
        $this->version = $version;
    }

    public function enqueue_styles() {
        wp_enqueue_style(
            $this->plugin_name . '-admin',
            plugin_dir_url(__FILE__) . 'css/admin.css',
            array(),
            $this->version,
            'all'
        );
    }

    public function enqueue_scripts() {
        wp_enqueue_script(
            $this->plugin_name . '-admin',
            plugin_dir_url(__FILE__) . 'js/admin.js',
            array('jquery'),
            $this->version,
            false
        );
    }
    
    public function magicwp_admin_page() {
        add_menu_page(
            __('MagicWp_Addons', 'magicwp-addons'),
            __('MagicWp_Addons', 'magicwp-addons'),
            'manage_options',
            'magicwp-addons',
            array($this, 'magicwp_admin_dashboard_page'),
            'dashicons-superhero',
            null
        );
    }

    public function magicwp_admin_dashboard_page() {
        include_once plugin_dir_path(dirname(__FILE__)) . 'admin/partials/dashboard.php';
    }

}
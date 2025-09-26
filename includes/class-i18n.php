<?php
namespace Magicwp_Addons;

class I18n {
    public function load_plugin_textdomain() {
        load_plugin_textdomain(
            'magicwp-addons',
            false,
            dirname(dirname(plugin_basename(__FILE__))) . '/languages/'
        );
    }
}
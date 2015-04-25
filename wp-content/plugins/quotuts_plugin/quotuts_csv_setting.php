<?php
if (!class_exists('WP_Quotuts_CSV_Settings')) {
	class WP_Quotuts_CSV_Settings {

		/**
		 * [Construction plugin object]
		 */
		public function __construct() {
			add_action('admin_init', array(&$this, 'admin_init'));
			add_action('admin_menu', array(&$this, 'add_menu'));
		}

		public function add_menu() {
			add_menu_page('Quotuts Address', 'Address', 'manage_options', 'wp_quotuts_csv_setting', array(&$this, 'plugin_settings_page'));
		}

		public function admin_init() {
			// register the settings for this plugin
			register_setting('wp_quotuts_csv-group', 'quotuts_address');
			register_setting('wp_quotuts_csv-group', 'quotuts_phone');
			add_settings_section(
				'wp_quotuts_csv-section',
				'Address Setting', 
				array(&$this, 'settings_section_wp_quotuts_csv'),
				'wp_quotuts_csv'
			);

			add_settings_field(
                'wp_quotuts_csv-address', 
                'Address', 
                array(&$this, 'settings_field_input_address'), 
                'wp_quotuts_csv', 
                'wp_quotuts_csv-section',
                array(
                    'field' => 'quotuts_address',
                )
            );

            add_settings_field(
                'wp_quotuts_csv-phone', 
                'Phone', 
                array(&$this, 'settings_field_input_phone'), 
                'wp_quotuts_csv', 
                'wp_quotuts_csv-section',
                array(
                    'field' => 'quotuts_phone',
                )
            );
		}

		public function settings_field_input_address($args)
        {
            // Get the field name from the $args array
            $field = $args['field'];
            // Get the value of this setting
            $value = get_option($field);
            // echo a proper input type="text"
            echo sprintf('<textarea name="%s" id="%s" style="width:500px;height:100px;">%s</textarea>', $field, $field, $value);
        } // END public function settings_field_input_text($args)

        public function settings_field_input_phone($args)
        {
            // Get the field name from the $args array
            $field = $args['field'];
            // Get the value of this setting
            $value = get_option($field);
            // echo a proper input type="text"
            echo sprintf('<input type="text" name="%s" id="%s" value="%s" style="width:500px;"/>', $field, $field, $value);
        } // END public function settings_field_input_text($args)

        public function settings_section_wp_quotuts_csv() {
        	// Think of this as help text for the section.
            echo 'These settings do things for the WP Quotuts CSV.';
        }
		
		public function plugin_settings_page() {
			if (!current_user_can('manage_options')) {
				wp_die(__('You do not have sufficient permissions to access this page.'));
			}

			include(sprintf('%s/templates/setting.php', dirname(__FILE__)));
		}
	}
} 

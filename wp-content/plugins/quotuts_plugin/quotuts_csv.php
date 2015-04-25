<?php

/**
 * Plugin Name: Quotuts Address
 * Plugin URI: 
 * Description: Plugin that specify for Pasona Tech website use to up csv file and manage jobs in wordpress
 * Version: 1.0.0
 * Author: Lee Yool
 */

if (!class_exists('WP_Quotuts_CSV')) {
	class WP_Quotuts_CSV {

		/**
		 * [__construct description]
		 */
		public function __construct() {
			// Initialize Settings
			require_once(sprintf("%s/quotuts_csv_setting.php", dirname(__FILE__)));
			$WP_Quotuts_CSV_Settings = new WP_Quotuts_CSV_Settings();

			// require_once(sprintf("%s/post-types/jobs-post-type.php", dirname(__FILE__)));
			// $Jobs_Post_Type = new Job_Post_Type();
		}

		/**
		 * [activate the plugin]
		 * @return [type]
		 */
		public static function activate() {
			
		}

		/**
		 * [deactive the plugin]
		 * @return [type]
		 */
		public static function deactive() {

		}
	}
} 

if (class_exists('WP_Quotuts_CSV')) {
	register_activation_hook(__FILE__, array('WP_Quotuts_CSV', 'activate'));
	register_deactivation_hook(__FILE__, array('WP_Quotuts_CSV', 'deactivate'));

	$wp_quotuts_csv = new WP_Quotuts_CSV();
}

?>
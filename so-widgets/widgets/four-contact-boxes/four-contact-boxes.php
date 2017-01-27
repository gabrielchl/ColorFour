<?php
/*
Widget Name: Four Contact Boxes
Description: Four Contact Boxes, specially designed for contact page.
Author: Gabriel Chi Hong Lee
*/

class Four_Contact_Boxes extends SiteOrigin_Widget {
	function __construct() {

		parent::__construct(
			'four-contact-boxes',
			__('Four Contact Boxes', 'awana-widgets-bundle'),
			array(
				'description' => __('Four Contact Boxes, specially designed for home page.', 'awana-widgets-bundle'),
				'help' => ''
			),
			array(

			),
			false,
			plugin_dir_path(__FILE__)
		);

	}

	function get_widget_form() {
		return array(
			'contact-box-address' => array(
				'type' => 'text',
				'label' => __('Address', 'awana-widgets-bundle'),
			),
			'contact-box-tel' => array(
				'type' => 'text',
				'label' => __('Tel No.', 'awana-widgets-bundle'),
			),
			'contact-box-fax' => array(
				'type' => 'text',
				'label' => __('Fax No.', 'awana-widgets-bundle'),
			),
			'contact-box-email' => array(
				'type' => 'text',
				'label' => __('Email', 'awana-widgets-bundle'),
			),
		);
	}

}

siteorigin_widget_register('four-contact-boxes', __FILE__, 'Four_Contact_Boxes');
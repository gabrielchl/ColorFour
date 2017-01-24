<?php
/*
Widget Name: Four Link Boxes
Description: Four Link Boxes, specially designed for home page.
Author: Gabriel Chi Hong Lee
Author URI: 
*/

class Four_Link_Boxes extends SiteOrigin_Widget {
	function __construct() {

		parent::__construct(
			'four-link-boxes',
			__('Four Link Boxes', 'awana-widgets-bundle'),
			array(
				'description' => __('Four Link Boxes, specially designed for home page.', 'awana-widgets-bundle'),
				'help' => ''
			),
			array(

			),
			false,
			plugin_dir_path(__FILE__)
		);

	}

	function initialize() {
		$this->register_frontend_styles(
			array(
				array(
					'four-link-boxes',
					plugin_dir_url(__FILE__) . 'css/style.css',
					array(),
					'1.0'
				),
			)
		);
	}

	function get_widget_form() {
		return array(
			'text_one' => array(
				'type' => 'text',
				'label' => __('First Box Text', 'awana-widgets-bundle'),
			),

			'url_one' => array(
				'type' => 'link',
				'label' => __('First Box Link', 'awana-widgets-bundle'),
			),
            
            'color_one' => array(
				'type' => 'color',
				'default' => '#FE8453',
				'label' => __('First Box Color', 'awana-widgets-bundle'),
            ),
            
			'text_two' => array(
				'type' => 'text',
				'label' => __('Second Box Text', 'awana-widgets-bundle'),
			),

			'url_two' => array(
				'type' => 'link',
				'label' => __('Second Box Link', 'awana-widgets-bundle'),
			),
            
            'color_two' => array(
				'type' => 'color',
				'default' => '#80C3D3',
				'label' => __('Second Box Color', 'awana-widgets-bundle'),
            ),
            
			'text_three' => array(
				'type' => 'text',
				'label' => __('Third Box Text', 'awana-widgets-bundle'),
			),

			'url_three' => array(
				'type' => 'link',
				'label' => __('Third Box Link', 'awana-widgets-bundle'),
			),
            
            'color_three' => array(
				'type' => 'color',
				'default' => '#88C87A',
				'label' => __('Third Box Color', 'awana-widgets-bundle'),
            ),
            
			'text_four' => array(
				'type' => 'text',
				'label' => __('Fourth Box Text', 'awana-widgets-bundle'),
			),

			'url_four' => array(
				'type' => 'link',
				'label' => __('Fourth Box Link', 'awana-widgets-bundle'),
			),
            
            'color_four' => array(
				'type' => 'color',
				'default' => '#F1CD3B',
				'label' => __('Fourth Box Color', 'awana-widgets-bundle'),
            ),
		);
	}

}

siteorigin_widget_register('four-link-boxes', __FILE__, 'Four_Link_Boxes');

<?php
/*
Widget Name: Four Stat Boxes
Description: Four Stat Boxes.
Author: Gabriel Chi Hong Lee
*/

class Four_Stat_Boxes extends SiteOrigin_Widget {
	function __construct() {

		parent::__construct(
			'four-stat-boxes',
			__('Four Stat Boxes', 'awana-widgets-bundle'),
			array(
				'description' => __('Four Stat Boxes.', 'awana-widgets-bundle'),
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
			'text_one' => array(
				'type' => 'text',
				'label' => __('First Box Text', 'awana-widgets-bundle'),
			),

			'number_one' => array(
				'type' => 'link',
				'label' => __('First Box Number', 'awana-widgets-bundle'),
			),
            
            'icon_one' => array(
                'type' => 'icon',
                'label' => __('Select an icon', 'awana-widgets-bundle'),
            ),   
            
			'text_two' => array(
				'type' => 'text',
				'label' => __('Second Box Text', 'awana-widgets-bundle'),
			),

			'number_two' => array(
				'type' => 'link',
				'label' => __('Second Box Number', 'awana-widgets-bundle'),
			),
            
            'icon_two' => array(
                'type' => 'icon',
                'label' => __('Select an icon', 'awana-widgets-bundle'),
            ),
            
			'text_three' => array(
				'type' => 'text',
				'label' => __('Third Box Text', 'awana-widgets-bundle'),
			),

			'number_three' => array(
				'type' => 'link',
				'label' => __('Third Box Number', 'awana-widgets-bundle'),
			),
            
            'icon_three' => array(
                'type' => 'icon',
                'label' => __('Select an icon', 'awana-widgets-bundle'),
            ),
            
			'text_four' => array(
				'type' => 'text',
				'label' => __('Fourth Box Text', 'awana-widgets-bundle'),
			),

			'number_four' => array(
				'type' => 'link',
				'label' => __('Fourth Box Number', 'awana-widgets-bundle'),
			),
            
            'icon_four' => array(
                'type' => 'icon',
                'label' => __('Select an icon', 'awana-widgets-bundle'),
            ),
		);
	}

}

siteorigin_widget_register('four-stat-boxes', __FILE__, 'Four_Stat_Boxes');
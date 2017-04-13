<?php
/*
Widget Name: Three Stat Count
Description: A box with number and text
Author: Gabriel Chi Hong Lee
*/

class Three_Stat_Count extends SiteOrigin_Widget {
	function __construct() {
    //Here you can do any preparation required before calling the parent constructor, such as including additional files or initializing variables.

    //Call the parent constructor with the required arguments.
    parent::__construct(
        // The unique id for your widget.
        'three-stat-count',

        // The name of the widget for display purposes.
        __('Three Stat Count', 'hello-world-widget-text-domain'),

        // The $widget_options array, which is passed through to WP_Widget.
        // It has a couple of extras like the optional help URL, which should link to your sites help or support page.
        array(
            'description' => __('Three box with number and text.', 'hello-world-widget-text-domain'),
            'help'        => '',
        ),

        //The $control_options array, which is passed through to WP_Widget
        array(
        ),

        //The $form_options array, which describes the form fields used to configure SiteOrigin widgets. We'll explain these in more detail later.
        array(
            'three-stat-count-number-one' => array(
                'type' => 'text',
                'label' => __('Number 1', 'stat-count-bundle'),
                'default' => 'Text Here'
            ),
            'three-stat-count-text-one' => array(
                'type' => 'text',
                'label' => __('Text 1', 'stat-count-bundle'),
                'default' => 'Text Here'
            ),
            'three-stat-count-number-color-one' => array(
                'type' => 'color',
                'label' => __('Color of number 1', 'stat-count-bundle'),
                'default' => ''
            ),
            'three-stat-count-text-color-one' => array(
                'type' => 'color',
                'label' => __('Color of text 1', 'stat-count-bundle'),
                'default' => ''
            ),
            'three-stat-count-number-two' => array(
                'type' => 'text',
                'label' => __('Number 2', 'stat-count-bundle'),
                'default' => 'Text Here'
            ),
            'three-stat-count-text-two' => array(
                'type' => 'text',
                'label' => __('Text 2', 'stat-count-bundle'),
                'default' => 'Text Here'
            ),
            'three-stat-count-number-color-two' => array(
                'type' => 'color',
                'label' => __('Color of number 2', 'stat-count-bundle'),
                'default' => ''
            ),
            'three-stat-count-text-color-two' => array(
                'type' => 'color',
                'label' => __('Color of text 2', 'stat-count-bundle'),
                'default' => ''
            ),
            'three-stat-count-number-three' => array(
                'type' => 'text',
                'label' => __('Number 3', 'stat-count-bundle'),
                'default' => 'Text Here'
            ),
            'three-stat-count-text-three' => array(
                'type' => 'text',
                'label' => __('Text 3', 'stat-count-bundle'),
                'default' => 'Text Here'
            ),
            'three-stat-count-number-color-three' => array(
                'type' => 'color',
                'label' => __('Color of number 3', 'stat-count-bundle'),
                'default' => ''
            ),
            'three-stat-count-text-color-three' => array(
                'type' => 'color',
                'label' => __('Color of text 3', 'stat-count-bundle'),
                'default' => ''
            ),
        ),
        

        //The $base_folder path string.
        plugin_dir_path(__FILE__)
    );
}

}

siteorigin_widget_register('three-stat-count', __FILE__, 'Three_Stat_Count');
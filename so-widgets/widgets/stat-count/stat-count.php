<?php
/*
Widget Name: Stat Count Up
Description: A box with number and text
Author: Gabriel Chi Hong Lee
*/

class Stat_Count extends SiteOrigin_Widget {
	function __construct() {
    //Here you can do any preparation required before calling the parent constructor, such as including additional files or initializing variables.

    //Call the parent constructor with the required arguments.
    parent::__construct(
        // The unique id for your widget.
        'stat-count',

        // The name of the widget for display purposes.
        __('Stat Count Up', 'hello-world-widget-text-domain'),

        // The $widget_options array, which is passed through to WP_Widget.
        // It has a couple of extras like the optional help URL, which should link to your sites help or support page.
        array(
            'description' => __('A box with number and text.', 'hello-world-widget-text-domain'),
            'help'        => '',
        ),

        //The $control_options array, which is passed through to WP_Widget
        array(
        ),

        //The $form_options array, which describes the form fields used to configure SiteOrigin widgets. We'll explain these in more detail later.
        array(
            'stat-count-number' => array(
                'type' => 'text',
                'label' => __('Number', 'stat-count-bundle'),
                'default' => 'Text Here'
            ),
            'stat-count-text' => array(
                'type' => 'text',
                'label' => __('Text', 'stat-count-bundle'),
                'default' => 'Text Here'
            ),
            'stat-count-number-color' => array(
                'type' => 'color',
                'label' => __('Color of number', 'stat-count-bundle'),
                'default' => 'http://www.google.com/'
            ),
            'stat-count-text-color' => array(
                'type' => 'color',
                'label' => __('Color of text', 'stat-count-bundle'),
                'default' => 'Text Here'
            ),
        ),
        

        //The $base_folder path string.
        plugin_dir_path(__FILE__)
    );
}

}

siteorigin_widget_register('stat-count', __FILE__, 'Stat_Count');

function stat_count_banner_img_src( $banner_url, $widget_meta ) {
    if( $widget_meta['ID'] == 'stat-count') {
        $banner_url = plugin_dir_url(__FILE__) . 'stat_count_banner.png';
    }
    return $banner_url;
}
add_filter( 'siteorigin_widgets_widget_banner', 'stat_count_banner_img_src', 10, 2);
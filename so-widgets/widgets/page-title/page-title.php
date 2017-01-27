<?php
/*
Widget Name: Page Title
Description: Add text at the top of a page.
Author: Gabriel Chi Hong Lee
Author URI: http://gabriellee.esy.es
*/

class Page_Title extends SiteOrigin_Widget {
	function __construct() {
    //Here you can do any preparation required before calling the parent constructor, such as including additional files or initializing variables.

    //Call the parent constructor with the required arguments.
    parent::__construct(
        // The unique id for your widget.
        'page-title',

        // The name of the widget for display purposes.
        __('Page Title', 'hello-world-widget-text-domain'),

        // The $widget_options array, which is passed through to WP_Widget.
        // It has a couple of extras like the optional help URL, which should link to your sites help or support page.
        array(
            'description' => __('Add text at the top of a page.', 'hello-world-widget-text-domain'),
            'help'        => '',
        ),

        //The $control_options array, which is passed through to WP_Widget
        array(
        ),

        //The $form_options array, which describes the form fields used to configure SiteOrigin widgets. We'll explain these in more detail later.
        array(
            'page-title-text' => array(
                'type' => 'text',
                'label' => __('Page Title', 'section-title-bundle'),
                'default' => 'Text Here'
            ),
            'page-title-color' => array(
                'type' => 'color',
                'label' => __('Choose a color', 'section-title-bundle'),
                'default' => '#000'
            ),
        ),
        

        //The $base_folder path string.
        plugin_dir_path(__FILE__)
    );
}

/*	function initialize() {
	}

	function get_widget_form(){
		return array(
			'widget_title' => array(
				'type' => 'text',
				'label' => __('Title', 'so-widgets-bundle'),
			),
			'items' => array(
				'type' => 'repeater',
				'label' => __( 'Images', 'so-widgets-bundle' ),
				'item_label' => array(
					'selector'     => "[id*='title']"
				),
				'fields' => array(
					'image' => array(
						'type' => 'media',
						'label' => __( 'Image', 'so-widgets-bundle')
					),
					'column_span' => array(
						'type' => 'slider',
						'label' => __( 'Column span', 'so-widgets-bundle' ),
						'description' => __( 'Number of columns this item should span. (Limited to number of columns selected in Layout section below.)', 'so-widgets-bundle' ),
						'min' => 1,
						'max' => 10,
						'default' => 1
					),
					'row_span' => array(
						'type' => 'slider',
						'label' => __( 'Row span', 'so-widgets-bundle' ),
						'description' => __( 'Number of rows this item should span. (Limited to number of columns selected in Layout section below.)', 'so-widgets-bundle' ),
						'min' => 1,
						'max' => 10,
						'default' => 1
					),
					'title' => array(
						'type' => 'text',
						'label' => __('Title', 'so-widgets-bundle'),
					),
					'url' => array(
						'type' => 'link',
						'label' => __('Destination URL', 'so-widgets-bundle'),
					),
					'new_window' => array(
						'type' => 'checkbox',
						'default' => false,
						'label' => __('Open in a new window', 'so-widgets-bundle'),
					),
				)
			),
			'desktop_layout' => array(
				'type' => 'section',
				'label' => __( 'Desktop Layout', 'so-widgets-bundle' ),
				'fields' => array(
					'columns' => array(
						'type' => 'slider',
						'label' => __( 'Number of columns', 'so-widgets-bundle' ),
						'min' => 1,
						'max' => 10,
						'default' => 4
					),
					'row_height' => array(
						'type' => 'number',
						'label' => __( 'Row height', 'so-widgets-bundle' ),
						'description' => __( 'Leave blank to match calculated column width.', 'so-widgets-bundle' ),
						'default' => 0
					),
					'gutter' => array(
						'type' => 'number',
						'label' => __( 'Gutter', 'so-widgets-bundle'),
						'description' => __( 'Space between masonry items.', 'so-widgets-bundle' ),
						'default' => 0
					)
				)
			),
			'tablet_layout' => array(
				'type' => 'section',
				'label' => __( 'Tablet Layout', 'so-widgets-bundle' ),
				'hide' => true,
				'fields' => array(
					'break_point' => array(
						'type' => 'number',
						'lanel' => __( 'Break point', 'so-widgets-bundle' ),
						'default' => 768
					),
					'columns' => array(
						'type' => 'slider',
						'label' => __( 'Number of columns', 'so-widgets-bundle' ),
						'min' => 1,
						'max' => 10,
						'default' => 2
					),
					'row_height' => array(
						'type' => 'number',
						'label' => __( 'Row height', 'so-widgets-bundle' ),
						'description' => __( 'Leave blank to match calculated column width.', 'so-widgets-bundle' ),
						'default' => 0
					),
					'gutter' => array(
						'type' => 'number',
						'label' => __( 'Gutter', 'so-widgets-bundle'),
						'description' => __( 'Space between masonry items.', 'so-widgets-bundle' ),
						'default' => 0
					)
				)
			),
			'mobile_layout' => array(
				'type' => 'section',
				'label' => __( 'Mobile Layout', 'so-widgets-bundle' ),
				'hide' => true,
				'fields' => array(
					'break_point' => array(
						'type' => 'number',
						'lanel' => __( 'Break point', 'so-widgets-bundle' ),
						'default' => 480
					),
					'columns' => array(
						'type' => 'slider',
						'label' => __( 'Number of columns', 'so-widgets-bundle' ),
						'min' => 1,
						'max' => 10,
						'default' => 1
					),
					'row_height' => array(
						'type' => 'number',
						'label' => __( 'Row height', 'so-widgets-bundle' ),
						'description' => __( 'Leave blank to match calculated column width.', 'so-widgets-bundle' ),
						'default' => 0
					),
					'gutter' => array(
						'type' => 'number',
						'label' => __( 'Gutter', 'so-widgets-bundle'),
						'description' => __( 'Space between masonry items.', 'so-widgets-bundle' ),
						'default' => 0
					)
				)
			)
		);
	}

	public function get_template_variables( $instance, $args ) {
	}*/
}

siteorigin_widget_register('page-title', __FILE__, 'Page_Title');

function page_title_banner_img_src( $banner_url, $widget_meta ) {
    if( $widget_meta['ID'] == 'page-title') {
        $banner_url = plugin_dir_url(__FILE__) . 'page_title_banner.png';
    }
    return $banner_url;
}
add_filter( 'siteorigin_widgets_widget_banner', 'page_title_banner_img_src', 10, 2);
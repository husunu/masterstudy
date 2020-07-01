<?php

add_action('init', 'stm_lms_recent_courses_vc');

function stm_lms_recent_courses_vc()
{
	vc_map(array(
		'name'   => esc_html__('STM LMS Recent Courses', 'masterstudy'),
		'base'   => 'stm_lms_recent_courses',
		'icon'   => 'stm_lms_recent_courses',
		'description' => esc_html__('Show Recent Courses', 'masterstudy'),
		'category' =>array(
			esc_html__('Content', 'masterstudy'),
		),
		'params' => array(
			array(
				'type'       => 'textfield',
				'heading'    => __( 'Number of courses to show', 'masterstudy' ),
				'param_name' => 'posts_per_page',
			),
			array(
				'type'       => 'dropdown',
				'heading'    => __( 'Style', 'masterstudy' ),
				'param_name' => 'style',
				'value'      => array(
					'Style 1' => 'style_1',
					'Style 2' => 'style_2'
				),
				'std' => 'style_1'
			),
			array(
				'type'       => 'css_editor',
				'heading'    => esc_html__('Css', 'masterstudy'),
				'param_name' => 'css',
				'group'      => esc_html__('Design options', 'masterstudy')
			)
		)
	));
}

if (class_exists('WPBakeryShortCode')) {
	class WPBakeryShortCode_Stm_Lms_Recent_Courses extends WPBakeryShortCode
	{
	}
}
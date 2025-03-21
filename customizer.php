<?php

function add_frontpage_options(WP_Customize_Manager $wp_customize)
{
	// Add section
	$wp_customize->add_section(
		'kkb_frontpage_options',
		array(
			'title'         => __('Frontpage Options', 'kkb'),
			'priority'      => 1,
			'panel'         => 'kkb_theme_options'
		)
	);

	// Control for selecting frontpage image
	$wp_customize->add_setting(
		'kkb_frontpage_landing_image',
		array(
			'default'           => get_bloginfo('stylesheet_directory') . '/images/' . 'fp-0.jpg',
			'sanitize_callback' => 'sanitize_url',
			'transport'         => 'refresh',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'kkb_frontpage_landing_image',
			array(
				'label'      => __('Select the frontpage image', 'kkb'),
				'section'    => 'kkb_frontpage_options',
				'settings'   => 'kkb_frontpage_landing_image',
				// 'context'    => 'your_setting_context' 
			)
		)
	);


	// Control for brightness
	$wp_customize->add_setting(
		'kkb_frontpage_landing_image_brightness',
		array(
			'default'           => 35,
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => 'refresh',
		)
	);
	$wp_customize->add_control(
		'kkb_frontpage_landing_image_brightness',
		array(
			'type' => 'range',
			'section' => 'kkb_frontpage_options',
			'label' => 'Frontpage Image Brightness',
			'input_attrs' => array(
				'min' => 0,
				'max' => 200,
				'step' => 1
			)

		)
	);

	// Control for saturation
	$wp_customize->add_setting(
		'kkb_frontpage_landing_image_saturation',
		array(
			'default'           => 100,
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => 'refresh',
		)
	);
	$wp_customize->add_control(
		'kkb_frontpage_landing_image_saturation',
		array(
			'type' => 'range',
			'section' => 'kkb_frontpage_options',
			'label' => 'Frontpage Image Saturation',
			'input_attrs' => array(
				'min' => 0,
				'max' => 120,
				'step' => 1
			)

		)
	);

	// Control for blur
	$wp_customize->add_setting(
		'kkb_frontpage_landing_image_blur',
		array(
			'default'           => 0,
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => 'refresh',
		)
	);
	$wp_customize->add_control(
		'kkb_frontpage_landing_image_blur',
		array(
			'type' => 'range',
			'section' => 'kkb_frontpage_options',
			'label' => 'Frontpage Image Blur',
			'input_attrs' => array(
				'min' => 0,
				'max' => 20,
				'step' => 1
			)

		)
	);
}

function add_home_options(WP_Customize_Manager $wp_customize){
	$wp_customize->add_section(
		'kkb_home_options',
		array(
			'title'         => __('Home Options', 'kkb'),
			'priority'      => 1,
			'panel'         => 'kkb_theme_options'
		)
	);

	// Control for selecting missing thumbnail image
	$wp_customize->add_setting(
		'kkb_home_missing_thumbnail_placeholder',
		array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_url',
			'transport'         => 'refresh',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'kkb_home_missing_thumbnail_placeholder',
			array(
				'label'      => __('Select the missing thumbnail placeholder image', 'kkb'),
				'section'    => 'kkb_home_options',
				// 'context'    => 'your_setting_context' 
			)
		)
	);

}

add_action('customize_register', 'kkb_customize_register');
function kkb_customize_register($wp_customize)
{
	// Add panel
	$wp_customize->add_panel(
		'kkb_theme_options',
		array(
			//'priority'       => 100,
			'title'            => __('Theme Options', 'kkb'),
			'description'      => __('Theme Modifications like color scheme, theme texts and layout preferences can be done here', 'kkb'),
		)
	);

	add_frontpage_options($wp_customize);
	add_home_options($wp_customize);
}

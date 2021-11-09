<?php
/**
 * learn Theme Customizer
 *
 * @package learn
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function learn_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'learn_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'learn_customize_partial_blogdescription',
			)
		);
	}
}
add_action( 'customize_register', 'learn_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function learn_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function learn_customize_partial_blogdescription() {
	bloginfo( 'description' );
}


function custom_customizer_addition( $wp_customize ) {

	$wp_customize->add_panel(
		'custom_settings',
		array(
			'priority'       => 2,
			'capability'     => 'edit_theme_options',
			'description'    => __( 'Settings', 'learn' ),
			'theme_supports' => '',
			'title'          => __( 'Settings', 'learn' ),
		)
	);

	//header section
	$wp_customize->add_section(
		'header_section',
		array(
			'title'    => __( 'Header', 'learn' ),
			'priority' => 1,
			'panel'    => 'custom_settings',
		)
	);

	//logo01
	$wp_customize->add_setting(
		'logo01',
		array(
			'capability' => 'edit_theme_options',
			'sanitize_callback' => 'esc_url_raw',
			'default'    => '',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'logo01',
			array(
				'label'    => __('logo01', 'learn'),
				'section'  => 'header_section',
				'settings' => 'logo01',
			)
		)
	);

	//logo02
	$wp_customize->add_setting(
		'logo02',
		array(
			'capability' => 'edit_theme_options',
			'sanitize_callback' => 'esc_url_raw',
			'default'    => '',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'logo02',
			array(
				'label'    => __('logo02', 'learn'),
				'section'  => 'header_section',
				'settings' => 'logo02',
			)
		)
	);

	//тут твой код
}

add_action( 'customize_register', 'custom_customizer_addition' );


/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function learn_customize_preview_js() {
	wp_enqueue_script( 'learn-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), _S_VERSION, true );
}
add_action( 'customize_preview_init', 'learn_customize_preview_js' );

<?php
/**
 * The template for adding Featured Grid Content Options in Customizer
 *
 * @package Gridalicious
 * @subpackage Gridalicious Pro
 * @since Gridalicious 0.1
 */

if ( ! defined( 'GRIDALICIOUS_THEME_VERSION' ) ) {
	header( 'Status: 403 Forbidden' );
	header( 'HTTP/1.1 403 Forbidden' );
	exit();
}
	// Featured Grid Content
	$wp_customize->add_panel( 'gridalicious_featured_grid_content', array(
	    'capability'     => 'edit_theme_options',
	    'description'    => __( 'Featured Grid Content Options', 'gridalicious' ),
	    'priority'       => 500,
		'title'    		 => __( 'Featured Grid Content', 'gridalicious' ),
	) );

	$wp_customize->add_section( 'gridalicious_featured_grid_content', array(
		'panel'			=> 'gridalicious_featured_grid_content',
		'priority'		=> 1,
		'title'			=> __( 'Featured Grid Content Options', 'gridalicious' ),
	) );

	$wp_customize->add_setting( 'gridalicious_theme_options[featured_grid_content_option]', array(
		'capability'		=> 'edit_theme_options',
		'default'			=> $defaults['featured_grid_content_option'],
		'sanitize_callback' => 'sanitize_key',
	) );

	$featured_grid_content_content_options = gridalicious_featured_grid_content_options();
	$choices = array();
	foreach ( $featured_grid_content_content_options as $featured_grid_content_content_option ) {
		$choices[$featured_grid_content_content_option['value']] = $featured_grid_content_content_option['label'];
	}

	$wp_customize->add_control( 'gridalicious_featured_grid_content_option', array(
		'choices'   => $choices,
		'label'    	=> __( 'Enable Grid Content on', 'gridalicious' ),
		'priority'	=> '1.1',
		'section'  	=> 'gridalicious_featured_grid_content',
		'settings' 	=> 'gridalicious_theme_options[featured_grid_content_option]',
		'type'    	=> 'select',
	) );

	$wp_customize->add_setting( 'gridalicious_theme_options[featured_grid_content_type]', array(
		'capability'		=> 'edit_theme_options',
		'default'			=> $defaults['featured_grid_content_type'],
		'sanitize_callback'	=> 'sanitize_key',
	) );

	$featured_grid_content_types = gridalicious_featured_grid_content_types();
	$choices = array();
	foreach ( $featured_grid_content_types as $featured_grid_content_type ) {
		$choices[$featured_grid_content_type['value']] = $featured_grid_content_type['label'];
	}

	$wp_customize->add_control( 'gridalicious_featured_grid_content_type', array(
		'choices'  	=> $choices,
		'label'    	=> __( 'Select Grid Content Type', 'gridalicious' ),
		'priority'	=> '2.1.3',
		'section'  	=> 'gridalicious_featured_grid_content',
		'settings' 	=> 'gridalicious_theme_options[featured_grid_content_type]',
		'type'	  	=> 'select',
	) );

	$wp_customize->add_setting( 'gridalicious_theme_options[featured_grid_content_number]', array(
		'capability'		=> 'edit_theme_options',
		'default'			=> $defaults['featured_grid_content_number'],
		'sanitize_callback'	=> 'gridalicious_sanitize_no_of_grid_content',
	) );

	$wp_customize->add_control( 'gridalicious_featured_grid_content_number' , array(
		'description'	=> __( 'Save and refresh the page if No. of Grid Content is changed (Max no of grid content is 30). No. of Grid Content in set as a multiple of 3', 'gridalicious' ),
		'input_attrs' 	=> array(
            'style' => 'width: 45px;',
            'min'   => 3,
            'max'   => 30,
            'step'  => 3,
        	),
		'label'    		=> __( 'No of Grid Content', 'gridalicious' ),
		'priority'		=> '2.1.4',
		'section'  		=> 'gridalicious_featured_grid_content',
		'settings' 		=> 'gridalicious_theme_options[featured_grid_content_number]',
		'type'	   		=> 'number',
		)
	);

	//loop for featured page grid contents
	for ( $i=1; $i <= $options['featured_grid_content_number'] ; $i++ ) {
		$wp_customize->add_setting( 'gridalicious_theme_options[featured_grid_content_page_'. $i .']', array(
			'capability'		=> 'edit_theme_options',
			'sanitize_callback'	=> 'gridalicious_sanitize_page',
		) );

		$wp_customize->add_control( 'gridalicious_featured_grid_content_page_'. $i .'', array(
			'label'    	=> __( 'Featured Page', 'gridalicious' ) . ' # ' . $i ,
			'priority'	=> '4' . $i,
			'section'  	=> 'gridalicious_featured_grid_content',
			'settings' 	=> 'gridalicious_theme_options[featured_grid_content_page_'. $i .']',
			'type'	   	=> 'dropdown-pages',
		) );
	}
// Featured Grid Content End
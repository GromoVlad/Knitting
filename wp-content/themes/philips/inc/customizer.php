<?php
/**
 * philips Theme Customizer
 *
 * @package philips
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function philips_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
	
	
/* ----- THEME OPTIONS PANEL ----- */


	
		$wp_customize->add_section( 'title_tagline' , array(
			'title'		=> __( 'Site Logo & Icon', 'philips' ),
			'priority'	=> 10,
		) );
		
	
		$wp_customize->add_section( 'ph_header_settings' , array(
			'title'		=> __( 'Header Settings (Only Premium)', 'philips' ),
			'priority'	=> 20,
		) );
		
	
		$wp_customize->add_section( 'ph_menu_settings' , array(
			'title'		=> __( 'Menu Settings (Only Premium)', 'philips' ),
			'priority'	=> 30,
		) );
		
	
		$wp_customize->add_section( 'ph_typography_settings' , array(
			'title'		=> __( 'Typography (Only Premium)', 'philips' ),
			'priority'	=> 40,
		) );
		
	
		$wp_customize->add_section( 'ph_blog_settings' , array(
			'title'		=> __( 'Blog Settings (Only Premium)', 'philips' ),
			'priority'	=> 50,
		) );
		
		
		$wp_customize->add_section( 'footer_social' , array(
	   		'title'      => __( 'Social Settings (Only Premium)', 'philips' ),
	   		'description'=> 'This is a footer ',
	   		'priority'   => 60,
		) );
				
		$wp_customize->add_section( 'footer_instagram' , array(
	   		'title'      => __( 'Social Instagram (Only Premium)', 'philips' ),
	   		'description'=> 'This is a footer ',
	   		'priority'   => 70,
		) );
				
		$wp_customize->add_section( 'copyright_footer' , array(
	   		'title'      => __( 'Footer Settings (Only Premium)', 'philips' ),
	   		'description'=> 'This is a footer ',
	   		'priority'   => 80,
		) );
		
		
		
	
		///////////////////////////////////////////////////////////////////////
		//	
		//	Site Logo & Icon
		//
		//////////////////////////////////////////////////////////////////////
		
		$wp_customize->add_setting(
			'philips_logo_upload',
			array(
				'default' => '',
				'sanitize_callback' => 'esc_url_raw'
			)
		);
		
		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,
			'philips_logo_upload',
				array(
					'label' => esc_html__('Upload a site logo', 'philips'),
					'section' => 'title_tagline',
					'settings' => 'philips_logo_upload',
				)
			)
		);
		
		
		///////////////////////////////////////////////////////////////////////
		//	
		//	Header Settings
		//
		//////////////////////////////////////////////////////////////////////
		
		
	    $wp_customize->add_setting(
	        'ph_header_bg_color',
	        array(
	            'default'     => '#ddd',
	            'sanitize_callback'    => 'sanitize_hex_color',
	        )
	    );
		
	    $wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'ph_header_bg_color',
				array(
					'label'      => __( 'Header Background Color:', 'philips' ),
					'description'=> __( 'Change your site header background color', 'philips'),
					'section'    => 'ph_header_settings',
					'settings'   => 'ph_header_bg_color',
				)
			)
		);
		
		
		$wp_customize->add_setting(
			'ph_header_top_padding',
			array(
				'default'=>'50', //px
				'sanitize_callback' => 'philips_check_number'
			)
		);

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'ph_header_top_padding',
				array(
					'label'      => __( 'Header Padding Top:', 'philips' ),
					'section'    => 'ph_header_settings',
					'settings'   => 'ph_header_top_padding',
					'type'		 =>'number',
					'priority'	 => 50
				)
			)
		);

		$wp_customize->add_setting(
			'ph_header_bottom_padding',
			array(
				'default'=>'50', //px
				'sanitize_callback' => 'philips_check_number'
			)
		);

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'ph_header_bottom_padding',
				array(
					'label'      => __( 'Header Padding Botttom:', 'philips' ),
					'section'    => 'ph_header_settings',
					'settings'   => 'ph_header_bottom_padding',
					'type'		 =>'number',
					'priority'	 => 50
				)
			)
		);
		
		
		
		
		
		
		
		
		

		///////////////////////////////////////////////////////////////////////
		//	
		//	Menu Settings
		//
		//////////////////////////////////////////////////////////////////////
		
		$wp_customize->add_setting(
			'ph_menu_font_size',
			array(
				'default'=>'14', //px
				'sanitize_callback' => 'philips_check_number'
			)
		);

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'ph_menu_font_size',
				array(
					'label'      => __( 'Menu font size:', 'philips' ),
					'section'    => 'ph_menu_settings',
					'settings'   => 'ph_menu_font_size',
					'type'		 =>'number',
				)
			)
		);

	    $wp_customize->add_setting(
	        'ph_menubg_colors',
	        array(
	            'default'     => '#fff',
	            'sanitize_callback'    => 'sanitize_hex_color',
	        )
	    );
		
	    $wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'ph_menubg_colors',
				array(
					'label'      => __( 'Menu Background Color:', 'philips' ),
					'description'=> __( 'Change your site menu background color', 'philips'),
					'section'    => 'ph_menu_settings',
					'settings'   => 'ph_menubg_colors',
				)
			)
		);

	    $wp_customize->add_setting(
	        'ph_menutext_colors',
	        array(
	            'default'     => '#000',
	            'sanitize_callback'    => 'sanitize_hex_color',
	        )
	    );
		
	    $wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'ph_menutext_colors',
				array(
					'label'      => __( 'Menu Text Color:', 'philips' ),
					'description'=> __( 'Change your site menu Text color', 'philips'),
					'section'    => 'ph_menu_settings',
					'settings'   => 'ph_menutext_colors',
				)
			)
		);

	    $wp_customize->add_setting(
	        'ph_menu_hovertext_colors',
	        array(
	            'default'     => '#ff0000',
	            'sanitize_callback'    => 'sanitize_hex_color',
	        )
	    );
		
	    $wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'ph_menu_hovertext_colors',
				array(
					'label'      => __( 'Menu Hover Text Color:', 'philips' ),
					'description'=> __( 'Change your site menu hover text color', 'philips'),
					'section'    => 'ph_menu_settings',
					'settings'   => 'ph_menu_hovertext_colors',
				)
			)
		);
		

	    $wp_customize->add_setting(
	        'ph_menu_dropbg_colors',
	        array(
	            'default'     => '#fff',
	            'sanitize_callback'    => 'sanitize_hex_color',
	        )
	    );
		
	    $wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'ph_menu_dropbg_colors',
				array(
					'label'      => __( 'Dropdown Menu BG Color:', 'philips' ),
					'description'=> __( 'Change your site dropdown menu bg color', 'philips'),
					'section'    => 'ph_menu_settings',
					'settings'   => 'ph_menu_dropbg_colors',
				)
			)
		);
		
		
	    $wp_customize->add_setting(
	        'ph_menudrop_hovertext_colors',
	        array(
	            'default'     => '#ff0000',
	            'sanitize_callback'    => 'sanitize_hex_color',
	        )
	    );
		
	    $wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'ph_menudrop_hovertext_colors',
				array(
					'label'      => __( 'Dropdown Menu Hover Color:', 'philips' ),
					'description'=> __( 'Change your site dropdown menu hover text color', 'philips'),
					'section'    => 'ph_menu_settings',
					'settings'   => 'ph_menudrop_hovertext_colors',
				)
			)
		);		
		
		
		
		///////////////////////////////////////////////////////////////////////
		//	
		//	Typography Settings
		//
		//////////////////////////////////////////////////////////////////////		
		
		// Body Font Size /////////////////////////////////////////////////////
		$wp_customize->add_setting(
			'ph_body_size_body',
			array(
				'default'=>'14', //px
				'sanitize_callback' => 'philips_check_number'
			)
		);

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'ph_body_size_body',
				array(
					'label'      => __( 'Body font size:', 'philips' ),
					'section'    => 'ph_typography_settings',
					'settings'   => 'ph_body_size_body',
					'type'		 =>'number',
				)
			)
		);
		
		
		$wp_customize->add_setting(
			'ph_heading_font_size',
			array(
				'default'=>'17', //px
				'sanitize_callback' => 'philips_check_number'
			)
		);

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'ph_heading_font_size',
				array(
					'label'      => __( 'Heading font size:', 'philips' ),
					'section'    => 'ph_typography_settings',
					'settings'   => 'ph_heading_font_size',
					'type'		 =>'number',
				)
			)
		);
		
		
		$wp_customize->add_setting(
	        'ph_title_font_weight',
	        array(
	            'default'     => 'normal',
	            'sanitize_callback' => 'philips_sanitize_choices',
	        )
	    );

	    $wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'ph_title_font_weight',
				array(
					'label'      => __( 'Titles font weight:', 'philips' ),
					'section'    => 'ph_typography_settings',
					'settings'   => 'ph_title_font_weight',
					'type'		 => 'select',
					'choices'    => array(
						'normal'  => 'Normal',
						'bold'    => 'Bold',
						'bolder'  => 'Bolder',
						'lighter' => 'Lighter',
						'100'     => '100',
						'200'     => '200',
						'300'     => '300',
						'400'     => '400',
						'500'     => '500',
						'600'     => '600',
						'700'     => '700',
						'800'     => '800',
						'900'     => '900'
					)
				)
			)
		);
		
		
		///////////////////////////////////////////////////////////////////////
		//	
		//	Blog Settings
		//
		//////////////////////////////////////////////////////////////////////		

		
		$wp_customize->add_setting(
	        'ph_blog_categories',
	        array(
	            'default'     => 'enable',
	            'sanitize_callback' => 'philips_sanitize_choices',
	        )
	    );

	    $wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'ph_blog_categories',
				array(
					'label'      => __( 'Blog Category:', 'philips' ),
					'section'    => 'ph_blog_settings',
					'settings'   => 'ph_blog_categories',
					'description' => 'Enable/Disable Blog Category',
					'type'		 => 'select',
					'choices'    => array(
						'enable'  => 'Enable',
						'disable'    => 'Disable'
					)
				)
			)
		);
		
		$wp_customize->add_setting(
	        'ph_blog_authors',
	        array(
	            'default'     => 'enable',
	            'sanitize_callback' => 'philips_sanitize_choices',
	        )
	    );

	    $wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'ph_blog_authors',
				array(
					'label'      => __( 'Blog Author:', 'philips' ),
					'section'    => 'ph_blog_settings',
					'settings'   => 'ph_blog_authors',
					'description' => 'Enable/Disable Blog Author Name',
					'type'		 => 'select',
					'choices'    => array(
						'enable'  => 'Enable',
						'disable'    => 'Disable'
					)
				)
			)
		);
		
		$wp_customize->add_setting(
	        'ph_blog_dates',
	        array(
	            'default'     => 'enable',
	            'sanitize_callback' => 'philips_sanitize_choices',
	        )
	    );

	    $wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'ph_blog_dates',
				array(
					'label'      => __( 'Blog Date:', 'philips' ),
					'section'    => 'ph_blog_settings',
					'settings'   => 'ph_blog_dates',
					'description' => 'Enable/Disable Blog Date',
					'type'		 => 'select',
					'choices'    => array(
						'enable'  => 'Enable',
						'disable'    => 'Disable'
					)
				)
			)
		);
		
		$wp_customize->add_setting(
	        'ph_blog_comments',
	        array(
	            'default'     => 'enable',
	            'sanitize_callback' => 'philips_sanitize_choices',
	        )
	    );

	    $wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'ph_blog_comments',
				array(
					'label'      => __( 'Blog Comments:', 'philips' ),
					'section'    => 'ph_blog_settings',
					'settings'   => 'ph_blog_comments',
					'description' => 'Enable/Disable Blog Comments',
					'type'		 => 'select',
					'choices'    => array(
						'enable'  => 'Enable',
						'disable'    => 'Disable'
					)
				)
			)
		);
		
		$wp_customize->add_setting(
	        'ph_blog_tags',
	        array(
	            'default'     => 'enable',
	            'sanitize_callback' => 'philips_sanitize_choices',
	        )
	    );

	    $wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'ph_blog_tags',
				array(
					'label'      => __( 'Blog Tags:', 'philips' ),
					'section'    => 'ph_blog_settings',
					'settings'   => 'ph_blog_tags',
					'description' => 'Enable/Disable Blog Tags',
					'type'		 => 'select',
					'choices'    => array(
						'enable'  => 'Enable',
						'disable'    => 'Disable'
					)
				)
			)
		);
		
		$wp_customize->add_setting(
	        'ph_blog_authors_box',
	        array(
	            'default'     => 'enable',
	            'sanitize_callback' => 'philips_sanitize_choices',
	        )
	    );

	    $wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'ph_blog_authors_box',
				array(
					'label'      => __( 'Blog Author Box:', 'philips' ),
					'section'    => 'ph_blog_settings',
					'settings'   => 'ph_blog_authors_box',
					'description' => 'Enable/Disable Blog Author Box',
					'type'		 => 'select',
					'choices'    => array(
						'enable'  => 'Enable',
						'disable'    => 'Disable'
					)
				)
			)
		);
		
		$wp_customize->add_setting(
	        'ph_blog_readmore_text',
	        array(
	            'default'     => '',
	            'sanitize_callback' => 'philips_sanitize_textarea',
	        )
	    );
		
	    $wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'ph_blog_readmore_text',
				array(
					'label'      => __( 'Read More text:', 'philips' ),
					'section'    => 'ph_blog_settings',
					'settings'   => 'ph_blog_readmore_text',
					'description' => 'Read More Button Heading',
					'type'		 =>'text',
				)
			)
		);	
		
		
		
		
		///////////////////////////////////////////////////////////////////////
		//	
		//	Footer Settings
		//
		//////////////////////////////////////////////////////////////////////
		
		
		$wp_customize->add_setting(
			'ph_footer_top_padding',
			array(
				'default'=>'50', //px
				'sanitize_callback' => 'philips_check_number'
			)
		);

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'ph_footer_top_padding',
				array(
					'label'      => __( 'Footer Padding Top:', 'philips' ),
					'section'    => 'copyright_footer',
					'settings'   => 'ph_footer_top_padding',
					'type'		 =>'number',
					'priority'	 => 50
				)
			)
		);

		$wp_customize->add_setting(
			'ph_footer_bottom_padding',
			array(
				'default'=>'50', //px
				'sanitize_callback' => 'philips_check_number'
			)
		);

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'ph_footer_bottom_padding',
				array(
					'label'      => __( 'Footer Padding Botttom:', 'philips' ),
					'section'    => 'copyright_footer',
					'settings'   => 'ph_footer_bottom_padding',
					'type'		 =>'number',
					'priority'	 => 50
				)
			)
		);
		

		$wp_customize->add_setting(
			'ph_footer_font_size',
			array(
				'default'=>'14', //px
				'sanitize_callback' => 'philips_check_number'
			)
		);

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'ph_footer_font_size',
				array(
					'label'      => __( 'Footer font size:', 'philips' ),
					'section'    => 'copyright_footer',
					'settings'   => 'ph_footer_font_size',
					'type'		 =>'number',
				)
			)
		);
		
	
	    $wp_customize->add_setting(
	        'ph_footerbg_colors',
	        array(
	            'default'     => '#000',
	            'sanitize_callback'    => 'sanitize_hex_color',
	        )
	    );

	    $wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'ph_footerbg_colors',
				array(
					'label'      => __( 'Footer Background Color:', 'philips' ),
					'description'=> __( 'Change your site footer background color', 'philips'),
					'section'    => 'copyright_footer',
					'settings'   => 'ph_footerbg_colors',
				)
			)
		);

	
	    $wp_customize->add_setting(
	        'ph_footertext_colors',
	        array(
	            'default'     => '#fff',
	            'sanitize_callback'    => 'sanitize_hex_color',
	        )
	    );

	    $wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'ph_footertext_colors',
				array(
					'label'      => __( 'Footer Text Color:', 'philips' ),
					'description'=> __( 'Change your site footer text color', 'philips'),
					'section'    => 'copyright_footer',
					'settings'   => 'ph_footertext_colors',
				)
			)
		);

		
		$wp_customize->add_setting(
			'philips_footer_upload',
			array(
				'default' => '',
				'sanitize_callback' => 'esc_url_raw'
			)
		);
		
		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,
			'philips_footer_upload',
				array(
					'label' => esc_html__('Upload a Footer logo', 'philips'),
					'section' => 'copyright_footer',
					'settings' => 'philips_footer_upload',
				)
			)
		);	



		
		
		
		
		
		
		
		
		


		
	$wp_customize->remove_control('display_header_text');
	$wp_customize->remove_section( 'static_front_page');
	$wp_customize->remove_control( 'custom_css');
	
}
add_action( 'customize_register', 'philips_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function philips_customize_preview_js() {
	wp_enqueue_script( 'philips_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'philips_customize_preview_js' );


function philips_sanitize_textarea( $input ) {
	return $input;
}

//sanitize functions
function philips_sanitize_choices( $input, $setting ) {
    global $wp_customize;
 
    $control = $wp_customize->get_control( $setting->id );
 
    if ( array_key_exists( $input, $control->choices ) ) {
        return $input;
    } else {
        return $setting->default;
    }
}

function philips_check_number( $value ) {
    $value = (int) $value; // Force the value into integer type.
    return ( 0 < $value ) ? $value : null;
}

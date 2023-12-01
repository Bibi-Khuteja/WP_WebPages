<?php
/**
 * Initialize the custom Theme Options.
 *
 * @package OptionTree
 */

add_action( 'init', 'custom_theme_options' );

/**
 * Build the custom settings & update OptionTree.
 *
 * @since 2.0
 */
function custom_theme_options() {

    // OptionTree is not loaded yet, or this is not an admin request.
    if ( ! function_exists( 'ot_settings_id' ) || ! is_admin() ) {
        return false;
    }

    /**
     * Get a copy of the saved settings array.
     */
    $saved_settings = get_option( ot_settings_id(), array() );

    /**
     * Custom settings array that will eventually be
     * passes to the OptionTree Settings API Class.
     */
    $custom_settings = array(
        'contextual_help' => array(
          'content'       => array(
            array(
              'id'        => 'option_types_help',
              'title'     => __('Option Types', 'presento'),
              'content'   => '<p>' . __('Help content goes here!', 'presento') . '</p>'
            )
          ),
          'sidebar'       => '<p>' . __('Sidebar content goes here!', 'presento') . '</p>'
        ),
    
        //Option Section
    
        'sections'        => array(
          array(
            'id'  => 'header',
            'title' => __('Header Section', 'presento'),
    
          ),
    
          array(
            'id'  => 'footer',
            'title' => __('footer Section', 'presento'),
    
          ),
          array(
            'id'  => 'error_section',
            'title' => __('Error Page', 'presento'),
    
          ),
    
    
        ),
    
    
        //Option Settings & Header section
    
    'settings'        => array(

      array(
        'id' => 'logo',
        'label' => 'Header',
        'type' => 'tab',
        'section' => 'header'
      ),

      array(
        'id'          => 'header_favicon',
        'label'       => __('Header Tab Favicon', 'system_service'),
        'desc'        => 'Upload Your Favicon',
        'type'        => 'upload',
        'section'     => 'header',
      ),

      array(
        'id'          => 'header_logo',
        'label'       => __('Header Main Logo', 'system_service'),
        'desc'        => 'Upload Your Logo',
        'type'        => 'text',
        'section'     => 'header',
      ),
      array(
        'id'          => 'header_home',
        'label'       => __('Header home label', 'system_service'),
        'desc'        => 'enter Your label',
        'type'        => 'text',
        'section'     => 'header',
      ),

      array(
        'id'          => 'header_about',
        'label'       => __('Header about Logo', 'system_service'),
        'desc'        => 'enter Your label',
        'type'        => 'text',
        'section'     => 'header',
      ),

      array(
        'id'          => 'header_services',
        'label'       => __('Header services label', 'system_service'),
        'desc'        => 'enter Your label',
        'type'        => 'text',
        'section'     => 'header',
      ),
      
      array(
        'id'          => 'header_portfolio',
        'label'       => __('Header portfolio label', 'system_service'),
        'desc'        => 'enter Your label',
        'type'        => 'text',
        'section'     => 'header',
      ),
      array(
        'id'          => 'header_team',
        'label'       => __('Header team label', 'system_service'),
        'desc'        => 'enter Your label',
        'type'        => 'text',
        'section'     => 'header',
      ),


      array(
        'id'          => 'header_colorlogo',
        'label'       => __('Header Main Color Logo', 'system_service'),
        'desc'        => 'Upload Your Logo',
        'type'        => 'upload',
        'section'     => 'header',
      ),
      // array(
      //   'id'          => 'header_favicon',
      //   'label'       => __('Header Tab Favicon', 'system_service'),
      //   'desc'        => 'Upload Your Favicon',
      //   'type'        => 'upload',
      //   'section'     => 'header',
      // ),
      array(
        'id'          => 'site_title',
        'label'       => __('Site Title', 'system_service'),
        'desc'        => 'Add your site title',
        'type'        => 'text',
        'section'     => 'header',
      ),

     
      array(
			'id' => 'error_page',
			'label' => '404 Error Page',
			'type' => 'tab',
			'section' => 'error_section'
		  ),
	
		  array(
			'id'          => '404_image',
			'label'       => __('Image', 'dollarbird'),
			'desc'        => 'Error  Image',
			'type'        => 'upload',
			'section'     => 'error_section',
		  ),
  
		  array(
			'id'          => 'error_heading',
			'label'       => __('Heading', 'dollarbird'),
			'desc'        => 'Error  Heading',
			'type'        => 'text',
			'section'     => 'error_section',

		  ),

      array(
        'id'          => 'error_desc',
        'label'       => __('Description', 'dollarbird'),
        'desc'        => 'Error  Description',
        'type'        => 'text',
        'section'     => 'error_section',
  
        ),

		  array(
			'id'          => 'button_title',
			'label'       => __('Button', 'dollarbird'),
			'desc'        => 'Button text',
			'type'        => 'text',
			'section'     => 'error_section',

		  ),
      // array(
      //   'id'          => 'homepage_link',
      //   'label'       => __('homepage Link', 'dollarbird'),
      //   'desc'        => 'HomePage Link',
      //   'type'        => 'text',
      //   'section'     => 'error_section',
      // ),
		
      array(
        'id' => 'logo',
        'label' => 'footer',
        'type' => 'tab',
        'section' => 'footer'
      ),

      // array(
      //   'id'          => 'footer_favicon',
      //   'label'       => __('footer Tab Favicon', 'system_service'),
      //   'desc'        => 'Upload Your Favicon',
      //   'type'        => 'upload',
      //   'section'     => 'footer',
      // ),

      // array(
      //   'id'          => 'footer_logo',
      //   'label'       => __('footer Main Logo', 'system_service'),
      //   'desc'        => 'Upload Your Logo',
      //   'type'        => 'upload',
      //   'section'     => 'footer',
      // ),
      // array(
      //   'id'          => 'site_title',
      //   'label'       => __('Site Title', 'system_service'),
      //   'desc'        => 'Add your site title',
      //   'type'        => 'text',
      //   'section'     => 'footer',
      // ),
      array(
        'id'          => 'main_logo',
        'label'       => __('Main Logos', 'dollarbird'),
        'desc'        => 'Main Logos',
        'type'        => 'text',
        'section'     => 'footer',
      ),
      // footer address

      array(
        'id'          => 'address',
        'label'       => __('Address', 'dollarbird'),
        'desc'        => 'enter address',
        'type'        => 'textarea',
        'section'     => 'footer',
      ),

      // phone label
      array(
        'id'          => 'phn',
        'label'       => __('phn', 'dollarbird'),
        'desc'        => 'enter phn label',
        'type'        => 'text',
        'section'     => 'footer',
      ),

       // phone number
       array(
        'id'          => 'phn_number',
        'label'       => __('phn number', 'dollarbird'),
        'desc'        => 'enter phn number',
        'type'        => 'text',
        'section'     => 'footer',
      ),
	  
       //  email label
       array(
        'id'          => 'email_label',
        'label'       => __('email label', 'dollarbird'),
        'desc'        => 'enter email label',
        'type'        => 'text',
        'section'     => 'footer',
      ),

       //  email id
       array(
        'id'          => 'email_id',
        'label'       => __('email id', 'dollarbird'),
        'desc'        => 'enter email id',
        'type'        => 'text',
        'section'     => 'footer',
      ),

      // useful link
      array(
        'id'          => 'links',
        'label'       => __('links', 'dollarbird'),
        'desc'        => 'enter links label',
        'type'        => 'text',
        'section'     => 'footer',
      ),
      array(
        'id'          => 'links_home',
        'label'       => __('home', 'dollarbird'),
        'desc'        => 'enter  home ',
        'type'        => 'text',
        'section'     => 'footer',
      ),
      array(
        'id'          => 'links_about',
        'label'       => __('about', 'dollarbird'),
        'desc'        => 'enter  about ',
        'type'        => 'text',
        'section'     => 'footer',
      ),
      array(
        'id'          => 'links_service',
        'label'       => __('service', 'dollarbird'),
        'desc'        => 'enter  service ',
        'type'        => 'text',
        'section'     => 'footer',
      ),
      array(
        'id'          => 'links_terms',
        'label'       => __('terms', 'dollarbird'),
        'desc'        => 'enter  terms label ',
        'type'        => 'text',
        'section'     => 'footer',
      ),
      array(
        'id'          => 'links_privacy',
        'label'       => __('privacy', 'dollarbird'),
        'desc'        => 'enter  privacy label ',
        'type'        => 'text',
        'section'     => 'footer',
      ),
	  // Our services
    array(
      'id'          => 'services',
      'label'       => __('services label', 'dollarbird'),
      'desc'        => 'enter services label',
      'type'        => 'text',
      'section'     => 'footer',
    ),
    array(
      'id'          => 'design',
      'label'       => __('design label', 'dollarbird'),
      'desc'        => 'enter design label',
      'type'        => 'text',
      'section'     => 'footer',
    ),
    array(
      'id'          => 'development',
      'label'       => __('development label', 'dollarbird'),
      'desc'        => 'enter development label',
      'type'        => 'text',
      'section'     => 'footer',
    ),
    array(
      'id'          => 'product',
      'label'       => __('product label', 'dollarbird'),
      'desc'        => 'enter product label',
      'type'        => 'text',
      'section'     => 'footer',
    ),
    array(
      'id'          => 'marketing',
      'label'       => __('marketing label', 'dollarbird'),
      'desc'        => 'enter marketing label',
      'type'        => 'text',
      'section'     => 'footer',
    ),
    array(
      'id'          => 'graphic',
      'label'       => __('graphic label', 'dollarbird'),
      'desc'        => 'enter graphic label',
      'type'        => 'text',
      'section'     => 'footer',
    ),
	  
    // social netwrk

	     array(
      'id'          => 'social',
      'label'       => __('social label', 'dollarbird'),
      'desc'        => 'enter social label',
      'type'        => 'text',
      'section'     => 'footer',
    ),
    
    array(
      'id'          => 'social_desc',
      'label'       => __('social_desc label', 'dollarbird'),
      'desc'        => 'enter social_desc label',
      'type'        => 'text',
      'section'     => 'footer',
    ),
	  
	  
      array(
        'id'          => 'social_media',
        'label'       => 'Social Media\'s',
        'type'        => 'tab',
        'section'     => 'footer',
      ),
      array(
        'id'          => 'instagram_link',
        'label'       => __('Instagram Link', 'dollarbird'),
        'desc'        => 'Instagram Link',
        'type'        => 'text',
        'section'     => 'footer',
      ),
      array(
        'id'          => 'linkedin_link',
        'label'       => __('Linkedin Link', 'dollarbird'),
        'desc'        => 'Linkedin Link',
        'type'        => 'text',
        'section'     => 'footer',
      ),
      array(
        'id'          => 'twitter_link',
        'label'       => __('Twitter Link', 'dollarbird'),
        'desc'        => 'Twitter Link',
        'type'        => 'text',
        'section'     => 'footer',
      ),
      array(
        'id'          => 'facebook_link',
        'label'       => __('Facebook Link', 'dollarbird'),
        'desc'        => 'Facebook Link',
        'type'        => 'text',
        'section'     => 'footer',
      ),
    ),
    
      );

    // Allow settings to be filtered before saving.
    $custom_settings = apply_filters( ot_settings_id() . '_args', $custom_settings );

    // Settings are not the same update the DB.
    if ( $saved_settings !== $custom_settings ) {
        update_option( ot_settings_id(), $custom_settings );
    }

    // Lets OptionTree know the UI Builder is being overridden.
    global $ot_has_custom_theme_options;
    $ot_has_custom_theme_options = true;
}
?>
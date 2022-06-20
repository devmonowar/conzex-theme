<?php

    /**
     * ReduxFramework Barebones Sample Config File
     * For full documentation, please visit: http://docs.reduxframework.com/
     */

    if ( ! class_exists( 'Redux' ) ) {
        return;
    }

    // This is your option name where all the Redux data is stored.
    $opt_name = "conzex_option";

    /**
     * ---> SET ARGUMENTS
     * All the possible arguments for Redux.
     * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
     * */

    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
        // TYPICAL -> Change these values as you need/desire
        'opt_name'             => $opt_name,
        // This is where your data is stored in the database and also becomes your global variable name.
        'display_name'         => $theme->get( 'Name' ),
        // Name that appears at the top of your panel
        'display_version'      => $theme->get( 'Version' ),
        // Version that appears at the top of your panel
        'menu_type'            => 'menu',
        //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
        'allow_sub_menu'       => true,
        // Show the sections below the admin menu item or not
        'menu_title'           => __( 'Theme Options', 'conzex' ),
        'page_title'           => __( 'Theme Options', 'conzex' ),
        // You will need to generate a Google API key to use this feature.
        // Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
        'google_api_key'       => '',
        // Set it you want google fonts to update weekly. A google_api_key value is required.
        'google_update_weekly' => false,
        // Must be defined to add google fonts to the typography module
        'async_typography'     => true,
        // Use a asynchronous font on the front end or font string
        //'disable_google_fonts_link' => true,                    // Disable this in case you want to create your own google fonts loader
        'admin_bar'            => false,
        // Show the panel pages on the admin bar
        'admin_bar_icon'       => 'dashicons-portfolio',
        // Choose an icon for the admin bar menu
        'admin_bar_priority'   => 50,
        // Choose an priority for the admin bar menu
        'global_variable'      => '',
        // Set a different name for your global variable other than the opt_name
        'dev_mode'             => false,
        // Show the time the page took to load, etc
        'update_notice'        => false,
        // If dev_mode is enabled, will notify developer of updated versions available in the GitHub Repo
        'customizer'           => true,
        // Enable basic customizer support
        //'open_expanded'     => true,                    // Allow you to start the panel in an expanded way initially.
        //'disable_save_warn' => true,                    // Disable the save warning when a user changes a field

        // OPTIONAL -> Give you extra features
        'page_priority'        => 60,
        // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
        'page_parent'          => 'themes.php',
        // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
        'page_permissions'     => 'manage_options',
        // Permissions needed to access the options panel.
        'menu_icon'            => '',
        // Specify a custom URL to an icon
        'last_tab'             => '',
        // Force your panel to always open to a specific tab (by id)
        'page_icon'            => 'icon-themes',
        // Icon displayed in the admin panel next to your menu_title
        'page_slug'            => '_options',
        // Page slug used to denote the panel
        'save_defaults'        => true,
        // On load save the defaults to DB before user clicks save or not
        'default_show'         => false,
        // If true, shows the default value next to each field that is not the default value.
        'default_mark'         => '',
        // What to print by the field's title if the value shown is default. Suggested: *
        'show_import_export'   => true,
        // Shows the Import/Export panel when not used as a field.

        // CAREFUL -> These options are for advanced use only
        'transient_time'       => 60 * MINUTE_IN_SECONDS,
        'output'               => true,
        // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
        'output_tag'           => true,
        // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
        // 'footer_credit'     => '',                   // Disable the footer credit of Redux. Please leave if you can help it.

        // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
        'database'             => '',
        // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!

        'use_cdn'              => true,
        // If you prefer not to use the CDN for Select2, Ace Editor, and others, you may download the Redux Vendor Support plugin yourself and run locally or embed it in your code.

        //'compiler'             => true,

        // HINTS
        'hints'                => array(
            'icon'          => 'el el-question-sign',
            'icon_position' => 'right',
            'icon_color'    => 'lightgray',
            'icon_size'     => 'normal',
            'tip_style'     => array(
                'color'   => 'light',
                'shadow'  => true,
                'rounded' => false,
                'style'   => '',
            ),
            'tip_position'  => array(
                'my' => 'top left',
                'at' => 'bottom right',
            ),
            'tip_effect'    => array(
                'show' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'mouseover',
                ),
                'hide' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'click mouseleave',
                ),
            ),
        )
    );






    // Add content after the form.


    Redux::setArgs( $opt_name, $args );

    /*
     * ---> END ARGUMENTS
     */

    /*
     * ---> START HELP TABS
     */

    $tabs = array(
        array(
            'id'      => 'redux-help-tab-1',
            'title'   => __( 'Theme Information 1', 'conzex' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'conzex' )
        ),
        array(
            'id'      => 'redux-help-tab-2',
            'title'   => __( 'Theme Information 2', 'conzex' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'conzex' )
        )
    );
    Redux::setHelpTab( $opt_name, $tabs );

    // Set the help sidebar
    $content = __( '<p>This is the sidebar content, HTML is allowed.</p>', 'conzex' );
    Redux::setHelpSidebar( $opt_name, $content );


    /*
     * <--- END HELP TABS
     */


    /*
     *
     * ---> START SECTIONS
     *
     */

    /*

        As of Redux 3.5+, there is an extensive API. This API can be used in a mix/match mode allowing for


     */

    // -> START Basic Fields
/*     Redux::setSection( $opt_name, array(
        'title'  => __( 'Basic Field', 'conzex' ),
        'id'     => 'basic',
        'desc'   => __( 'Basic field with no subsections.', 'conzex' ),
        'icon'   => 'el el-home',
        'fields' => array(
            array(
                'id'       => 'opt-text',
                'type'     => 'text',
                'title'    => __( 'Example Text', 'conzex' ),
                'desc'     => __( 'Example description.', 'conzex' ),
                'subtitle' => __( 'Example subtitle.', 'conzex' ),
                'hint'     => array(
                    'content' => 'This is a <b>hint</b> tool-tip for the text field.<br/><br/>Add any HTML based text you like here.',
                )
            )
        )
    ) );

    Redux::setSection( $opt_name, array(
        'title' => __( 'Basic Fields', 'conzex' ),
        'id'    => 'basic',
        'desc'  => __( 'Basic fields as subsections.', 'conzex' ),
        'icon'  => 'el el-home'
    ) );

    Redux::setSection( $opt_name, array(
        'title'      => __( 'Text', 'conzex' ),
        'desc'       => __( 'For full documentation on this field, visit: ', 'conzex' ) . '<a href="//docs.reduxframework.com/core/fields/text/" target="_blank">//docs.reduxframework.com/core/fields/text/</a>',
        'id'         => 'opt-text-subsection',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'text-example',
                'type'     => 'text',
                'title'    => __( 'Text Field', 'conzex' ),
                'subtitle' => __( 'Subtitle', 'conzex' ),
                'desc'     => __( 'Field Description', 'conzex' ),
                'default'  => 'Default Text',
            ),
        )
    ) );

    Redux::setSection( $opt_name, array(
        'title'      => __( 'Text Area', 'conzex' ),
        'desc'       => __( 'For full documentation on this field, visit: ', 'conzex' ) . '<a href="//docs.reduxframework.com/core/fields/textarea/" target="_blank">//docs.reduxframework.com/core/fields/textarea/</a>',
        'id'         => 'opt-textarea-subsection',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'textarea-example',
                'type'     => 'textarea',
                'title'    => __( 'Text Area Field', 'conzex' ),
                'subtitle' => __( 'Subtitle', 'conzex' ),
                'desc'     => __( 'Field Description', 'conzex' ),
                'default'  => 'Default Text',
            ),
        )
    ) ); */

    /*
     * <--- END SECTIONS
     */

    Redux::setSection( $opt_name, array(
        'title' => __( 'Header Options', 'conzex' ),
        'id'    => 'header',
        'desc'  => __( 'Basic fields as subsections.', 'conzex' ),
        'icon'  => 'el el-home'
    ) );
	 
    Redux::setSection( $opt_name, array(
        'title' => __( 'Logo Options', 'conzex' ),
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'header_logo',
                'type'     => 'media', 
                'url'      => true,
                'title'    => __('Header Logo', 'conzex'),
                'subtitle' => __('Upload Your Logo', 'conzex'),
                'default'   => array('url' => get_stylesheet_directory_uri() . '/assets/img/logo/logo.png'),
            ),
            array(
                'id'       => 'header_sticky_logo',
                'type'     => 'media', 
                'url'      => true,
                'title'    => __('Header Sticky Logo', 'conzex'),
                'subtitle' => __('Upload Your Sticky Logo', 'conzex'),
                'default'   => array('url' => get_stylesheet_directory_uri() . '/assets/img/logo/sticky-logo.png'),
            ),

        )
    ) );

    Redux::setSection( $opt_name, array(
        'title' => __( 'Header Right Button', 'conzex' ),
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'btn_1_text',
                'type'     => 'text',
                'title'    => __( 'Button One Text', 'conzex' ),
                'default'  => 'Support',
            ),
            array(
                'id'       => 'btn_1_url',
                'type'     => 'text',
                'title'    => __( 'Button One URL', 'redux-framework-demo' ),
                'validate' => 'url',
                'default'  => 'http://reduxframework.com',
            ),

            array(
                'id'       => 'btn_2_text',
                'type'     => 'text',
                'title'    => __('Button Two Text', 'conzex'),
                'default'  => 'Login',
            ),

            array(
                'id'       => 'btn_2_url',
                'type'     => 'text',
                'title'    => __( 'Button Two URL', 'redux-framework-demo' ),
                'validate' => 'url',
                'default'  => 'https://youtube.com/',
            ),

        )
    ) );





    Redux::setSection( $opt_name, array(
        'title' => __( 'Footer Options', 'conzex' ),
        'id'    => 'footer',
        'desc'  => __( 'Basic fields as subsections.', 'conzex' ),
        'icon'  => 'el el-home'
    ) );
     
    Redux::setSection( $opt_name, array(
        'title' => __( 'Copyright Options', 'conzex' ),
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'copyright_text',
                'type'     => 'textarea',
                'title'    => __('Copyright Text', 'conzex'),
                'default'  => '<p class="copyright">Copyright@2020 <a href="https://monowar.ml/conzex/">Coui.</a> All rights reserved</p>'
            ),
        )
    ) );


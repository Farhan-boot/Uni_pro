<?php

    /**
     * ReduxFramework Sample Config File
     * For full documentation, please visit: http://docs.reduxframework.com/
     */

    if ( ! class_exists( 'Redux_Framework_sample_config' ) ) {

        class Redux_Framework_sample_config {

            public $args = array();
            public $sections = array();
            public $theme;
            public $ReduxFramework;

            public function __construct() {

                if ( ! class_exists( 'ReduxFramework' ) ) {
                    return;
                }

                // This is needed. Bah WordPress bugs.  ;)
                if ( true == Redux_Helpers::isTheme( __FILE__ ) ) {
                    $this->initSettings();
                } else {
                    add_action( 'plugins_loaded', array( $this, 'initSettings' ), 10 );
                }

            }

            public function initSettings() {

                // Set the default arguments
                $this->setArguments();

                // Set a few help tabs so you can see how it's done
                $this->setHelpTabs();

                // Create the sections and fields
                $this->setSections();

                if ( ! isset( $this->args['opt_name'] ) ) { // No errors please
                    return;
                }

                $this->ReduxFramework = new ReduxFramework( $this->sections, $this->args );
            }

            public function setSections() {


                // ACTUAL DECLARATION OF SECTIONS
                $this->sections[] = array(
                    'title'  => __( 'Home Settings', 'redux-framework-uni-pro' ),
                    'icon'   => 'el el-home',
                    // 'submenu' => false, // Setting submenu to false on a given section will hide it from the WordPress sidebar menu!
                    'fields' => array(
                        array(
                            'id'       => 'opt-switch-dept',
                            'type'     => 'switch', 
                            'title'    => __('Departmental\'s Site', 'redux-framework-uni-pro'),
                            'subtitle' => __('Enable the departmental\'s features! ', 'redux-framework-uni-pro'),
                            'default'  => true,
                        ),
                        array(
                            'id'       => 'opt-color-theme',
                            'type'     => 'color',
                            'title'    => __('Theme Color', 'redux-framework-uni-pro'), 
                            'subtitle' => __('Pick a color for Department.', 'redux-framework-uni-pro'),
                            'default'  => '#1b9c00',
                            'validate' => 'color',
                        ),
                        array(
                            'id'        => 'media-favicon',
                            'type'      => 'media',
                            'url'       => true,
                            'title'     => __('Favicon', 'redux-framework-uni-pro'),
                            'compiler'  => 'true',
                            //'mode'      => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                            'desc'      => __('Your favicon width and height would be maximum 24px and 24px (.ioc .png .gif format)', 'redux-framework-uni-pro'),
                            'subtitle'  => __('Upload any media using the your native uploader', 'redux-framework-uni-pro'),
                            'default'   => array('url' => 'http://s.wordpress.org/style/images/codeispoetry.png'),
                            //'hint'      => array(
                            //    'title'     => 'Hint Title',
                            //    'content'   => 'This is a <b>hint</b> for the media field with a Title.',
                            //)
                        ),
                        array(
                            'id'        => 'media-logo',
                            'type'      => 'media',
                            'url'       => true,
                            'title'     => __('Brand Logo', 'redux-framework-uni-pro'),
                            'compiler'  => 'true',
                            //'mode'      => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                            'desc'      => __('Your logo width and height would be 77px and 67px.', 'redux-framework-uni-pro'),
                            'subtitle'  => __('Upload any media using the your native uploader', 'redux-framework-uni-pro'),
                            'default'   => array('url' => 'http://s.wordpress.org/style/images/codeispoetry.png'),
                            //'hint'      => array(
                            //    'title'     => 'Hint Title',
                            //    'content'   => 'This is a <b>hint</b> for the media field with a Title.',
                            //)
                        ),
                        array(
                            'id'        => 'featured_video',
                            'type'      => 'ace_editor',
                            'data'      => 'pages',
                            'title'     => __('Video Content', 'redux-framework-uni-pro'),
                            'subtitle'  => __('Embed Code (html/youtube video link)', 'redux-framework-uni-pro'),
                            'mode'      => 'html',
                            'theme'     => 'monokai',
                            'desc'      => 'This is for home page featured video.',
                            'default'   => "<iframe class='embed-responsive-item' src='https://www.youtube.com/embed/9gZtOuyK534' frameborder='0' allowfullscreen></iframe>", 'redux-framework-uni-pro',
                        ),
                        /*array(
                            'id'        => 'media-slides',
                            'type'      => 'slides',
                            'title'     => __('Home Slider', 'redux-framework-uni-pro'),
                            'subtitle'  => __('Best slides image width and height would be 1732px and 586px. Unlimited slides with drag and drop sortings for your home page slider.', 'redux-framework-uni-pro'),
                            //'desc'      => __('This field will store all slides values into a multidimensional array to use into a foreach loop.', 'redux-framework-uni-pro'),
                            'placeholder'   => array(
                                'title'         => __('This is a title', 'redux-framework-uni-pro'),
                                'description'   => __('Description Here', 'redux-framework-uni-pro'),
                                'url'           => __('Give us a link!', 'redux-framework-uni-pro'),
                            ),
                        ),*/
                        array(
                            'id'        => 'opt-select-welcome',
                            'type'      => 'select',
                            'data'      => 'pages',
                            'title'     => __('Welcome Page', 'redux-framework-uni-pro'),
                            'subtitle'  => __('Select a page as a welcome page', 'redux-framework-uni-pro'),
                            'desc'      => __('This selected page will be shown in home page.', 'redux-framework-uni-pro'),
                        ),

                        /*array(
                            'id'       => 'opt-select-slider-category',
                            'type'     => 'select',
                            'data'     => 'categories',
                            'title'    => __( 'Select For Slider', 'redux-framework-uni-pro' ),
                            'subtitle' => __( 'Select a Category For Conference & Workshop', 'redux-framework-uni-pro' ),
                            'desc'     => __( 'This selected category post will be shown in home page in Conference & Workshop Section', 'redux-framework-uni-pro' ),
                        ),*/

                        array(
                            'id'       => 'opt-select-important-notice-category',
                            'type'     => 'select',
                            'data'     => 'categories',
                            'title'    => __( 'Select Important Notice', 'redux-framework-uni-pro' ),
                            'subtitle' => __( 'Select a Category For Important Notice', 'redux-framework-uni-pro' ),
                            'desc'     => __( 'This selected category post will be shown in home page in Home Slider Section', 'redux-framework-uni-pro' ),
                        ),
                        array(
                            'id'       => 'opt-select-notice-category',
                            'type'     => 'select',
                            'data'     => 'categories',
                            'title'    => __( 'Select Notice', 'redux-framework-uni-pro' ),
                            'subtitle' => __( 'Select a Category For Notice', 'redux-framework-uni-pro' ),
                            'desc'     => __( 'This selected category post will be shown in home page in Notice Section', 'redux-framework-uni-pro' ),
                        ),
                        array(
                            'id'       => 'opt-select-news-events-category',
                            'type'     => 'select',
                            'data'     => 'categories',
                            'title'    => __( 'Select For News & Events', 'redux-framework-uni-pro' ),
                            'subtitle' => __( 'Select a Category For Campus News', 'redux-framework-uni-pro' ),
                            'desc'     => __( 'This selected category post will be shown in home page in Campus News Section', 'redux-framework-uni-pro' ),
                        ),
                        array(
                            'id'       => 'opt-select-conferences-workshops-category',
                            'type'     => 'select',
                            'data'     => 'categories',
                            'title'    => __( 'Select Conference & Workshop', 'redux-framework-uni-pro' ),
                            'subtitle' => __( 'Select a Category For Conference & Workshop', 'redux-framework-uni-pro' ),
                            'desc'     => __( 'This selected category post will be shown in home page in Conference & Workshop Section', 'redux-framework-uni-pro' ),
                        ),
                        //Social Settings
	                    array(
	                        'id'        => 'section-social-start',
	                        'type'      => 'section',
	                        'title'     => __('Social Settings', 'redux-framework-uni-pro'),
	                        'indent'    => true, // Indent all options below until the next 'section' option is set.
	                    ),
	                    array(
	                        'id'        => 'opt-social-text-facebook',
	                        'type'      => 'text',
	                        'title'     => __('https://www.facebook.com/', 'redux-framework-uni-pro'),
	                        'default'   => 'MIST'
	                    ),
	                    array(
	                        'id'        => 'opt-social-text-youtube',
	                        'type'      => 'text',
	                        'title'     => __('https://www.youtube.com/', 'redux-framework-uni-pro'),
	                        'default'   => 'user/MIST'
	                    ),
	                    array(
	                        'id'        => 'opt-social-text-twitter',
	                        'type'      => 'text',
	                        'title'     => __('https://www.twitter.com/', 'redux-framework-uni-pro'),
	                        'default'   => 'MIST'
	                    ),
	                    array(
	                        'id'        => 'opt-social-text-gplus',
	                        'type'      => 'text',
	                        'title'     => __('https://plus.google.com/', 'redux-framework-uni-pro'),
	                        'default'   => '+MIST'
	                    ),
	                    array(
	                        'id'        => 'opt-social-text-skype',
	                        'type'      => 'text',
	                        'title'     => __('Skype ID:', 'redux-framework-uni-pro'),
	                        'default'   => 'MIST'
	                    ),
	                    array(
	                        'id'        => 'opt-social-text-flickr',
	                        'type'      => 'text',
	                        'title'     => __('https://www.flickr.com/', 'redux-framework-uni-pro'),
	                        'default'   => 'photos/MIST'
	                    ),
	                    array(
	                        'id'        => 'opt-social-text-linkedin',
	                        'type'      => 'text',
	                        'title'     => __('linkedin URL:', 'redux-framework-uni-pro'),
	                        'default'   => 'https://bd.linkedin.com/pub/mazharul-haque/21/543/1ab'
	                    ),
	                    array(
	                        'id'        => 'opt-social-text-wordpress',
	                        'type'      => 'text',
	                        'title'     => __('wordpress.com username:', 'redux-framework-uni-pro'),
	                        'default'   => 'MIST'
	                    ),
	                    array(
	                        'id'        => 'opt-social-text-vimeo',
	                        'type'      => 'text',
	                        'title'     => __('https://www.vimeo.com/', 'redux-framework-uni-pro'),
	                        'default'   => 'MIST'
	                    ),

	                    //FOOTER TEXT
	                    array(
	                        'id'        => 'section-footer-start',
	                        'type'      => 'section',
	                        'title'     => __('Footer Section', 'redux-framework-uni-pro'),
	                        'indent'    => true, // Indent all options below until the next 'section' option is set.
	                    ),
	                    array(
	                        'id'        => 'opt-footer-text-section1-title',
	                        'type'      => 'text',
	                        'title'     => __('Footer Section 1 Title', 'redux-framework-uni-pro'),
	                        'default'   => 'Contact Us'
	                    ),
	                    array(
	                        'id'        => 'opt-footer-text-section1-desc',
	                        'type'      => 'editor',
	                        'title'     => __('Footer Section 1 Description', 'redux-framework-uni-pro'),
	                        'subtitle'  => __('Your Custom text will be there', 'redux-framework-uni-pro'),
	                        'default'   => '<p class="contact-us-details"><strong>Mailing Address:</strong><br>Military Institute of Science &amp; Technology (MIST)<br><i class="fa fa-map-marker"></i> Mirpur Cantonment, Dhaka-1216, Bangladesh.</p><p class="contact-us-details"><strong>Director Administration:</strong><br><i class="fa fa-phone-square"></i> +88-02-9013166, <i class="fa fa-phone"></i> +88-02-9010049 Ext:3820</p><p class="contact-us-details"><strong>Colonel Staff:</strong><br><i class="fa fa-phone-square"></i> +88-02-9011414, <i class="fa fa-phone"></i> +88-02-9010049 Ext:3804,<br><i class="fa fa-print"></i> +88-02-9011311, <i class="fa fa-envelope-o"></i> info@mist.ac.bd</p><p class="contact-us-details"><strong>Admission Officer:</strong><br><i class="fa fa-phone-square"></i> +88-02-8035419,<br><i class="fa fa-phone"></i> +88-02-9010049 EXT:3842 (Upto 14:30 hrs)</p>'
	                    ),
	                    array(
	                        'id'        => 'opt-footer-text-section2-title',
	                        'type'      => 'text',
	                        'title'     => __('Footer Section 2 Title', 'redux-framework-uni-pro'),
	                        'default'   => 'Stay tuned! Subscribe to our newsletter'
	                    ),
	                    array(
	                        'id'        => 'opt-footer-text-section2-desc',
	                        'type'      => 'editor',
	                        'title'     => __('Footer Section 2 Description', 'redux-framework-uni-pro'),
	                        'subtitle'  => __('Your Custom text will be there', 'redux-framework-uni-pro'),
	                        'default'   => '<p>MIST newsletters are issued regularly to keep you up to date on the latest information, notice, news and events, results, awards, and many interesting topical issues. </p>'
	                    ),
	                    array(
	                        'id'        => 'opt-footer-text-section3-title',
	                        'type'      => 'text',
	                        'title'     => __('Footer Section 3 Title', 'redux-framework-uni-pro'),
	                        'default'   => 'Why Choose MIST?'
	                    ),
	                    array(
	                        'id'        => 'opt-footer-text-section3-desc',
	                        'type'      => 'editor',
	                        'title'     => __('Footer Section 3 Description', 'redux-framework-uni-pro'),
	                        'subtitle'  => __('Your Custom text will be there', 'redux-framework-uni-pro'),
	                        'default'   => '<p class="text-justify">We are a progressive institute with a focus on innovative research that has real impact and is recognised internationally. At MIST, students are at the centre of everything we do. Producing career-ready graduates informs what we teach and how we teach it. Our commitment to high-quality teaching, is what makes us educational leaders in science and technology.<br/>
            We can help you to reach your study and career goals through a wide range of courses. You’ll receive individual attention and attend small, manageable classes. You’ll enjoy an exciting and dynamic experience at our modern campus. Our impressive network of industry links inform our programs and provide you with valuable work experience opportunities.</p>'
	                    ),
	                    array(
	                        'id'        => 'opt-footer-text',
	                        'type'      => 'editor',
	                        'title'     => __('Footer Text', 'redux-framework-uni-pro'),
	                        'subtitle'  => __('You can use the following shortcodes in your footer text: [wp-url] [site-url] [theme-url] [login-url] [logout-url] [site-title] [site-tagline] [current-year]', 'redux-framework-uni-pro'),
	                        'default'   => '<a class="text-muted"  href="/">Military Inistitute of Science & Technology (MIST)</a> all rights reserved.',
	                    ),

                    )
                );

                /*
                $this->sections[] = array(
                    'title'  => __( 'Persons Messages', 'redux-framework-uni-pro' ),
                    'desc'   => __( 'This Section will help to set individual person\'s message  selection for home page.', 'redux-framework-uni-pro' ),
                    'icon'   => 'el el-home',
                    // 'submenu' => false, // Setting submenu to false on a given section will hide it from the WordPress sidebar menu!
                    'fields' => array(
                        array(
                            'id'       => 'opt-select-message1-page',
                            'type'     => 'select',
                            'data'      => 'posts',
                            'args'      => array( 'post_type' => 'mist_message', ),
                            'title'    => __( 'Message For First Persion', 'redux-framework-uni-pro' ),
                            'subtitle' => __( 'For the Left(First) Person', 'redux-framework-uni-pro' ),
                            'desc'     => __( 'Part of the message of selected page will be shown on the home page ', 'redux-framework-uni-pro' ),
                        ),
                        array(
                            'id'       => 'designation1-text',
                            'type'     => 'text',
                            'title'    => __( 'Designation', 'redux-framework-uni-pro' ),
                            'desc'     => __( 'Designation For the Left(First) Person', 'redux-framework-uni-pro' ),
                        ),
                        array(
                            'id'       => 'opt-select-message2-page',
                            'type'     => 'select',
                            'data'      => 'posts',
                            'args'      => array( 'post_type' => 'mist_message', ),
                            'title'    => __( 'Message For Middle Persion', 'redux-framework-uni-pro' ),
                            'subtitle' => __( 'For the the Middle(Second) Person', 'redux-framework-uni-pro' ),
                            'desc'     => __( 'Part of the message of selected page will be shown on the home page ', 'redux-framework-uni-pro' ),
                        ),
                        array(
                            'id'       => 'designation2-text',
                            'type'     => 'text',
                            'title'    => __( 'Designation', 'redux-framework-uni-pro' ),
                            'desc'     => __( 'Designation For the Middle(Second) Person', 'redux-framework-uni-pro' ),
                        ),
                        array(
                            'id'       => 'opt-select-message3-page',
                            'type'     => 'select',
                            'data'      => 'posts',
                            'args'      => array( 'post_type' => 'mist_message', ),
                            'title'    => __( 'Message For Last Persion', 'redux-framework-uni-pro' ),
                            'subtitle' => __( 'For the Right(Last) Person', 'redux-framework-uni-pro' ),
                            'desc'     => __( 'Part of the message of selected page will be shown on the home page ', 'redux-framework-uni-pro' ),
                        ),
                        array(
                            'id'       => 'designation3-text',
                            'type'     => 'text',
                            'title'    => __( 'Designation', 'redux-framework-uni-pro' ),
                            'desc'     => __( 'Designation For the Right(Last) Person', 'redux-framework-uni-pro' ),
                        ),
                    )
                );

                $this->sections[] = array(
                    'title'  => __( 'Programs Settings', 'redux-framework-uni-pro' ),
                    'desc'   => __( 'This Section will help to set individual person\'s message  selection for home page.', 'redux-framework-uni-pro' ),
                    'icon'   => 'el el-home',
                    // 'submenu' => false, // Setting submenu to false on a given section will hide it from the WordPress sidebar menu!
                    'fields' => array(
                        array(
                            'id'       => 'opt-select-programs-page',
                            'type'     => 'select',
                            'data'     => 'pages',
                            'multi'    => true,
                            'title'    => __( 'Select program Name', 'redux-framework-uni-pro' ),
                            'subtitle' => __( 'For the First Program', 'redux-framework-uni-pro' ),
                            'desc'     => __( 'Selected Program name will be shown in home page program list', 'redux-framework-uni-pro' ),
                        ),

                        array(
                            'id'=>'multi-text-program-numbers',
                            'type' => 'multi_text',
                            'title' => __('Give The Number of sub programs in program', 'redux-framework-uni-pro'),
                            'validate' => 'numeric',
                            'subtitle' => __('You may add here the number of a sub program here', 'redux-framework-uni-pro'),
                            'desc' => __('This sub program number will be shown for each program respectivly at program list in home', 'redux-framework-uni-pro')
                        ),

                        array(
                            'id'=>'multi-text-program-colors',
                            'type' => 'multi_text',
                            'title' => __('Give The Program color sequentially', 'redux-framework-uni-pro'),
                            'validate' => 'color',
                            'subtitle' => __('You may add here the name of a color (blue, red , gray etc), or you can give color code here', 'redux-framework-uni-pro'),
                            'desc' => __('This colors will be shown for each program respectivly in program list in home', 'redux-framework-uni-pro')
                        ),


                    )
                );
                */
            }

            public function setHelpTabs() {

                // Custom page help tabs, displayed using the help API. Tabs are shown in order of definition.
                $this->args['help_tabs'][] = array(
                    'id'      => 'redux-help-tab-1',
                    'title'   => __( 'Theme Information 1', 'redux-framework-uni-pro' ),
                    'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'redux-framework-uni-pro' )
                );

                $this->args['help_tabs'][] = array(
                    'id'      => 'redux-help-tab-2',
                    'title'   => __( 'Theme Information 2', 'redux-framework-uni-pro' ),
                    'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'redux-framework-uni-pro' )
                );

                // Set the help sidebar
                $this->args['help_sidebar'] = __( '<p>This is the sidebar content, HTML is allowed.</p>', 'redux-framework-uni-pro' );
            }

            /**
             * All the possible arguments for Redux.
             * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
             * */
            public function setArguments() {

                $theme = wp_get_theme(); // For use with some settings. Not necessary.

                $this->args = array(
                    // TYPICAL -> Change these values as you need/desire
                    'opt_name'           => 'uni_pro',
                    // This is where your data is stored in the database and also becomes your global variable name.
                    'display_name'       => $theme->get( 'Name' ),
                    // Name that appears at the top of your panel
                    'display_version'    => $theme->get( 'Version' ),
                    // Version that appears at the top of your panel
                    'menu_type'          => 'menu',
                    //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
                    'allow_sub_menu'     => true,
                    // Show the sections below the admin menu item or not
                    'menu_title'         => __( 'Theme Options', 'redux-framework-uni-pro' ),
                    'page_title'         => __( 'Theme Options', 'redux-framework-uni-pro' ),
                    // You will need to generate a Google API key to use this feature.
                    // Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
                    'google_api_key'     => '',
                    // Must be defined to add google fonts to the typography module

                    'async_typography'   => false,
                    // Use a asynchronous font on the front end or font string
                    'admin_bar'          => true,
                    // Show the panel pages on the admin bar
                    'global_variable'    => '',
                    // Set a different name for your global variable other than the opt_name
                    'dev_mode'           => false,
                    // Show the time the page took to load, etc
                    'customizer'         => true,
                    // Enable basic customizer support

                    // OPTIONAL -> Give you extra features
                    'page_priority'      => null,
                    // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
                    'page_parent'        => 'themes.php',
                    // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
                    'page_permissions'   => 'manage_options',
                    // Permissions needed to access the options panel.
                    'menu_icon'          => '',
                    // Specify a custom URL to an icon
                    'last_tab'           => '',
                    // Force your panel to always open to a specific tab (by id)
                    'page_icon'          => 'icon-themes',
                    // Icon displayed in the admin panel next to your menu_title
                    'page_slug'          => '_options',
                    // Page slug used to denote the panel
                    'save_defaults'      => true,
                    // On load save the defaults to DB before user clicks save or not
                    'default_show'       => false,
                    // If true, shows the default value next to each field that is not the default value.
                    'default_mark'       => '',
                    // What to print by the field's title if the value shown is default. Suggested: *
                    'show_import_export' => true,
                    // Shows the Import/Export panel when not used as a field.

                    // CAREFUL -> These options are for advanced use only
                    'transient_time'     => 60 * MINUTE_IN_SECONDS,
                    'output'             => true,
                    // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
                    'output_tag'         => true,
                    // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
                    // 'footer_credit'     => '',                   // Disable the footer credit of Redux. Please leave if you can help it.

                    // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
                    'database'           => '',
                    // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!

                    // HINTS
                    'hints'              => array(
                        'icon'          => 'icon-question-sign',
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


                // SOCIAL ICONS -> Setup custom links in the footer for quick links in your panel footer icons.
                $this->args['share_icons'][] = array(
                    'url'   => 'https://github.com/mist',
                    'title' => 'Visit us on GitHub',
                    'icon'  => 'el el-github'
                    //'img'   => '', // You can use icon OR img. IMG needs to be a full URL.
                );
                $this->args['share_icons'][] = array(
                    'url'   => 'https://www.facebook.com/mist',
                    'title' => 'Like us on Facebook',
                    'icon'  => 'el el-facebook'
                );
                $this->args['share_icons'][] = array(
                    'url'   => 'http://twitter.com/mist',
                    'title' => 'Follow us on Twitter',
                    'icon'  => 'el el-twitter'
                );
                $this->args['share_icons'][] = array(
                    'url'   => 'http://www.linkedin.com/company/mist',
                    'title' => 'Find us on LinkedIn',
                    'icon'  => 'el el-linkedin'
                );

                // Panel Intro text -> before the form
                if ( ! isset( $this->args['global_variable'] ) || $this->args['global_variable'] !== false ) {
                    if ( ! empty( $this->args['global_variable'] ) ) {
                        $v = $this->args['global_variable'];
                    } else {
                        $v = str_replace( '-', '_', $this->args['opt_name'] );
                    }
                    $this->args['intro_text'] = sprintf( __( '<p>Did you know that we sets a global variable for you? To access any of your saved options from within your code you can use your global variable: <strong>$%1$s</strong></p>', 'redux-framework-uni-pro' ), $v );
                } else {
                    $this->args['intro_text'] = __( '<p>Did you know that we sets a global variable for you? To access any of your saved options from within your code you can use your global variable: <strong>$%1$s</strong></p>', 'redux-framework-uni-pro' );
                }

                // Add content after the form.
                $this->args['footer_text'] = __( '<p>.</p>', 'redux-framework-uni-pro' );
            }

        }

        global $reduxConfig;
        $reduxConfig = new Redux_Framework_sample_config();
    }

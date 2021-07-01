<?php
    /******************************************************************************
     * SECURITY or PROTECTION
     *****************************************************************************/
?>

<?php
    /* Change WordPress login page logo link href attribute */
    function wp_debranding_change_login_page_url($login_header_url) {
        return get_bloginfo( 'url' );
    }
    add_filter( 'login_headerurl', 'wp_debranding_change_login_page_url' );
    
    /* Change WordPress login page logo link title attribute */
    function wp_debranding_change_login_page_title($login_header_title) {
        return get_bloginfo('description');
    }
    add_filter( 'login_headertitle', 'wp_debranding_change_login_page_title' );
    /******************************************************************************
     * Remove Meta Information
     *****************************************************************************/
    
    /******************************************************************************
     * Replace default Meta widget with custom widget without WordPress.org link
     *****************************************************************************/
     class WP_Debranding_Widget_Meta extends WP_Widget {
        function __construct() {
            $widget_ops = array('classname' => 'widget_meta', 'description' => __( "Log in/out, admin, feed and WordPress links") );
            parent::__construct('meta', __('Meta'), $widget_ops);
        }
    
        function widget( $args, $instance ) {
            extract($args);
            $title = apply_filters('widget_title', empty($instance['title']) ? __('Meta') : $instance['title'], $instance, $this->id_base);
    
            echo $before_widget;
            if ( $title )
                echo $before_title . $title . $after_title;
?>
<ul>
    <?php wp_register(); ?>
    <li><?php wp_loginout(); ?></li>
    <li><a href="<?php bloginfo('rss2_url'); ?>" title="<?php echo esc_attr(__('Syndicate this site using RSS 2.0')); ?>"><?php _e('Entries <abbr title="Really Simple Syndication">RSS</abbr>'); ?></a></li>
    <li><a href="<?php bloginfo('comments_rss2_url'); ?>" title="<?php echo esc_attr(__('The latest comments to all posts in RSS')); ?>"><?php _e('Comments <abbr title="Really Simple Syndication">RSS</abbr>'); ?></a></li>
    <?php wp_meta(); ?>
</ul>
<?php
        echo $after_widget;
    }
    
    function update( $new_instance, $old_instance ) {
        $instance = $old_instance;
        $instance['title'] = strip_tags($new_instance['title']);
    
        return $instance;
    }
    
    function form( $instance ) {
        $instance = wp_parse_args( (array) $instance, array( 'title' => '' ) );
        $title = strip_tags($instance['title']);
?>
<p><label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?></label> <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" /></p>
<?php
        }
    }
    
    /* Replace default Meta widget with custom widget without WordPress.org link */
    function wp_debranding_load_widgets(){
        unregister_widget('WP_Widget_Meta');
        register_widget('WP_Debranding_Widget_Meta');
    }
    add_action('widgets_init', 'wp_debranding_load_widgets');
    
    /******************************************************************************
     * Remove WordPress related admin dashboard widgets
     *****************************************************************************/
    /* Remove WordPress related admin dashboard widgets */
    function wp_debranding_remove_dashboard_widgets(){
        remove_meta_box('dashboard_primary', 'dashboard', 'normal');   // wordpress blog
        remove_meta_box('dashboard_secondary', 'dashboard', 'normal');   // other wordpress news
        remove_meta_box('dashboard_plugins', 'dashboard', 'normal');   // plugins
    }
    add_action('admin_menu', 'wp_debranding_remove_dashboard_widgets');
    
    /******************************************************************************
     * Hide help menus and .wp-pointers pop-up dialogs that inform about
     * new features after WordPress upgrade
     *****************************************************************************/
    
    
?>

<?php
/******************************************************************************
* Hide help menus and .wp-pointers pop-up dialogs that inform about
* new features after WordPress upgrade
*****************************************************************************/
    function wp_debranding_admin_css_hide(){
?>
<style type="text/css">
    #contextual-help-link-wrap,
    .wp-pointer{
        display: none !important;
    }
</style>
<?php
    
    }
    add_action('admin_print_styles', 'wp_debranding_admin_css_hide');
?>

<?php
    /*Remove WordPress gallery shortcode inline styling CSS*/
    add_filter( 'use_default_gallery_style', '__return_false' );

    /*Remove WordPress Recent Comments inline styling CSS*/
    function remove_recent_comments_style() {  
      global $wp_widget_factory;  
      remove_action( 'wp_head', array( $wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style' ) );
    }  
    add_action( 'widgets_init', 'remove_recent_comments_style' );

?>

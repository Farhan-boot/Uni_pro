
<!DOCTYPE html>
    <!--[if IE 7]>
        <html class="ie ie7" <?php language_attributes(); ?>>
    <![endif]-->
    <!--[if IE 8]>
        <html class="ie ie8" <?php language_attributes(); ?>>
    <![endif]-->
    <!--[if IE 9]>
        <html class="ie ie9" <?php language_attributes(); ?>>
    <![endif]-->
    <!--[if IE 10]>
        <html class="ie ie10" <?php language_attributes(); ?>>
    <![endif]-->
    <!--[if IE 11]>
        <html class="ie ie11" <?php language_attributes(); ?>>
    <![endif]-->
    <!--[if !(IE 7) | !(IE 8) | !(IE 9) | !(IE 10) | !(IE 11) ]>
        <html <?php language_attributes(); ?>>
    <![endif]-->
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php global $page, $paged; wp_title( '|', true, 'right' ); bloginfo( 'name' ); $site_description = get_bloginfo( 'description', 'display' );
		        if ( $site_description && ( is_home() || is_front_page() ) )
			        echo " | $site_description";
		        if ( $paged >= 2 || $page >= 2 )
			        echo ' | ' . sprintf( __( 'Page %s' ), max( $paged, $page ) );
           ?>
        </title>
        <meta name="description" content="<?php if ( is_single() ) {
            single_post_title('', true);
            } else {
            bloginfo('name'); echo " - "; bloginfo('description');
            }
        ?>" />
        <meta name="author" content="MIST ICT Directorate (ict.mist.ac.bd)">
        <!-- The little things -->
        <?php
            global $uni_pro;
            $favicon = $uni_pro['media-favicon']['url'];
        ?>
        <link rel="icon" href="<?php echo $favicon; ?>" type="image/x-icon">
        <link rel="shortcut icon" href="<?php echo $favicon; ?>" type="image/x-icon">
	    <link rel="apple-touch-icon" href="<?php echo $favicon; ?>" type="image/x-icon"/>
        <!-- The little things -->
        <!-- Stylesheets -->
	    <link rel="stylesheet" href="<?php echo bloginfo('template_directory'); ?>/assets/css/bootstrap.min.css" />
	    <link rel="stylesheet" href="<?php echo bloginfo('template_directory'); ?>/assets/css/animations.min.css" />

         <link href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
        <link href='//fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>
        <link href='//fonts.googleapis.com/css?family=Candal' rel='stylesheet' type='text/css'>
	    <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
        <!-- Stylesheets -->
	    <?php wp_deregister_script('jquery');wp_head(); ?>
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
            <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>

<body>
<!--<div class="apply-online apply-online-sticky" style="">
   <a title="click here for apply online!" href="http://admission.mist.ac.bd/" target="_blank">
   <span style="font-size:12px; line-height: 18px !important;">Undergraduate Admission</span><br>
   <span style="font-size:13px">Online Pre-registration</span><br>
   <span style="font-size:12px;    color: #00E2D9;display:none">(Only Madrasa &amp; Technical board apply directly at MIST Admission Desk, by 25 October 2015)</span>
   </a>
</div>-->
    <header role="banner" class="top-header">
        <?php 
            $is_dept = $uni_pro['opt-switch-dept'];
            if($is_dept==true): get_template_part( "components/header-child-site" );
            else: get_template_part( "components/header-main-site" );
            endif;
        ?>
    </header>
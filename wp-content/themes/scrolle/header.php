<!DOCTYPE html>
<!--[if IE 6]><html class="ie ie6" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 7]><html class="ie ie7" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 8]><html class="ie ie8" <?php language_attributes(); ?>><![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>><!--<![endif]-->
<head>
<?php global $smof_data; ?>
	
	<!-- *********	PAGE TITLE	*********  -->
	<title><?php
		    if (!defined('WPSEO_VERSION')) {
		   		echo bloginfo( 'name') . wp_title( '|',true, '');
		    }
		    else {
		        // For WordPress SEO by Yoast Plugin
		        wp_title();
		    }
		?></title>


	<!-- *********	PAGE TOOLS	*********  -->

	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="author" content="">
	
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- *********	WORDPRESS TOOLS	*********  -->
	
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

	<!-- *********	MOBILE TOOLS	*********  -->

	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">


	<!-- *********	FAVICON TOOLS	*********  -->
	
	<?php if($smof_data['favicon'] != "") { ?> <link rel="shortcut icon" href="<?php echo $smof_data['favicon']; ?>" /><?php } 
			else { ?> <link rel="shortcut icon" href="<?php echo THEMEROOT."/images/favicon.ico"; ?>" /> <?php } ?>
	
	<?php if($smof_data['ipad_retina_icon'] != "")  { ?> <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo $smof_data['ipad_retina_icon']; ?>" /> <?php } ?>
	
	<?php if($smof_data['iphone_icon_retina'] != "")  { ?> <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo $smof_data['iphone_icon_retina']; ?>" /> <?php } ?>
	
	<?php if($smof_data['ipad_icon'] != "")  { ?> <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo $smof_data['ipad_icon']; ?>" /> <?php } ?>
	
	<?php if($smof_data['iphone_icon'] != "")  { ?> <link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?php echo $smof_data['iphone_icon']; ?>" /> <?php } ?>

	<?php wp_head(); ?>
</head>
<body  <?php body_class(); ?>>

	<!-- *********	Loading	*********  -->

<?php get_template_part('inc/loading'); ?>

<div id="wrapper">

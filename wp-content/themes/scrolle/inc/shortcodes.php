<?php

/*-----------------------------------------------------------------------------------*/
/*	Clearfix
/*-----------------------------------------------------------------------------------*/

if (!function_exists('Theme2035_clearfix')) {
	function Theme2035_clearfix( $atts, $content = null ) {	
	   return '<div class="clearfix"></div>';
	}
	add_shortcode('clearfix', 'Theme2035_clearfix');
}


/*-----------------------------------------------------------------------------------*/
/*	Columns
/*-----------------------------------------------------------------------------------*/

if (!function_exists('Theme2035_container')) {
	function Theme2035_container( $atts, $content = null ) {	
	   return '<div class="container"><div class="row">' . do_shortcode($content) . '</div></div>';
	}
	add_shortcode('container', 'Theme2035_container');
}



if (!function_exists('Theme2035_one_half')) {
	function Theme2035_one_half( $atts, $content = null ) {		
	   return '<div class="col-lg-6">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('one_half', 'Theme2035_one_half');
}


if (!function_exists('Theme2035_one_third')) {
	function Theme2035_one_third( $atts, $content = null ) {		
	   return '<div class="col-lg-4 col-sm-4">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('one_third', 'Theme2035_one_third');
}

if (!function_exists('Theme2035_two_third')) {
	function Theme2035_two_third( $atts, $content = null ) {		
	   return '<div class="col-lg-8 col-sm-8">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('two_third', 'Theme2035_two_third');
}


if (!function_exists('Theme2035_one_fourth')) {
	function Theme2035_one_fourth( $atts, $content = null ) {		
	   return '<div class="col-lg-3 col-sm-6">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('one_fourth', 'Theme2035_one_fourth');
}


if (!function_exists('Theme2035_three_fourths')) {
	function Theme2035_three_fourths( $atts, $content = null ) {		
	   return '<div class="col-lg-9">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('three_fourths', 'Theme2035_three_fourths');
}


if (!function_exists('Theme2035_one_sixth')) {
	function Theme2035_one_sixth( $atts, $content = null ) {		
	   return '<div class="col-lg-2 col-sm-4">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('one_sixth', 'Theme2035_one_sixth');
}

if (!function_exists('Theme2035_five_sixths')) {
	function Theme2035_five_sixths( $atts, $content = null ) {		
	   return '<div class="col-lg-10">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('five_sixths', 'Theme2035_five_sixths');
}

if (!function_exists('Theme2035_one_whole')) {
	function Theme2035_one_whole( $atts, $content = null ) {		
	   return '<div class="col-lg-12">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('one_whole', 'Theme2035_one_whole');
}


/*-----------------------------------------------------------------------------------*/
/*	Text Slider
/*-----------------------------------------------------------------------------------*/

if (!function_exists('Theme2035_text_slider')) {
	function Theme2035_text_slider( $atts, $content = null ) {
		extract(shortcode_atts(array(
			'background' => '',
			'active' => 'home',
	    ), $atts));

	   if($active=="home"){ $active="slider"; $margin="margint50"; } else { $active="half-slider"; $margin="margint80"; }
	   return'
			<div id="'.$active.'" style="background:rgba('.$background.');" class="'.$margin .' flexslider text_slider">
				<ul class="slides">
					' . do_shortcode($content) . '
				</ul>
			</div> 
	   ';
	}
	add_shortcode('text_slider', 'Theme2035_text_slider');
}

if (!function_exists('Theme2035_text_slider_item')) {
	function Theme2035_text_slider_item( $atts, $content = null ) {
		
	   return '<li><p>' . do_shortcode($content) . '</p></li>';
	}
	add_shortcode('text_slider_item', 'Theme2035_text_slider_item');
}

/*-----------------------------------------------------------------------------------*/
/*	Social Icon
/*-----------------------------------------------------------------------------------*/

if (!function_exists('Theme2035_social_icon')) {
	function Theme2035_social_icon( $atts, $content = null ) {
	   
	   return'<ul class="social-icons margint40 marginb40">' . do_shortcode($content) . '</ul>';
	   
	}
	add_shortcode('social_icon', 'Theme2035_social_icon');
}

if (!function_exists('Theme2035_social_icon_item')) {
	function Theme2035_social_icon_item( $atts, $content = null ) {
		extract(shortcode_atts(array(
			'link' => '',
			'icon' => '',
	    ), $atts));

	   return'<li><a href="'.$link.'"><i class="fa fa-'.$icon.'"></i></a></li>';
	   
	}
	add_shortcode('social_icon_item', 'Theme2035_social_icon_item');
}

/*-----------------------------------------------------------------------------------*/
/*	Pretty Photo
/*-----------------------------------------------------------------------------------*/

if (!function_exists('Theme2035_pretty_photo')) {
	function Theme2035_pretty_photo( $atts, $content = null ) {
		extract(shortcode_atts(array(
			'url' => '',
			'image_url' => '',
	    ), $atts));

	   return '<div class="featured-image"><a href="'. $url .'" class="prettyPhoto"> <img src="'.$image_url.'"> </a> </div>';
	   
	}
	add_shortcode('pretty_photo', 'Theme2035_pretty_photo');
}

/*-----------------------------------------------------------------------------------*/
/*	Mini Image Slider
/*-----------------------------------------------------------------------------------*/

if (!function_exists('Theme2035_mini_slider')) {
	function Theme2035_mini_slider( $atts, $content = null ) {
		extract(shortcode_atts(array(
			'background' => '255,255,255,255,0.3',
			'active' => 'home',
	    ), $atts));
		

	   if($active=="home"){ $active="slider"; $margin="margint50"; } else { $active="half-slider"; $margin="margint80"; }
	   return'
			<div id="mini-slider" class="margint40 marginb40 flexslider">
				<ul class="slides">
					' . do_shortcode($content) . '
				</ul>
			</div> 
	   ';
	}
	add_shortcode('mini_slider', 'Theme2035_mini_slider');
}

if (!function_exists('Theme2035_mini_slider_item')) {
	function Theme2035_mini_slider_item( $atts, $content = null ) {
		
	   return '<li>' . do_shortcode($content) . '</li>';
	}
	add_shortcode('mini_slider_item', 'Theme2035_mini_slider_item');
}

/*-----------------------------------------------------------------------------------*/
/*	Text
/*-----------------------------------------------------------------------------------*/

if (!function_exists('Theme2035_text')) {
	function Theme2035_text( $atts, $content = null ) {
		extract(shortcode_atts(array(
			'fontsize' => '13',
			'hex' => '#f5f5f5',
			'font' => ''
	    ), $atts));	

	   return  '<span style="color:'.$hex.'; font-family:'.$font.'; font-size: '.$fontsize.'px; ">'. do_shortcode($content) .'</span>';
	}
	add_shortcode('text', 'Theme2035_text');
}

/*-----------------------------------------------------------------------------------*/
/*	Text
/*-----------------------------------------------------------------------------------*/

if (!function_exists('Theme2035_responsive_images')) {
	function Theme2035_responsive_images( $atts, $content = null ) {
	   return  '<div class="img-responsive">'. do_shortcode($content) .'</div>';
	}
	add_shortcode('responsive_images', 'Theme2035_responsive_images');
}

/*-----------------------------------------------------------------------------------*/
/*	About Box
/*-----------------------------------------------------------------------------------*/

if (!function_exists('Theme2035_about_box')) {
	function Theme2035_about_box( $atts, $content = null ) {
		extract(shortcode_atts(array(
			'icon' => 'star',
			'title' => '',
	    ), $atts));	

		$output = '';
		$output .= '<div class="about-box">';
		$output .= '<div class="about-icon">';
		$output .= '<i class="fa fa-'.$icon.'"></i>';
		$output .= '</div>';
		$output .= '<h5 class="margint10">'.$title.'</h5>';
		$output .= '<p>'. do_shortcode($content) .'</p>';
		$output .= '</div>';

		return $output;
	}
	add_shortcode('about_box', 'Theme2035_about_box');
}


/*-----------------------------------------------------------------------------------*/
/*	Animation Type
/*-----------------------------------------------------------------------------------*/

if (!function_exists('Theme2035_animation')) {
	function Theme2035_animation( $atts, $content = null ) {
		extract(shortcode_atts(array(
			'type' => 'fadeInDown',
			'delay' => '0.6s',
	    ), $atts));	

		$output = '';
		$output .= '<div class="animated" data-animation="'. $type .'" data-animation-delay="'. $delay .'"> '. do_shortcode($content) .'</div>';


		return $output;
	}
	add_shortcode('animation', 'Theme2035_animation');
}


/*-----------------------------------------------------------------------------------*/
/*	Animation
/*-----------------------------------------------------------------------------------*/

if (!function_exists('Theme2035_animation_container')) {
	function Theme2035_animation_container( $atts, $content = null ) {

		$output = '';
		$output .= '<div class="animated-area">'. do_shortcode($content) .'</div>';


		return $output;
	}
	add_shortcode('animation_container', 'Theme2035_animation_container');
}



/*-----------------------------------------------------------------------------------*/
/*	Background Color
/*-----------------------------------------------------------------------------------*/

if (!function_exists('Theme2035_b_color')) {
	function Theme2035_b_color( $atts, $content = null ) {
		extract(shortcode_atts(array(
			'color' => '#000',
	    ), $atts));	

	   return  '<div style="background-color:'.$color.';" class="skills-box">'. do_shortcode($content) .'</div>';
	}
	add_shortcode('b_color', 'Theme2035_b_color');
}

/*-----------------------------------------------------------------------------------*/
/*	Background image
/*-----------------------------------------------------------------------------------*/

if (!function_exists('Theme2035_b_image')) {
	function Theme2035_b_image( $atts, $content = null ) {
		extract(shortcode_atts(array(
			'url' => 'http://www.2035themes.com/scrolle/temp/sbg.jpg',
	    ), $atts));	

	   return  '<div class="margint60 padt60" style=" padding-bottom:60px; background: url('.$url.')">'. do_shortcode($content) .'</div>';
	}
	add_shortcode('b_image', 'Theme2035_b_image');
}

/*-----------------------------------------------------------------------------------*/
/*	Subtitle
/*-----------------------------------------------------------------------------------*/

if (!function_exists('Theme2035_subtitle')) {
	function Theme2035_subtitle( $atts, $content = null ) {
		extract(shortcode_atts(array(
			'title' => '',
			'color' => '',
	    ), $atts));	

	   return  '<h2 style="color:'.$color.'" class="sect-mini-titles margint30">'.$title.'</h2><p style="color:'.$color.'" class="info">'. do_shortcode($content)  .'</p>';
	}
	add_shortcode('subtitle', 'Theme2035_subtitle');
}

/*-----------------------------------------------------------------------------------*/
/*	Center
/*-----------------------------------------------------------------------------------*/

if (!function_exists('Theme2035_center')) {
	function Theme2035_center( $atts, $content = null ) {
	   return  '<div style="text-align:center;">'. do_shortcode($content) .'</div>';
	}
	add_shortcode('center', 'Theme2035_center');
}

/*-----------------------------------------------------------------------------------*/
/*	Space
/*-----------------------------------------------------------------------------------*/

if (!function_exists('Theme2035_space')) {
	function Theme2035_space( $atts, $content = null ) {
		extract(shortcode_atts(array(
			'space' => '',
	    ), $atts));	

	   return  '<div style="margin-top:'.$space.'%"></div>';
	}
	add_shortcode('space', 'Theme2035_space');
}

/*-----------------------------------------------------------------------------------*/
/*	Skills Bar
/*-----------------------------------------------------------------------------------*/

if (!function_exists('Theme2035_skill_bar')) {
	function Theme2035_skill_bar( $atts, $content = null ) {
		extract(shortcode_atts(array(
			'title' => '',
			'percent' => '50',
	    ), $atts));	

		$output = '';
		$output .= '<div class="bar-box">';
		$output .= '<p>'.$title.'</p>';
		$output .= '<div class="progress margint5">';
		$output .= '<div class="progress-bar animated-skills" style="width:'.$percent.'%;"></div>';
		$output .= '</div>';
		$output .= '</div>';

		return $output;

	}
	add_shortcode('skill_bar', 'Theme2035_skill_bar');
}

/*-----------------------------------------------------------------------------------*/
/*	Accordions
/*-----------------------------------------------------------------------------------*/

if (!function_exists('Theme2035_accordion')) {
	function Theme2035_accordion( $atts, $content = null ) {
		
		$output = '';
		$output .= '<div class="about-tabs">';
		$output .= '<div id="accordion">';
		$output .= do_shortcode($content);
		$output .= '</div>';
		$output .= '</div>';

		return $output;

	}
	add_shortcode('accordion', 'Theme2035_accordion');
}

/* Accordions Item */

if (!function_exists('Theme2035_accordion_item')) {
	$colid = 1;
	$panid = 1;
	function Theme2035_accordion_item( $atts, $content = null ) {
		extract(shortcode_atts(array(
		 'title' => '',
		 'active' => '',
		    ), $atts));	
		global $colid;
		global $panid;
		$output = '';

		$active = strtolower($active);
		if( $active == "yes" ){ $in="in"; $active = "cllpse-active";  } else { $in="collapse"; }

		$output .= '<div class="panel panel-scrolle">';
		$output .= '<div class="panel-style1 '.$active.'">';
		$output .= '<div class="panel-title"><a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse'.$colid++.'"><i class="fa fa-angle-down"></i>'.$title.'</a></div>';
		$output .= '</div>';
		$output .= '<div id="collapse'.$panid++.'" class="collapse-scrolle '.$in.'">';
		$output .= '<div class="pad5">';	
		$output .=  do_shortcode($content);
		$output .= '</div>';
		$output .= '</div>';
		$output .= '</div>';

		return $output;

	}
	add_shortcode('accordion_item', 'Theme2035_accordion_item');
}

/*-----------------------------------------------------------------------------------*/
/*	Services Icon Box
/*-----------------------------------------------------------------------------------*/

if (!function_exists('Theme2035_icon_box')) {
	function Theme2035_icon_box( $atts, $content = null ) {	
	   return '<ul class="services-list pos-center">' . do_shortcode($content) . '</ul>';
	}
	add_shortcode('icon_box', 'Theme2035_icon_box');
}

/* Icon Box Item */

if (!function_exists('Theme2035_icon_box_item')) {
	function Theme2035_icon_box_item( $atts, $content = null ) {
		extract(shortcode_atts(array(
		 'icon' => 'star',
		 'title' => 'Title',
		    ), $atts));	
		
		$output = '';

		$output .= '<li>';
		$output .= '<div class="ibox">';
		$output .= '<i class="fa fa-'.$icon.'"></i>';
		$output .= '</div>';
		$output .= '<div class="service-hover-box">';
		$output .= do_shortcode($content);
		$output .= '</div>';
		$output .= '<div class="service-list-name">'.$title.'</div>';
		$output .= '</li>';

		return $output;

	}
	add_shortcode('icon_box_item', 'Theme2035_icon_box_item');
}

/*-----------------------------------------------------------------------------------*/
/*	Services Box
/*-----------------------------------------------------------------------------------*/


if (!function_exists('Theme2035_services_box')) {
	function Theme2035_services_box( $atts, $content = null ) {	
	   return '<div class="service-number-box">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('services_box', 'Theme2035_services_box');
}

/* Icon Box Item */

if (!function_exists('Theme2035_services_box_item')) {
	$num_id = 1;
	function Theme2035_services_box_item( $atts, $content = null ) {
		extract(shortcode_atts(array(
		 'title' => 'Title',
		    ), $atts));	

		global $num_id;		

		$output = '';
		$output .= '<div class="snumber">0'.$num_id++.'</div>';
		$output .= '<h3 class="margint20">'.$title.'</h3>';
		$output .= '<p class="margint10">'.do_shortcode($content).'</p>';

		return $output;

	}
	add_shortcode('services_box_item', 'Theme2035_services_box_item');
}

/*-----------------------------------------------------------------------------------*/
/*	Parallax Quote
/*-----------------------------------------------------------------------------------*/

if (!function_exists('Theme2035_parallax_quote')) {
	function Theme2035_parallax_quote( $atts, $content = null ) {	
		extract(shortcode_atts(array(
		 'cite' => '',
		    ), $atts));

			$output = '';
			$output .= '<p class="qtext fit-texts">' . do_shortcode($content) .'</p>';
			$output .= '<p class="qname color-text">'.$cite.'</p>';

			return $output;

	}
	add_shortcode('parallax_quote', 'Theme2035_parallax_quote');
}

/*-----------------------------------------------------------------------------------*/
/*	Icon Left Services
/*-----------------------------------------------------------------------------------*/

if (!function_exists('Theme2035_left_icon_services')) {
	function Theme2035_left_icon_services( $atts, $content = null ) {
		extract(shortcode_atts(array(
			'icon' => 'star',
			'title' => '',
	    ), $atts));	


		$output = '';
		$output .= '<div class="feat-box resetter">';
		$output .= '	<div class="col-lg-2 col-sm-2">';
		$output .= '		<i class="fa fa-'.$icon.'"></i>';
		$output .= '	</div>';
		$output .= '	<div class="col-lg-10 col-sm-10">';
		$output .= '		<h4>'.$title.'</h4>';
		$output .= '		<p class="margint10">'. do_shortcode($content) .'</p>';
		$output .= '	</div>';
		$output .= '</div>';

		return $output;

	}
	add_shortcode('left_icon_services', 'Theme2035_left_icon_services');
}

/*-----------------------------------------------------------------------------------*/
/*	Features Tabs
/*-----------------------------------------------------------------------------------*/

function Theme2035_features_tabs($atts, $content = null) {
    $GLOBALS['tab_count'] = 0;
	do_shortcode( $content );
	
	if( is_array( $GLOBALS['tabs'] ) ){

		foreach( $GLOBALS['tabs'] as $tab ){

			if ( $tab['active']=="active"){ $active="active"; } else{ $active=""; }
			$tabs[] = '<div class="col-lg-4 tab-button '.$active.' "><div class="tab-but"><a href="#'.$tab['id'].'">'.$tab['title'].'</a></div></div>';

			if ( $tab['active']=="active"){
			$panes[] = '<div class="tab-pane tab-info fade in active" id="'.$tab['id'].'">'. $tab['content'] . '</div>';
			}else {  $panes[] = '<div class="tab-pane fade" id="'.$tab['id'].'">'. $tab['content'] . '</div>'; }
		}

		$return = '<div class="tab-content">'.implode($panes).'</div><div class="clearfix"></div><div class="features-tab"><div class="tabbed-area tab-style1 margint30">'.implode( $tabs ).'</div></div>';
	}
	return $return;
}


add_shortcode('features_tabs', 'Theme2035_features_tabs');


function Theme2035_f_tab( $atts, $content ){
	extract(shortcode_atts(array( 'title' => '%d', 'id' => '%d', 'active' => '%d'), $atts));
	
	$x = $GLOBALS['tab_count'];
	$GLOBALS['tabs'][$x] = array(
		'title' => sprintf( $title, $GLOBALS['tab_count'] ),
		'content' =>  do_shortcode($content),
		'id' =>  $id,
		'active' =>  $active,
		 );
	
	$GLOBALS['tab_count']++;
}
add_shortcode( 'f_tab', 'Theme2035_f_tab' );

/*-----------------------------------------------------------------------------------*/
/*	Contact Tabs
/*-----------------------------------------------------------------------------------*/

function Theme2035_contact_tabs($atts, $content = null) {
    $GLOBALS['tab_counts'] = 0;
	do_shortcode( $content );
	
	if( is_array( $GLOBALS['tabst'] ) ){

		foreach( $GLOBALS['tabst'] as $tab ){

			if ( $tab['active']=="active"){ $active="active"; } else{ $active=""; }
				 
			$tabst[] = '<li class="'.$active.'"><a href="#'.$tab['id'].'">'.$tab['title'].'</a></li>';

			if ( $tab['active']=="active"){
			$panes[] = '<div class="tab-pane tab-info fade in active" id="'.$tab['id'].'">'. $tab['content'] . '</div>';
			}else {  
			$panes[] = '<div class="tab-pane fade" id="'.$tab['id'].'">'. $tab['content'] . '</div>'; }
		}

		$return = '<div class="tab-style-3"><ul class="tabbed-contact contact-tab clearfix">'.implode( $tabst ).'</ul><div class="tab-content tab-style2 margint10">'.implode($panes).'</div></div>';
	}
	return $return;
}

add_shortcode('contact_tabs', 'Theme2035_contact_tabs');

function Theme2035_c_tab( $atts, $content ){
	extract(shortcode_atts(array( 'title' => '%d', 'id' => '%d', 'active' => '%d'), $atts));
	
	$x = $GLOBALS['tab_counts'];
	$GLOBALS['tabst'][$x] = array(
		'title' => sprintf( $title, $GLOBALS['tab_counts'] ),
		'content' =>  do_shortcode($content),
		'id' =>  $id,
		'active' =>  $active,
		 );
	
	$GLOBALS['tab_counts']++;
}
add_shortcode( 'c_tab', 'Theme2035_c_tab' );
	

/*-----------------------------------------------------------------------------------*/
/*	Contact Form Area
/*-----------------------------------------------------------------------------------*/

if (!function_exists('Theme2035_contact_form')) {
	function Theme2035_contact_form( $atts, $content = null ) {
		$output = '';


		$output .= "<div class='contact'>";
		$output .= do_shortcode($content);
		$output .= "</div>";

		return $output;

	}
	add_shortcode('contact_form', 'Theme2035_contact_form');
}

/*-----------------------------------------------------------------------------------*/
/*	Price List
/*-----------------------------------------------------------------------------------*/

if (!function_exists('Theme2035_price_list')) {
	function Theme2035_price_list( $atts, $content = null ) {
		extract(shortcode_atts(array(
			'title' => 'Amazing Parallax',
			'desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum odit dignissimos nam vero at?',
			'price' => '45 USD/Month',
	    ), $atts));	


		$output = '';

		$output .= '<div class="price-box">';
		$output .= '<div class="price-title">';
		$output .= '<h2>'.$title.'</h2>';
		$output .= '<p class="margint20">'.$desc.'</p>';
		$output .= '<div class="price">';
		$output .= '<a href="#">'.$price.'</a>';
		$output .= '</div>';
		$output .= '</div>';
		$output .= '<div class="pro-desc padt50 clearfix" >';
		$output .= do_shortcode($content);
		$output .= '</div>';
		$output .= '</div>';

		return $output;

	}
	add_shortcode('price_list', 'Theme2035_price_list');
}

/*-----------------------------------------------------------------------------------*/
/*	Mobile Box
/*-----------------------------------------------------------------------------------*/

if (!function_exists('Theme2035_mobile_box')) {
	function Theme2035_mobile_box( $atts, $content = null ) {
		$output = '';

		$output .= '<ul class="mob-feat margint40">';
		$output .= do_shortcode($content);
		$output .= '</ul>';

		return $output;

	}
	add_shortcode('mobile_box', 'Theme2035_mobile_box');
}		
		
/*-----------------------------------------------------------------------------------*/
/*	Mobile Box item
/*-----------------------------------------------------------------------------------*/

if (!function_exists('Theme2035_box')) {
	function Theme2035_box( $atts, $content = null ) {
		extract(shortcode_atts(array(
			'background' => '#FFEB00',
			'title' => 'Amazing Parallax',
	    ), $atts));	

		$output = '';
		$output .= '<li style="background: '.$background.' ">';
		$output .= '<h3>'.$title.'</h3>';
		$output .= '<p class="margint10">'.do_shortcode($content).'</p>';
		$output .= '</li>';

		return $output;

	}
	add_shortcode('box', 'Theme2035_box');
}	

/*-----------------------------------------------------------------------------------*/
/*	Customer Comments
/*-----------------------------------------------------------------------------------*/

if (!function_exists('Theme2035_customer_comments')) {
	function Theme2035_customer_comments( $atts, $content = null ) {


		$output = '';
		$output .= '<div class="comment-parallax pos-center">';
		$output .= '<div class="cust-comment-box">';
		$output .= '<ul id="comment-list">';
		$output .= do_shortcode($content);
		$output .= '</ul>';
		$output .= '</div>';
		$output .= '<div class="clearfix carousel-buttons">';
		$output .= '<a id="cprev"><i class="fa fa-angle-left"></i></a>';
		$output .= '<a id="cnext"><i class="fa fa-angle-right"></i></a>';
		$output .= '</div>';
		$output .= '</div>';


		return $output;

	}
	add_shortcode('customer_comments', 'Theme2035_customer_comments');
}	

/*-----------------------------------------------------------------------------------*/
/*	Customer Comments item
/*-----------------------------------------------------------------------------------*/

	if (!function_exists('Theme2035_customer')) {
	function Theme2035_customer( $atts, $content = null ) {
		extract(shortcode_atts(array(
			'name' => '',
			'position' => '',
			'url' => ''
	    ), $atts));	


		$output = '';

		$output .= '<li>';
		$output .= '<div class="padcarousel pos-center">';
		$output .= '<h2 class="">'.do_shortcode($content).'</h2>';
		$output .= '<div class="comm-name margint50">';
		$output .= '<div class="comment-pic"><img src="'.$url.'" class="img-circle" alt="" width="75" height="75" /></div>';
		$output .= '<div class=" cust-name"><h2>'.$name.' - '.$position.'</h2></div>';
		$output .= '</div>';
		$output .= '</div>';
		$output .= '</li>';

		return $output;

	}
	add_shortcode('customer', 'Theme2035_customer');
}							
	
/*-----------------------------------------------------------------------------------*/
/*	Twitter
/*-----------------------------------------------------------------------------------*/

if (!function_exists('Theme2035_twitter')) {
	function Theme2035_twitter( $atts, $content = null ) {

		return Theme2035_tweet_out();
	}
	add_shortcode('twitter', 'Theme2035_twitter');
}	

/*-----------------------------------------------------------------------------------*/
/*	Maps
/*-----------------------------------------------------------------------------------*/

if (!function_exists('Theme2035_maps')) {
	function Theme2035_maps( $atts, $content = null ) {

		return "<div id='map'></div>";
	}
	add_shortcode('maps', 'Theme2035_maps');
}	


?>
<?php



/*-----------------------------------------------------------------------------------*/
/*	About Box
/*-----------------------------------------------------------------------------------*/

$zilla_shortcodes['Theme2035_about_box'] = array(
	'no_preview' => true,
	'params' => array(
		'icon' => array(
			'std' => 'star',
			'type' => 'text',
			'label' => __('Icon', 'textdomain'),
			'desc' => __(' <a href="http://fortawesome.github.io/Font-Awesome/icons/">Fontawesome</a> Icon name (Without fa-) ', 'textdomain')
		),
		'title' => array(
			'std' => '',
			'type' => 'text',
			'label' => __('Title', 'textdomain'),
			'desc' => __(' Please Box Title ', 'textdomain')
		),			
		'content' => array(
			'std' => '',
			'type' => 'textarea',
			'label' => __('Box\'s Text', 'textdomain'),
			'desc' => __('Add the Box\'s Text', 'textdomain'),
		)
	), 
	'shortcode' => '[about_box icon="{{icon}}" title="{{title}}"] {{content}} [/about_box]',
	'popup_title' => __('Insert Box', 'textdomain')
);



/*-----------------------------------------------------------------------------------*/
/*	Pretty Photo
/*-----------------------------------------------------------------------------------*/

$zilla_shortcodes['Theme2035_pretty_photo'] = array(
	'no_preview' => true,
	'params' => array(
		'source_url' => array(
			'std' => '',
			'type' => 'text',
			'label' => __('Source Url', 'textdomain'),
			'desc' => __(' Please paste your Image url. ', 'textdomain')
		),
		'image_url' => array(
			'std' => '',
			'type' => 'text',
			'label' => __('Image Url', 'textdomain'),
			'desc' => __(' Please paste your Image url. ', 'textdomain')
		)		
	), 
	'shortcode' => '[pretty_photo url="{{source_url}}" image_url="{{image_url}}"][/pretty_photo]',
	'popup_title' => __('Insert Box', 'textdomain')
);


/*-----------------------------------------------------------------------------------*/
/*	Space
/*-----------------------------------------------------------------------------------*/


$zilla_shortcodes['Theme2035_space'] = array(
	'no_preview' => true,
	'params' => array(
		'space' => array(
			'std' => '10',
			'type' => 'text',
			'label' => __('Height', 'textdomain'),
			'desc' => __('Please enter margin-top %', 'textdomain')
		),	
	), 
	'shortcode' => '[space space="{{space}}" ][/space]',
	'popup_title' => __('Insert Box', 'textdomain')
);


/*-----------------------------------------------------------------------------------*/
/*	Background Color
/*-----------------------------------------------------------------------------------*/

$zilla_shortcodes['Theme2035_b_color'] = array(
	'no_preview' => true,
	'params' => array(
		'color' => array(
			'std' => '#FFFFFF',
			'type' => 'text',
			'label' => __('Background Color', 'textdomain'),
			'desc' => __(' Background Color. Example : #FFFFFF', 'textdomain')
		),
	), 
	'shortcode' => '[b_color color="{{color}}"]  [/b_color]',
	'popup_title' => __('Insert Box', 'textdomain')
);


/*-----------------------------------------------------------------------------------*/
/*	Background Color
/*-----------------------------------------------------------------------------------*/

$zilla_shortcodes['Theme2035_b_image'] = array(
	'no_preview' => true,
	'params' => array(
		'url' => array(
			'std' => '',
			'type' => 'text',
			'label' => __('Background Image', 'textdomain'),
			'desc' => __(' Background Image Url. Example : http://www.2035themes.com/scrolle/temp/bg1.jpg', 'textdomain')
		),
	), 
	'shortcode' => '[b_image url="{{url}}"]  [/b_image]',
	'popup_title' => __('Insert Box', 'textdomain')
);



/*-----------------------------------------------------------------------------------*/
/*	Subtitle
/*-----------------------------------------------------------------------------------*/

$zilla_shortcodes['Theme2035_subtitle'] = array(
	'no_preview' => true,
	'params' => array(
		'title' => array(
			'std' => '',
			'type' => 'text',
			'label' => __('Title', 'textdomain'),
			'desc' => __(' Subtitle Name', 'textdomain')
		),
		'color' => array(
			'std' => '',
			'type' => 'text',
			'label' => __('Text Color', 'textdomain'),
			'desc' => __(' Subtitle Color. Example : #000', 'textdomain')
		),
		'desc' => array(
			'std' => '',
			'type' => 'textarea',
			'label' => __('Subtitle Description', 'textdomain'),
			'desc' => ' Subtitle Description'
		),				
	), 
	'shortcode' => '[subtitle color="{{color}}" title="{{title}}"] {{desc}} [/subtitle]',
	'popup_title' => __('Insert Box', 'textdomain')
);


/*-----------------------------------------------------------------------------------*/
/*	Text Slider
/*-----------------------------------------------------------------------------------*/


$zilla_shortcodes['Theme2035_text_slider'] = array(
	'no_preview' => true,
	'params' => array(
		'background' => array(
			'std' => '0,0,0,0.3',
			'type' => 'text',
			'label' => __('Text Slider Background Color(RGBA)', 'textdomain'),
			'desc' => __('This site helps you : <a href="http://hex2rgba.devoth.com">http://hex2rgba.devoth.com</a> ', 'textdomain')
		),
		'active' => array(
			'type' => 'select',
			'label' => __('Home Type', 'textdomain'),
			'desc' => __('Home Type', 'textdomain'),
			'options' => array(
				'home' => 'Slider & Image & Video Version',
				'half-slider' => 'Half Image Version',
			)
		),	
	),	
	'shortcode' => '[text_slider  background="{{background}}" active="{{active}}"]  [/text_slider]',
	'popup_title' => __('Insert Text Slider', 'textdomain')
);


/*-----------------------------------------------------------------------------------*/
/*	Social Icons Item
/*-----------------------------------------------------------------------------------*/

$zilla_shortcodes['Theme2035_social_icon_item'] = array(
	'no_preview' => true,
	'params' => array(
		'link' => array(
			'std' => '',
			'desc' => 'Please enter social icon site. Example : <b>http://facebook.com</b> ',
			'type' => 'text',
			'label' => __('Social Url', 'textdomain'),
		),
		'icon' => array(
			'std' => '',
			'desc' => 'Please enter FontAwesome icon name. All Icon is <a href="http://fortawesome.github.io/Font-Awesome/icons/#brand">here</a> ',
			'type' => 'text',
			'label' => __('Social icon', 'textdomain'),
		)		
	),
	'shortcode' => '[social_icon_item link="{{link}}" icon="{{icon}}" ][/social_icon_item]',
	'popup_title' => __('Insert Social Item', 'textdomain')
);



/*-----------------------------------------------------------------------------------*/
/*	Text Slider Item
/*-----------------------------------------------------------------------------------*/

$zilla_shortcodes['Theme2035_text_slider_item'] = array(
	'no_preview' => true,
	'params' => array(
		'content' => array(
			'std' => 'Insert Slider Text.',
			'type' => 'textarea',
			'label' => __('Slider Text', 'textdomain'),
		)
	),
	'shortcode' => '[text_slider_item] {{content}} [/text_slider_item]',
	'popup_title' => __('Insert Text Slider Item', 'textdomain')
);



/*-----------------------------------------------------------------------------------*/
/*	Skills Bar
/*-----------------------------------------------------------------------------------*/

$zilla_shortcodes['Theme2035_skill_bar'] = array(
	'no_preview' => true,
	'params' => array(
		'title' => array(
			'std' => '',
			'type' => 'text',
			'label' => __('Title', 'textdomain'),
			'desc' => __(' Subtitle Name', 'textdomain')
		),
		'percent' => array(
			'std' => '89',
			'type' => 'text',
			'label' => __('Percent', 'textdomain'),
			'desc' => __(' Percent Rate. Please write only number. Example : 60', 'textdomain')
		),			
	), 
	'shortcode' => '[skill_bar title="{{title}}" percent="{{percent}}"][/skill_bar]',
	'popup_title' => __('Insert Box', 'textdomain')
);



/*-----------------------------------------------------------------------------------*/
/*	Accordions
/*-----------------------------------------------------------------------------------*/

$zilla_shortcodes['Theme2035_accordion_item'] = array(
	'no_preview' => true,
	'params' => array(
		'active' => array(
			'type' => 'select',
			'label' => __('Active / Passive', 'textdomain'),
			'desc' => __('Active Accordion Tab', 'textdomain'),
			'options' => array(
				'yes' => 'Active',
				'no' => 'Passive',
			)
		),		
		'title' => array(
			'std' => '',
			'type' => 'text',
			'label' => __('Title', 'textdomain'),
			'desc' => __(' Tabs Title', 'textdomain')
		),
		'desc' => array(
			'std' => '',
			'type' => 'textarea',
			'label' => __('Description', 'textdomain'),
			'desc' => __('Please Tab Content', 'textdomain')
		),							
	),
	'shortcode' => '[accordion_item title="{{title}}" active="{{active}}"] {{desc}} [/accordion_item]',
	'popup_title' => __('Insert Box', 'textdomain')
);




/*-----------------------------------------------------------------------------------*/
/*	Icon Box Item
/*-----------------------------------------------------------------------------------*/

$zilla_shortcodes['Theme2035_icon_box_item'] = array(
	'no_preview' => true,
	'params' => array(	
		'icon' => array(
			'std' => 'star',
			'type' => 'text',
			'label' => __('Icon', 'textdomain'),
			'desc' => __('<a href="http://fortawesome.github.io/Font-Awesome/icons/">Fontawesome</a> Icon name (Without fa-)', 'textdomain')
		),			
		'title' => array(
			'std' => '',
			'type' => 'text',
			'label' => __('Title', 'textdomain'),
			'desc' => __(' Icon Box Title', 'textdomain')
		),
		'desc' => array(
			'std' => '<ul><li>Item 1</li><li>Item2</li>',
			'type' => 'textarea',
			'label' => __('Icon Box Hover Content', 'textdomain'),
			'desc' => __(' Icon Box Hover Content', 'textdomain')
		),								
	),
	'shortcode' => '[icon_box_item title="{{title}}" icon="{{icon}}"] {{desc}} [/icon_box_item]',
	'popup_title' => __('Insert Box', 'textdomain')
);




/*-----------------------------------------------------------------------------------*/
/*	Services Numeric Box Item
/*-----------------------------------------------------------------------------------*/

$zilla_shortcodes['Theme2035_services_box_item'] = array(
	'no_preview' => true,
	'params' => array(			
		'title' => array(
			'std' => '',
			'type' => 'text',
			'label' => __('Title', 'textdomain'),
			'desc' => __(' Icon Box Title', 'textdomain')
		),
		'desc' => array(
			'std' => '',
			'type' => 'textarea',
			'label' => __('Icon Box Description', 'textdomain'),
			'desc' => __(' Icon Box Description', 'textdomain')
		),								
	),
	'shortcode' => '[services_box_item title="{{title}}"] {{desc}} [/services_box_item]',
	'popup_title' => __('Insert Box', 'textdomain')
);

/*-----------------------------------------------------------------------------------*/
/*	Icon Left Services
/*-----------------------------------------------------------------------------------*/

$zilla_shortcodes['Theme2035_left_icon_services'] = array(
	'no_preview' => true,
	'params' => array(	
		'icon' => array(
			'std' => 'star',
			'type' => 'text',
			'label' => __('Icon', 'textdomain'),
			'desc' => __('<a href="http://fortawesome.github.io/Font-Awesome/icons/">Fontawesome</a> Icon name (Without fa-)', 'textdomain')
		),			
		'title' => array(
			'std' => '',
			'type' => 'text',
			'label' => __('Title', 'textdomain'),
			'desc' => __(' Icon Box Title', 'textdomain')
		),
		'desc' => array(
			'std' => '',
			'type' => 'textarea',
			'label' => __('Icon Box Description', 'textdomain'),
			'desc' => __(' Icon Box Description', 'textdomain')
		),								
	),
	'shortcode' => '[left_icon_services title="{{title}}" icon="{{icon}}"] {{desc}} [/left_icon_services]',
	'popup_title' => __('Insert Box', 'textdomain')
);

/*-----------------------------------------------------------------------------------*/
/*	Animation Type
/*-----------------------------------------------------------------------------------*/

$zilla_shortcodes['Theme2035_animation'] = array(
	'no_preview' => true,
	'params' => array(	
		'type' => array(
			'type' => 'select',
			'label' => __('Animation Type', 'textdomain'),
			'desc' => __('Animation Type. Please Visit for animation Preview <a href="https://daneden.me/animate/">https://daneden.me/animate/</a> ', 'textdomain'),
			'options' => array(
				'flash' => 'flash',
				'bounce' => 'bounce',
				'shake' => 'shake',
				'tada' => 'tada',
				'swing' => 'swing',
				'wobble' => 'wobble',
				'pulse' => 'pulse',
				'flip' => 'flip',
				'flipInX' => 'flipInX',
				'flipOutX' => 'flipOutX',
				'flipInY' => 'flipInY',
				'flipOutY' => 'flipOutY',
				'fadeIn' => 'fadeIn',
				'fadeInUp' => 'fadeInUp',
				'fadeInDown' => 'fadeInDown',
				'fadeInLeft' => 'fadeInLeft',
				'fadeInRight' => 'fadeInRight',
				'fadeInUpBig' => 'fadeInUpBig',
				'fadeInDownBig' => 'fadeInDownBig',
				'fadeInLeftBig' => 'fadeInLeftBig',
				'fadeInRightBig' => 'fadeInRightBig',
				'fadeOut' => 'fadeOut',
				'fadeOutUp' => 'fadeOutUp',
				'fadeOutDown' => 'fadeOutDown',
				'fadeOutLeft' => 'fadeOutLeft',
				'fadeOutRight' => 'fadeOutRight',
				'fadeOutUpBig' => 'fadeOutUpBig',
				'fadeOutDownBig' => 'fadeOutDownBig',
				'fadeOutLeftBig' => 'fadeOutLeftBig',
				'fadeOutRightBig' => 'fadeOutRightBig',
				'slideInDown' => 'slideInDown',
				'slideInLeft' => 'slideInLeft',
				'slideInRight' => 'slideInRight',
				'slideOutUp' => 'slideOutUp',
				'slideOutLeft' => 'slideOutLeft',
				'slideOutRight' => 'slideOutRight',
				'bounceIn' => 'bounceIn',
				'bounceInDown' => 'bounceInDown',
				'bounceInUp' => 'bounceInUp',
				'bounceInLeft' => 'bounceInLeft',
				'bounceInRight' => 'bounceInRight',
				'bounceOut' => 'bounceOut',
				'bounceOutDown' => 'bounceOutDown',
				'bounceOutUp' => 'bounceOutUp',
				'bounceOutLeft' => 'bounceOutLeft',
				'bounceOutRight' => 'bounceOutRight',
				'rotateIn' => 'rotateIn',
				'rotateInDownLeft' => 'rotateInDownLeft',
				'rotateInDownRight' => 'rotateInDownRight',
				'rotateInUpLeft' => 'rotateInUpLeft',
				'rotateInUpRight' => 'rotateInUpRight',
				'rotateOut' => 'rotateOut',
				'rotateOutDownLeft' => 'rotateOutDownLeft',
				'rotateOutDownRight' => 'rotateOutDownRight',
				'rotateOutUpLeft' => 'rotateOutUpLeft',
				'rotateOutUpRight' => 'rotateOutUpRight',
				'lightSpeedIn' => 'lightSpeedIn',
				'lightSpeedOut' => 'lightSpeedOut',
				'hinge' => 'hinge',
				'rollIn' => 'rollIn',
				'rollOut' => 'rollOut',
			)
		),				
		'delay' => array(
			'std' => '0.3s',
			'type' => 'text',
			'label' => __('Animation Time (Delay)', 'theme2035-fm'),
			'desc' => __('Animation Time (Delay) Example : 0.3s, 0.6s, 1.2s etc...', 'theme2035-fm')
		),							
	),
	'shortcode' => '[animation type="{{type}}" delay="{{delay}}"] Content [/animation]',
	'popup_title' => __('Insert Box', 'textdomain')
);

/*-----------------------------------------------------------------------------------*/
/*	Features Tab
/*-----------------------------------------------------------------------------------*/

$zilla_shortcodes['Theme2035_f_tab'] = array(
	'no_preview' => true,
	'params' => array(			
		'title' => array(
			'std' => '',
			'type' => 'text',
			'label' => __('Title', 'textdomain'),
			'desc' => __(' Icon Box Title', 'textdomain')
		),
		'active' => array(
			'type' => 'select',
			'label' => __('Active / Passive', 'textdomain'),
			'desc' => __('Active Tab select', 'textdomain'),
			'options' => array(
				'active' => 'Active',
				'' => 'Passive',
			)
		),			
		'tabnumber' => array(
			'std' => 'tab1',
			'type' => 'text',
			'label' => __('Tab Number', 'textdomain'),
			'desc' => __(' Tab Number Example : tab1, tab2...', 'textdomain')
		),								
	),
	'shortcode' => '[f_tab title="{{title}}"  id="{{tabnumber}}" active="{{active}}"] Tab Content [/f_tab]',
	'popup_title' => __('Insert Box', 'textdomain')
);




/*-----------------------------------------------------------------------------------*/
/*	Contacts Tab
/*-----------------------------------------------------------------------------------*/

$zilla_shortcodes['Theme2035_c_tab'] = array(
	'no_preview' => true,
	'params' => array(			
		'title' => array(
			'std' => '',
			'type' => 'text',
			'label' => __('Title', 'textdomain'),
			'desc' => __(' Icon Box Title', 'textdomain')
		),
		'active' => array(
			'type' => 'select',
			'label' => __('Active / Passive', 'textdomain'),
			'desc' => __('Active Tab select', 'textdomain'),
			'options' => array(
				'active' => 'Active',
				'' => 'Passive',
			)
		),			
		'tabnumber' => array(
			'std' => 'tabs1',
			'type' => 'text',
			'label' => __('Tab Number', 'textdomain'),
			'desc' => __(' Tab Number Example : tabs1, tabs2...', 'textdomain')
		),								
	),
	'shortcode' => '[c_tab title="{{title}}"  id="{{tabnumber}}" active="{{active}}"] Tab Content [/c_tab]',
	'popup_title' => __('Insert Box', 'textdomain')
);


					
				


/*-----------------------------------------------------------------------------------*/
/*	Features Tab
/*-----------------------------------------------------------------------------------*/

$zilla_shortcodes['Theme2035_price_list'] = array(
	'no_preview' => true,
	'params' => array(			
		'title' => array(
			'std' => '',
			'type' => 'text',
			'label' => __('Title', 'textdomain'),
			'desc' => __('Title', 'textdomain')
		),
		'desc' => array(
			'std' => '',
			'type' => 'textarea',
			'label' => __('Description', 'textdomain'),
			'desc' => __('Description', 'textdomain')
		),		
		'price' => array(
			'std' => '45 USD/Month',
			'type' => 'text',
			'label' => __('Price', 'textdomain'),
			'desc' => __(' Price. Example : 45 USD/Month', 'textdomain')
		),	
		'features' => array(
			'std' => '<ul><li>Item 1</li><li>Item 2</li></ul>',
			'type' => 'textarea',
			'label' => __('Features', 'textdomain'),
			'desc' => __(' Features', 'textdomain')
		),										
	),
	'shortcode' => '[price_list title="{{title}}"  desc="{{desc}}" price="{{price}}"] {{features}} [/price_list]',
	'popup_title' => __('Insert Box', 'textdomain')
);




/*-----------------------------------------------------------------------------------*/
/*	Mobile Box item
/*-----------------------------------------------------------------------------------*/

$zilla_shortcodes['Theme2035_box'] = array(
	'no_preview' => true,
	'params' => array(			
		'background' => array(
			'std' => '#FFFFFF',
			'type' => 'text',
			'label' => __('Background Color', 'textdomain'),
			'desc' => __(' Background Color Example : #FFFFFF', 'textdomain')
		),	
		'title' => array(
			'std' => '',
			'type' => 'text',
			'label' => __('Title', 'textdomain'),
			'desc' => __(' Title', 'textdomain')
		),	
		'description' => array(
			'std' => '',
			'type' => 'textarea',
			'label' => __('description', 'textdomain'),
			'desc' =>  __('description', 'textdomain')
		),												
	),
	'shortcode' => '[box title="{{title}}"  background="{{background}}"] {{description}} [/box]',
	'popup_title' => __('Insert Box', 'textdomain')
);



/*-----------------------------------------------------------------------------------*/
/*	Customer Comments item
/*-----------------------------------------------------------------------------------*/

$zilla_shortcodes['Theme2035_customer'] = array(
	'no_preview' => true,
	'params' => array(			
		'name' => array(
			'std' => '',
			'type' => 'text',
			'label' => __('Name', 'textdomain'),
			'desc' => __(' Customer Name', 'textdomain')
		),	
		'position' => array(
			'std' => '',
			'type' => 'text',
			'label' => __('Position', 'textdomain'),
			'desc' => __(' Position Example : Designer', 'textdomain')
		),	
		'url' => array(
			'std' => '',
			'type' => 'text',
			'label' => __('Customer Image Url', 'textdomain'),
			'desc' =>  __('Customer Image Url', 'textdomain')
		),
		'comment' => array(
			'std' => '',
			'type' => 'textarea',
			'label' => __('Comment', 'textdomain'),
			'desc' =>  __('Comment', 'textdomain')
		),														
	),
	'shortcode' => '[customer name="{{name}}"  position="{{position}}" url="{{url}}" ]  {{comment}} [/customer]',
	'popup_title' => __('Insert Box', 'textdomain')
);



/*-----------------------------------------------------------------------------------*/
/*	Parallax Quote
/*-----------------------------------------------------------------------------------*/

$zilla_shortcodes['Theme2035_parallax_quote'] = array(
	'no_preview' => true,
	'params' => array(			
		'name' => array(
			'std' => '',
			'type' => 'text',
			'label' => __('Name', 'textdomain'),
			'desc' => __('Name', 'textdomain')
		),	
		'quote' => array(
			'std' => '',
			'type' => 'textarea',
			'label' => __('Quote', 'textdomain'),
			'desc' =>  __('Quote', 'textdomain')
		),														
	),
	'shortcode' => '[parallax_quote cite="{{name}}"]  {{quote}} [/parallax_quote]',
	'popup_title' => __('Insert Box', 'textdomain')
);


/*-----------------------------------------------------------------------------------*/
/*	Parallax Quote
/*-----------------------------------------------------------------------------------*/

$zilla_shortcodes['Theme2035_parallax_clients'] = array(
	'no_preview' => true,
	'params' => array(			
		'url' => array(
			'std' => '',
			'type' => 'text',
			'label' => __('Image Url', 'textdomain'),
			'desc' => __('Image Url', 'textdomain')
		),														
	),
	'shortcode' => '[parallax_clients url="{{url}}"][/parallax_clients]',
	'popup_title' => __('Insert Box', 'textdomain')
);





?>
<?php

add_action('init','of_options');

if (!function_exists('of_options'))
{
	function of_options()
	{
		//Access the WordPress Categories via an Array
		$of_categories 		= array();  
		$of_categories_obj 	= get_categories('hide__mpty=0');
		foreach ($of_categories_obj as $of_cat) {
		    $of_categories[$of_cat->cat_ID] = $of_cat->cat_name;}
		$categories_tmp 	= array_unshift($of_categories, "Select a category:");    
	       
		//Access the WordPress Pages via an Array
		$of_pages 			= array();
		$of_pages_obj 		= get_pages('sort_column=post_parent,menu_order');    
		foreach ($of_pages_obj as $of_page) {
		    $of_pages[$of_page->ID] = $of_page->post__ame; }
		$of_pages_tmp 		= array_unshift($of_pages, "Select a page:");       
	
		//Testing 
		$of_options_select 	= array("one","two","three","four","five"); 
		$of_options_radio 	= array("one" => "One","two" => "Two","three" => "Three","four" => "Four","five" => "Five");
		
		//Sample Homepage blocks for the layout manager (sorter)
		$of_options_homepage_blocks = array
		( 
			"disabled" => array (
				"placebo" 		=> "placebo", //REQUIRED!
				"block_one"		=> "Block One",
				"block_two"		=> "Block Two",
				"block_three"	=> "Block Three",
			), 
			"enabled" => array (
				"placebo" 		=> "placebo", //REQUIRED!
				"block_four"	=> "Block Four",
			),
		);


		//Stylesheets Reader
		$alt_stylesheet_path = LAYOUT_PATH;
		$alt_stylesheets = array();
		
		if ( is_dir($alt_stylesheet_path) ) 
		{
		    if ($alt_stylesheet_dir = opendir($alt_stylesheet_path) ) 
		    { 
		        while ( ($alt_stylesheet_file = readdir($alt_stylesheet_dir)) !== false ) 
		        {
		            if(stristr($alt_stylesheet_file, ".css") !== false)
		            {
		                $alt_stylesheets[] = $alt_stylesheet_file;
		            }
		        }    
		    }
		}


		//Background Images Reader
		$bg_images_path = get_stylesheet_directory(). '/images/bg/'; // change this to where you store your bg images
		$bg_images_url = get_template_directory_uri().'/images/bg/'; // change this to where you store your bg images
		$bg_images = array();
		
		if ( is_dir($bg_images_path) ) {
		    if ($bg_images_dir = opendir($bg_images_path) ) { 
		        while ( ($bg_images_file = readdir($bg_images_dir)) !== false ) {
		            if(stristr($bg_images_file, ".png") !== false || stristr($bg_images_file, ".jpg") !== false) {
		            	natsort($bg_images); //Sorts the array into a natural order
		                $bg_images[] = $bg_images_url . $bg_images_file;
		            }
		        }    
		    }
		}
		

		/*-----------------------------------------------------------------------------------*/
		/* TO DO: Add options/functions that use these */
		/*-----------------------------------------------------------------------------------*/
		
		//More Options
		$uploads_arr 		= wp_upload_dir();
		$all_uploads_path 	= $uploads_arr['path'];
		$all_uploads 		= get_option('of_uploads');
		$other__ntries 		= array("Select a number:","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19");
		$body_repeat 		= array("no-repeat","repeat-x","repeat-y","repeat");
		$body_pos 			= array("top left","top center","top right","center left","center center","center right","bottom left","bottom center","bottom right");
		
		// Image Alignment radio box
		$of_options_thumb_align = array("alignleft" => "Left","alignright" => "Right","aligncenter" => "Center"); 
		
		// Image Links to Options
		$of_options_image_link_to = array("image" => "The Image","post" => "The Post"); 


/*-----------------------------------------------------------------------------------*/
/* The Options Array */
/*-----------------------------------------------------------------------------------*/

// Set the Options Array
global $of_options;
$of_options = array();



$of_options[] = array( 	"name" 		=> "General",
						"type" 		=> "heading",
						"icon"		=> ADMIN_IMAGES ."icon-home.png"						
				);

$of_options[] = array( "name" => "12",
					"desc" => "",
					"id" => "general_heading",
					"std" => "General Options",
					"icon" => false,
					"type" => "info");

$of_options[] = array( 	"name" 		=> "Site Background",
						"id" 		=> "body_background",
						"std" 		=> "#FFFFFF",
						"type" 		=> "color",
						"desc" 		=> 'Site Background',
				);

$of_options[] = array( 	"name" 		=> "Main Color",
						"id" 		=> "dominant_color",
						"std" 		=> "#FFEB00",
						"type" 		=> "color",
						"desc" 		=> 'Main Color',
				);

$of_options[] = array( "name" => "12",
					"desc" => "",
					"id" => "general_heading",
					"std" => "Home Section Type",
					"icon" => false,
					"type" => "info");


$of_options[] = array( 	"name" 		=> "Home Section Layout",
						"desc" 		=> "Some description. Note that this is a custom text added added from options file.",
						"id" 		=> "home_layout",
						"type" 		=> "select",
						"std" 		=> "slider",
						"options" 	=> array(
										"slider" => "Slider Version",
										"video" => "Video Version",
										"half_slider" => "Half Photo",
									)
				);

$of_options[] = array( "name" => "12",
					"desc" => "",
					"id" => "general_heading",
					"std" => "Video Home Type",
					"icon" => false,
					"type" => "info");


$of_options[] = array( 	"name" 		=> "Home Section Layout",
						"desc" 		=> "Upload your video. Only <b>.mp4</b> file",
						"id" 		=> "video_type",
						"type" 		=> "upload",
						"mod" 		=> "min",
				);

$of_options[] = array( "name" => "12",
					"desc" => "",
					"id" => "general_heading",
					"std" => "Slider Options",
					"icon" => false,
					"type" => "info");

$of_options[] = array( 	"name" 		=> "Length between transitions",
						"desc" 		=> "Length between transitions",
						"id" 		=> "length_trans",
						"std" 		=> "4000",
						"min" 		=> "500",
						"step"		=> "100",
						"max" 		=> "8000",
						"type" 		=> "sliderui" 
				);


$of_options[] = array( 	"name" 		=> "Transition",
						"desc" 		=> "0-None <br /> 1-Fade<br /> 2-Slide Top<br /> 3-Slide Right<br /> 4-Slide Bottom<br /> 5-Slide Left<br /> 6-Carousel Right<br /> 7-Carousel Left",
						"id" 		=> "transition",
						"std" 		=> "1",
						"type" 		=> "text" 
				);

$of_options[] = array( 	"name" 		=> "Transition Speed",
						"desc" 		=> "Speed of transition",
						"id" 		=> "transition_speed",
						"std" 		=> "1000",
						"min" 		=> "0",
						"step"		=> "100",
						"max" 		=> "6000",
						"type" 		=> "sliderui" 
				);

$of_options[] = array( 	"name" 		=> "Parallax & Scroll",
						"type" 		=> "heading",
						"icon"		=> ADMIN_IMAGES ."icon_parallax.png"						
				);

$of_options[] = array( "name" => "12",
					"desc" => "",
					"id" => "general_heading",
					"std" => "Parallax Options",
					"icon" => false,
					"type" => "info");


$of_options[] = array( 	"name" 		=> "Parallax Padding",
						"desc" 		=> "Parallax Padding (Height)",
						"id" 		=> "parallax_height",
						"std" 		=> "125",
						"min" 		=> "80",
						"step"		=> "5",
						"max" 		=> "250",
						"type" 		=> "sliderui" 
				);

$of_options[] = array( "name" => "12",
					"desc" => "",
					"id" => "general_heading",
					"std" => "Menu Scrool Speed",
					"icon" => false,
					"type" => "info");

$of_options[] = array( 	"name" 		=> "Menu Scrool Speed",
						"desc" 		=> "Menu Scrool Speed",
						"id" 		=> "menu_scrool_speed",
						"std" 		=> "1500",
						"min" 		=> "0",
						"step"		=> "10",
						"max" 		=> "3000",
						"type" 		=> "sliderui" 
				);

$of_options[] = array( "name" => "12",
					"desc" => "",
					"id" => "general_heading",
					"std" => "Custom Scrool",
					"icon" => false,
					"type" => "info");

$of_options[] = array( 	"name" 		=> "Custom Scrool",
						"desc" 		=> "Custom Scrool",
						"id" 		=> "switch__x1",
						"std" 		=> 1,
						"type" 		=> "switch"
				); 
$of_options[] = array( 	"name" 		=> "Custom Scrool Width",
						"desc" 		=> "Custom Scrool Width",
						"id" 		=> "menu_scrool_width",
						"std" 		=> "5",
						"min" 		=> "0",
						"step"		=> "1",
						"max" 		=> "20",
						"type" 		=> "sliderui" 
				);

$of_options[] = array( "name" => "12",
					"desc" => "",
					"id" => "general_heading",
					"std" => "Animation",
					"icon" => false,
					"type" => "info");

$of_options[] = array( 	"name" 		=> "Animation",
						"desc" 		=> "Animation",
						"id" 		=> "animation_onoff",
						"std" 		=> 1,
						"type" 		=> "switch"
				); 

$of_options[] = array( 	"name" 		=> "Logo & Favicon",
						"type" 		=> "heading",
						"icon"		=> ADMIN_IMAGES ."icon-logo.png"						
				);
	
$of_options[] = array( "name" => "12",
					"desc" => "",
					"id" => "general_heading",
					"std" => "Logo",
					"icon" => false,
					"type" => "info");

$of_options[] = array(  "name" => "Logo (Standart)",
						"desc" => "Standart Logo",
						"id" => "logo_standart",
						"std" => "",
						"mod" => "min",
						"type" => "media"
				);

$of_options[] = array(  "name" => "Logo Mini (60x67)",
						"desc" => "Logo Mini for Vertical Menu",
						"id" => "logo_mini",
						"std" => "",
						"mod" => "min",
						"type" => "media"
				);

$of_options[] = array( "name" => "12",
					"desc" => "",
					"id" => "general_heading",
					"std" => "Favicon & Apple Icon",
					"icon" => false,
					"type" => "info");

$of_options[] = array(  "name" => "Favicon Upload (16x16)",
						"desc" => "Please upload favicon icon. <a href='http://www.favicon.cc'>favicon.cc</a>",
						"id" => "favicon",
						"std" => "",
						"mod" => "min",
						"type" => "media"
				);

$of_options[] = array(  "name" => "Apple iPhone Icon Upload (57x57)",
						"desc" => "Apple Iphone Icon Upload",
						"id" => "iphone_icon",
						"std" => "",
						"mod" => "min",
						"type" => "media"
				);

$of_options[] = array(  "name" => "Apple iPhone Retina Icon Upload (114x114)",
						"desc" => "Apple Iphone Retina Icon Upload",
						"id" => "iphone_icon_retina",
						"std" => "",
						"mod" => "min",
						"type" => "media"
				);

$of_options[] = array(  "name" => "Apple iPad Icon Upload (72x72)",
						"desc" => "Apple iPad Icon Upload",
						"id" => "ipad_icon",
						"std" => "",
						"mod" => "min",
						"type" => "media"
				);


$of_options[] = array(  "name" => "Apple iPad Retina Icon Upload (144x144px)",
						"desc" => "Apple iPad Retina Icon Upload",
						"id" => "ipad_retina_icon",
						"std" => "",
						"mod" => "min",
						"type" => "media"
				);

 

$of_options[] = array( 	"name" 		=> "Header & Menu",
						"type" 		=> "heading",
						"icon"		=> ADMIN_IMAGES ."icon-menu.png"						
				);

$of_options[] = array( "name" => "12",
					"desc" => "",
					"id" => "general_heading",
					"std" => "Menu Type",
					"icon" => false,
					"type" => "info");

$of_options[] = array( 	"name" 		=> "Menu Type",
						"desc" 		=> "Please select menu type",
						"id" 		=> "menu_type",
						"type" 		=> "select",
						"std" 		=> "menu",
						"options" 	=> array(
										"menu" => "Vertical Menu (Icon)",
										"menu3" => "Vertical Menu (Without Icon)",
										"menu2" => "Horizantal Dark Menu",
										"menu_light" => "Horizantal Light Menu",
						)
				);

$of_options[] = array( "name" => "12",
					"desc" => "",
					"id" => "general_heading",
					"std" => "Vertical Menu Style",
					"icon" => false,
					"type" => "info");

$of_options[] = array( 	"name" 		=> "Vertical Menu Background",
						"desc" 		=> "Vertical Menu Style",
						"id" 		=> "vertical_style",
						"type" 		=> "color",
						"std"		=> "#000000"
				);

$of_options[] = array( 	"name" 		=> "Vertical Menu Background Hover",
						"desc" 		=> "Vertical Menu Style Hover",
						"id" 		=> "vertical_style_hover",
						"type" 		=> "color",
						"std"		=> "#464646"
				);


$of_options[] = array( "name" => "12",
					"desc" => "",
					"id" => "general_heading",
					"std" => "Horizantal Light Style",
					"icon" => false,
					"type" => "info");

$of_options[] = array( 	"name" 		=> "Horizantal Light Background",
						"desc" 		=> "Horizantal Light Background",
						"id" 		=> "horizantal_light_style",
						"type" 		=> "color",
						"std"		=> "#FFFFFF"
				);

$of_options[] = array( "name" => "Menu Typography",
					"desc" => "Menu Typography",
					"id" => "horizantal_light__font_style",
					"std" => array('size' => '14px','face' => 'Source Sans Pro','style' => 'bold','color' => '#000000'),
					"type" => "typography"
				);


$of_options[] = array( "name" => "12",
					"desc" => "",
					"id" => "general_heading",
					"std" => "Horizantal Dark Style",
					"icon" => false,
					"type" => "info");


$of_options[] = array( 	"name" 		=> "Horizantal Dark Background",
						"desc" 		=> "Horizantal Dark Background",
						"id" 		=> "horizantal_dark_back",
						"type" 		=> "text",
						"std"		=> "0,0,0"
				);

$of_options[] = array( 	"name" 		=> "Horizantal Dark Background Opacity",
						"desc" 		=> "Horizantal Dark Background Opacity",
						"id" 		=> "horizantal_opacity",
						"std" 		=> "5",
						"min" 		=> "0",
						"step"		=> "1",
						"max" 		=> "9",
						"type" 		=> "sliderui" 
				);

$of_options[] = array( "name" => "Menu Typography",
					"desc" => "Menu Typography",
					"id" => "horizantal_style_font_style",
					"std" => array('size' => '14px','face' => 'Source Sans Pro','style' => 'bold','color' => '#FFF'),
					"type" => "typography"
				);

$of_options[] = array( 	"name" 		=> "Typography",
						"type" 		=> "heading",
						"icon"		=> ADMIN_IMAGES ."icon-pencil.png"						
				);

$of_options[] = array( 	"name" 		=> "Footer",
						"id" 		=> "error_page",
						"std" 		=> "Typography",
						"type" 		=> "info",
				);

$of_options[] = array( "name" => "Body Text Font",
					"desc" => "Specify the Body font properties",
					"id" => "font_body",
					"std" => array('size' => '13px','face' => 'Source Sans Pro','style' => 'normal','color' => '#444444'),
					"type" => "typography"
				);

$of_options[] = array( "name" => "Body Second Text Font",
					"desc" => "Specify the Body font properties",
					"id" => "font_body_two",
					"std" => array('face' => 'Oswald'),
					"type" => "typography"
				);

$of_options[] = array( "name" => "Title Font",
					"desc" => "Page Title font properties",
					"id" => "title_font",
					"std" => array('size' => '80px','face' => 'Oswald','style' => 'bold','color' => '#000000'),
					"type" => "typography"
				);

$of_options[] = array( "name" => "H1",
					"desc" => "H1 font properties",
					"id" => "h1_font",
					"std" => array('size' => '32px','face' => 'Oswald','style' => 'bold','color' => '#000000'),
					"type" => "typography"
				);

$of_options[] = array( "name" => "H2",
					"desc" => "H2 font properties",
					"id" => "h2_font",
					"std" => array('size' => '26px','face' => 'Source Sans Pro','style' => 'bold','color' => '#000000'),
					"type" => "typography"
				);

$of_options[] = array( "name" => "H3",
					"desc" => "H3 font properties",
					"id" => "h3_font",
					"std" => array('size' => '21px','face' => 'Source Sans Pro','style' => 'bold','color' => '#000000'),
					"type" => "typography"
				);

$of_options[] = array( "name" => "H4",
					"desc" => "H4 font properties",
					"id" => "h4_font",
					"std" => array('size' => '18px','face' => 'Source Sans Pro','style' => 'bold','color' => '#000000'),
					"type" => "typography"
				);

$of_options[] = array( "name" => "H5",
					"desc" => "H5 font properties",
					"id" => "h5_font",
					"std" => array('size' => '15px','face' => 'Source Sans Pro','style' => 'bold','color' => '#000000'),
					"type" => "typography"
				);

$of_options[] = array( "name" => "H6",
					"desc" => "H6 font properties",
					"id" => "h6_font",
					"std" => array('size' => '13px','face' => 'Source Sans Pro','style' => 'bold','color' => '#000000'),
					"type" => "typography"
				);


$of_options[] = array( 	"name" 		=> "Footer",
						"type" 		=> "heading",
						"icon"		=> ADMIN_IMAGES ."icon-footer.png"						
				);

$of_options[] = array( 	"name" 		=> "Footer",
						"id" 		=> "error_page",
						"std" 		=> "Footer",
						"type" 		=> "info",
				);

$of_options[] = array( 	"name" 		=> "Footer Background Color",
						"id" 		=> "footer_background_color",
						"std" 		=> "#000000",
						"type" 		=> "color",
						"desc" 		=> 'Footer Background Color',
				);

$of_options[] = array( 	"name" 		=> "Footer Text Color",
						"id" 		=> "footer_text_color",
						"std" 		=> "#333333",
						"type" 		=> "color",
						"desc" 		=> 'Footer Text Color',
				);

$of_options[] = array( 	"name" 		=> "Footer Text",
						"id" 		=> "footer_text",
						"std" 		=> "<h5 class='margint10'>Scrolle Responsive Parallax One Page Template</h5> <h5>2035 Themes | Copyright &copy; 2013</h5>",
						"type" 		=> "textarea",
						"desc" 		=> 'Footer Text',
				);

$of_options[] = array( 	"name" 		=> "Tracking Code",
						"id" 		=> "track_code",
						"std" 		=> "",
						"type" 		=> "textarea",
						"desc" 		=> 'Tracking Code',
				);

$of_options[] = array( 	"name" 		=> "Map & Tweet",
						"type" 		=> "heading",
						"icon"		=> ADMIN_IMAGES ."icon-pencil.png"						
				);

$of_options[] = array( 	"name" 		=> "Map Settings",
						"id" 		=> "error_page",
						"std" 		=> "Map Settings",
						"type" 		=> "info",
				);

$of_options[] = array( 	"name" 		=> "Latitude",
						"id" 		=> "latitude",
						"std" 		=> "40.783435",
						"type" 		=> "text",
						"desc" 		=> "Please Visit for your address <a href='http://itouchmap.com/latlong.html'>itouchmap</a>",
				);

$of_options[] = array( 	"name" 		=> "Longitude",
						"id" 		=> "longitude",
						"std" 		=> "-73.966249",
						"type" 		=> "text",
						"desc" 		=> "Please Visit for your address <a href='http://itouchmap.com/latlong.html'>itouchmap</a>",
				);

$of_options[] = array( 	"name" 		=> "Map Icon",
						"id" 		=> "map_icon",
						"std" 		=> "",
						"type" 		=> "upload",
						"mod" 		=> "min",
						"desc" 		=> "Map Icon",
				);

$of_options[] = array( 	"name" 		=> "Map Icon Text",
						"id" 		=> "map_icon_text",
						"std" 		=> "Central Park",
						"type" 		=> "text",
						"desc" 		=> "Map Icon Text",
				);

$of_options[] = array( 	"name" 		=> "Twitter Settings",
						"id" 		=> "error_page",
						"std" 		=> "Twitter Settings",
						"type" 		=> "info",
				);

$of_options[] = array( 	"name" 		=> "Tweet Numbers",
						"id" 		=> "tweet_count",
						"std" 		=> "4",
						"type" 		=> "text",
						"desc" 		=> "Please enter your Tweet Count (Max : 20 Tweet )",
				);

$of_options[] = array( 	"name" 		=> "Loading Styles",
						"type" 		=> "heading",
						"icon"		=> ADMIN_IMAGES ."icon-loading.png"						
				);

$of_options[] = array( 	"name" 		=> "Loading Styles",
						"id" 		=> "loading_styles",
						"std" 		=> "Loading Styles",
						"type" 		=> "info",
				);

$of_options[] = array( 	"name" 		=> "Loading Styles",
						"desc" 		=> "Please select Loading type",
						"id" 		=> "loading_type",
						"type" 		=> "select",
						"std" 		=> "loading1",
						"options" 	=> array(
										"Off" => "Off",
										"loading1" => "Loading Style 1 (Loading Text)",
										"loading2" => "Loading Style 2 (Clock) ",
										"loading3" => "Loading Style 3 (Typing Loader) ",
										"loading4" => "Loading Style 4 (Location Indicator) ",
										"loading5" => "Loading Style 5 (Battery) ",
										"loading6" => "Loading Style 6 (Help) ",
										"loading7" => "Loading Style 7 (Cloud) ",
										"loading8" => "Loading Style 8 (Eye) ",
										"loading9" => "Loading Style 9 (Coffee Cup) ",
										"loading10" => "Loading Style 10 (Square) ",
										"loading11" => "Loading Style 11 (Circle) ",
						)
				);

$of_options[] = array( 	"name" 		=> "Loading Style 1",
						"id" 		=> "loading_style",
						"std" 		=> "Loading Style 1",
						"type" 		=> "info",
				);

$of_options[] = array( 	"name" 		=> "Box Background",
						"id" 		=> "loading_box_background",
						"std" 		=> "#000000",
						"type" 		=> "color",
				);

$of_options[] = array( "name" => "Loading Font Style",
					"desc" => "Loading Font Style",
					"id" => "loading1_style",
					"std" => array('size' => '13px','face' => 'Oswald','style' => 'bold','color' => '#FFF'),
					"type" => "typography"
				);

$of_options[] = array( 	"name" 		=> "Loading Text",
						"id" 		=> "loading_text",
						"std" 		=> "Loading...",
						"type" 		=> "text",
						"desc" 		=> 'Loading Text. ( Max 20 Keyword )',
				);

$of_options[] = array( 	"name" 		=> "404 Pages",
						"type" 		=> "heading",
						"icon"		=> ADMIN_IMAGES ."icon-404.png"						
				);

$of_options[] = array( 	"name" 		=> "404 Text",
						"id" 		=> "error_page",
						"std" 		=> "404 Text",
						"type" 		=> "info",
				);

$of_options[] = array( 	"name" 		=> "404 Text",
						"id" 		=> "error_page",
						"std" 		=> "<h2>This is somewhat embarrassing, isnt it?</h2><p>It looks like nothing was found at this location. Maybe try a search? or Go to <a href='index.php'> Home Page</a></p>",
						"type" 		=> "textarea",
				);

$of_options[] = array( 	"name" 		=> "Custom Css",
						"type" 		=> "heading",
						"icon"		=> ADMIN_IMAGES ."icon-css.png"
				);

$of_options[] = array( "name" => "Custom Css",
					"desc" => "",
					"id" => "general_heading",
					"std" => "Custom Css",
					"icon" => false,
					"type" => "info");


$of_options[] = array( 	"name" 		=> "Custom Css",
						"id" 		=> "custom_css",
						"std" 		=> "",
						"type" 		=> "textarea",
						"desc" 		=> 'Custom Css',
				);

// Backup Options 
$of_options[] = array( 	"name" 		=> "Backup Options",
						"type" 		=> "heading",
						"icon"		=> ADMIN_IMAGES ."icon-backup.png"
				);
				
$of_options[] = array( 	"name" 		=> "Backup and Restore Options",
						"id" 		=> "of_backup",
						"std" 		=> "Backup and Restore Options",
						"type" 		=> "info"
				);

$of_options[] = array( 	"name" 		=> "",
						"id" 		=> "of_backup",
						"std" 		=> "",
						"type" 		=> "backup",
						"desc" 		=> 'You can use the two buttons below to backup your current options, and then restore it back at a later time. This is useful if you want to experiment on the options but would like to keep the old settings in case you need it back.',
				);
				
$of_options[] = array( 	"name" 		=> "Transfer Theme Options Data",
						"id" 		=> "of_transfer",
						"std" 		=> "",
						"type" 		=> "transfer",
						"desc" 		=> 'You can tranfer the saved options data between different installs by copying the text inside the text box. To import data from another install, replace the data in the text box with the one from another install and click "Import Options".',
				);
				
	}//End function: of_options()
}//End chack if function exists: of_options()
?>

<?php

/**************************************************************************************************/
/* Define Constants */
/**************************************************************************************************/

define('THEMEROOT', get_stylesheet_directory_uri());
define('IMAGES', THEMEROOT . '/images');

/**************************************************************************************************/
/* Custom Post Type (Portfolio && Team && Slider) */
/**************************************************************************************************/

include_once('inc/cpt-portfolio.php'); // Custom Post Type (Portfolio)
include_once('inc/cpt-team.php');      // Custom Post Type (Team)
include_once('inc/cpt-slider.php');    // Custom Post Type (Slider)

/**************************************************************************************************/
/* Slightly Modified Options Framework */
/**************************************************************************************************/

require_once ('admin/index.php');

/**************************************************************************************************/
/* Theme Setup  */
/**************************************************************************************************/

add_action( 'after_setup_theme', 'Theme2035_setup' );

function Theme2035_setup(){

global $content_width;

if ( ! isset( $content_width ) ) $content_width = 1170;

load_theme_textdomain( 'theme2035-fm', get_template_directory().'/inc/lang' );

add_theme_support('post-formats',array('gallery','image','quote','video','audio'));

if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );
        set_post_thumbnail_size( 848, 400, true);
}

add_action('init', 'Theme2035_register_menus');

add_theme_support( 'automatic-feed-links' );

}

/**************************************************************************************************/
/* Include Meta Box  */
/**************************************************************************************************/

define( 'RWMB_URL', trailingslashit( get_template_directory_uri() . '/inc/meta-box' ) );
define( 'RWMB_DIR', trailingslashit( get_template_directory() . '/inc/meta-box' ) );
require_once RWMB_DIR . 'meta-box.php';
include_once 'inc/metabox.php';

/**************************************************************************************************/
/* Shortcodes */
/**************************************************************************************************/

include( get_template_directory() . '/admin/zilla-shortcodes/zilla-shortcodes.php' );
include( get_template_directory() . '/inc/shortcodes.php' );

/**************************************************************************************************/
/* TGM plugin activation */
/**************************************************************************************************/

include( get_template_directory() . '/inc/tgm_plugin_activation/class-tgm-plugin-activation.php' );
include( get_template_directory() . '/inc/tgm_plugin_activation/example.php' );

/**************************************************************************************************/
/* Admin Bar Show  (False Now) */ 
/**************************************************************************************************/

function Theme2035_admin_bar_support(){ return false; } 
add_filter( 'show_admin_bar' , 'Theme2035_admin_bar_support');

/**************************************************************************************************/
/* Register Sidebar */ 
/**************************************************************************************************/

if(function_exists('register_sidebar')){
    register_sidebar(
        array(
        'name' => __( 'Main Sidebar', '2035Themes-fm' ),
        'id' => 'sidebar-1',
        'description' => __( 'Main Sidebar', '2035Themes-fm' ),
        'before_widget' => '<div class="sidebar-widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
            ));
}

/**************************************************************************************************/
/* Register Menu */
/**************************************************************************************************/

function Theme2035_register_menus() {
    register_nav_menus( array( 'top-menu' => __('Top Menu',"theme2035-fm")) );
}

/**************************************************************************************************/
/* Walker Menu Nav */
/**************************************************************************************************/
require_once ('inc/menu-icon.php');

class description_walker extends Walker_Nav_Menu
{
      function start_el(&$output, $item, $depth = 0, $args = array(), $current_object_id = 0) 
      {
           global $wp_query;
           global $smof_data;
           global $class;
           global $iconwarning;

           $class_names = $value = '';

           $classes = empty( $item->classes ) ? array() : (array) $item->classes;

           $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) );
           $varpost = get_post($item->object_id);

           if ($smof_data['menu_type'] == "menu"){
            if(empty($item->icon)){
            $iconwarning = "empty-icon-warning";
           }}
           $class_names = ' class="'. $varpost->post_name .' '. esc_attr( $class_names ) . ' '. $iconwarning .'"';

           $output .=  '<li id="menu-item-'. $item->ID . '"' . $value . $class_names .'>';

           $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
           $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
           $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
           if($item->object == 'page')
           {
                $varpost = get_post($item->object_id);
                $attributes .= ' href="' . $item->url . '"';
                $class .= ' class="external"';
           }
           else

            if (is_front_page()) {                  
            $attributes .= ! empty( $item->url )    ? ' href="'   . esc_attr( $item->url ) .'"' : '';
            }else {
            $varpost = get_post($item->object_id);
            $class .= 'class="external"';             
            $attributes .= ' href="' . home_url() .'#'. $varpost->post_name .'"';
            }

            $item_output = $args->before;
            $item_output .= '<a'. $attributes . $class . '>';
            if ($smof_data['menu_type'] == "menu"){
            if (!empty($item->icon)){
            $item_output .= '<i class="fa fa-' . $item->icon . '">';
            $item_output .= '</i>';
            }}
            $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID );
            $item_output .= $args->link_after;
            $item_output .= '</a>';
            $item_output .= $args->after;
            

            $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
            }
}

/**************************************************************************************************/
/* Register Css */
/**************************************************************************************************/

function Theme2035_register_styles() { 

    global $smof_data;

    // Register
    wp_register_style('main', get_stylesheet_directory_uri() . '/style.css','','1'); 
    wp_register_style('font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css','','4.0.0');
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css','','4.0.0');
    wp_register_style('colorbox', get_template_directory_uri() . '/css/colorbox.css','','1');
    wp_register_style('flexslider', get_template_directory_uri() . '/css/flexslider.css','','1');
    wp_register_style('prettyPhoto', get_template_directory_uri() . '/css/prettyPhoto.css','','1');
    wp_register_style('loading_styles', get_template_directory_uri() . '/css/loading_styles.css','','1');
    wp_register_style('nivo', get_template_directory_uri() . '/css/nivo-slider.css','','1');
    wp_register_style('responsive', get_template_directory_uri() . '/css/scrolle.responsive.css','','3.0');
    wp_register_style('update', get_template_directory_uri() . '/css/update.css','','1');

    // Enqueue
    wp_enqueue_style('font-awesome'); 
    wp_enqueue_style('bootstrap'); 
    wp_enqueue_style('colorbox'); 
    wp_enqueue_style('flexslider');   
    wp_enqueue_style('prettyPhoto');
    wp_enqueue_style('loading_styles');  
    wp_enqueue_style('nivo');

    if($smof_data['animation_onoff'] == "1") { 
    wp_register_style('animate', get_template_directory_uri() .'/css/animate.min.css','','3.0');
    wp_enqueue_style('animate');
    }

    if($smof_data['home_layout'] == "slider") { 
    wp_register_style('supersized', get_template_directory_uri() . '/css/supersized.css','','1');
    wp_register_style('supersized-shutter', get_template_directory_uri() . '/css/supersized.shutter.css','','1');
    wp_enqueue_style('supersized'); 
    wp_enqueue_style('supersized-shutter');  
    }

    if($smof_data['home_layout'] == "video") {
    wp_register_style('bigvideo', get_template_directory_uri() . '/css/bigvideo.css','','1');    
    wp_enqueue_style('bigvideo');
    } 

    wp_enqueue_style('main');
    wp_enqueue_style('responsive');
    wp_enqueue_style('update');
}

add_action('wp_enqueue_scripts', 'Theme2035_register_styles');

/**************************************************************************************************/
/* Custom Styles */
/**************************************************************************************************/

include_once 'inc/custom-style.php';
include_once 'inc/customjs.php';

/**************************************************************************************************/
/* Google Font */
/**************************************************************************************************/


include( get_template_directory() . '/admin/functions/gfonts.php' );

function Theme2035_google_fonts() {
    $protocol = is_ssl() ? 'https' : 'http';
    include_once 'inc/google_font.php';
    foreach($googlefonts as $getfonts) {
        if( $getfonts != ''  ){
            $protocol = is_ssl() ? 'https' : 'http';
            wp_enqueue_style( "theme2035-$getfonts", "$protocol://fonts.googleapis.com/css?family=$getfonts:400,400italic,700,700italic" );
        }
    }
}

add_action( 'wp_enqueue_scripts', 'Theme2035_google_fonts' );

/**************************************************************************************************/
/* Register Js */
/**************************************************************************************************/

function Theme2035_register_js() { 

    global $smof_data;

    // Register
    wp_register_script('modernizr', get_template_directory_uri() . '/js/modernizr-2.6.2-respond-1.1.0.min.js', '3.5.1');         
    wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery', '3.5.1', TRUE);
    wp_register_script('fittext', get_template_directory_uri() . '/js/jquery.fittext.js', 'jquery', '3.5.1', TRUE);
    wp_register_script('flex', get_template_directory_uri() . '/js/jquery.flexslider.js', 'jquery', '3.5.1', TRUE);
    wp_register_script('colorbox', get_template_directory_uri() . '/js/jquery.colorbox-min.js', 'jquery', '3.5.1', TRUE);
    wp_register_script('carouFredSel', get_template_directory_uri() . '/js/jquery.carouFredSel.js', 'jquery', '3.5.1', TRUE);
    wp_register_script('nivo', get_template_directory_uri() . '/js/jquery.nivo.slider.pack.js', 'jquery', '3.5.1', TRUE);
    wp_register_script('nicescroll', get_template_directory_uri() . '/js/jquery.nicescroll.min.js', 'jquery', '3.5.1', TRUE);                    
    wp_register_script('scrollTo', get_template_directory_uri() . '/js/jquery.scrollTo.js', 'jquery', '3.5.1', TRUE);
    wp_register_script('nav', get_template_directory_uri() . '/js/jquery.nav.js', 'jquery', '3.5.1', TRUE);                                                                 
    wp_register_script('fitvids', get_template_directory_uri() . '/js/jquery.fitvids.js', 'jquery', '3.5.1', TRUE);
    wp_register_script('prettyPhoto', get_template_directory_uri() . '/js/jquery.prettyPhoto.js', 'jquery', '3.5.1', TRUE);
    wp_register_script('isotope', get_template_directory_uri() . '/js/jquery.isotope.min.js', 'jquery', '3.5.1', TRUE);
    wp_register_script('infinitescroll', get_template_directory_uri() . '/js/jquery.infinitescroll.min.js', 'jquery', '3.5.1', TRUE);      
    wp_register_script('responsive', get_template_directory_uri() . '/js/responsive-nav.min.js', 'jquery', '3.5.1', TRUE); 
    wp_register_script('parallax', get_template_directory_uri() . '/js/jquery.parallax-1.1.3.js', 'jquery', '3.5.1', TRUE);             
    wp_register_script('gmaps', get_template_directory_uri() . '/js/gmaps.js', 'jquery', '3.5.1', TRUE);             
    wp_register_script('gmaps_google', 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false', 'jquery', '3.5.1', TRUE);             
    wp_register_script('main', get_template_directory_uri() . '/js/main.js', 'jquery', '3.5.1', TRUE);

    // Enqueue
    wp_enqueue_script('modernizr');        
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap');

    if(empty($smof_data['loading_type'])){
        $smof_data['loading_type'] = "On";
    }
    if($smof_data['loading_type'] != "Off" ) {
    wp_register_script('loader', get_template_directory_uri() . '/js/jquery.queryloader2.min.js', 'jquery', '3.5.1', TRUE); 
    wp_enqueue_script('loader'); 
    }

    wp_enqueue_script('scrollTo');
    wp_enqueue_script('nav'); 
    wp_enqueue_script('responsive');   
    wp_enqueue_script('fittext');
    wp_enqueue_script('flex');
    wp_enqueue_script('colorbox');
    wp_enqueue_script('parallax');
    wp_enqueue_script('carouFredSel');
    wp_enqueue_script('nivo');  
    wp_enqueue_script('nicescroll');
    wp_enqueue_script('gmaps_google');
    wp_enqueue_script('gmaps');                                                                                                                                                         
    wp_enqueue_script('fitvids');
    if($smof_data['home_layout'] == "slider" && is_page_template('homepage.php')  ) { 
    wp_register_script('supersized', get_template_directory_uri() . '/js/supersized.3.2.7.min.js', 'jquery', '3.5.1', TRUE);               
    wp_register_script('shutter', get_template_directory_uri() . '/js/supersized.shutter.min.js', 'jquery', '3.5.1', TRUE);
    wp_enqueue_script('supersized');
    wp_enqueue_script('shutter'); 
    }
    wp_enqueue_script('prettyPhoto');
    wp_enqueue_script('isotope');
    wp_enqueue_script('infinitescroll');
    wp_enqueue_script('main');    


    if($smof_data['home_layout'] == "video") {  
    wp_register_script('jqueryuin', get_template_directory_uri() . '/js/jquery-ui.min.js', 'jquery', '3.5.1');     
    wp_register_script('video', get_template_directory_uri() . '/js/video/video.js', 'jquery', '3.5.1');        
    wp_register_script('bigvideo', get_template_directory_uri() . '/js/video/bigvideo.js', 'jquery', '3.5.1'); 
    wp_enqueue_script('jqueryuin');
    wp_enqueue_script('video');
    wp_enqueue_script('bigvideo');
    }
    
} 

add_action('wp_enqueue_scripts', 'Theme2035_register_js');


if (is_admin() ){
    function Theme2035_custom_post_select(){    
        wp_register_script('init', get_template_directory_uri() . '/js/admin/init.js', 'jquery', '3.5.1');  
        wp_enqueue_script('init');
    }
}

add_action('admin_enqueue_scripts', 'Theme2035_custom_post_select');

/**************************************************************************************************/
/* Pagination */
/**************************************************************************************************/

if ( !function_exists( 'Theme2035_pagination' ) ) {
        function Theme2035_pagination() {           
            if( !empty($options['extra_pagination']) && $options['extra_pagination'] == '1' ){
                        
                        global $wp_query;  

                        $total_pages = $wp_query->max_num_pages;  
                          
                        if ($total_pages > 1){  
                          
                          $current_page = max(1, get_query_var('paged'));  
                          
                            echo '<div id="pagination">';
                               
                            echo paginate_links(array(  
                              'base' => get_pagenum_link(1) . '%_%',  
                              'format' => '/page/%#%',  
                              'current' => $current_page,  
                              'total' => $total_pages,  
                            ));    
                            echo  '</div>';         
                        }  
                    }
            else{   
                       
                if( get_next_posts_link() || get_previous_posts_link() ) { 
                echo '<div class="pagination container">';


                if ( get_previous_posts_link() ) : ?>
                <div class="next-post"><?php previous_posts_link( __( 'Newer posts ', '2035Themes-fm' ) ); ?></div>
                <?php endif;

                if ( get_next_posts_link() ) : ?>
                <div class="prev-post"><?php next_posts_link( __( 'Older posts', '2035Themes-fm' ) ); ?></div>
                <?php endif; 


                echo  '</div>';         
            }
        }
    }
}

/**************************************************************************************************/
/* Portfolio Pagination */
/**************************************************************************************************/

function Theme2035_portfolio_pagination($pages = '', $range = 2){  
$showitems = ($range * 2)+1;
if(get_query_var('page')){
  $paged = get_query_var('page');
}else if(get_query_var('paged')){
  $paged = get_query_var('paged');
}else{
  $paged = 1;
}
if(empty($paged)) $paged = 1;

if($pages == ''){
   global $wp_query;
   $pages = $wp_query->max_num_pages;
   if(!$pages){
       $pages = 1;
   }
}   

if(1 != $pages){

   for ($i=1; $i <= $pages; $i++){
       if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems )){
           echo ($paged == $i)? "<div class=\"load-more-button\"><a href='".get_pagenum_link($i+1)."'>".__("LOAD MORE","2035Themes-fm")."</a></div>":"";
       }
   }
}else{
      echo "<div class=\"load-more-button\" style=\"display:none;\"></div>";
     }
}



/**************************************************************************************************/
/* Custom Image Size */
/**************************************************************************************************/

    if ( function_exists( 'add_image_size' ) ) {
        add_image_size( 'blog-standart-image', 848, 400, true );       
        add_image_size( 'attachment-standard', 848, 400, true );        
        add_image_size( 'attachment-standard', 848, 400, true );        
        add_image_size( 'medium-size', 590, 400, true );        
        add_image_size( 'only-one-image', 1140, 530, true );        
        add_image_size( 'team-image', 328, 345, true );        
        add_image_size( 'team-icon', 25, 25, true );             
    }

/**************************************************************************************************/
/* Excerpt */
/**************************************************************************************************/

//excerpt length
function Theme2035_excerpt_length( $length ) {
    return 50;
}

add_filter( 'excerpt_length', 'Theme2035_excerpt_length', 999 );

//custom excerpt ending
function Theme2035_excerpt_more( $more ) {
    return '...';
}

add_filter('excerpt_more', 'Theme2035_excerpt_more');

/**************************************************************************************************/
/* Custom Comments */
/**************************************************************************************************/

function Theme2035_comment( $comment, $args, $depth ) {
       $GLOBALS['comment'] = $comment; ?>
    
       <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
       <div id="comment-<?php comment_ID(); ?>" class="clearfix"> 
            
            <div class="avatar">
            <?php echo get_avatar($comment, $size = '80'); ?>
            </div>
             
             <div class="comment-text">
                 
                 <div class="author">
                    <h3><?php printf( __( '%s', 'theme2035-fm'), get_comment_author_link() ) ?></h3>
                    <div class="margint5">
                    <p><?php printf( __('%1$s at %2$s', 'theme2035-fm'), get_comment_date(),  get_comment_time() ) ?></p>
                     </div>  
                 </div>
                 
                 <div class="text"><p><?php comment_text() ?></p></div>
                 <div class="comment-tools">
                    <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>  
                    
                    <?php edit_comment_link( __( '(Edit)', 'theme2035-fm'),'  ','' ) ?>
                 </div>
                 
                 <?php if ( $comment->comment_approved == '0' ) : ?>
                 <em><?php __( 'Your comment is awaiting moderation.', 'theme2035-fm' ) ?></em>
                <?php endif; ?>
                
            </div>
          
       </div>
<?php }

if ( is_singular() && comments_open() && get_option( 'thread_comments' ) )
    wp_enqueue_script( 'comment-reply' );

/**************************************************************************************************/
/* Twitter */
/**************************************************************************************************/

function Theme2035_tweet_out(){

global $content;



include_once( ABSPATH . 'wp-admin/includes/plugin.php' ); 
if (is_plugin_active('oauth-twitter-feed-for-developers/twitter-feed-for-developers.php')) {
global $smof_data;
if(empty($smof_data['tweet_count'])){ $smof_data['tweet_count'] = "4";}
$consumer_key = get_option('tdf_consumer_key');
$twitter_username = get_option('tdf_user_timeline');
$tweet_count = $smof_data['tweet_count'];
$tweets = getTweets( $twitter_username, $tweet_count); // Max Tweets is 20

if($consumer_key != "" ){

if(is_array($tweets)){

   $content = "";

// to use with intents
echo '<script type="text/javascript" src="//platform.twitter.com/widgets.js"></script>';

    foreach($tweets as $tweet){

            $content .= '<div class="tweet_out"><div class="tweet_icon col-lg-2 col-sm-2 col-xs-2 pos-center"><i class="fa fa-twitter"></i></div>';

            if($tweet['text']){

                $content .= '<div class="tweet_cont col-lg-10 col-sm-10 col-xs-10"><div class="twitter_username"><a href="http://twitter.com/'.$twitter_username.'">'.$twitter_username.'</a></div><div class="tweet-text">';

                $the_tweet = $tweet['text'];
                /*
                Twitter Developer Display Requirements
                https://dev.twitter.com/terms/display-requirements

                2.b. Tweet Entities within the Tweet text must be properly linked to their appropriate home on Twitter. For example:
                  i. User_mentions must link to the mentioned user's profile.
                 ii. Hashtags must link to a twitter.com search with the hashtag as the query.
                iii. Links in Tweet text must be displayed using the display_url
                     field in the URL entities API response, and link to the original t.co url field.
                */

                // i. User_mentions must link to the mentioned user's profile.
                if(is_array($tweet['entities']['user_mentions'])){
                    foreach($tweet['entities']['user_mentions'] as $key => $user_mention){
                        $the_tweet = preg_replace(
                            '/@'.$user_mention['screen_name'].'/i',
                            '<a href="http://www.twitter.com/'.$user_mention['screen_name'].'" target="_blank">@'.$user_mention['screen_name'].'</a>',
                            $the_tweet);
                    }
                }

                // ii. Hashtags must link to a twitter.com search with the hashtag as the query.
                if(is_array($tweet['entities']['hashtags'])){
                    foreach($tweet['entities']['hashtags'] as $key => $hashtag){
                        $the_tweet = preg_replace(
                            '/#'.$hashtag['text'].'/i',
                            '<a href="https://twitter.com/search?q=%23'.$hashtag['text'].'&src=hash" target="_blank">#'.$hashtag['text'].'</a>',
                            $the_tweet);
                    }
                }

                // iii. Links in Tweet text must be displayed using the display_url
                //      field in the URL entities API response, and link to the original t.co url field.
                if(is_array($tweet['entities']['urls'])){
                    foreach($tweet['entities']['urls'] as $key => $link){
                        $the_tweet = preg_replace(
                            '`'.$link['url'].'`',
                            '<a href="'.$link['url'].'" target="_blank">'.$link['url'].'</a>',
                            $the_tweet);
                    }
                }

                $content .= $the_tweet;
                $content .= '</div></div>';
                $content .= '</div>';                          
            } 
            else {
               $content .=
                __('
                <a href="http://twitter.com/'.$twitter_username.'" target="_blank">Click here to read '.$twitter_username.'\'S Twitter feed</a>','theme2035-fm');
            }
        }
    }
}else{
$content .= __("Please <a href='". admin_url() ."/options-general.php?page=tdf_settings'>configure</a> your Twitter API keys","theme2035-fm");
}
}
else { $content .= __("Please Install or Active <a href='http://wordpress.org/plugins/oauth-twitter-feed-for-developers/developers/'>oAuth Twitter Feed for Developers</a> Plugins. ","theme2035-fm"); }
 
return $content;

}
?>
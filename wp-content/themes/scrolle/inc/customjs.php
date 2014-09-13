<?php

function Theme2035_customjs() {
global $smof_data; 

?>
<script type="text/javascript">
  
jQuery.noConflict(); (function($) { 
    jQuery(document).ready(function($){
<?php 
  if(empty($smof_data['menu_type'])){
  $smof_data['menu_type'] = "menu";
  }
  if($smof_data['menu_type'] == "menu"){
?>
  if ($(".empty-icon-warning").length > 0) {
    $('body').append('<div id="empty-icon-warning-block"><p>You are using \'vertical menu with icons\' is recommended the use of icons. If you don\'t want use icons you can select \'vertical menu without icons\' from the <a href="wp-admin/themes.php?page=optionsframework">Theme Options</a> panel.</p><p>Please <a href="wp-admin/nav-menus.php">click here</a> to add icons. You can find more information about how to add icons in the documentation.</p></div>');
  }
<?php
  }
?>

    /* Loading Countdown */

    <?php 

    if(empty($smof_data['loading_text'])){
    $smof_data['loading_text'] = "Loading...";
    }


    $loadingtext = $smof_data['loading_text'];
    $textarray = str_split($loadingtext);
    $arraysize = count($textarray);
  ?>
    <?php if($smof_data['loading_type'] != "Off" ) { ?> $("body").queryLoader2(); <?php } ?>
    var loader = $(".block div");
    var count = <?php echo $arraysize; ?>;
    var timerId = setInterval(
      function() {
        // Decrement
        count--;  
         // Switch 0 to 10
        if(count == 0) {
          count = <?php echo $arraysize; ?>;
        }
        // Switch class
        $(".block div")
          .removeClass()
          .addClass('count-'+count);
     }, 200);


<?php if($smof_data['animation_onoff'] == "1") { ?>

/* Animation Start */

  $(window).scroll(function() {
    $(".animated-area").each(function() {
      if($(window).height() + $(window).scrollTop() - $(this).offset().top > 0) {
        $(this).trigger("animate-it");
      }
    });
  });
  $(".animated-area").on("animate-it", function() {
    var cf = $(this);
    cf.find(".animated").each(function() {
      $(this).css("-webkit-animation-duration","0.6s");
      $(this).css("-moz-animation-duration","0.6s");
      $(this).css("-ms-animation-duration","0.6s");
      $(this).css("animation-duration","0.6s");
      $(this).css("-webkit-animation-delay",$(this).attr("data-animation-delay"));
      $(this).css("-moz-animation-delay",$(this).attr("data-animation-delay"));
      $(this).css("-ms-animation-delay",$(this).attr("data-animation-delay"));
      $(this).css("animation-delay",$(this).attr("data-animation-delay"));
      $(this).addClass($(this).attr("data-animation"));
    });
  });

<?php } ?>

    /* Smooth Scroll */

    <?php 
    if( $smof_data['switch__x1'] == "1" ){  ?>

    $("html").niceScroll({cursorwidth:"<?php echo $smof_data['menu_scrool_width']; ?>px"});

    /* Nav */

    <?php } ?>

    });
})(jQuery);

<?php if($smof_data['home_layout'] == 'slider' && is_page_template('homepage.php') ) {   ?>


jQuery(function($){       
$.supersized({
  slideshow     :1,     // Slideshow on/off
  autoplay      :1,     // Slideshow starts playing automatically
  slide_interval    :<?php echo $smof_data['length_trans']; ?>,    // Length between transitions
  transition      :<?php echo $smof_data['transition']; ?>,       // 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
  transition_speed  :<?php echo $smof_data['transition_speed']; ?>,    // Speed of transition
  pause_hover     :0,     // Pause slideshow on hover
  performance     :1,     // 0-Normal, 1-Hybrid speed/quality, 2-Optimizes image quality, 3-Optimizes transition speed // (Only works for Firefox/IE, not Webkit)
  image_protect   :1,     // Disables image dragging and right click with Javascript
  slides        :[      // Slideshow Images
    
        <?php
        $args2 = array (
         'post_type' => "slider",
         'post_status' => 'publish',
         'paged' => "slider",
         'posts_per_page' => 0,
         'ignore_sticky_posts'=> 1
        );

        $i = 0;
        $wp_query2 = new WP_Query($args2); 
        if ( $wp_query2->have_posts() ) :
            while ( $wp_query2->have_posts() ) : $wp_query2->the_post();
          global $post;
          $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), false, '' ); ?> 
          <?php $count_posts = wp_count_posts('slider');
          $slidercount = $count_posts->publish; //
          ?>

          <?php echo " {image : '"; echo $src[0]; echo "'}";
          if( $i < $slidercount-1 ) { echo ","; }
          $i++;
          endwhile;
          endif; 
          ?>  ] }); });   


<?php } 

    if(is_page_template('homepage.php')){
      
            /* GMap */
    ?>
  if (jQuery("#map").length > 0) {
    var map = new GMaps({
      el: '#map',
      lat: <?php echo $smof_data['latitude'] ?>,
      lng: <?php echo $smof_data['longitude'] ?>
    });

    map.addMarker({
        lat: <?php echo $smof_data['latitude'] ?>,
        lng: <?php echo $smof_data['longitude'] ?>,
        icon: "<?php if($smof_data['map_icon'] != "" ) { echo $smof_data['map_icon']; } else { echo THEMEROOT."/images/mapicon@2x.png"; } ?>",
        title: 'Marker with InfoWindow',
      infoWindow: {
          content: '<p><?php echo $smof_data['map_icon_text']; ?></p>'
        }
    });
  }

    <?php
    }
    ?>
    /* Responsive Nav */
    <?php 
      if(is_page_template('homepage.php')){ ?>

      var nav = responsiveNav("#nav");
      jQuery('#nav').onePageNav({
      filter: ':not(.external)',
      scrollSpeed: <?php echo $smof_data['menu_scrool_speed']; ?>,
      scrollOffset: 0
      });
      
      <?php } ?>


    /* Background Video */

    <?php if( $smof_data['home_layout'] == "video" && is_page_template('homepage.php') ){  ?>

    var BV;
    jQuery(function() {
        // initialize BigVideo
        BV = new jQuery.BigVideo();
    BV.init();
    BV.show('<?php echo $smof_data['video_type'];  ?>',{ambient:true});
    });

  <?php } ?>

</script>

<?php }
add_action( 'wp_footer', 'Theme2035_customjs', 20 );
?>
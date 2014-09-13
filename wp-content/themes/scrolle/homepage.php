    <?php
    /**
     * Template Name: Home - Front Page
     */

    get_header();
    get_template_part('menu');
    $current_page_id = get_option('page_on_front');
    ?>
    <?php 

    $type = 'page';
    $args = array (
     'post_type' => $type,
     'post_status' => 'publish',
     'paged' => $paged,
     'posts_per_page' => 50,
     'ignore_sticky_posts'=> 1,
    );

    $main_query = new WP_Query($args); 
    if( have_posts() ) :  
        while ($main_query->have_posts()) : $main_query->the_post();
        global $post;
        $post_id = get_the_ID();

        if(get_post_meta($post_id, "theme2035_pagetype", true) == "homesec" ){
            get_template_part('home_section');
        }
 
        if($post_id != $current_page_id && get_post_meta($post_id, "theme2035_pagetype", true) != "homesec" && get_post_meta($post_id, "theme2035_pagetype", true) != "blog"){
            $post_section_name = get_post_meta( get_the_ID(), 'theme2035_section_name', true );
        ?>

        <div<?php if($post_section_name != "" ){ ?> id="<?php echo $post_section_name; ?>" <?php } ?> style="background: <?php echo $smof_data['body_background']; ?>;" >
        
            <?php  $full_screen = get_post_meta( get_the_ID(), 'theme2035_full_screen', true ); 
            if( $full_screen != "1" ){
            ?>
            <div class="container">
                <div class="row">
            <?php }
                    if(get_post_meta($post_id, "theme2035_pagetype", true) == "team" ){
                        get_template_part('team');
                    }

                    else if(get_post_meta($post_id, "theme2035_pagetype", true) == "portfolio" ){ 
                        get_template_part('portfolio_section'); 
                    }

                    else if(get_post_meta($post_id, "theme2035_pagetype", true) == "parallax" ){ 
                        $url = wp_get_attachment_url( get_post_thumbnail_id($post_id, 'thumbnail_size') ); ?>
                        <div class="parallax-s pos-center" style="background:  url('<?php echo $url; ?>') 50% 0 repeat fixed;"><?php
                    the_content();

                    ?>
                    </div>
                    
                    <?php } else { ?>
                    <div class="pos-center">
                        <div class="sect-titles padt60 fit-text"><?php $title = get_post_meta( get_the_ID(), 'theme2035_page_title', true ); if( $title != "" ){ echo $title; } else { echo the_title(); } ?></div>
                        <div class="divide margint30"></div>
                        <div class="about-text margint30">
                            <p> <?php echo get_post_meta( get_the_ID(), 'theme2035_page_subtitle', true ); ?> </p>
                        </div>
                    </div>
                    <?php  the_content(); 
                    } ?>

                <?php if( $full_screen != "1" ){ ?>
            </div>
         </div>
        <?php  } ?> </div> <?php  } ?>
    
    <?php
    endwhile;
    endif; 
    wp_reset_query();
    get_footer();
    ?>
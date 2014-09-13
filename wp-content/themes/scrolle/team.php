<div class="clearfix animated-area">
  <div class="pos-center">
    <div class="sect-titles padt60 fit-text"><?php $title = get_post_meta( get_the_ID(), 'theme2035_page_title', true ); if( $title != "" ){ echo $title; } else { echo the_title(); } ?></div>
    <div class="divide margint30"></div>
    <div class="about-text margint30">
      <p> <?php echo get_post_meta( get_the_ID(), 'theme2035_page_subtitle', true ); ?> </p>
    </div>
  </div>
  <?php $i=0.4; ?>
    <ul id="team-list" class="margint30 marginb60">
    <?php
       global $wp_query;
      $paged = get_query_var('paged') ? get_query_var('paged') : 1;
      $port_args = array(
            'post_type'     => 'team',
            'posts_per_page'  => '20',
            'post_status'     => 'publish',
            'paged'       => $paged
        );
        $wp_port_query = new WP_Query($port_args);
        if( have_posts() ) : 
        while ( $wp_port_query->have_posts() ) : $wp_port_query->the_post(); ?>
          <li class="animated" data-animation="fadeInLeft" data-animation-delay="<?php echo $i."s"; $i=$i+0.3; ?>">
            <div class="team-box pos-center">
              <?php the_post_thumbnail('team-image'); ?>
              <h3 class="margint20"><?php the_title(); ?></h3>
              <hr class="underline" />
              <h5><?php echo get_post_meta( get_the_ID(), 'theme2035_team_member_position', true); ?></h5>
              <div class="team-member-details">
                <div class="team-member-links">
                  <?php if( get_post_meta( get_the_ID(), 'theme2035_team_member_dribble', true) != "" ){ ?> <a href="http://dribbble.com/<?php echo get_post_meta( get_the_ID(), 'theme2035_team_member_dribble', true); ?>"><i class="fa fa-dribbble"></i></a> <?php } ?>
                  <?php if( get_post_meta( get_the_ID(), 'theme2035_team_member_facebook', true ) != "" ){ ?> <a href="http://facebook.com/<?php echo get_post_meta( get_the_ID(), 'theme2035_team_member_facebook', true); ?>"><i class="fa fa-facebook"></i></a> <?php } ?>
                  <?php if( get_post_meta( get_the_ID(), 'theme2035_team_member_flickr', true ) != "" ){ ?> <a href="http://flickr.com/<?php echo get_post_meta( get_the_ID(), 'theme2035_team_member_flickr', true); ?>"><i class="fa fa-flickr"></i></a> <?php } ?>
                  <?php if( get_post_meta( get_the_ID(), 'theme2035_team_member_github', true ) != "" ){ ?> <a href="http://github.com/<?php echo get_post_meta( get_the_ID(), 'theme2035_team_member_github', true); ?>"><i class="fa fa-github"></i></a> <?php } ?>
                  <?php if( get_post_meta( get_the_ID(), 'theme2035_team_member_instagram', true ) != "" ){ ?> <a href="http://instagram.com/<?php echo get_post_meta( get_the_ID(), 'theme2035_team_member_instagram', true); ?>"><i class="fa fa-instagram"></i></a> <?php } ?>
                  <?php if( get_post_meta( get_the_ID(), 'theme2035_team_member_linkedin', true ) != "" ){ ?> <a href="http://linkedin.com/in/<?php echo get_post_meta( get_the_ID(), 'theme2035_team_member_linkedin', true); ?>"><i class="fa fa-linkedin"></i></a> <?php } ?>
                  <?php if( get_post_meta( get_the_ID(), 'theme2035_team_member_pinterest', true ) != "" ){ ?> <a href="http://pinterest.com/<?php echo get_post_meta( get_the_ID(), 'theme2035_team_member_pinterest', true); ?>"><i class="fa fa-pinterest"></i></a> <?php } ?>
                  <?php if( get_post_meta( get_the_ID(), 'theme2035_team_member_tumblr', true ) != "" ){ ?> <a href="http://<?php echo get_post_meta( get_the_ID(), 'theme2035_team_member_tumblr', true); ?>.tumblr.com"><i class="fa fa-tumblr"></i></a> <?php } ?>
                  <?php if( get_post_meta( get_the_ID(), 'theme2035_team_member_twitter', true ) != "" ){ ?> <a href="http://twitter.com/<?php echo get_post_meta( get_the_ID(), 'theme2035_team_member_twitter', true); ?>"><i class="fa fa-twitter"></i></a> <?php } ?>
                  <?php if( get_post_meta( get_the_ID(), 'theme2035_team_member_youtube', true ) != "" ){ ?> <a href="http://youtube.com/<?php echo get_post_meta( get_the_ID(), 'theme2035_team_member_youtube', true); ?>"><i class="fa fa-youtube"></i></a> <?php } ?>
                  <?php if( get_post_meta( get_the_ID(), 'theme2035_team_member_custom_link_url_1', true ) != "" ){ ?> <a href="<?php echo get_post_meta( get_the_ID(), 'theme2035_team_member_custom_link_url_1', true); ?>">
                  <?php 
                  $images = rwmb_meta( 'theme2035_team_member_custom_link_icon_1', 'type=image' );
                  foreach ( $images as $image ){
                    echo "<img alt='' width='25' height='25' src='".$image['full_url']."'>";
                  } ?>
                  </a> <?php } ?>

                  <?php if( get_post_meta( get_the_ID(), 'theme2035_team_member_custom_link_url_2', true ) != "" ){ ?> <a href="<?php echo get_post_meta( get_the_ID(), 'theme2035_team_member_custom_link_url_1', true); ?>">
                  <?php 
                  $images = rwmb_meta( 'theme2035_team_member_custom_link_icon_2', 'type=image' );
                  foreach ( $images as $image ){
                      echo "<img alt='' width='25' height='25' src='".$image['full_url']."'>";
                  } ?>
                  </a> <?php } ?>              
                  <?php if( get_post_meta( get_the_ID(), 'theme2035_team_member_custom_link_url_3', true ) != "" ){ ?> <a href="<?php echo get_post_meta( get_the_ID(), 'theme2035_team_member_custom_link_url_1', true); ?>">
                  <?php 
                  $images = rwmb_meta( 'theme2035_team_member_custom_link_icon_3', 'type=image' );
                  foreach ( $images as $image ){
                      echo "<img alt='' width='25' height='25' src='".$image['full_url']."'>";
                  } ?>
                  </a> <?php } ?>

                </div>
              </div>
            </div>
        </li>
        <?php endwhile; endif; 
       wp_reset_query();?> 
    </ul>
    <div class="container nav-wrap">
      <div id="nav-car">
        <a id="customer-prev" href="#"><i class="fa fa-chevron-left"></i></a>
        <a id="customer-next" href="#"><i class="fa fa-chevron-right"></i></a>
      </div>
    </div>
</div>


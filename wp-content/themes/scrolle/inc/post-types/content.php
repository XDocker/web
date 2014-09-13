<?php 

    global $smof_data;

?>                	

<!--**************************************************************************************************/
/* Standart Post Format 
************************************************************************************************** -->

    <article <?php post_class('clearfix'); ?> id="post-<?php the_ID(); ?>">
    <div class="blog-post fitvids clearfix">
        <div class="featured-image">
            <?php if (has_post_thumbnail( $post->ID ) ): ?>
            <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'attachment-standard' ); ?>
            <a href="<?php echo $image[0]; ?>" class="prettyPhoto"> <?php the_post_thumbnail('attachment-standard'); ?></a> 
            <?php endif; ?>
        </div>
            <div class="title-post"><a href="<?php the_permalink(); ?>"> <?php if (is_sticky()) { echo "<i class='fa  fa-thumb-tack'></i>"; } ?> <?php the_title();  ?></a></div>
        <div class="post-materials clearfix">
            <span class="blog-post-date"><i class="fa fa-calendar"></i><a href="<?php the_permalink(); ?>"><?php echo $post_date = get_the_date();  ?></a></span>
            <span class="blog-post-author"><i class="fa fa-user"></i><?php the_author_posts_link(); ?></span> 
            <?php if(comments_open() && !post_password_required()){
            	?> <span class="blog-post-comments"><i class="fa fa-comments"></i> <?php
            	comments_popup_link( __('No comments yet','2035Themes-fm'), __('1 Comment','2035Themes-fm'), __('% Comments','2035Themes-fm'), 'comments-link', __('Comments are off for this post','2035Themes-fm'));
            	?></span>  <?php
            	} 
             ?>
            <span class="blog-post-category"><i class="fa fa-tags"></i><?php the_category(', '); ?></span>  
        </div>
        <div class="post-content-full">
            <div class=" margint20 clearfix">
                <div class="post-type-icon">
                    <div class="post-type-icon-box">
                        <i title="Standart Blog Post" class="fa fa-pencil"></i>
                    </div>    
                </div>
                <div class="post-content">
                <?php  if(is_single()){ ?>
                    <div class="excerpt">
                        <?php the_content(); ?>
                    </div>
                <?php } else {  the_excerpt();  } ?>

                </div>
            </div>

            <?php 
            if(!is_single()){
            ?>
            <div class="more-link">
                <a href="<?php the_permalink(); ?>"><span class="continue-reading"><?php echo __("Read More","theme2035-fm"); ?></span></a>
            </div>
            <?php
            }else {  
                ?>
            <div class="tags">
                <?php
                    if( has_tag() ) {  
                    echo '<span>Tags: </span>'; 
                    the_tags('  ',' - ','  ');
                    echo '<div class="clear"></div>';
                    }
                    ?>
            </div>
            <div class="margint10 post-paginate"> <?php  wp_link_pages(); ?></div>
            <?php if (get_post_meta( get_the_ID(), 'theme2035_author_info', true ) == 'value1') {  ?>

            <div class="clearfix authorinfo margint10">
                    <div class="author-avatar">
                        <a href="<?php echo get_author_posts_url(get_the_author_meta( 'ID' )); ?>"><?php echo get_avatar( get_the_author_meta('user_email'), '80', '' ); ?></a>
                    </div>   
                    <div class="author-text">
                        <a href="<?php echo get_author_posts_url(get_the_author_meta( 'ID' )); ?>"><?php echo get_the_author_meta('display_name'); ?></a>
                        <p><?php the_author_meta('description'); ?></p>
                    </div>
            </div>
            <?php }
            comments_template();  } ?>
        </div>
    </div>
    </article>


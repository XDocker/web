<?php global $smof_data;?>                	
<?php get_header(); ?>
<?php get_template_part('menu');  ?>
    <div class="blog padt80 clearfix">
        <div class="container clearfix">
            <div class="row clearfix">
                <div class="col-lg-9">
                    <?php while ( have_posts() ) : the_post(); ?>
                    <?php get_template_part( 'inc/post-types/content', get_post_format() );  ?>
                    <?php endwhile; // end of the loop. ?>
                </div>
                <div class="col-lg-3  blog-sidebar">
                    <?php get_sidebar(); ?>
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>


<?php get_header(); ?>
<?php get_template_part("menu"); ?>
<?php if (have_posts()) :  
while ( have_posts() ) : the_post();
	$name_of_post = get_post_meta( get_the_ID(), 'theme2035_section_name', true );
	$post_section_name = get_post_meta( get_the_ID(), 'theme2035_section_name', true );?>

<div class="container marginb60">
	<div class="pos-center">
		<div class="sect-titles padt60 fit-text"><?php $title = get_post_meta( get_the_ID(), 'theme2035_page_title', true ); if( $title != "" ){ echo $title; } else { echo the_title(); } ?></div>
		<div class="divide margint30"></div>
		<div class="about-text margint30">
			<p> <?php echo get_post_meta( get_the_ID(), 'theme2035_page_subtitle', true ); ?> </p>
		</div>
	</div>
	<div id="<?php echo $post_section_name; ?>" style="background:#FFF; margin:0 !important; padding:0 !important; z-index:1;" >
			<?php the_content(); ?>
	</div>
	<?php comment_form($args); ?>
</div>


<?php  endwhile; endif;?>
<?php get_footer(); ?>


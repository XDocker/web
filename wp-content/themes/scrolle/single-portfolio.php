<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?> 
	<div class="container pos-center projects">
		<h2 class="margint40"><?php the_title();  ?></h2>
		<p class="margint5">
			<?php $terms = get_the_terms( get_the_ID(), 'portfolio_filter' ); ?>      
	        <?php if($terms) : foreach ($terms as $term) { echo $term->slug.' '; } endif; ?>  
	        <?php echo $portfolio_grid; ?>
        </p>
        <?php if( get_post_meta( get_the_ID(), 'theme2035_portfolio_embed_video', true ) == "" ){ 
				$images = get_children( array(
				'post_parent' => $post->ID,
				'post_type' => 'attachment',
				'post_mime_type' => 'image',
				'orderby' => 'menu_order',
				'order' => 'ASC',
				'numberposts' => 999
		));
		if(count( $images )<2){
		if ( $images = get_children(array(
			'post_parent' => get_the_ID(), 
			'post_type' => 'attachment', 
			'post_mime_type' => 'image' 
		))){ ?>
	    <?php foreach( $images as $image ) :  ?>
	    <?php echo wp_get_attachment_link($image->ID, 'only-one-image'); ?>                      
	    <?php endforeach;  }
		} else { ?>
		<div class="project-slider margint20">
			<div class="slider-wrapper featured-image theme-default">
			    <div id="project-slider-wrapper" class="nivoSlider">
	                <?php if ( $images = get_children(array('post_parent' => get_the_ID(), 'post_type' => 'attachment', 'post_mime_type' => 'image' ))){ ?>
	                    <?php foreach( $images as $image ) :  ?>
	                        <?php echo wp_get_attachment_link($image->ID, 'attachment-standard'); ?>                      
	                    <?php endforeach;  } ?>
				</div>
			</div>
		</div>
		<?php } ?>
		<div class="row margint50 pos-left project-info-box">
			<div class="col-lg-4">
				<h3 class="font-Oswald"><?php echo __('ABOUT PROJECT','theme2035-fm'); ?></h3>
				<p class="margint20"><?php echo get_post_meta( get_the_ID(), 'theme2035_portfolio_desc', true ); ?></p>
			</div>
			<div class="col-lg-4">
				<h3 class="font-Oswald"><?php echo __('PROJECT DETAILS','theme2035-fm'); ?></h3>
				<ul class="project-det margint10">
					<li class="clearfix">
						<div class="pull-left list-title"><?php echo __('CATEGORY','theme2035-fm'); ?></div>
						<div class="pull-right list-desc">        
						<?php $terms = get_the_terms( get_the_ID(), 'portfolio_filter' ); ?>      
        				<?php if($terms) : foreach ($terms as $term) { echo $term->slug.' '; } endif; ?>  <?php echo $portfolio_grid; ?></div>
					</li>
					<li class="clearfix">
						<div class="pull-left list-title"><?php echo __('CLIENTS','theme2035-fm'); ?></div>
						<div class="pull-right list-desc"><?php echo get_post_meta( get_the_ID(), 'theme2035_clients_name', true ); ?></div>
					</li>
					<li class="clearfix">
						<div class="pull-left list-title"><?php echo __('DATE','theme2035-fm'); ?></div>
						<div class="pull-right list-desc"><time datetime="<?php echo date(DATE_W3C); ?>" class="updated"><?php the_time(get_option('date_format')); ?></time></div>
					</li>
				</ul>
			</div>
			<div class="col-lg-4">
				<h3><?php echo __('PROJECT WEBSITE','theme2035-fm'); ?></h3>
				<div class="margint20 project_link">
					<a href="<?php echo get_post_meta( get_the_ID(), 'theme2035_project_web_site', true ); ?>"><?php echo get_post_meta( get_the_ID(), 'theme2035_project_web_site', true ); ?> <i class="icon-external-link"></i></a>
				</div>
			</div>
		</div>

<?php } else {
	     	echo "<div class='video fitvids'>";
	    	echo get_post_meta( get_the_ID(), 'theme2035_portfolio_embed_video', true );
	    	echo "</div>"; ?>

		<div class="row margint50 pos-left project-info-box">
			<div class="col-lg-4">
				<h3 class="font-Oswald"><?php echo __('ABOUT PROJECT','theme2035-fm'); ?></h3>
				<p class="margint20"><?php echo get_post_meta( get_the_ID(), 'theme2035_portfolio_desc_video', true ); ?></p>
			</div>
			<div class="col-lg-4">
				<h3 class="font-Oswald"><?php echo __('PROJECT DETAILS','theme2035-fm'); ?></h3>
				<ul class="project-det margint10">
					<li class="clearfix">
						<div class="pull-left list-title"><?php echo __('CATEGORY','theme2035-fm'); ?></div>
						<div class="pull-right list-desc">        
						<?php $terms = get_the_terms( get_the_ID(), 'portfolio_filter' ); ?>      
        				<?php if($terms) : foreach ($terms as $term) { echo $term->slug.' '; } endif; ?>  <?php echo $portfolio_grid; ?></div>
					</li>
					<li class="clearfix">
						<div class="pull-left list-title"><?php echo __('CLIENTS','theme2035-fm'); ?></div>
						<div class="pull-right list-desc"><?php echo get_post_meta( get_the_ID(), 'theme2035_clients_name_video', true ); ?></div>
					</li>
					<li class="clearfix">
						<div class="pull-left list-title"><?php echo __('DATE','theme2035-fm'); ?></div>
						<div class="pull-right list-desc"><time datetime="<?php echo date(DATE_W3C); ?>" class="updated"><?php the_time(get_option('date_format')); ?></time></div>
					</li>
				</ul>
			</div>
			<div class="col-lg-4">
				<h3><?php echo __('PROJECT WEBSITE','theme2035-fm'); ?></h3>
				<div class="margint20 project_link">
					<a href="<?php echo get_post_meta( get_the_ID(), 'theme2035_project_web_site_video', true ); ?>"><?php echo get_post_meta( get_the_ID(), 'theme2035_project_web_site_video', true ); ?> <i class="icon-external-link"></i></a>
				</div>
			</div>
		</div>
<?php } ?>	
	</div>
<?php endwhile; endif; 

wp_reset_query();  ?> 

<?php get_footer(); ?>
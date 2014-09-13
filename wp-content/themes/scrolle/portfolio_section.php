
 <?php global $smof_data; ?> 
<?php get_header(); ?>

<div class="pos-center">
  <div class="sect-titles padt60 fit-text"><?php echo get_post_meta( get_the_ID(), 'theme2035_page_title', true ); ?></div>
  <div class="divide margint30"></div>
  <div class="about-text margint30">
    <p> <?php echo get_post_meta( get_the_ID(), 'theme2035_page_subtitle', true ); ?> </p>
  </div>
</div>
<div class="portfolio-filters pos-center">
  <?php $portfolio_filters = get_terms('portfolio_filter');
    if($portfolio_filters): ?>
        <ul>
          <li><a href="#" data-filter="*" class="active"><?php echo __('All', 'theme2035-fm'); ?></a></li>  
          <?php foreach($portfolio_filters as $portfolio_filter): ?>
            <?php if(get_post_meta(get_the_ID(), 'portfoliofilter', false)  && !in_array('0', get_post_meta(get_the_ID(), 'portfoliofilter', false))): ?>
              <?php if(in_array($portfolio_filter->term_id, get_post_meta(get_the_ID(), 'portfoliofilter', false))): ?>
                <li><a href="#" data-filter=".<?php echo $portfolio_filter->slug; ?>"><?php echo $portfolio_filter->name; ?></a></li>
              <?php endif; ?>
            <?php else: ?>
              <li><a href="#" data-filter=".<?php echo $portfolio_filter->slug; ?>"><?php echo $portfolio_filter->name; ?></a></li>
            <?php endif; ?>
          <?php endforeach; ?>
        </ul>
    <?php endif; ?>
</div>
<div class="work-list">
  <ul class="portfolio-box clearfix">
    <?php $count_posts = wp_count_posts( 'portfolio' )->publish; if($count_posts < 8){ $count_posts = 4; }else{ $count_posts = 8; };
          if(get_query_var('page')){$paged = get_query_var('page');}else if(get_query_var('paged')){$paged = get_query_var('paged');}
          $portfolioQuery = new WP_Query(array( 
            'post_type' => 'portfolio',
            'paged'=>$paged,
            'post_status'     => 'publish',
            'posts_per_page' => $count_posts
          ));
        if($portfolioQuery->have_posts()) : while($portfolioQuery->have_posts()) : $portfolioQuery->the_post();  ?>
    <li class="item <?php $terms = get_the_terms( get_the_ID(), 'portfolio_filter' ); ?><?php if($terms) : foreach ($terms as $term) { echo $term->slug.' '; } endif; ?>">
      <a href="<?php the_permalink() ?>" class="iframe portfolio-group" >
        <?php the_post_thumbnail(); ?>
          <div class="mask">
            <h2><?php echo get_the_title(); ?></h2>
            <div class="margint20"><i class="icon-camera"></i></div>
            <div class="margint20 portfolio-category">        
              <?php $terms = get_the_terms( get_the_ID(), 'portfolio_filter' ); ?>      
              <?php if($terms) : foreach ($terms as $term) { echo '<p>'.$term->slug.'</p>'; } endif; ?> 
            </div>
          </div>    
      </a>   
    </li> 
        <?php endwhile; ?>
  </ul>
  <?php 
    Theme2035_portfolio_pagination($portfolioQuery->max_num_pages); 
    endif;
    wp_reset_query();
  ?>
</div>



<?php
global $smof_data;

if($smof_data['home_layout'] == 'slider') {   ?>
<div id="home">
  <div class="pos-center">
    <?php if($smof_data['menu_type'] == "menu"){ ?>
      <div class="logo">
        <img src="<?php if($smof_data['logo_standart'] == "") 
        { echo THEMEROOT."/images/logo.jpg"; }
        else { echo $smof_data['logo_standart']; } 
        ?>" alt="logo">
      </div>
    <?php } ?>
    <?php the_content(); ?>
    <div class="scroll-down"><a href="#about" class="smooth"><i class="fa  fa-chevron-circle-down"></i></a></div>
  </div>

</div>
     <?php  }  ?>


<?php if($smof_data['home_layout'] == 'video') {  ?>
  <div id="home">
    <div class="pos-center">
      <div class="logo">
        <img src="<?php if($smof_data['logo_standart'] == "") 
        { echo THEMEROOT."/images/logo.jpg"; }
        else { echo $smof_data['logo_standart']; } 
        ?>" alt="logo">
      </div>
      <?php the_content(); ?>
      <div class="scroll-down"><a href="#about" class="smooth"><i class="fa fa-chevron-circle-down"></i></a></div>    
    </div>
  </div>

<?php }  

    if($smof_data['home_layout'] == 'half_slider') { 
    $post_id = get_the_ID(); ?>

    <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post_id, 'thumbnail_size') ); ?>

  <div id="home-half" style="background: url('<?php echo $url; ?>') fixed; height: 500px !important;">
    <div class="pos-center">
      <?php the_content(); ?>
    </div>
  </div>
  
<?php }  ?>
<?php global $smof_data; 

if($smof_data['home_layout'] == "half_slider"){ $home_link = "#home-half";  } else { $home_link = "#home"; }

if($smof_data['menu_type'] == "menu"){

?>
	<div id="menu" class="mini-menu">
		<ul class="logo_mini"><li><a class="<?php if ( !is_front_page() ) {  echo "external"; } else { echo "smooth"; }  ?>"  href="<?php if ( !is_front_page() ) {  echo home_url(); }  ?>#home"><img alt="Logo Mini" src="<?php if($smof_data['logo_mini'] != "") { echo $smof_data['logo_mini']; } else { echo THEMEROOT."/images/m-logo.jpg"; } ?>"></a></li></ul>
		<?php 
		if (has_nav_menu('top-menu')) {
				 wp_nav_menu(array('theme_location' => 'top-menu', 'container' => '', 'menu_class' => 'nav-collapse', 'menu_id' => 'nav', 'walker' => new description_walker()));
		}
		else {
			echo __("Please Add Menu Appearance > Menus","theme2035-fm");
		}		
		?>
	</div>
<?php } else if($smof_data['menu_type'] == "menu2") { ?>
	<div id="menu-alt-wrapper">
		<div class="container">
			<div class="pull-left h-logo">
				<a href="<?php if ( !is_front_page() ) {  echo home_url(); }  ?>#home" class="<?php if ( is_front_page() ) {  echo "smooth"; } ?>" >
					<img alt="" width="<?php echo $smof_data['logo_width']; ?>" height="<?php echo $smof_data['logo_height']; ?>" src="<?php if($smof_data['logo_standart'] == "") 
					{ echo THEMEROOT."/images/h-logo.png"; }
					else { echo $smof_data['logo_standart']; } ?> ">
				</a>
			</div>
			<div class="pull-right menu-alt">
				<div id="menu2">
					<?php 
					if (has_nav_menu('top-menu')) {
					 	wp_nav_menu(array('theme_location' => 'top-menu', 'container' => '', 'menu_class' => 'nav-collapse', 'menu_id' => 'nav','walker' => new description_walker() ));
					}
					else {
						echo __("Please Add Menu Appearance > Menus","theme2035-fm");
					}		
					?>				
				</div>
			</div>
		</div>
	</div>

<?php }else if($smof_data['menu_type'] == "menu3") { ?>

	<div id="menu" class="resp-menu">
		<ul class="logo_mini"><li><a class="<?php if ( !is_front_page() ) {  echo "external"; }  ?>"  href="<?php if ( !is_front_page() ) {  echo home_url(); }  ?>#home"><img alt="Logo Mini" src="<?php if($smof_data['logo_mini'] != "") { echo $smof_data['logo_mini']; } else { echo THEMEROOT."/images/m-logo.jpg"; } ?>"></a></li></ul>
		<?php 
		if (has_nav_menu('top-menu')) {
				 wp_nav_menu(array('theme_location' => 'top-menu', 'container' => '', 'menu_class' => 'nav-collapse', 'menu_id' => 'nav', 'walker' => new description_walker()));
		}
		else {
			echo __("Please Add Menu Appearance > Menus","theme2035-fm");
		}		
		?>
	</div>

	<div id="menu-wicon" class="non-resp-menu">
		<div class="menuwrap">
			<ul class="logo_mini"><li><a class="<?php if ( !is_front_page() ) {  echo "external"; }  ?>"  href="<?php if ( !is_front_page() ) {  echo home_url(); }  ?>#home"><img alt="Logo Mini" src="<?php if($smof_data['logo_mini'] != "") { echo $smof_data['logo_mini']; } else { echo THEMEROOT."/images/m-logo.jpg"; } ?>"></a></li></ul>
		</div>
		<div class="menulist">
		<?php 
			if (has_nav_menu('top-menu')) {
					 wp_nav_menu(array('theme_location' => 'top-menu', 'container' => '', 'menu_class' => 'nav-collapse', 'menu_id' => 'navwicon', 'walker' => new description_walker()));
			}
			else {
				echo __("Please Add Menu Appearance > Menus","theme2035-fm");
			}		
		?>
		</div>
		<a href="#" class="menuopener"><img src="<?php echo THEMEROOT."/images/mobile-nav-icon.png"; ?>" alt="menu" /></a>
	</div>

<?php } else if($smof_data['menu_type'] == "menu_light") { ?>
	<div id="menu-alt-wrapper" class="menu-white">
		<div class="container">
			<div class="pull-left h-logo">
				<a href="<?php if ( !is_front_page() ) {  echo home_url(); }  ?>#home" class="<?php if ( is_front_page() ) {  echo "smooth"; }  ?>" >
					<img alt="" src="<?php if($smof_data['logo_standart'] == "") 
					{ echo THEMEROOT."/images/h-logo.png"; }
					else { echo $smof_data['logo_standart']; } ?> ">
				</a>
			</div>
			<div class="pull-right menu-alt">
				<div id="menu2">
					<?php 
					if (has_nav_menu('top-menu')) {
					 	wp_nav_menu(array('theme_location' => 'top-menu', 'container' => '', 'menu_class' => 'nav-collapse', 'menu_id' => 'nav','walker' => new description_walker() ));
					}
					else {
						echo __("Please Add Menu Appearance > Menus","theme2035-fm");
					}		
					?>	
				</div>
			</div>
		</div>
	</div>

<?php } ?>




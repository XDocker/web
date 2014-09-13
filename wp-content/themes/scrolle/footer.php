<?php global $smof_data; ?>

	<div class="footer-ghost"></div>
</div><!-- .Wrapper End -->

<div id="footer" class="animated-area">
	<div class="container footer animated" data-animation="pulse" data-animation-delay="0.6s">
		<a class="smooth" href="<?php echo home_url(); ?>">
			<img alt="" src="<?php if($smof_data['logo_standart'] == "") { echo THEMEROOT."/images/h-logo.png"; }
			else { echo $smof_data['logo_standart']; } ?> ">
		</a>
		<?php if($smof_data['footer_text'] != "") { echo $smof_data['footer_text']; }     ?>
	</div>
</div><!-- .FOOTER End -->
<?php if($smof_data['track_code'] != "") { echo $smof_data['track_code']; } ?>
<?php wp_footer(); ?>
</body>
</html>
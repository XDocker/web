<?php global $smof_data;  
if(empty($smof_data['loading_type'])){
	$smof_data['loading_type'] = "loading2";
}
?>




<?php if($smof_data['loading_type'] == "Off" ) { } ?>
<?php if($smof_data['loading_type'] == "loading1" ) { ?>

<div id="loading-area">
	<div class="block">
	  <div class="initial">
		<?php
		$loadingtext = $smof_data['loading_text'];
		$textarray = str_split($loadingtext);
		$arraysize = count($textarray)-1;

		for($i=0;$i<=$arraysize;$i++){
			echo "<span>".$textarray[$i]."</span>";
		}
		?>
	  </div>
	</div>
</div>
<?php } ?>
<?php if($smof_data['loading_type'] == "loading2" ) { ?>
                <div id="loading-area">
                	<div class="position">
		                <div class="span">
		                    <div class="timer"></div>
		                </div>
	                </div>
                </div>
<?php } ?>
<?php if($smof_data['loading_type'] == "loading3" ) { ?>
                <div id="loading-area">
                	<div class="position">
		                <div class="span">
		                    <div class="typing_loader"></div>
		                </div>
	                </div>
                </div>
<?php } ?>
<?php if($smof_data['loading_type'] == "loading4" ) { ?>
                <div id="loading-area">
                	<div class="position">
		                <div class="span">
		                    <div class="location_indicator"></div>
		                </div>
	                </div>
                </div>
<?php } ?>
<?php if($smof_data['loading_type'] == "loading5" ) { ?>
                <div id="loading-area">
                	<div class="position">
		                <div class="span">
		                    <div class="battery"></div>
		                </div>
	                </div>
                </div>
<?php } ?>
<?php if($smof_data['loading_type'] == "loading6" ) { ?>
                <div id="loading-area">
                	<div class="position">
		                <div class="span">
		                    <div class="help"></div>
		                </div>
	                </div>
                </div>
<?php } ?>
<?php if($smof_data['loading_type'] == "loading7" ) { ?>
                <div id="loading-area">
                	<div class="position">
		                <div class="span">
		                    <div class="cloud"></div>
		                </div>
	                </div>
                </div>
<?php } ?>
<?php if($smof_data['loading_type'] == "loading8" ) { ?>
                <div id="loading-area">
                	<div class="position">
		                <div class="span">
		                    <div class="eye"></div>
		                </div>
	                </div>
                </div>
<?php } ?>
<?php if($smof_data['loading_type'] == "loading9" ) { ?>
                <div id="loading-area">
                	<div class="position">
		                <div class="span">
		                    <div class="coffee_cup"></div>
		                </div>
	                </div>
                </div>
<?php } ?>
<?php if($smof_data['loading_type'] == "loading10" ) { ?>
                <div id="loading-area">
                	<div class="position">
		                <div class="span">
		                    <div class="square"></div>
		                </div>
	                </div>
                </div>
<?php } ?>
<?php if($smof_data['loading_type'] == "loading11" ) { ?>
                <div id="loading-area">
                	<div class="position">
		                <div class="span">
		                    <div class="circle"></div>
		                </div>
	                </div>
                </div>
<?php } ?>
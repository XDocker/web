<?php

global $smof_data;

$customfont = '';

$default = array(
				'arial',
				'verdana',
				'trebuchet',
				'georgia',
				'times',
				'tahoma',
				'helvetica');

$googlefonts = array(
				$smof_data['font_body']['face'],
				$smof_data['title_font']['face'],
				$smof_data['horizantal_light__font_style']['face'],
				$smof_data['horizantal_style_font_style']['face'],
				$smof_data['h1_font']['face'],
				$smof_data['h2_font']['face'],
				$smof_data['h3_font']['face'],
				$smof_data['h4_font']['face'],
				$smof_data['h5_font']['face'],
				$smof_data['h6_font']['face'],
				);

			$googlefonts = array_unique($googlefonts);
?>
(function($) {
"use strict";   
 


 			//Shortcodes
            tinymce.PluginManager.add( 'zillaShortcodes', function( editor, url ) {

				editor.addCommand("zillaPopup", function ( a, params )
				{
					var popup = params.identifier;
					tb_show("Insert Zilla Shortcode", url + "/popup.php?popup=" + popup + "&width=" + 800);
				});
     
                editor.addButton( 'zilla_button', {
                    type: 'splitbutton',                
                    icon: 'icon mce-i-bell',
					title:  'Zilla Shortcodes',
					onclick : function(e) {},
					menu: [

					{text: 'One Half (1/2)',onclick:function(){
					    editor.execCommand("mceInsertContent", false, '[one_half]Put Your Content![/one_half]')
					}},

					{text: 'One Third Column (1/3)',onclick:function(){
					    editor.execCommand("mceInsertContent", false, '[one_third]Put Your Content![/one_third]')
					}},					

					{text: 'Two Thirds Column (2/3)',onclick:function(){
					    editor.execCommand("mceInsertContent", false, '[two_third]Put Your Content![/two_third]')
					}},

					{text: 'One Fourth Column (1/4) ',onclick:function(){
					    editor.execCommand("mceInsertContent", false, '[two_third]Put Your Content![/two_third]')
					}},

					{text: 'Three Fourths Column (3/4) ',onclick:function(){
					    editor.execCommand("mceInsertContent", false, '[one_fourth]Put Your Content![/one_fourth]')
					}},

					{text: 'One Sixth Column (1/6) ',onclick:function(){
					    editor.execCommand("mceInsertContent", false, '[one_sixth]Put Your Content![/one_sixth]')
					}},

					{text: 'Five Sixths Column (5/6) ',onclick:function(){
					    editor.execCommand("mceInsertContent", false, '[five_sixths]Put Your Content![/five_sixths]')
					}},

					{text: 'One Whole Column (1/1) ',onclick:function(){
					    editor.execCommand("mceInsertContent", false, '[one_whole]Put Your Content![/one_whole]')
					}},

					{text: 'About Box',onclick:function(){
						editor.execCommand("zillaPopup", false, {title: 'Theme2035_about_box',identifier: 'Theme2035_about_box'})
					}},	

					{text: 'Left Icon Services',onclick:function(){
						editor.execCommand("zillaPopup", false, {title: 'Theme2035_left_icon_services',identifier: 'Theme2035_left_icon_services'})
					}},	
		
					{text: 'Services Numeric Box ',onclick:function(){
					    editor.execCommand("mceInsertContent", false, '[services_box]Put Your Content![/services_box]')
					}},							

					{text: 'Add Services Numeric Box',onclick:function(){
						editor.execCommand("zillaPopup", false, {title: 'Theme2035_services_box_item',identifier: 'Theme2035_services_box_item'})
					}},	
		
					{text: 'Services Icon Box',onclick:function(){
					    editor.execCommand("mceInsertContent", false, '[icon_box]Put Your Content![/icon_box]')
					}},							

					{text: 'Services Icon Box Item',onclick:function(){
						editor.execCommand("zillaPopup", false, {title: 'Theme2035_icon_box_item',identifier: 'Theme2035_icon_box_item'})
					}},		

					{text: 'Mobile Box',onclick:function(){
					    editor.execCommand("mceInsertContent", false, '[mobile_box]Put Your Content![/mobile_box]')
					}},							

					{text: 'Mobile Box Item',onclick:function(){
						editor.execCommand("zillaPopup", false, {title: 'Theme2035_box',identifier: 'Theme2035_box'})
					}},	

					{text: 'Customer Comments',onclick:function(){
					    editor.execCommand("mceInsertContent", false, '[customer_comments]Put Your Content![/customer_comments]')
					}},							

					{text: 'Add Customer Comment',onclick:function(){
						editor.execCommand("zillaPopup", false, {title: 'Theme2035_customer',identifier: 'Theme2035_customer'})
					}},	

					{text: 'Features Tabs',onclick:function(){
					    editor.execCommand("mceInsertContent", false, '[features_tabs]Put Your Content![/features_tabs]')
					}},							

					{text: 'Add Features Tabs',onclick:function(){
						editor.execCommand("zillaPopup", false, {title: 'Theme2035_f_tab',identifier: 'Theme2035_f_tab'})
					}},	

					{text: 'Contact Tabs',onclick:function(){
					    editor.execCommand("mceInsertContent", false, '[contact_tabs]Put Your Content![/contact_tabs]')
					}},	

					{text: 'Add Contact Tabs',onclick:function(){
						editor.execCommand("zillaPopup", false, {title: 'Theme2035_c_tab',identifier: 'Theme2035_c_tab'})
					}},	
					
					{text: 'Skills Bar',onclick:function(){
						editor.execCommand("zillaPopup", false, {title: 'Theme2035_skill_bar',identifier: 'Theme2035_skill_bar'})
					}},	

					{text: 'Price List',onclick:function(){
						editor.execCommand("zillaPopup", false, {title: 'Theme2035_price_list',identifier: 'Theme2035_price_list'})
					}},	

					{text: 'Parallax Quote',onclick:function(){
						editor.execCommand("zillaPopup", false, {title: 'Theme2035_parallax_quote',identifier: 'Theme2035_parallax_quote'})
					}},						

					{text: 'Mini Slider',onclick:function(){
					    editor.execCommand("mceInsertContent", false, '[mini_slider]Put Your Content![/mini_slider]')
					}},							

					{text: 'Add Mini Slider Item',onclick:function(){
					    editor.execCommand("mceInsertContent", false, '[mini_slider_item]Put Your Content![/mini_slider_item]')
					}},

					{text: 'Text Slider',onclick:function(){
					    editor.execCommand("mceInsertContent", false, '[Theme2035_text_slider]Put Your Content![/Theme2035_text_slider]')
					}},	

					{text: 'Add Slider Item',onclick:function(){
						editor.execCommand("zillaPopup", false, {title: 'Theme2035_text_slider_item',identifier: 'Theme2035_text_slider_item'})
					}},	

					{text: 'Accordion',onclick:function(){
					    editor.execCommand("mceInsertContent", false, '[accordion]Put Your Content![/accordion]')
					}},	

					{text: 'Add Accordion Tab',onclick:function(){
						editor.execCommand("zillaPopup", false, {title: 'Theme2035_accordion_item',identifier: 'Theme2035_accordion_item'})
					}},	

					{text: 'Animation Container',onclick:function(){
					    editor.execCommand("mceInsertContent", false, '[animation_container]Put Your Content![/animation_container]')
					}},	

					{text: 'Add Animation',onclick:function(){
						editor.execCommand("zillaPopup", false, {title: 'Theme2035_animation',identifier: 'Theme2035_animation'})
					}},	

					{text: 'Social Icon',onclick:function(){
					    editor.execCommand("mceInsertContent", false, '[social_icon]Put Your Content![/social_icon]')
					}},	

					{text: 'Add Social Icon Item',onclick:function(){
						editor.execCommand("zillaPopup", false, {title: 'Theme2035_social_icon_item',identifier: 'Theme2035_social_icon_item'})
					}},						

					{text: 'Twitter',onclick:function(){
					    editor.execCommand("mceInsertContent", false, '[twitter][/twitter]')
					}},	


					{text: 'Maps',onclick:function(){
					    editor.execCommand("mceInsertContent", false, '[maps][/maps]')
					}},	


					{text: 'Contact Form',onclick:function(){
					    editor.execCommand("mceInsertContent", false, '[contact_form] Please Add Contact Form Code [/contact_form]')
					}},	

					{text: 'Clear',onclick:function(){
					    editor.execCommand("mceInsertContent", false, '[clearfix][/clearfix]')
					}},	

					{text: 'Center',onclick:function(){
					    editor.execCommand("mceInsertContent", false, '[center][/center]')
					}},	
	
					{text: 'Background Color',onclick:function(){
						editor.execCommand("zillaPopup", false, {title: 'Theme2035_b_color',identifier: 'Theme2035_b_color'})
					}},	
				
					{text: 'Background Image',onclick:function(){
						editor.execCommand("zillaPopup", false, {title: 'Theme2035_b_image',identifier: 'Theme2035_b_image'})
					}},					
					{text: 'Subtitle',onclick:function(){
						editor.execCommand("zillaPopup", false, {title: 'Theme2035_subtitle',identifier: 'Theme2035_subtitle'})
					}},	

					{text: 'Responsive Images',onclick:function(){
					    editor.execCommand("mceInsertContent", false, '[responsive][/responsive]')
					}},	
	
	
					{text: 'Pop-up Images (Pretty Photo)',onclick:function(){
						editor.execCommand("zillaPopup", false, {title: 'Theme2035_pretty_photo',identifier: 'Theme2035_pretty_photo'})
					}},		
					{text: 'Space',onclick:function(){
						editor.execCommand("zillaPopup", false, {title: 'Theme2035_space',identifier: 'Theme2035_space'})
					}},	

					//List your shortcodes like this
					]

                
        	  });
         
          });
         

 
})(jQuery);
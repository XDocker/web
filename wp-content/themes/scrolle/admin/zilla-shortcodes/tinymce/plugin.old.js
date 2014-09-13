(function ()
{
	// create zillaShortcodes plugin
	tinymce.create("tinymce.plugins.zillaShortcodes",
	{
		init: function ( ed, url )
		{
			ed.addCommand("zillaPopup", function ( a, params )
			{
				var popup = params.identifier;
				
				// load thickbox
				tb_show("Insert Zilla Shortcode", url + "/popup.php?popup=" + popup + "&width=" + 800);
			});
		},
		createControl: function ( btn, e )
		{
			if ( btn == "zilla_button" )
			{	
				var a = this;
				
				var btn = e.createSplitButton('zilla_button', {
                    title: "Insert Zilla Shortcode",
					image: ZillaShortcodes.plugin_folder +"/tinymce/images/icon.png",
					icons: false
                });

                btn.onRenderMenu.add(function (c, b)
				{	
					a.addImmediate( b, "Container", "[container][/container]" );								
					c=b.addMenu({title: "Columns"});	
					a.addImmediate( c, "One Half (1/2) ", "[one_half][/one_half]");													
					a.addImmediate( c, "One Third Column (1/3) ", "[one_third][/one_third]");													
					a.addImmediate( c, "Two Thirds Column (2/3) ", "[two_third][/two_third]");													
					a.addImmediate( c, "One Fourth Column (1/4) ", "[one_fourth][/one_fourth]");													
					a.addImmediate( c, "Three Fourths Column (3/4) ", "[three_fourths][/three_fourths]");													
					a.addImmediate( c, "One Sixth Column (1/6) ", "[one_sixth][/one_sixth]");													
					a.addImmediate( c, "Five Sixths Column (5/6) ", "[five_sixths][/five_sixths]");													
					a.addImmediate( c, "One Whole Column (1/1) ", "[one_whole][/one_whole]");
					a.addWithPopup( b, "About Box", "Theme2035_about_box" );																										
					a.addWithPopup( b, "Left Icon Services", "Theme2035_left_icon_services" );																										
							
									
			
					c=b.addMenu({title: "Services Numeric Box"});
					a.addImmediate( c, "Services Numeric Box", "[services_box][/services_box]" );
					a.addWithPopup( c, "Add Numeric Box", "Theme2035_services_box_item");							
					c=b.addMenu({title: "Services Icon Box"});
					a.addImmediate( c, "Services Icon Box", "[icon_box][/icon_box]" );										
					a.addWithPopup( c, "Services Icon Box Item", "Theme2035_icon_box_item" );										
					c=b.addMenu({title: "Mobile Box"});
					a.addImmediate( c, "Mobile Box", "[mobile_box][/mobile_box]");									
					a.addWithPopup( c, "Mobile Box Item", "Theme2035_box");	
					c=b.addMenu({title: "Customer Comments"});
					a.addImmediate( c, "Customer Comments", "[customer_comments][/customer_comments]");									
					a.addWithPopup( c, "Add Customer Comment", "Theme2035_customer");											
					c=b.addMenu({title: "Features Tabs"});
					a.addImmediate( c, "Features Tabs", "[features_tabs][/features_tabs]");									
					a.addWithPopup( c, "Add Tabs", "Theme2035_f_tab");
					c=b.addMenu({title: "Contact Tabs"});
					a.addImmediate( c, "Contact Tabs", "[contact_tabs][/contact_tabs]");									
					a.addWithPopup( c, "Add Tabs", "Theme2035_c_tab");					
					a.addWithPopup( b, "Skills Bar", "Theme2035_skill_bar" );
					a.addWithPopup( b, "Price List", "Theme2035_price_list" );	
					a.addWithPopup( b, "Parallax Quote", "Theme2035_parallax_quote");	
					c=b.addMenu({title: "Mini Slider"});
					a.addImmediate( c, "Mini Slider", "[mini_slider][/mini_slider]");									
					a.addImmediate( c, "Add Mini Slider Item", "[mini_slider_item][/mini_slider_item]");																							
					c=b.addMenu({title: "Text Slider"});
					a.addWithPopup( c, "Text Slider", "Theme2035_text_slider");									
					a.addWithPopup( c, "Add Slider Item", "Theme2035_text_slider_item");					
					c=b.addMenu({title: "Accordions"});	
					a.addImmediate( c, "Accordion", "[accordion][/accordion]");											
					a.addWithPopup( c, "Add Accordion Tab", "Theme2035_accordion_item");	
					c=b.addMenu({title: "Animation"});	
					a.addImmediate( c, "Animation Container", "[animation_container][/animation_container]");											
					a.addWithPopup( c, "animation", "Theme2035_animation");						
					c=b.addMenu({title: "Social Icon"});											
					a.addImmediate( c, "Social Icon", "[social_icon][/social_icon]");											
					a.addWithPopup( c, "Add Social Icon Item", "Theme2035_social_icon_item");	
					a.addImmediate( b, "Twitter", "[twitter][/twitter]");	
					a.addImmediate( b, "Maps", "[maps][/maps]");	
					a.addImmediate( b, "Contact Form", "[contact_form] Please Add Contact Form Code [/contact_form]");																					
					c=b.addMenu({title: "Tools"});	
					a.addImmediate( c, "Clear", "[clearfix][/clearfix]");				
					a.addImmediate( c, "Center", "[center][/center]");				
					a.addWithPopup( c, "Background Color", "Theme2035_b_color");				
					a.addWithPopup( c, "Background Image", "Theme2035_b_image");								
					a.addWithPopup( c, "Subtitle", "Theme2035_subtitle");		
					a.addImmediate( c, "Responsive Images", "[responsive][/responsive]" );
					a.addWithPopup( c, "Pop-up Images (Pretty Photo)", "Theme2035_pretty_photo" );
					a.addWithPopup( c, "Space", "Theme2035_space" );
			});
                
                return btn;
			}
			
			return null;
		},
		addWithPopup: function ( ed, title, id ) {
			ed.add({
				title: title,
				onclick: function () {
					tinyMCE.activeEditor.execCommand("zillaPopup", false, {
						title: title,
						identifier: id
					})
				}
			})
		},
		addImmediate: function ( ed, title, sc) {
			ed.add({
				title: title,
				onclick: function () {
					tinyMCE.activeEditor.execCommand( "mceInsertContent", false, sc )
				}
			})
		},
		getInfo: function () {
			return {
				longname: 'Zilla Shortcodes',
				author: 'Orman Clark',
				authorurl: 'http://themeforest.net/user/ormanclark/',
				infourl: 'http://wiki.moxiecode.com/',
				version: "1.0"
			}
		}
	});
	
	// add zillaShortcodes plugin
	tinymce.PluginManager.add("zillaShortcodes", tinymce.plugins.zillaShortcodes);
})();
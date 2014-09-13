<?php 
function Theme2035_custom_style_import() {
global $smof_data;
?>
<style type="text/css">

<?php
if(empty($smof_data['loading_type'])){
    $smof_data['loading_type'] = "loading2";
}
if(empty($smof_data['loading_box_background'])){
    $smof_data['loading_box_background'] = "#FFEB00";
}

        /* Loading */
        if($smof_data['loading_type'] != ""){ 
        echo "
        .block{ font-family:  " . $smof_data['loading1_style']['face'] . ";  font-size: " . $smof_data['loading1_style']['size'] . "; font-weight: ". $smof_data['loading1_style']['style'] ."  } .block div span { background: " . $smof_data['loading_box_background'] . " ; Color : ". $smof_data['loading1_style']['color'] ."; } "; 

        }

        if($smof_data['loading_type'] == "loading1"){ 
        
        $loadingtext = $smof_data['loading_text'];
        $textarray = str_split($loadingtext);
        $arraysize = count($textarray)-1;
        $a=$arraysize;
        $b=1;$c=2;
        for($i=0;$i<=$arraysize;$i++){
        echo ".count-".$a." span:nth-child(".$b.") {top:-8px;}
        ";
        echo ".count-".$a." span:nth-child(".$c.") {top:-3px;}

        ";
        $a--;
        $b++;
        $c++;
        }
        }

        /* Logo */

        if($smof_data['logo_mini'] != ""){ 
                echo "
        li.mainHome,li.mainHome:hover { background: url(".$smof_data['logo_mini'].") !important; height: 67px;   }  ";  } 
            else {  
                echo '

        li.mainHome, li.mainHome:hover { background: url("'.THEMEROOT.'/images/logo.jpg"); height: 67px; }'; }

        /* Footer */

        if($smof_data['footer_background_color'] != "") { 
                echo "

        #footer{ background : ".$smof_data['footer_background_color'] ." !important ; }"; }

        if($smof_data['footer_text_color'] != "") { 
                echo "

        #footer h5{ color : ".$smof_data['footer_text_color'] ." ; }"; }

        /* Body Background */

        if($smof_data['body_background'] != "") { 
                echo "

        body, #team, .emptyl, .emptyr, textarea, .contact input, .contact-tab li.active a{ background : ".$smof_data['body_background'] ." !important ; }"; }

        /* Body Font */

        if($smof_data['font_body'] != "") { 
                echo "

        body, .about-text, .post-materials a, .sidebar-widget a,p{ font-family:  " . $smof_data['font_body']['face'] . ";  font-size: " . $smof_data['font_body']['size'] . "; Color : ". $smof_data['font_body']['color'] ."; font-weight: ". $smof_data['font_body']['style'] ."  }"; }

        /* Second Font */

        if($smof_data['font_body_two'] != "") { 
                echo "

        #half-slider ul li, cite, .title-post a, .sidebar-widget h3, .sidebar-widget .tagcloud a, .projects h2, .project-info-box h3, .portfolio-filters ul li a, .qtext, .qtext p, .qname, .feat-box h4, .tab-but a, .price a, .mob-feat li h3, .cust-name h2, .padcarousel h2, .tweet_user, .com-title h3, .com-info a, .comment-text h3, .leave-a-comment h2, .authorinfo a, .snumber h3, .feat-box h4, .project-info-box h3, .text_slider p{ font-family:  " . $smof_data['font_body_two']['face'] . " !important; }"; }

        /* Title Font */

        if($smof_data['title_font'] != "") { 
                echo "

        .sect-titles{ font-family:  " . $smof_data['title_font']['face'] . "; font-size: " . $smof_data['title_font']['size'] . "; Color : ". $smof_data['title_font']['color'] ."; font-weight: ". $smof_data['title_font']['style'] ."  }"; }

        /* h1, h2, h3, h4, h5, h6 */

        if($smof_data['h1_font'] != "") { 
                echo "

        h1{ font-family:  " . $smof_data['h1_font']['face'] . ";  font-size: " . $smof_data['h1_font']['size'] . "!important; font-weight: ". $smof_data['h1_font']['style'] ."  }"; }

        if($smof_data['h2_font'] != "") { 
                echo "

        h2{ font-family:  " . $smof_data['h2_font']['face'] . ";  font-size: " . $smof_data['h2_font']['size'] . "!important ; font-weight: ". $smof_data['h2_font']['style'] ."  }"; }

        if($smof_data['h3_font'] != "") { 
                echo "

        h3{ font-family:  " . $smof_data['h3_font']['face'] . ";  font-size: " . $smof_data['h3_font']['size'] . "!important ; font-weight: ". $smof_data['h3_font']['style'] ."  }"; }

        if($smof_data['h4_font'] != "") { 
                echo "
        h4{ font-family:  " . $smof_data['h4_font']['face'] . ";  font-size: " . $smof_data['h4_font']['size'] . "!important; font-weight: ". $smof_data['h4_font']['style'] ."  }"; }

        if($smof_data['h5_font'] != "") { 
                echo "

        h5{ font-family:  " . $smof_data['h5_font']['face'] . ";  font-size: " . $smof_data['h5_font']['size'] . "!important ; font-weight: ". $smof_data['h5_font']['style'] ."  }"; }

        if($smof_data['h6_font'] != "") { 
                echo "

        h6{ font-family:  " . $smof_data['h6_font']['face'] . ";  font-size: " . $smof_data['h6_font']['size'] . "!important; font-weight: ". $smof_data['h6_font']['style'] ."  }"; }

        /* Main Color */

        if($smof_data['dominant_color'] != "") { 
                echo "

        .scroll-down i, .color-text, .post-materials i, #menu2 #nav li.current a, #menu2 #nav li a:hover, #footer, .project-info-box a:hover, .team-member-links a:hover,.price-title h2, .cust-name h2 , .cmmnt-crsl-bull a.selected:before, .social-icons li:hover, .team-member-icons li a, .isotope-item h2, .project_link a:hover{ color :". $smof_data['dominant_color'] ." !important; } #half-slider .flex-control-paging li a:hover, .load-more-button a, #half-slider .flex-control-paging li a.flex-active, #mini-slider .flex-control-paging li a:hover, #loading-area, .post-type-icon-box, .more-link a, .post-password-form input[type=password]:focus, .post-password-form input[type=submit], .sidebar-widget .tagcloud a, .searchform input, .portfolio-filters ul li a.active, .portfolio-filters ul li a:hover, #customer-prev, #customer-next, .rm-button, .about-icon, .progress-bar, .cllpse-active, .services-list li .ibox i, .services-list li .ibox, .snumber, .active .tab-but, .price, .mob-feat li, #cprev, #cnext , .social-icons li a , .contact-tab li a, input[type=submit], .comment-form-area input:focus, .comment-submit, .authorinfo , #slider .flex-control-paging li a.flex-active, #slider .flex-control-paging li a:hover, #mini-slider .flex-control-paging li a.flex-active  { background:". $smof_data['dominant_color'] ." !important;  } 
        
        blockquote, q{ border-left: solid 1px ". $smof_data['dominant_color'] ." }
        
        .sidebar-widget h3{ border-bottom: solid 2px ". $smof_data['dominant_color'] ." }"; }

        /* Menu Styles */

        if($smof_data['vertical_style'] != "") { 
                echo "

        #menu,#menu #nav li{ background: ". $smof_data['vertical_style'] ." !important; }"; }

        if($smof_data['vertical_style_hover'] != "") { 
                echo "

        #menu #nav li.current{ background: ". $smof_data['vertical_style_hover'] ." !important; } #menu #nav li{ border-bottom: solid 1px". $smof_data['vertical_style_hover'] ."; } "; }

        if($smof_data['horizantal_dark_back'] != "") { 
                echo "

        #menu-alt-wrapper{ background: rgba(". $smof_data['horizantal_dark_back'] .",0.". $smof_data['horizantal_opacity'] ."); }"; }

        if($smof_data['horizantal_light_style'] != "") { 
                echo "

        #menu-alt-wrapper.menu-white{ background: ". $smof_data['horizantal_light_style'] ."; }"; }                

        if($smof_data['horizantal_light__font_style'] != "") { 
                echo "

        #menu-alt-wrapper.menu-white #nav li a{ font-family:  " . $smof_data['horizantal_light__font_style']['face'] . "; font-size: " . $smof_data['horizantal_light__font_style']['size'] . "!important; font-weight: ". $smof_data['horizantal_light__font_style']['style'] ."; color: ". $smof_data['horizantal_light__font_style']['color'] ." }"; }

        if($smof_data['horizantal_style_font_style'] != "") { 
                echo "

        #menu2 #nav li a{ font-family:  " . $smof_data['horizantal_style_font_style']['face'] . "; font-size: " . $smof_data['horizantal_style_font_style']['size'] . "!important; font-weight: ". $smof_data['horizantal_style_font_style']['style'] ."; color: ". $smof_data['horizantal_style_font_style']['color'] ." }"; }

        if($smof_data['menu_type'] == "menu") { 
                echo "

        .work-list { margin-left: 60px; } "; } 
            else { 
                echo "

        .work-list { margin-left: 0; }

        "; }

        /* Paralax Height */

        if($smof_data['parallax_height'] != "") { 
                echo "

        .parallax-s{ padding: ". $smof_data['parallax_height'] ."px 0;  }"; }


        if(!empty($smof_data['custom_css'])) { 
                echo 
        $smof_data['custom_css']; }

        ?>


</style>

<?php 
}
add_action('wp_head', 'Theme2035_custom_style_import');
?>
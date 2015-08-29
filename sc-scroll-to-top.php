<?php
/*
Plugin Name: SC Scroll To Top
Plugin URI: http://squarecraft.net/plugins/sc-scroll-to-top/
Description: Adds a scroll to top button on your WordPress site to navigate easily from bottom to top of your site .
Author: Square Craft
Version: 1.0
Author URI: http://squarecraft.net/
*/ ?>
<?php
function sc_scroll_tt_main(){
    // load all files needed for this plugin to work .
//    wp_enqueue_script('jquery');
    wp_enqueue_script('sc-scroll-tt-script', plugins_url('/js/jquery.pageup.js', __FILE__), array('jquery'), 1.0);
}
add_action('wp_enqueue_scripts', 'sc_scroll_tt_main');
?>
<?php // Activetion Settings
function sc_scroll_tt_js_active() {?>
<script type="text/javascript">
        (function($){
            $(document).ready(
            function() {
				$("#pageup").pageup({

					// offset to display the scroll to top button
					offset: 700, //100

					// fade animation delay
					fadeDelay: 500,

					// scroll speed
					scrollDuration: 1000 //400

					});
            });
        }) (jQuery);
</script>
<?php
}add_action( 'wp_footer', 'sc_scroll_tt_js_active' );
?>
<?php // Activetion Settings
function sc_scroll_tt_css_active() {?>
<style type="text/css">
	#pageup {
	  position: fixed;
	  right: 20px;
	  bottom: 20px;
	  width: 25px;
	  height: 25px;
	  background-repeat: no-repeat;
	  background-size: 48px 48px;
	  display: none;
	  cursor: pointer;
	  background: #000;
	}
</style>
<?php
}add_action( 'wp_head', 'sc_scroll_tt_css_active' );
?>
<?php // Activetion Settings
function sc_scroll_tt_div() {?>
<div id="pageup"></div>
<?php
}add_action( 'wp_footer', 'sc_scroll_tt_div' );
?>
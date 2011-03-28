<?php
 
/*
 * Plugin Name: Demo Plugin Quicktags Toolbar
 * Author: Dave Doolin
 * Author URI: http://website-in-a-weekend.net/extending-wordpress/diy-wordpress-unraveling-quicktags-wordpress-plugins/
 */
 
function ed_toolbar_init() {
 
?>
<script type="text/javascript">
//<![CDATA[
 
  var ed_toolbar = document.getElementById("ed_toolbar");    
 
  if (ed_toolbar == null)  {
     alert("INIT: ed_toolbar is null");
  }  else {
     alert("INIT: ed_toolbar is NOT null");  
  }
 
    //]]>
</script>
<?php
}
 
function ed_toolbar_demo() {
?>
 
<script type="text/javascript">
    //<![CDATA[
 
   var ed_toolbar = document.getElementById("ed_toolbar");
 
   if (ed_toolbar == null)  {
     alert("DEMO: ed_toolbar is null");
  }  else {
     alert("DEMO: ed_toolbar is NOT null");  
  }
 
    //]]>
</script>
<?php
}
 
add_action('init','ed_toolbar_init');
add_filter('admin_footer', 'ed_toolbar_demo');
 
?>
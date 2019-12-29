<?php 
    /*
    Plugin Name: Update
    Plugin URI: http://www.digitology.co.uk
    Description: Plugin for displaying Update News
    Author: Dinanath Singh
    Version: 1.0
    Author URI: http://www.digitology.co.uk
    */
?>
<?php
function update_admin() {
    include('update_admin.php');
}
function update_admin_actions() {
    add_options_page("Update", "Update", 1, "Update", "update_admin");
}
 
add_action('admin_menu', 'update_admin_actions');
?>
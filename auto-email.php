<?php
/**
 * Plugin Name: Auto Emails
 * Plugin URI: https://github.com/Bikash3/Auto-Email
 * Description: The easiest way to send automated emails to your customer.
 * Version: 1.0
 * Author: Bik
 * Author URI: mailto:bikash.sarkar43@gmail.com
 */


add_action('admin_menu', 'autoEmail');

function autoEmail(){
    $page_title = 'Auto Email';
    $menu_title = 'Auto Email';
    $capability = 'manage_options';
    $menu_slug = 'auto-email';
    $function = 'autoemail_init';
    $icon_url = null;
    $position =  26;
    add_menu_page( $page_title, $menu_title, $capability, 'test-plugin', $function, $icon_url, $position );
    add_submenu_page( 'test-plugin', 'Forms', 'Forms', 'manage_options', 'form-slug', 'autoemail_form_init');
    add_submenu_page( 'test-plugin', 'Lists', 'Lists', 'manage_options', 'list-slug', 'autoemail_list_init');
    add_submenu_page( 'test-plugin', 'Flows', 'Flows', 'manage_options', 'flows-slug', 'autoemail_flows_init');
};
include("includes/function.php");
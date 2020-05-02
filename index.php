<?php
/**
 * Plugin Name: Auto Emails
 * Plugin URI: 
 * Description: The easiest way to send automated emails.
 * Version: 1.0
 * Author: Bik <bikash.sarkar43@gmail.com>
 * Author URI: 
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
    add_submenu_page( 'test-plugin', 'Form', 'Form', 'manage_options', 'form-slug', 'autoemail_list_init');
    add_submenu_page( 'test-plugin', 'Lists', 'Lists', 'manage_options', 'list-slug', 'autoemail_list_init');
    add_submenu_page( 'test-plugin', 'Flows', 'Flows', 'manage_options', 'flows-slug', 'autoemail_flows_init');
};

function autoemail_init(){
    echo "<h1>Test</h1>";
};
function autoemail_form_init(){
    _e("<h1>Lists</h1>");
};
function autoemail_list_init(){
    _e("<h1>Lists</h1>");
};
function autoemail_flows_init(){
    echo "<h1>Flows</h1>";
};
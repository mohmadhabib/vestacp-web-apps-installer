<?php

Vesta::add_header_menu('Web Apps', '/plugin/web-apps/');

if (Vesta::is_plugin_page('web-apps')) {
    Vesta::add_css('/plugin/web-apps/style.css');
}

// Enqueue Ionicons.
add_action( 'wp_enqueue_scripts', 'sp_enqueue_ionicons' );
function sp_enqueue_ionicons() {

	wp_enqueue_style( 'ionicons', '//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css', array(), CHILD_THEME_VERSION );

}

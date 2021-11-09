<?php
if( function_exists('acf_add_options_page') ) {
    acf_add_options_page( array(
        'page_title' 	=> 'Incident Settings',
		'menu_title'	=> 'Incident Settings',
		'menu_slug' 	=> 'incident-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
    ) );
}
?>
<?php
function register_menus()
{
	register_nav_menus(
		array(
			'header-menu' => esc_html__('header-menu', 'firsttheme'),
			'footer-menu' => esc_html__('footer-menu', 'firsttheme'),
		)
	);
}
add_action('init', 'register_menus');
?>
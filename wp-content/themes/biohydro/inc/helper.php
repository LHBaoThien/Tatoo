<?php

/**
 * Global option page
 */
if ( function_exists( 'acf_add_options_page' ) ) {

	acf_add_options_page( array(
		'page_title' => 'Global Setting',
		'menu_title' => 'Global Setting',
		'menu_slug'  => 'global-settings',
		'capability' => 'edit_posts',
		'redirect'   => false,
		'icon_url'   => 'dashicons-admin-generic',
		'position'   => '50'
	) );

}

if ( ! function_exists( 'bon_theme_setup' ) ) {
	function bon_theme_setup() {
		/**
		 * Add theme support
		 */
		add_theme_support( 'menus' );
		add_theme_support( 'widgets' );
		add_theme_support( 'sidebars' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'customize-selective-refresh-widgets' );

		// This theme uses wp_nav_menu() in two locations.
		register_nav_menus( array(
			'primary' => __( 'Primary Menu', 'bonvillian' ),
			'footer'  => __( 'Footer Menu', 'bonvillian' )
		) );
	}
}
add_action( 'after_setup_theme', 'bon_theme_setup' );

if(!function_exists('bon_get_header_logos')){
	function bon_get_header_logos(){
		$group_logo = get_field('group_logo','option');
		$group_logo_url = get_field('group_logo_url','option');
		$logo_image = get_field('logo_image','option');
		$logo_url = get_field('logo_url','option');
		$group_target = @$group_logo_url['target'] == '_blank' ? 'target="_blank" rel="noreferrer noopener" ' : '';
		$main_target = @$logo_url['target'] == '_blank' ? 'target="_blank" rel="noreferrer noopener" ' : '';
		$group = sprintf('<a href="%s" %s class="d-none d-md-inline-block">
			<img src="%s" alt="%s">
		</a>', @$group_logo_url['url'], $group_target, $group_logo['url'], $group_logo['alt']);

		$main = sprintf('<a href="%s" %s>
			<img class="main-logo" src="%s" alt="%s">
		</a>', @$logo_url['url'], $main_target, $logo_image['url'], $logo_image['alt']);
		
		return $group . $main;

	}
}

if(!function_exists('bon_get_main_menu')){
	function bon_get_main_menu(){
		$menu = wp_nav_menu( array(
			'theme_location' => 'primary',
			'menu_class'     => 'navigation clearfix',
			'container'      => false,
			'depth'          => 1,
			'echo' => false
		));
		return $menu;
	}
}


if(!function_exists('bon_get_footer_menu')){
	function bon_get_footer_menu(){
		$menu = wp_nav_menu( array(
			'theme_location' => 'footer',
			'menu_class'     => 'usefull-links left',
			'container'      => false,
			'depth'          => 1,
			'echo' => false
		));
		return $menu;
	}
}

if(!function_exists('bon_cf7_form_class')){
	function bon_cf7_form_class( $class ) {
		$class .= ' form ';
		return $class;
	  }
	add_filter( 'wpcf7_form_class_attr', 'bon_cf7_form_class' );
}

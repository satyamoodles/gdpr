<?php

if( !function_exists('oxides_edge_search_body_class') ) {
	/**
	 * Function that adds body classes for different search types
	 *
	 * @param $classes array original array of body classes
	 *
	 * @return array modified array of classes
	 */
	function oxides_edge_search_body_class($classes) {

		if ( is_active_widget( false, false, 'edgt_search_opener' ) ) {

			$classes[] = 'edgtf-' . oxides_edge_options()->getOptionValue('search_type');

			if ( oxides_edge_options()->getOptionValue('search_type') == 'fullscreen-search' ) {

				$classes[] = 'edgtf-' . oxides_edge_options()->getOptionValue('search_animation');

			}

		}
		return $classes;

	}

	add_filter('body_class', 'oxides_edge_search_body_class');
}

if ( ! function_exists('oxides_edge_get_search') ) {
	/**
	 * Loads search HTML based on search type option.
	 */
	function oxides_edge_get_search() {

		if ( oxides_edge_active_widget( false, false, 'edgt_search_opener' ) ) {

			$search_type = oxides_edge_options()->getOptionValue('search_type');

			if ($search_type == 'search-covers-header') {
				oxides_edge_set_position_for_covering_search();
				return;
			} else if ($search_type == 'search-slides-from-window-top' || $search_type == 'search-slides-from-header-bottom') {
				oxides_edge_set_search_position_in_menu( $search_type );
				if ( oxides_edge_is_responsive_on() ) {
					oxides_edge_set_search_position_mobile();
				}
				return;
			}

			oxides_edge_load_search_template();

		}
	}

}

if ( ! function_exists('oxides_edge_set_position_for_covering_search') ) {
	/**
	 * Finds part of header where search template will be loaded
	 */
	function oxides_edge_set_position_for_covering_search() {

		$containing_sidebar = oxides_edge_active_widget( false, false, 'edgt_search_opener' );

		foreach ($containing_sidebar as $sidebar) {

			if ( strpos( $sidebar, 'top-bar' ) !== false ) {
				add_action( 'oxides_edge_after_header_top_html_open', 'oxides_edge_load_search_template');
			} else if ( strpos( $sidebar, 'main-menu' ) !== false ) {
				add_action( 'oxides_edge_after_header_menu_area_html_open', 'oxides_edge_load_search_template');
			} else if ( strpos( $sidebar, 'mobile-logo' ) !== false ) {
				add_action( 'oxides_edge_after_mobile_header_html_open', 'oxides_edge_load_search_template');
			} else if ( strpos( $sidebar, 'logo' ) !== false ) {
				add_action( 'oxides_edge_after_header_logo_area_html_open', 'oxides_edge_load_search_template');
			} else if ( strpos( $sidebar, 'sticky' ) !== false ) {
				add_action( 'oxides_edge_after_sticky_menu_html_open', 'oxides_edge_load_search_template');
			}

		}

	}

}

if ( ! function_exists('oxides_edge_set_search_position_in_menu') ) {
	/**
	 * Finds part of header where search template will be loaded
	 */
	function oxides_edge_set_search_position_in_menu( $type ) {

		add_action( 'oxides_edge_after_header_menu_area_html_open', 'oxides_edge_load_search_template');
		if ( $type == 'search-slides-from-header-bottom' ) {
			add_action( 'oxides_edge_after_sticky_menu_html_open', 'oxides_edge_load_search_template');
		}

	}
}

if ( ! function_exists('oxides_edge_set_search_position_mobile') ) {
	/**
	 * Hooks search template to mobile header
	 */
	function oxides_edge_set_search_position_mobile() {

		add_action( 'oxides_edge_after_mobile_header_html_open', 'oxides_edge_load_search_template');

	}

}

if ( ! function_exists('oxides_edge_load_search_template') ) {
	/**
	 * Loads HTML template with parameters
	 */
	function oxides_edge_load_search_template() {
		global $oxides_edgeIconCollections;

		$search_type = oxides_edge_options()->getOptionValue('search_type');

		$search_icon = '';
		$search_icon_close = '';
		if ( oxides_edge_options()->getOptionValue('search_icon_pack') !== '' ) {
			$search_icon = $oxides_edgeIconCollections->getSearchIcon( oxides_edge_options()->getOptionValue('search_icon_pack'), true );
			$search_icon_close = $oxides_edgeIconCollections->getSearchClose( oxides_edge_options()->getOptionValue('search_icon_pack'), true );
		}

		$parameters = array(
			'search_in_grid'		=> oxides_edge_options()->getOptionValue('search_in_grid') == 'yes' ? true : false,
			'search_icon'			=> $search_icon,
			'search_icon_close'		=> $search_icon_close
		);

		oxides_edge_get_module_template_part( 'templates/types/'.$search_type, 'search', '', $parameters );

	}

}
<?php
class Tribe_Events_Category_Colors_Extras extends Tribe_Events_Category_Colors_Public {

	public static function add_agenda_link_css( $slug ) {
		if ( ! class_exists( 'TribeAgenda' ) ) return;
		$css = array();
		$css[] = '.tribe-events-category-' . $slug . ' > .agenda-event-heading a:link,';
		$css[] = '.tribe-events-category-' . $slug . ' > .agenda-event-heading a:visited,';
		$css[] = '';
		$css = implode( "\n", $css );
		echo $css;
	}

	public static function add_agenda_background_css( $slug ) {
		if ( ! class_exists( 'TribeAgenda' ) ) return;
		$css = array();
		$css[] = '.tribe-events-category-' . $slug . ' > .agenda-event-heading,';
		$css[] = '.tribe-events-category-' . $slug . ' > .agenda-event-heading:hover,';
		$css[] = '';
		$css = implode( "\n", $css );
		echo $css;
	}

	public static function add_agenda_display_css( $slug ) {
		if ( ! class_exists( 'TribeAgenda' ) ) return;
		$css = array();
		$css[] = '.tribe-events-category-' .  $slug . ' > .agenda-event-heading,';
		$css[] = '';
		$css = implode( "\n", $css );
		echo $css;
	}

	public static function add_map_link_css( $slug ) {
		if ( ! class_exists( 'TribeEventsPro' ) ) return;
		$css = array();
		$css[] = '.tribe-events-category-' . $slug . ' > .tribe-events-map-event-title a:link,';
		$css[] = '.tribe-events-category-' . $slug . ' > .tribe-events-map-event-title a:visited,';
		$css[] = '';
		$css = implode( "\n", $css );
		echo $css;
	}
	
	public static function add_map_background_css( $slug ) {
		if ( ! class_exists( 'TribeEventsPro' ) ) return;
		$css = array();
		$css[] = '.tribe-events-category-' . $slug . ' > .tribe-events-map-event-title,';
		$css[] = '.tribe-events-category-' . $slug . ' > .tribe-events-map-event-title:hover,';
		$css[] = '';
		$css = implode( "\n", $css );
		echo $css;
	}

	public static function add_map_display_css( $slug ) {
		if ( ! class_exists( 'TribeEventsPro' ) ) return;
		$css = array();
		$css[] = '.tribe-events-category-' . $slug . ' > .tribe-events-map-event-title,';
		$css[] = '';
		$css = implode( "\n", $css );
		echo $css;
	}

}
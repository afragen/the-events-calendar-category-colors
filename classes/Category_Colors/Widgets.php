<?php
class Tribe__Events__Category_Colors__Widgets extends Tribe__Events__Category_Colors__Public {

	public static function add_widget_link_css( $slug ) {
		$css = array();
		if ( class_exists( 'Tribe__Events__Pro__Events_Pro' ) ) {
			$css[] = '.tribe-events-adv-list-widget li.tribe-events-category-' . $slug . ' h2 a:link,';
			$css[] = '.tribe-events-adv-list-widget li.tribe-events-category-' . $slug . ' h2 a:visited,';
			$css[] = '.tribe-mini-calendar-list-wrapper .tribe-events-category-' . $slug . ' h2 a:link,';
			$css[] = '.tribe-mini-calendar-list-wrapper .tribe-events-category-' . $slug . ' h2 a:visited,';
			$css[] = '.tribe-venue-widget-list li.tribe-events-category-' . $slug . ' a:link,';
			$css[] = '.tribe-venue-widget-list li.tribe-events-category-' . $slug . ' a:visited,';
		} else {
			$css[] = '.tribe-events-list-widget li.tribe-events-category-' . $slug . ' a:link,';
			$css[] = '.tribe-events-list-widget li.tribe-events-category-' . $slug . ' a:visited,';
		}
		$css[] = '';
		$css   = implode( "\n", $css );
		echo $css;
	}

	public static function add_widget_background_css( $slug ) {
		$css = array();
		if ( class_exists( 'Tribe__Events__Pro__Events_Pro' ) ) {
			$css[] = '.tribe-events-adv-list-widget .tribe-events-category-' . $slug . ' h2 a:link,';
			$css[] = '.tribe-events-adv-list-widget .tribe-events-category-' . $slug . ' h2 a:visited,';
			$css[] = '.tribe-mini-calendar-list-wrapper .tribe-events-category-' . $slug . ' h2 a:link,';
			$css[] = '.tribe-mini-calendar-list-wrapper .tribe-events-category-' . $slug . ' h2 a:visited,';
			$css[] = '.tribe-venue-widget-list li.tribe-events-category-' . $slug . ' a:link,';
			$css[] = '.tribe-venue-widget-list li.tribe-events-category-' . $slug . ' a:visited,';
			$css[] = '.tribe-mini-calendar td.tribe-events-has-events.tribe-events-category-' . $slug . ',';
		} else {
			$css[] = '.tribe-events-list-widget li.tribe-events-category-' . $slug . ' a:link,';
			$css[] = '.tribe-events-list-widget li.tribe-events-category-' . $slug . ' a:visited,';
		}
		$css[] = '';
		$css   = implode( "\n", $css );
		echo $css;
	}

	public static function add_widget_display_css( $slug ) {
		$css = array();
		if ( class_exists( 'Tribe__Events__Pro__Events_Pro' ) ) {
			$css[] = '.tribe-events-adv-list-widget .tribe-events-category-' . $slug . ' h2 a:link,';
			$css[] = '.tribe-mini-calendar-list-wrapper .tribe-events-category-' . $slug . ' h2 a:link,';
			$css[] = '.tribe-venue-widget-list li.tribe-events-category-' . $slug . ' a:link,';
		} else {
			$css[] = '.tribe-events-list-widget li.tribe-events-category-' . $slug . ' a:link,';
		}
		$css[] = '';
		$css   = implode( "\n", $css );
		echo $css;
	}

}
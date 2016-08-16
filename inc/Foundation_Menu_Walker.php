<?php
/**
 * uf Base Theme Menu Walker.
 *
 * @package uf_Base
 */

class Foundation_Menu_Walker extends Walker_Nav_Menu {
	// Add vertical menu class and submenu data attribute to sub menus
	function start_lvl( &$output, $depth = 0, $args = array() ) {
		$indent = str_repeat("\t", $depth);
		$output .= "\n$indent<ul class=\"vertical menu\" data-submenu>\n";
	}
}

//Optional fallback
function foundation_menu_fallback($args) {
	/*
	 * Instantiate new Page Walker class instead of applying a filter to the
	 * "wp_page_menu" function in the event there are multiple active menus in theme.
	 */
	 
	$walker_page = new Walker_Page();
	$fallback = $walker_page->walk(get_pages(), 0);
	$fallback = str_replace("<ul class='children'>", '<ul class="children submenu menu vertical" data-submenu>', $fallback);
	
	echo '<ul class="dropdown menu data-dropdown-menu">'.$fallback.'</ul>';
}

?>
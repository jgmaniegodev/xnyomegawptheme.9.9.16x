<?php

class MyExtendedMenuWalker extends Walker_Nav_Menu {

	private $counter = 0;

    /**
     * Starting an element
     * If this is not the first, add separator here
     */
    function start_el(&$output, $item, $depth, $args) {

        if($this->counter && isset($args->ex_separator))
        	$output .= $args->ex_separator;
        parent::start_el($output, $item, $depth, $args);
		$this->counter ++;
    }
}
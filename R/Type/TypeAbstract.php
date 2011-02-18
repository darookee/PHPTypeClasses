<?php

namespace R\Type;

/**
 * 
 */
abstract class TypeAbstract {
	
	abstract public function count();
	abstract public function set( $value );
	abstract public function get();
	abstract public function __toString();
	
}
?>

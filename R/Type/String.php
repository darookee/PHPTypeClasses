<?php

namespace R\Type;

use R\Type\TypeAbstract as Type,
	R\Type\Exception as Exception;

/**
 * 
 */

class String extends Type {
	
	protected $_value = "";

	public function __construct( $value ) {
		$this->set( $value );
	}

	public function count() {
		return strlen( $this->get() );
	}

	public function set( $value ) {
		$this->_value = (string)$value;
		return $this;
	}

	public function get() {
		return $this->_value;
	}

	public function __toString() {
		return $this->get();
	}

	public function __toInt() {
		$integer = new Integer( $this->get() );
		return $integer->get();;
	}

	public function __toFloat() {
		$float = new Float( $this->get() );
		return $float->get();
	}

	public function append( $value ) {
		return $this->concat( $value );
	}

	public function concat( $value ) {
		if( $value instanceof String )
			$this->set( $this->get() . $value->get() );
		else
			$this->set( $this->get() . (string)$value );
		return $this;
	}

	public function prepend( $value ) {
		if( $value instanceof String )
			$this->set( $value->get() . $this->get() );
		else
			$this->set( (string)$value . $this->get() );
		return $this;
	}
}
?>

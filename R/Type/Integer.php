<?php

namespace R\Type;

use R\Type\TypeAbstract as Type,
	R\Type\Exception as Exception;

/**
 * 
 */

class Integer extends Type {
	
	protected $_value = 0;

	public function __construct( $value ) {
		$this->set( $value );
	}

	public function count() {
		return $this->get();
	}

	public function set( $value ) {
		if( !is_numeric( $value ) )
			throw new Exception( 'Not numeric' );

		$this->_value = (integer)$value;
		return $this;
	}

	public function get() {
		return $this->_value;
	}

	public function __toString() {
		$string = new String( $this->get() );
		return $string->get();
	}

	public function __toInt() {
		return $this->get();
	}

	public function __toFloat() {
		return (float)$this->get();
	}

	public function add( $value ) {

		$this->set( $this->get() + $this->extractValue( $value ) );
		return $this;
	}

	public function substract( $value ) {

		$this->set( $this->get() - $this->extractValue( $value ) );
		return $this;
	}

	public function divide( $value ) {
		
		$value = $this->extractValue( $value );

		if( $value == 0 )
			throw new Exception( 'Cannot divide by zero' );
		
		$this->set( $this->get() / $value );
		return $this;
	}

	public function multiply( $value ) {
		
		$this->set( $this->get() * $this->extractValue( $value ) );
		return $this;
	}

	protected function extractValue( $value ) {
		if( $value instanceof Integer OR $value instanceof Float )
			return $value->__toInt();
		else
			return (integer)$value;
	}

}
?>

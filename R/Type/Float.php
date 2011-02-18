<?php

namespace R\Type;

use R\Type\TypeAbstract as Type,
	R\Type\Exception as Exception;

/**
 * 
 */

class Float extends Type {
	
	protected $_value = 0.0;

	public function __construct( $value ) {
		$this->set( $value );
	}

	public function count() {
		return $this->get();
	}

	public function set( $value ) {

		if( !is_numeric( $value ) )
			throw new Exception( 'Not numeric' );

		$this->_value = (float)$value;
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
		return (integer)$this->get();
	}

	public function __toFloat() {
		return $this->get();
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

		if( $value === 0 )
			throw new Exception( 'Division by zero' );

		$this->set( $this->get() / $value );
		return $this;
	}

	public function multiply( $value ) {
		
		$this->set( $this->get() * $this->extractValue( $value ) );
		return $this;
	}

	protected function extractValue( $value ) {
		if( $value instanceof Float OR $value instanceof Integer )
			return $value->__toFloat();
		else
			return (float)$value;
	}

}
?>

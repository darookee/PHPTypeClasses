<?php

/**
 * 
 */
class TestString extends \PHPUnit_Framework_TestCase {
	
	public function testStringEmpty() {
		$string = new \R\Type\String( '' );
		$this->assertEquals( '', $string->get() );
		return $string;
	}

	public function testStringPrepend() {
		$string = new \R\Type\String( 'text' );
		$string->prepend( 'Test' );
		$this->assertEquals( 'Testtext', $string->get() );
		return $string;
	}

	public function testStringAppend() {
		$string = new \R\Type\String( 'Test' );
		$string->append( 'text' );
		$this->assertStringEndsWith( 'text', $string->get() );
		return $string;
	}

	public function testStringLength() {
		$string = new \R\Type\String( 'Test' );
		$this->assertEquals( 4, $string->count() );
		return $string;
	}

	public function testStringConvert() {
		$string = new \R\Type\String( 'Test' );
		ob_start();
		echo $string;
		$value = ob_get_contents();
		ob_end_clean();
		$this->assertEquals( 'Test', $value );
		$stringToInt = new \R\Type\String( '5' );
		$integer = $stringToInt->__toInt();
		$this->assertEquals( 5, $integer );
		$stringToFloat = new \R\Type\String( '5.5' );
		$float = $stringToFloat->__toFloat();
		$this->assertEquals( 5.5, $float );
	}
}

?>

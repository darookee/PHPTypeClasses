<?php

/**
 * 
 */
class TestInteger extends \PHPUnit_Framework_TestCase {

	public function testIntEmpty() {
		$integer = new \R\Type\Integer( 0 );
		$this->assertEquals( 0, $integer->get() );
		return $integer;
	}

	public function testIntAddition() {
		$integer = new \R\Type\Integer( 1 );
		$integer->add( 2 );
		$this->assertEquals( (1+2), $integer->get() );
		return $integer;
	}

	public function testIntegerDivision() {
		$integer = new \R\Type\Integer( 5 );
		$integer->divide( 2 );
		$this->assertEquals( (integer)(5/2), $integer->get() );
		return $integer;
	}

	public function testIntegerSubstraction() {
		$integer = new \R\Type\Integer( 2 );
		$integer->substract( 4 );
		$this->assertEquals( (2-4), $integer->get() );
		return $integer;
	}

	public function testIntegerMultiplication() {
		$integer = new \R\Type\Integer( 2 );
		$integer->multiply( 2 );
		$this->assertEquals( (2*2), $integer->get() );
		return $integer;
	}

	public function testIntegerConvert() {
		$integer = new \R\Type\Integer( 2 );
		$float = $integer->__toFloat();
		ob_start();
		echo $integer;
		$value = ob_get_contents();
		ob_end_clean();
		$integer = $integer->__toInt();
		$this->assertEquals( 2, $integer );
		$this->assertEquals( '2', $value );
		$this->assertEquals( 2, $float );
	}

	public function testCount() {
		$integer = new \R\Type\Integer( 2 );
		$this->assertEquals( 2, $integer->count() );
	}

	public function testStringSetter() {
		$this->setExpectedException( '\R\Type\Exception' );
		$integer = new \R\Type\Integer( 'Test' );
	}

	public function testDivisionByZero() {
		$integer = new \R\Type\Integer( 1 );
		$this->setExpectedException( '\R\Type\Exception' );
		$integer->divide( 0 );
	}
}

?>

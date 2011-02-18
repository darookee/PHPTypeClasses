<?php

/**
 * 
 */
class TestFloat extends \PHPUnit_Framework_TestCase {

	public function testFloatEmpty() {
		$float = new \R\Type\Float( 0.0 );
		$this->assertEquals( 0.0, $float->get() );
		return $float;
	}

	public function testFloatAddition() {
		$float = new \R\Type\Float( 1.1 );
		$float->add( 2.1 );
		$this->assertEquals( (1.1+2.1), $float->get() );
		return $float;
	}

	public function testFloatDivision() {
		$float = new \R\Type\Float( 5.2 );
		$float->divide( 2.2 );
		$this->assertEquals( (5.2/2.2), $float->get() );
		return $float;
	}

	public function testFloatSubstraction() {
		$float = new \R\Type\Float( 2.5 );
		$float->substract( 0.4 );
		$this->assertEquals( (2.5-0.4), $float->get() );
		return $float;
	}

	public function testFloatMultiplication() {
		$float = new \R\Type\Float( 2.5 );
		$float->multiply( 2.1 );
		$this->assertEquals( (2.5*2.1), $float->get() );
		return $float;
	}

	public function testFloatConvert() {
		$float = new \R\Type\Float( 2.5 );
		$integer = $float->__toInt();
		ob_start();
		echo $float;
		$value = ob_get_contents();
		ob_end_clean();
		$float = $float->__toFloat();
		$this->assertEquals( 2, $integer );
		$this->assertEquals( '2.5', $value );
		$this->assertEquals( 2.5, $float );
	}

	public function testCount() {
		$float = new \R\Type\Float( 2.5 );
		$this->assertEquals( 2.5, $float->count() );
	}

	public function testStringSetter() {
		$this->setExpectedException( '\R\Type\Exception' );
		$integer = new \R\Type\Float( 'Test' );
	}

	//public function testDivisionByZero() {
		//$integer = new \R\Type\Float( 1.4 );
		//$this->setExpectedException( '\R\Type\Exception' );
		//$integer->divide( 0 );
	//}
}

?>

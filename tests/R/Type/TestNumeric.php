<?php

/**
 * 
 */
class TestNumeric extends \PHPUnit_Framework_TestCase {

	public function setUp() {
		$this->integer = new \R\Type\Integer( 9 );
		$this->float = new \R\Type\Float( 4.4 );
	}

	public function testDivideFloatByInt() {
		//$integer = new \R\Type\Integer( 9 );
		//$float = new \R\Type\Float( 123.4 );
		$this->float->divide( $this->integer );
		$this->assertEquals( (4.4/9), $this->float->get() );
	}

	public function testDivideIntByFloat() {
		$this->integer->divide( $this->float );
		$this->assertEquals( 2, $this->integer->get() );
	}

	public function testMultiplyFloatByInt() {
		$this->float->multiply( $this->integer );
		$this->assertEquals( 39.6, $this->float->get() );
	}

	public function testMultiplyIntByFloat() {
		$this->integer->multiply( $this->float );
		$this->assertEquals( 36, $this->integer->get() );
	}

	public function testAddIntToFloat() {
		$this->float->add( $this->integer );
		$this->assertEquals( 13.4, $this->float->get() );
	}

	public function testAddFloatToInt() {
		$this->integer->add( $this->float );
		$this->assertEquals( 13, $this->integer->get() );
	}

	public function testSubstractIntFromFloat() {
		$this->float->substract( $this->integer );
		$this->assertEquals( -4.6, $this->float->get() );
	}

	public function testSubstractFloatFromInt() {
		$this->integer->substract( $this->float );
		$this->assertEquals( 5, $this->integer->get() );
	}
}

?>

<?php 

class CalculatorTest extends PHPUnit_Framework_TestCase
{
	
	public function testSumPositiveNumber()
	{
		$this->assertEquals(11,Calculator::Sum(5,6));
	}
	public function testSumNegativeAndPositiveNumber()
	{
		$this->assertEquals(1,Calculator::Sum(-1,2));
	}
}
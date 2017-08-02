<?php 

class CalculatorTest extends PHPUnit_Framework_TestCase
{
	
	public function SumPositiveNumber()
	{
		$this->assertEquals(11,Calculator::Sum(5,6));
	}
	public function SumNegativeAndPositiveNumber()
	{
		$this->assertEquals(1,Calculator::Sum(-1,2));
	}
}
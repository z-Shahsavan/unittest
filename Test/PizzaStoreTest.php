<?php
namespace phpUnitTutorial\Test;

use phpUnitTutorial\PizzaStore;

class PizzaStoreTest extends \PHPUnit_Framework_TestCase 
{
	/**
     * @param int $pizzaType number to define type of pizza
     * @param int $arrayIdx index of the pizza array info
     *
     * @dataProvider providerTestOrderPizzaArgs
	 * @covers PizzaStore::orderPizza
     */
	public function testOrderPizzaEquals($pizzaType,$arrayIdx,$expectedString)
	{
		$p=PizzaStore::orderPizza($pizzaType);
		$this->assertEquals($expectedString,$p[$arrayIdx]);
	}
	public function providerTestOrderPizzaArgs()
    {
        return array(
            array('0','0', 'Chesse pizza is prepared'),
            array('0','1', 'Chesse pizza is baked'),
			array('0','2', 'Chesse pizza is cutted'),
            array('0','3', 'Chesse pizza is boxed'),
			
			array('1','0', 'Pepperoni pizza is prepared'),
            array('1','1', 'Pepperoni pizza is baked'),
			array('1','2', 'Pepperoni pizza is cutted'),
            array('1','3', 'Pepperoni pizza is boxed'),
			
			array('2','0', 'Calm pizza is prepared'),
            array('2','1', 'Calm pizza is baked'),
			array('2','2', 'Calm pizza is cutted'),
            array('2','3', 'Calm pizza is boxed'),
			
			array('3','0', 'Greek pizza is prepared'),
            array('3','1', 'Greek pizza is baked'),
			array('3','2', 'Greek pizza is cutted'),
            array('3','3', 'Greek pizza is boxed'),
			
			array('4','0', ''),
            array('4','1', ''),
			array('4','2', ''),
            array('4','3', ''),
        );
    }
}
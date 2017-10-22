<?php
namespace phpUnitTutorial\Test;

use phpUnitTutorial\DuckEmolator;

class Ducks0Test extends \PHPUnit_Framework_TestCase
{
	/**
     * @param int $dockArrayIdx number which define duck type
     * @param string $dockInfoString String which is duck info
     *
     * @dataProvider providerTestHomeArgs
	 * @covers DuckEmolator::home
     */
	public function testHomeEquals($dockArrayIdx,$dockInfoString){
		
		$dkarray=DuckEmolator::home();
		$this->assertEquals($dockInfoString,$dkarray[$dockArrayIdx]);
	}
	public function providerTestHomeArgs()
    {
        return array(
            array('0', 'Mallard_Duck says: Quack! Quack! And is flying.'),
            array('1', "Decoy_Duck is always silent! And can't fly!"),
			array('2', "Rubber_Duck says: Squeak! And can't fly!"),
			array('3', 'Red_Head_Duck says: Quack! Quack! And is flying.'),
        );
    }
}
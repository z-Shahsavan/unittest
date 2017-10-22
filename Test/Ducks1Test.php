<?php
namespace phpUnitTutorial\Test;

use phpUnitTutorial\Ducks1;

class Ducks1Test extends \PHPUnit_Framework_TestCase{
	
/**
     * @param int $dockArrayIdx number which define duck type
     * @param string $dockInfoString String which is duck info
     *
     * @dataProvider providerTestDuckEmolatorArgs
	 * @covers Ducks1::duckEmolator
     */
	public function testDuckEmolatorEquals($dockArrayIdx,$dockInfoString){
		$dkarray=Ducks1::duckEmolator();
		$this->assertEquals($dockInfoString,$dkarray[$dockArrayIdx]);
	}
	public function providerTestDuckEmolatorArgs()
    {
        return array(
            array('0', 'Mallard_Duck says: Quack! Quack! And is flying'),
            array('1', "Decoy_Duck is always silent! And can't fly!"),
			array('2', "Rubber_Duck says: Squeak! And can't fly!"),
			array('3', 'Red_head_Duck says: Quack! Quack! And is flying'),
        );
    }
	
}
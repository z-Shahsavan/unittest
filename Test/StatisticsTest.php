<?php
namespace phpUnitTutorial\Test;

use phpUnitTutorial\Statistics;

class StatisticsTest extends \PHPUnit_Framework_TestCase
{
	/**
     * @param string $candidate String to be candidate of the sentence
     * @param int $count the number of candidates
     *
     * @dataProvider providerTestPrintGuessStatisticsArgs
	 * @covers Statistics::printGuessStatistics
     */
	public function testPrintGuessStatisticsEquals($candidate,$count,$sentence){
		$statObj=new Statistics();
		$result=$statObj->printGuessStatistics($candidate,$count);
		$this->assertEquals($sentence,$result['result']);
	}
	
	public function providerTestPrintGuessStatisticsArgs()
    {
        return array(
            array('bird','1', 'There is 1 bird'),
            array('bird','2', 'There are 2 birds'),
			array('tiger','0', 'There are no tigers'),
            array('tiger', '', 'There are no tigers'),
        );
    }
}
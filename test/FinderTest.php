<?php namespace SimilarText\Test;

use \SimilarText\Finder;

/**
 * Class FinderTest
 * @package SimilarText\Test
 */
class FinderTest extends \PHPUnit_Framework_TestCase
{
    public function testOk() {
        $this->assertTrue(true);
    }

    public function testEssai(){

    	$a = new Finder('bananna', ['apple', 'banana', 'kiwi']);

		// Get first similar word (it's banana)
		// echo $a->first();

		$this->assertEquals( "bananna", $a->first() );
    }

}

<?php
require_once 'PHPUnit/Autoload.php';
require_once '../vendor/autoload.php';

use elements\Variable;

class variableTest extends \PHPUnit_Framework_TestCase
{
	/**
	 * 
	 * @var Variable
	 */
	private $variable = null;
	
	/**
	 *  Set object
	 */
	public function setUp()
	{
		$this->variable = new Variable();
	}

	/**
	 * Burada {{ var1 }} olarak verilen
	 * ifadeyi var1'e dönüþtürmesi gerekiyor.
	 * {{ var1 }} => var1
	 * @author Turker Senturk
	 * @test Variable->process();
	 */
	public function processTest()
	{
		$expected = "var1";
		$var1ParamArray = array(
				"{{ var1 }}",
				"{{var1}}",
				"{{ var1}}",
				"{{var1 }}"
				);
		foreach ($var1ParamArray as $var1Param)
		{
			$actual = $this->variable->process($var1Param);
			$this->assertEquals($expected,$actual);
		}
		 
	}
	
	
}
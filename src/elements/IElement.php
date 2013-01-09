<?php
namespace elements;
require_once __DIR__."/../vendor/autoload.php";

/**
 * 
 * @author turker
 *
 */
interface IElement
{
	/**
	 * 
	 * @param string $syntax
	 */
	public function setSyntax($syntax);
	
	/**
	 * 
	 */
	public function getSyntax();
}
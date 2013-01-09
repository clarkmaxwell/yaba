<?php
namespace elements;
use elements\IElement;

class Variable implements IElement
{
	/**
	 * Herhangi bir variable i�in �rnek olarak
	 *  {{ var }} �eklinde tan�mlan�r.
	 * @var string
	 */
	protected $_syntax = "/(^\{{2})\s*(\w+)\s*(\}{2}$)/";
	
	/**
	 * 
	 * @param string $variableToParse
	 */
	
	function __construct($variableToParse)
	{
		$this->setSyntax($this->_syntax);
		return "$".$this->process($variableToParse);
	}
	
	/**
	 * (non-PHPdoc)
	 * @see \src\IElement::setSyntax()
	 */
	public function setSyntax($syntax)
	{
		$this->_syntax = (string) $syntax;
	}
	
	/**
	 * (non-PHPdoc)
	 * @see \src\IElement::getSyntax()
	 */
	public function getSyntax()
	{
		return $this->_syntax;
	}
	
	/**
	 * Bu fonksiyon parametre olarak ald��� 
	 * parse edilecek de�i�keni objenin syntax'�na g�re 
	 * i�lemden ge�irir.Preg_replace edip g�nderir.
	 * @param string $variableToParse
	 */
	private function process($variableToParse)
	{
		return preg_replace($this->_syntax, "$2", $variableToParse);
	}
	
}
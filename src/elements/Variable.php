<?php
namespace elements;
use elements\IElement;

class Variable implements IElement
{
	/**
	 * Herhangi bir variable için örnek olarak
	 *  {{ var }} þeklinde tanýmlanýr.
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
	 * Bu fonksiyon parametre olarak aldýðý 
	 * parse edilecek deðiþkeni objenin syntax'ýna göre 
	 * iþlemden geçirir.Preg_replace edip gönderir.
	 * @param string $variableToParse
	 */
	private function process($variableToParse)
	{
		return preg_replace($this->_syntax, "$2", $variableToParse);
	}
	
}
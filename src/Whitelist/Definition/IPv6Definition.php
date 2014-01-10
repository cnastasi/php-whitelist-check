<?php

namespace Whitelist\Definition;

/**
 * Base class for IPv6 definitions. It provides an instance of PEAR's Net_IPv6 
 * to subclasses.
 *
 * @author Sam Stenvall <neggelandia@gmail.com>
 * @copyright Copyright &copy; Sam Stenvall 2014-
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 */
abstract class IPv6Definition extends Definition
{

	/**
	 * @var \Net_IPv6 IPv6 address helper
	 */
	protected $_addressHelper;

	public function __construct($definition)
	{
		$this->_addressHelper = new \Net_IPv6();

		parent::__construct($definition);
	}

}
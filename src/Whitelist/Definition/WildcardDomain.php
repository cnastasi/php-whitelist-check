<?php

namespace Whitelist\Definition;

/**
 * Represents a wildcard domain definition
 *
 * @author Sam Stenvall <neggelandia@gmail.com>
 */
class WildcardDomain extends Definition
{

	public function validate()
	{
		return true;
	}

	public function match($value)
	{
		// Remove the wildcard part and check if it matches the end of $value
		$domain = substr($this->_definition, 2);

		return substr($value, -strlen($domain)) === $domain;
	}

}
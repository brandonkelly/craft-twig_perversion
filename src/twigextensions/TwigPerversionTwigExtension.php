<?php
/**
 * Twig Perversion plugin for Craft CMS 3.x
 *
 * Making twig do things it really shouldn&#39;t
 *
 * @link      http://marion.newlevant.com
 * @copyright Copyright (c) 2017 Marion Newlevant
 */

namespace marionnewlevant\twigperversion\twigextensions;

use marionnewlevant\twigperversion\twigextensions\Break_TokenParser;
use marionnewlevant\twigperversion\twigextensions\Continue_TokenParser;
use marionnewlevant\twigperversion\twigextensions\Return_TokenParser;

/**
 *
 * @author    Marion Newlevant
 * @package   TwigPerversion
 * @since     1.0.0
 */
class TwigPerversionTwigExtension extends \Twig_Extension
{
	// Public Methods
	// =========================================================================

	/**
	* Returns the name of the extension.
	*
	* @return string The extension name
	*/
	public function getName()
	{
		return 'TwigPerversion';
	}

	public function getTokenParsers()
	{
		return [
			new Break_TokenParser(),
			new Continue_TokenParser(),
			new Return_TokenParser(),
		];
	}

	public function getTests()
	{
		return [
			new \Twig_Test('numeric', null, ['node_class' => '\marionnewlevant\twigperversion\twigextensions\Numeric_Test']),
		];
	}

	public function getFilters()
	{
		return [
			new \Twig_Filter('json_decode', function($str) {
				return json_decode($str, true); // return assoc arrays (more twig-like)
			})
		];
	}

}

<?php
namespace marionnewlevant\twigperversion\twigextensions;

use marionnewlevant\twigperversion\Plugin;

/**
 * Twig Perversion
 *
 * @package   TwigPerversion
 * @author    Marion Newlevant
 * @copyright Copyright (c) 2016, Marion Newlevant
 * @license   MIT
 * @link      https://github.com/marionnewlevant/craft-twig_perversion
 */

class Return_Node extends \Twig\Node\Node
{

	/**
	* Compiles a Return_Node into PHP.
	*/
	public function compile(\Twig\Compiler $compiler)
	{
        $marker = sprintf('[RETURN_MARKER:%s]', mt_rand());
		$compiler
            ->addDebugInfo($this)
            ->write(sprintf("%s::\$returnValues['%s'] = ", Plugin::class, $marker));

		// check for an expression to return.
		if ($this->hasNode('expr')) {
			$compiler->subcompile($this->getNode('expr'));
		}
		else // Return '' if there isn't one
		{
			$compiler->raw('""');
		}

		$compiler
            ->raw(";\n")
            ->write(sprintf("yield '%s';\n", $marker));
	}
}

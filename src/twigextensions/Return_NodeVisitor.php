<?php
namespace marionnewlevant\twigperversion\twigextensions;

use Twig\Environment;
use Twig\Node\Expression\MethodCallExpression;
use Twig\Node\Node;
use Twig\NodeVisitor\NodeVisitorInterface;

/**
 * Twig Perversion
 *
 * @package   TwigPerversion
 * @author    Marion Newlevant
 * @copyright Copyright (c) 2024, Marion Newlevant
 * @license   MIT
 * @link      https://github.com/marionnewlevant/craft-twig_perversion
 * @since     2.3.0
 */
class Return_NodeVisitor implements NodeVisitorInterface
{
    public function enterNode(Node $node, Environment $env): Node
    {
        return $node;
    }

    public function leaveNode(Node $node, Environment $env): ?Node
    {
        if ($node instanceof MethodCallExpression && !$node->getAttribute('is_defined_test')) {
            return new MacroProcessor_Node([
                'methodCallExpression' => $node,
            ], [
                'is_generator' => $node->hasAttribute('is_generator') ? $node->getAttribute('is_generator') : false,
            ]);
        }
        return $node;
    }

    public function getPriority()
    {
        return 0;
    }
}

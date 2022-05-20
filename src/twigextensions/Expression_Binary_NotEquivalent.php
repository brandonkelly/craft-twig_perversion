<?php

namespace marionnewlevant\twigperversion\twigextensions;

class Expression_Binary_NotEquivalent extends \Twig\Node\Expression\Binary\AbstractBinary
{
    public function operator(\Twig\Compiler $compiler): \Twig\Compiler
    {
        return $compiler->raw('!==');
    }
}
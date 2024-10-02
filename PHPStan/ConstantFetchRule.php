<?php

declare(strict_types=1);

namespace zonuexe\PHPStan\Rules;

use PhpParser\Node;
use PhpParser\Node\Expr\ConstFetch;
use PHPStan\Analyser\Scope;
use PHPStan\Reflection\ReflectionProvider;
use PHPStan\Rules\Rule;
use PHPStan\Rules\RuleErrorBuilder;

/**
 * @implements Rule<Node\Expr\ConstFetch>
 */
class ConstantFetchRule implements Rule
{
    public function getNodeType(): string
    {
        return ConstFetch::class;
    }

    public function processNode(Node $node, Scope $scope): array
    {
        return [
            RuleErrorBuilder::message('Example caused error')
                ->identifier('example.constError')
                ->build(),
        ];
    }
}

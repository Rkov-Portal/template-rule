<?php

declare(strict_types=1);

namespace RPortal\TRule\Aggregates;

use IteratorAggregate;
use RPortal\TRule\Resources\RuleContract;
use Traversable;

interface RuleAggregate extends IteratorAggregate
{
    /**
     * @return Traversable<array-key, RuleContract>
     */
    public function getIterator(): Traversable;
}
<?php

declare(strict_types=1);

namespace RPortal\TRule\Aggregates;

use IteratorAggregate;
use RPortal\TRule\Resources\MessageContract;
use Traversable;

interface MessageAggregate extends IteratorAggregate
{
    /**
     * @return Traversable<array-key, MessageContract>
     */
    public function getIterator(): Traversable;
}

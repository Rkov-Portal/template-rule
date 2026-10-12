<?php

declare(strict_types=1);

namespace RPortal\TRule\Throwables;

use RPortal\TRule\Aggregates\MessageAggregate;
use Throwable;

interface ValidatorThrowable extends Throwable
{
    /**
     * @return MessageAggregate
     */
    public function getMessages(): MessageAggregate;
}
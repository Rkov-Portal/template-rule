<?php

declare(strict_types=1);

namespace RPortal\TRule\Resources;

use Stringable;

interface MessageContract extends Stringable
{
    /**
     * A key from data after failed validate
     * 
     * @return string
     */
    public function getKey(): string;
}
<?php

declare(strict_types=1);

namespace RPortal\TRule\Resources;

use RPortal\TRule\Throwables\ValidatorThrowable;

interface RuleContract
{
    /**
     * @throws ValidatorThrowable
     * @param mixed $data
     * @return void
     */
    public function validate(mixed $data): void;
}
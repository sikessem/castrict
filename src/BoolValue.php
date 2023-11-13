<?php

declare(strict_types=1);

namespace Sikessem\Values;

use Sikessem\Values\Concerns\AsBool;
use Sikessem\Values\Contracts\BoolType;

class BoolValue implements BoolType
{
    use AsBool;

    public function __construct(protected bool $value)
    {
        $this->value = $value;
    }

    public function get(): bool
    {
        return $this->value;
    }
}

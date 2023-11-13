<?php

declare(strict_types=1);

namespace Sikessem\Values;

use Sikessem\Values\Concerns\AsFloat;
use Sikessem\Values\Contracts\FloatType;

class FloatValue implements FloatType
{
    use AsFloat;

    public function __construct(protected float $value)
    {
        $this->value = $value;
    }

    public function get(): float
    {
        return $this->value;
    }
}

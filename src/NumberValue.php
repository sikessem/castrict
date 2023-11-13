<?php

declare(strict_types=1);

namespace Sikessem\Values;

use Sikessem\Values\Concerns\AsNumber;
use Sikessem\Values\Contracts\NumberType;

class NumberValue implements NumberType
{
    use AsNumber;

    public function __construct(protected int|float $value)
    {
        $this->value = $value;
    }

    public function get(): int|float
    {
        return $this->value;
    }
}

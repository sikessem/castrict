<?php

declare(strict_types=1);

namespace Sikessem\Values;

use Sikessem\Values\Concerns\AsNumeric;
use Sikessem\Values\Types\NumericType;

class NumericValue implements NumericType
{
    use AsNumeric;

    public function __construct(protected int|float|string $value)
    {
        $this->value = $value;
    }

    public function get(): int|float|string
    {
        return $this->value;
    }
}

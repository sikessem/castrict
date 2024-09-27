<?php

declare(strict_types=1);

namespace Sikessem\Values\Objects;

use Sikessem\Values\Concerns\AsNumeric;
use Sikessem\Values\Types\NumericType;

class NumericObject implements NumericType
{
    use AsNumeric;

    public function __construct(protected int|float|string $value) {}

    public function get(): int|float|string
    {
        return $this->value;
    }
}

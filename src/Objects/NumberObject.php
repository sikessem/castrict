<?php

declare(strict_types=1);

namespace Sikessem\Values\Objects;

use Sikessem\Values\Concerns\AsNumber;
use Sikessem\Values\Types\NumberType;

class NumberObject implements NumberType
{
    use AsNumber;

    public function __construct(protected int|float $value) {}

    public function get(): int|float
    {
        return $this->value;
    }
}

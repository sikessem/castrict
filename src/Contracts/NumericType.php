<?php

declare(strict_types=1);

namespace Sikessem\Values\Contracts;

interface NumericType extends ScalarType
{
    public function get(): int|float|string;
}

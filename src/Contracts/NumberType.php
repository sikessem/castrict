<?php

declare(strict_types=1);

namespace Sikessem\Values\Contracts;

interface NumberType extends NumericType
{
    public function get(): int|float;
}

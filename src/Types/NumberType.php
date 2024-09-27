<?php

declare(strict_types=1);

namespace Sikessem\Values\Types;

interface NumberType extends NumericType
{
    public function get(): int|float;

    public function __invoke(mixed $value = null): int|float;
}

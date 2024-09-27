<?php

declare(strict_types=1);

namespace Sikessem\Values\Types;

interface NumericType extends ScalarType
{
    public function __invoke(mixed $value = null): int|float|string;

    public function get(): int|float|string;
}

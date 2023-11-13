<?php

declare(strict_types=1);

namespace Sikessem\Values\Contracts;

interface ScalarType extends MixedType
{
    public function get(): bool|int|float|string;
}

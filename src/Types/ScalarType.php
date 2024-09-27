<?php

declare(strict_types=1);

namespace Sikessem\Values\Types;

interface ScalarType extends \Stringable, MixedType
{
    public function get(): bool|int|float|string;
}

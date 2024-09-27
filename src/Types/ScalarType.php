<?php

declare(strict_types=1);

namespace Sikessem\Values\Types;

interface ScalarType extends \Stringable, MixedType
{
    public function get(): bool|int|float|string;

    public function __invoke(mixed $value = null): bool|int|float|string;
}

<?php

declare(strict_types=1);

namespace Sikessem\Values\Contracts;

interface MixedType
{
    public function get(): mixed;

    public static function of(mixed $value): self;
}

<?php

declare(strict_types=1);

namespace Sikessem\Values\Types;

interface MixedType
{
    public function get(): mixed;

    public static function of(mixed $value): self;

    public function __invoke(mixed $value = null): mixed;
}

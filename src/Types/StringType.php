<?php

declare(strict_types=1);

namespace Sikessem\Values\Types;

interface StringType extends ScalarType
{
    public function get(): string;

    public function __invoke(mixed $value = null): string;
}

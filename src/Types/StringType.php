<?php

declare(strict_types=1);

namespace Sikessem\Values\Types;

interface StringType extends ScalarType
{
    public function __invoke(mixed $value = null): string;

    public function get(): string;
}

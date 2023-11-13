<?php

declare(strict_types=1);

namespace Sikessem\Values\Contracts;

interface StringType extends ScalarType
{
    public function get(): string;
}

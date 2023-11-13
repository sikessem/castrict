<?php

declare(strict_types=1);

namespace Sikessem\Values\Contracts;

interface BoolType extends ScalarType
{
    public function get(): bool;
}

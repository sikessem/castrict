<?php

declare(strict_types=1);

namespace Sikessem\Values\Contracts;

interface FloatType extends NumberType
{
    public function get(): float;
}

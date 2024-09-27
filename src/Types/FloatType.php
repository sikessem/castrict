<?php

declare(strict_types=1);

namespace Sikessem\Values\Types;

interface FloatType extends NumberType
{
    public function get(): float;
}
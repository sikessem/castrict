<?php

declare(strict_types=1);

namespace Sikessem\Values\Types;

interface IntType extends NumberType
{
    public function get(): int;
}

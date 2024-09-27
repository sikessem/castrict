<?php

declare(strict_types=1);

namespace Sikessem\Values\Types;

interface StringType extends ScalarType
{
    public function get(): string;
}

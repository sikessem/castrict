<?php

declare(strict_types=1);

namespace Sikessem\Values\Concerns;

use Sikessem\Values\Contracts\ScalarType;

trait AsBool
{
    use AsScalar;

    abstract public function get(): bool;

    /**
     * @throws \InvalidArgumentException If the value is not a boolean.
     */
    public static function from(mixed $value): self
    {
        if ($value instanceof static) {
            return $value;
        }

        if ($value instanceof ScalarType) {
            $value = (bool) $value->get();
        }

        if (is_bool($value)) {
            return new self($value);
        }

        throw new \InvalidArgumentException(sprintf(
            'Value "%s" is not a boolean.',
            get_debug_type($value),
        ));
    }
}

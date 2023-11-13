<?php

declare(strict_types=1);

namespace Sikessem\Values\Concerns;

use Sikessem\Values\Contracts\ScalarType;

trait AsNumeric
{
    use AsScalar;

    abstract public function get(): int|float|string;

    /**
     * @throws \InvalidArgumentException If the value is not numeric.
     */
    public static function from(mixed $value): self
    {
        if ($value instanceof static) {
            return $value;
        }

        if ($value instanceof ScalarType) {
            $value = (string) $value->get();
        }

        if (is_numeric($value)) {
            return new self($value);
        }

        throw new \InvalidArgumentException(sprintf(
            'Value "%s" is not numeric.',
            get_debug_type($value),
        ));
    }
}

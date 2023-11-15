<?php

declare(strict_types=1);

namespace Sikessem\Values\Concerns;

use Sikessem\Values\Contracts\NumberType;

trait AsFloat
{
    use AsNumber;

    abstract public function get(): float;

    /**
     * @throws \InvalidArgumentException If the value is not a float.
     */
    public static function of(mixed $value): self
    {
        if ($value instanceof static) {
            return $value;
        }

        if ($value instanceof NumberType) {
            $value = (float) $value->get();
        }

        if (is_float($value)) {
            return new self($value);
        }

        throw new \InvalidArgumentException(sprintf(
            'Value "%s" is not a float.',
            get_debug_type($value),
        ));
    }
}

<?php

declare(strict_types=1);

namespace Sikessem\Values\Concerns;

use Sikessem\Values\Contracts\MixedType;

trait AsScalar
{
    use AsMixed;

    /**
     * @throws \InvalidArgumentException If the value is not a scalar.
     */
    public static function from(mixed $value): self
    {
        if ($value instanceof MixedType) {
            /** @var mixed $value */
            $value = $value->get();
        }

        if (is_scalar($value)) {
            return new self($value);
        }

        throw new \InvalidArgumentException(sprintf(
            'Value "%s" is not a scalar.',
            get_debug_type($value),
        ));
    }
}

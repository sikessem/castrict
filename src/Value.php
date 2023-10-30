<?php

declare(strict_types=1);

namespace Sikessem\Values;

use Closure;

final class Value
{
    private mixed $data;

    public function __construct(mixed $data)
    {
        $this->set($data);
    }

    public function get(): mixed
    {
        return $this->data;
    }

    public function set(mixed $data): static
    {
        $this->data = $data;

        return $this;
    }

    public function update(callable|Closure $callback): static
    {
        return $this->set($callback($this->get()));
    }

    public static function from(mixed $data): self
    {
        return new self($data);
    }
}

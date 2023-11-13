<?php

declare(strict_types=1);

use Sikessem\Values\MutableMixedValue;

it('should work', function () {
    $val = MutableMixedValue::from('Hello World');
    $val->update(fn (string $data) => "{$data}!");
    expect($val->get())->toBe('Hello World!');
});

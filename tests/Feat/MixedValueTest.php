<?php

declare(strict_types=1);

use Sikessem\Values\MixedValue;

it('should work', function () {
    $val = MixedValue::from('Hello World');
    $val->update(fn (string $data) => "{$data}!");
    expect($val->get())->toBe('Hello World!');
});

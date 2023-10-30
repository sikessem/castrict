<?php

declare(strict_types=1);

use Sikessem\Values\Value;

it('should work', function () {
    $val = Value::from('Hello World');
    $val->update(fn (string $data) => "{$data}!");
    expect($val->get())->toBe('Hello World!');
});

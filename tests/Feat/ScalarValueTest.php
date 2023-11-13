<?php

declare(strict_types=1);

use Sikessem\Values\ScalarValue;

it('should be able to update the value', function () {
    $scalar = ScalarValue::from('Hello World');
    expect($scalar->get())->toBe('Hello World');
});

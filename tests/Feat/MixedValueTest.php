<?php

declare(strict_types=1);

use Sikessem\Values\MixedValue;

it('should be able to update the value', function () {
    $mixed = MixedValue::from('Hello World');
    expect($mixed->get())->toBe('Hello World');
});

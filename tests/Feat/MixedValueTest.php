<?php

declare(strict_types=1);

use Sikessem\Values\MixedValue;

it('should be able to update the value', function () {
    $mixed = MixedValue::from('Hello World');
    $mixed->update(fn ($value) => strtoupper((string) $value));
    expect($mixed())->toBe('HELLO WORLD');
});

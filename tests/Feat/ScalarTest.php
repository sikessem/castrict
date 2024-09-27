<?php

declare(strict_types=1);

use Sikessem\Values\Conversion;
use Sikessem\Values\ScalarValue;
use Sikessem\Values\Types\MixedType;
use Sikessem\Values\Types\ScalarType;

beforeEach(function () {
    $this->scalar = Conversion::toScalar('Hello World');
});

it('should be instantiable', function () {
    expect($this->scalar)->toBeInstanceOf(ScalarValue::class);
});

it('should be an instance of ScalarType', function () {
    expect($this->scalar)->toBeInstanceOf(ScalarType::class);
});

it('should be an instance of MixedType', function () {
    expect($this->scalar)->toBeInstanceOf(MixedType::class);
});

it('should return the value', function () {
    expect($this->scalar->get())->toBe('Hello World');
});

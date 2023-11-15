<?php

declare(strict_types=1);

use Sikessem\Values\Contracts\NumericType;
use Sikessem\Values\Contracts\ScalarType;
use Sikessem\Values\Conversion;
use Sikessem\Values\NumericValue;

beforeEach(function () {
    $this->numeric = Conversion::toNumeric('84.21');
});

it('should be instantiable', function () {
    expect($this->numeric)->toBeInstanceOf(NumericValue::class);
});

it('should be an instance of NumericType', function () {
    expect($this->numeric)->toBeInstanceOf(NumericType::class);
});

it('should be an instance of ScalarType', function () {
    expect($this->numeric)->toBeInstanceOf(ScalarType::class);
});

it('should return the value', function () {
    expect($this->numeric->get())->toBe('84.21');
});

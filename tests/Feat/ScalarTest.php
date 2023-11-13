<?php

declare(strict_types=1);

use Sikessem\Values\Contracts\MixedType;
use Sikessem\Values\Contracts\ScalarType;
use Sikessem\Values\ScalarValue;

beforeEach(function () {
    $this->scalar = ScalarValue::from('Hello World');
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

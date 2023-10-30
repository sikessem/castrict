<?php

declare(strict_types=1);

test('globals')
    ->expect(['dd', 'dump', 'ray'])
    ->not->toBeUsed();

test('classes')
    ->expect('Sikessem\Values')
    ->toUseStrictTypes();

test('abstract classes')
    ->expect('Sikessem\Values\Abstracts')
    ->classes()
    ->toBeAbstract()
    ->toHavePrefix('Abstract');

test('base classes')
    ->expect('Sikessem\Values\Bases')
    ->classes()
    ->toBeAbstract()
    ->toHavePrefix('Base')
    ->toHaveConstructor();

test('contracts')
    ->expect('Sikessem\Values\Contracts')
    ->interfaces()
    ->toOnlyBeUsedIn('Sikessem\Values', 'Sikessem\Values\Contracts');

test('concerns')
    ->expect('Sikessem\Values\Concerns')
    ->traits()
    ->toOnlyBeUsedIn('Sikessem\Values', 'Sikessem\Values\Concerns');

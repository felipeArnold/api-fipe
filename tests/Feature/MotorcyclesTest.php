<?php

use Felipearnold\Fipeapi\Motorcycles;

test('it can get motorcycles brands', function () {
    $motorcycles = new Motorcycles();
    $brands = $motorcycles->getBrands();

    expect($brands)->toBeArray();
});

test('it can get motorcycles models', function () {
    $motorcycles = new Motorcycles();
    $models = $motorcycles->getModelsBrands(60);

    expect($models)->toBeArray();
});

test('it can get motorcycles years', function () {
    $motorcycles = new Motorcycles();
    $years = $motorcycles->getYearsBrands(60, 2576);

    expect($years)->toBeArray();
});

test('it can get motorcycles vehicle', function () {
    $motorcycles = new Motorcycles();
    $vehicle = $motorcycles->getVehicle(60, 2576, '2002-1');

    expect($vehicle)->toBeArray();
});

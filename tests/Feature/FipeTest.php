<?php

it('can get motorcycles brands', function () {
    $motorcycles = new \Felipearnold\Fipeapi\Motorcycles();
    $brands = $motorcycles->getBrands();

    expect($brands)->toBeArray();
});

it('can get motorcycles models', function () {
    $motorcycles = new \Felipearnold\Fipeapi\Motorcycles();
    $models = $motorcycles->getModelsBrands(60);

    expect($models)->toBeArray();
});

it('can get motorcycles years', function () {
    $motorcycles = new \Felipearnold\Fipeapi\Motorcycles();
    $years = $motorcycles->getYearsBrands(60, 2576);

    expect($years)->toBeArray();
});

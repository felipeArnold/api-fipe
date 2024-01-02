# API de consulta FIPE

API de consulta de dados da tabela FIPE.

# Instalação

```txt
composer require felipearnold/fipeapi
```

# Class

Class para uso de consulta fipe.

```php
<?php
use Felipearnold\Fipeapi\Cars;

Car::class
Motorcycles::class
Trucks::class
```


## Marca

```php
<?php

use Felipearnold\Fipeapi\Cars;

$cars = new Cars();
$brands = $cars->getBrands();

var_dump($brands);
```

## Modelos

```php
<?php

use Felipearnold\Fipeapi\Cars;

$cars = new Cars();
$models = $cars->getModelsBrands(21);

var_dump($models);
```

## Anos

```php
<?php

use Felipearnold\Fipeapi\Cars;

$cars = new Cars();
$years = $cars->getYearsBrands(21, 4828);

var_dump($years);
```

## Veículo

```php
<?php

use Felipearnold\Fipeapi\Cars;

$cars = new Cars();
$vehicle = $cars->getVehicle(21, 4828, '2013-1');

var_dump($vehicle);
```



## Doar para o projeto

```txt
Chave PIX: c2a36640-d3da-4fe6-9666-548333397453
```


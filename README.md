# GNU Terry Pratchett Zend Expressive Integration

Just Zend Expressive compliant GNU Terry Pratchett implementation.

## Instalation

```bash
composer install eloar/expressive-gnu-terry-pratchett 1.0

```

## Usage

First add `GnuTPClackMiddleware` to your container.

### Aura.di

Below is example of Aura.di container creation. It is lent from Aura.di documentation. `GnuTPClackMiddleware` is
declared in `invocables` setion

```php
<?php
use Zend\AuraDi\Config\Config;
use Zend\AuraDi\Config\ContainerFactory;
use GnuTP\Middleware\GnuTPClackMiddleware;

$factory = new ContainerFactory();
$container = $factory(new Config([
    'dependencies' => [
        'invokables' => [
            GnuTPClackMiddleware::class => GnuTPClackMiddleware::class 
        ]
    ]
]));
```

### Pimple

Below is example of Pimple container creation. It is lent from Pimple README. `GnuTPClackMiddleware` is declared in 
`invocables` section

```php
<?php
use Zend\Pimple\Config\Config;
use Zend\Pimple\Config\ContainerFactory;
use GnuTP\Middleware\GnuTPClackMiddleware;

$factory = new ContainerFactory();

$container = $factory(
    new Config([
        'dependencies' => [
            // ...
            'invokables'        => [
                GnuTPClackMiddleware::class => GnuTPClackMiddleware::class 
            ],
            // ...
        ],
        // ... other configuration
    ])
);

```

## Zend Service Manager

Below is example of ZendFramework container configuration as ZendServiceManager documentation shows. This part might be
present in `config/dependencies.php` or in body of main method of `ConfigProvider`.

```php
<?php

return [
    'invocables' => [
        GnuTP\Middleware\GnuTPClackMiddleware::class
    ]
];
```

Just add `GnuTPClackMiddleware` to Your applications main pipe to add proper header to each response.

```php
$app->pipe(GnuTPClackMiddleware::class);
```

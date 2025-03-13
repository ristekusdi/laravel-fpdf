# Laravel FPDF

> NOTE: This is a fork from Anouar/Fpdf project.

The last fork from RistekUSDI for compatibility internal web app.

> PLEASE DON'T USE THIS PACKAGE IN PRODUCTION! THIS IS A LAST FORK FROM RISTEKUSDI FOR COMPATIBILITY INTERNAL WEB APP!
> If you want to use Fpdf in Laravel project, then please use [codedge/laravel-fpdf](https://github.com/codedge/laravel-fpdf)

## How to run?

1. Add `anouar/fpdf` into the `composer.json` file.

```json
"require": {
        "anouar/fpdf": "dev-master"
}
```

2. Set `repositories` key inside the `composer.json` file. E.g.

```json
"require": {

},
"require-dev": {

},
"repositories": [
        {
            "type": "vcs",
            "url": "git@github.com:ristekusdi/laravel-fpdf.git"
        },
]
```

3. Run `composer install` or `composer update`.

## Usage

This package has Laravel auto discovery feature. So, you just need to import the Facade class:

```php
use Anouar\Fpdf\Facades\Fpdf;

function print()
{
   Fpdf::AddPage('P','A4');
   Fpdf::SetFont('Times','B',9);
   // etc
   // etc
}
```

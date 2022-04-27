# Laravel NrbForexApi

The `sachinkiranti/nrb-forex-api` package provides easy access to the forex rate fixed by Nepal Rastra Bank for different countries to Nepali Rupees(NPR).

## Installation

Installation is straightforward, setup is similar to every other Laravel Packages.

#### 1. Install via Composer

Begin by pulling in the package through Composer:

```
composer require sachinkiranti/nrb-forex-api
```

#### 2. Define the Service Provider and alias

**Note:** This package supports the new auto discovery features of `Laravel >=5.5`, so if you are working on a `Laravel >=5.5` project, then your installation is complete, you can skip to step 3.

Add manually the service provider in your `config/app.php` file :

```php
'providers' => [
    // ...
    SachinKiranti\NrbForexApi\NrbForexApiServiceProvider::class,
];
```

Add manually the facade in your `config/app.php` file :

```php
'aliases' => [
    // ...
    SachinKiranti\NrbForexApi\Facades\NrbForexApi::class,
];
```

#### 3. Publish Config File

To generate a config file type this command into your terminal:

```
php artisan vendor:publish --tag=nrb-forex-api
```

## Usage
Using the `NrbForexApi` package, it's quite easy to get the current rate's.

We have the `SachinKiranti\NrbForexApi\NrbForexISO3` for ISO3 list of constants to be used.

### Using with facade

- Getting the current rate for US Dollar to Nepali Rupees :
```php
 NrbForexApi::to(\SachinKiranti\NrbForexApi\NrbForexISO3::US_DOLLAR)->convert(5);
 // Outputs : (Right now, US Dollar per unit === 122.24 NRS)
 611.2
```

### Using with helpers

- Getting the current rate for Indian Rupees to Nepali Rupees :
```php
 nrb_forex_convert(\SachinKiranti\NrbForexApi\NrbForexISO3::INDIAN_RUPEE, 100)
 // Outputs : (Right now, Indian ruppee per 100 unit === 160 NRS)
 160
```

### TODO
- [ ] Get the list of rates for all available currencies provided by *Nepal Rastra Bank*
- [ ] More flexible Api

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
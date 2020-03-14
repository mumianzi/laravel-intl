
# Laravel Countries

A Laravel countries list package

## Installation

Via Composer

``` bash
$ composer require mumianzi/laravel-intl
```

In Laravel 5.5 the service provider will automatically get registered. In older versions of the framework just add the service provider in config/app.php file:

```
'providers' => [
    // ...
    Mumianzi\LaravelIntl\IntlServiceProvider::class,
];
```


## Usage

In a controller import the class:

```
use Mumianzi\LaravelIntl\Facades\Countries;
```

In a view or closure call the facade:

This will return an object of countries

```
country()->get($code);
or
country($code)
```


## Change log

Please see the [changelog](changelog.md) for more information on what has changed recently.


## Contributing

Contributions are welcome and will be fully credited.

Contributions are accepted via Pull Requests on [Github](https://github.com/mumianzi/laravel-intl).

## Pull Requests

- **Document any change in behaviour** - Make sure the `readme.md` and any other relevant documentation are kept up-to-date.

- **Consider our release cycle** - We try to follow [SemVer v2.0.0](http://semver.org/). Randomly breaking public APIs is not an option.

- **One pull request per feature** - If you want to do more than one thing, send multiple pull requests.

## License

license. Please see the [license file](license.md) for more information.

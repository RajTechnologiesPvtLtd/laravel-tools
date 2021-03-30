# laravel-tools
Laravel Development Tools
https://github.com/RajTechnologiesPvtLtd/laravel-tools

## Installation on laravel
1) In order to install Laravel Tools, just add the following to your composer. Then run `composer`:

```json
composer require rajtechnologies/laravel-tools
```
2) Open your `config/app.php` and add the following to the `providers` array:

```php
RajTechnologies\Tools\ToolServiceProvider::class,
```
## Package Features

- Clear Cache
- Routes List

## URL Routes

| Name            | URL                 | Description                     |
|-----------------|---------------------|---------------------------------|
| Clear Cache     | clear-cache         | all type cache clear in larevel |
| Routes List     | routeslist          | All Routes List                 |
| API Routes List | routeslist?only=api | Only API Routes List            |

## Contributing

- [Bhargav Raviya](https://github.com/bhargavraviya)

## Maintenance by Raj Technologies Pvt Ltd (For Laravel Starter Project)

- [Raj Technologies Pvt Ltd](http://www.rajtechnologies.com/contact-web-design-development-marketing-Ahmedabad-India-Gujarat.php).

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

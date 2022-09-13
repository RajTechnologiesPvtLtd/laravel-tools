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
- HTTP Status Code List
- Laravel App Convert To PWA App

## URL Routes

| Name            | URL                 | Description                     |
|-----------------|---------------------|---------------------------------|
| Clear Cache     | clear-cache         | all type cache clear in larevel |
| HTTP status Code| httplist            | HTTP Status Code List (cheat sheet) |
| Routes List     | routeslist          | All Routes List                 |
| API Routes List | routeslist?only=api | Only API Routes List            |

## PWA App
- Open your `config/app.php` and add the following to the `providers` array: 
```bash
    'LaravelPwa' => \RajTechnologies\Tools\LaravelPwa::class,
```  
## Publish the Assets For PWA App

Run the following command to publish config file,

    php artisan laravel-pwa:publish
## Configure PWA

 Add following code in root blade file in header section.
```php
    <!-- PWA  -->
    <meta name="theme-color" content="#6777ef"/>
    <link rel="apple-touch-icon" href="{{ asset('logo.PNG') }}">
    <link rel="manifest" href="{{ asset('/manifest.json') }}">
```
Add following code in root blade file in before close the body.
```js
    <script src="{{ asset('/sw.js') }}"></script>
    <script>
        if (!navigator.serviceWorker.controller) {
            navigator.serviceWorker.register("/sw.js").then(function (reg) {
                console.log("Service worker has been registered for scope: " + reg.scope);
            });
        }
    </script>
```
## Contributing

- [Bhargav Raviya](https://github.com/bhargavraviya)

## Maintenance by Raj Technologies Pvt Ltd (For Laravel Starter Project)

- [Raj Technologies Pvt Ltd](http://www.rajtechnologies.com/contact-web-design-development-marketing-Ahmedabad-India-Gujarat.php).

## License

The Laravel Tools is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

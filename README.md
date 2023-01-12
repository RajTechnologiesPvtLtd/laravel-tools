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
# Repository Generator

## Table of Contents
  <ol>
    <li><a href="#features">Features</a></li>
    <li>
        <a href="#getting-started">Getting started</a>
        <ul>
            <li><a href="#installation">Installation</a></li>
            <li><a href="#publish-config-(optional)">Publish config (optional)</a></li>
        </ul>
    </li>
    <li>
      <a href="#usage">Usage</a>
      <ul>
        <li><a href="#generating-repositories">Generating repositories</a></li>
        <li><a href="#dependency-injection">Dependency Injection</a></li>
      </ul>
    </li>
    <li><a href="#manual-binding">Manual binding</a></li>
    <li><a href="#more-generator-packages">More generator packages</a></li>
    <li><a href="#contributing">Contributing</a></li>
    <li><a href="#license">License</a></li>
  </ol>
  
## Features
With this package you can generate repositories with the ```artisan make:repository``` command. 
The generator will generate the repository, repository interface and will bind them automatically (can be changed to 
manual binding) to the Service Container so you can inject the interface into your controllers.

### Publish config (optional)
```
php artisan vendor:publish --provider="RajTechnologies\Tools\ToolServiceProvider" --tag="config"
```

## Usage
For usage take the following steps. Generate the repository and then inject it into a controller or service.

### Generating repositories
Run the following command.
```
php artisan make:repository UserRepository
```
This example will generate the following files:
```
app\Repositories\Eloquent\UserRepository
app\Repositories\UserRepositoryInterface
```

### Dependency Injection
Next we have to inject the interface into the constructor our controller or service. For this example we will use the UserController.
```php
<?php

namespace App\Http\Controllers;

use App\Repositories\UserRepositoryInterface;

class UserController extends Controller
{
    private $user;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->user = $userRepository;
    }
    
    // your controller functions
}
```

By default you will be able to use Eloquent methods like ```all()``` and ```find()```.
You can extend this in your repository. Now you will be able to use your repository 
in your methods like this.
```php
public function index()
{
    return $this->user->all();
}
```
## Manual binding
By default the package will automatically bind the repository interfaces for you with the repositories so you can
inject the interface into your controllers. If you want to bind manually you can disable
this behaviour by setting the ```auto_bind_interfaces``` option to ```false``` in ```config\repository-generator.php```.
If the config is not there make sure to publish it first as described in the Installation chapter.

You can add your bindings to your AppServiceProvider or 
you can a create a new provider with ```php artisan make:provider RepositoryServiceProvider```
(don't forget to add it in ```config\app.php```) and add the bindings in the ```register()``` method, see the example below.

```php
<?php 

namespace App\Providers; 

use App\Repositories\Eloquent\UserRepository;
use App\Repositories\UserRepositoryInterface;
use Illuminate\Support\ServiceProvider; 

/** 
* Class RepositoryServiceProvider 
* @package App\Providers 
*/ 
class RepositoryServiceProvider extends ServiceProvider 
{ 
   /** 
    * Register services. 
    * 
    * @return void  
    */ 
   public function register() 
   { 
       $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
   }
}
```
## Contributing

- [Bhargav Raviya](https://github.com/bhargavraviya)

## Maintenance by Raj Technologies Pvt Ltd (For Laravel Starter Project)

- [Raj Technologies Pvt Ltd](http://www.rajtechnologies.com/contact-web-design-development-marketing-Ahmedabad-India-Gujarat.php).

## License

The Laravel Tools is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

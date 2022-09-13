<?php 

namespace RajTechnologies\Tools;

use Illuminate\Support\ServiceProvider;
use RajTechnologies\Tools\commands\PWAPublish;
class ToolServiceProvider extends ServiceProvider
{
	public function boot(){
		$this->mergeConfigFrom(__DIR__.'/../config/http_status_codes.php', 'Tool');
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
		$this->loadViewsFrom(__DIR__.'/../resources/views', 'Tool');
	}
	public function register(){
		// PWA Starter Kit Start
		$this->app->singleton('laravel-pwa:publish', function ($app) {
			return new PWAPublish();
		});
		$this->commands([
			'laravel-pwa:publish',
		]);
		// PWA Starter Kit End
	}
}

?>
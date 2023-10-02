<?php

namespace RajTechnologies\Tools;

use Illuminate\Support\ServiceProvider;
use RajTechnologies\Tools\commands\PWAPublish;

class ToolServiceProvider extends ServiceProvider
{
	public function boot()
	{
		// Routes List Start
		$this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
		$this->loadViewsFrom(__DIR__ . '/../resources/views', 'Tool');
		// Routes List End	
	}

	public function register()
	{
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

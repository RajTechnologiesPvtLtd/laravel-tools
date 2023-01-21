<?php 

namespace RajTechnologies\Tools;

use Illuminate\Support\ServiceProvider;
use RajTechnologies\Tools\commands\PWAPublish;
use Illuminate\Support\Facades\File;
use RajTechnologies\Tools\Console\MakeRepository;
use RajTechnologies\Tools\Console\MakeRepositoryInterface;
use RajTechnologies\Tools\Console\MakePivotCommand;
use RajTechnologies\Tools\Console\MakeModel;
use RajTechnologies\Tools\Console\MakeService;

class ToolServiceProvider extends ServiceProvider
{
	public function boot(){
		// Routes List Start
		$this->mergeConfigFrom(__DIR__.'/../config/http_status_codes.php', 'Tool');
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
		$this->loadViewsFrom(__DIR__.'/../resources/views', 'Tool');
		// Routes List End
		// Repository Pattern Start
		if ($this->app->runningInConsole()) {
            $this->commands([
                MakeRepository::class,
                MakeRepositoryInterface::class,
            ]);

            $this->publishes([
                __DIR__ . '/../config/repository-generator.php' => config_path('repository-generator.php'),
            ], 'config');
        }
		// Repository Pattern End
		// Pivot Table Start
		if ($this->app->runningInConsole()) {
            $this->commands([MakePivotCommand::class]);
        }
		// Pivot Table End
		// Service Start
		if ($this->app->runningInConsole()) {
            $this->commands([
                MakeService::class,
                MakeModel::class
            ]);
        }
		// Service End		
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
		// Repository Pattern Start
		$this->mergeConfigFrom(__DIR__.'/../config/repository-generator.php', 'repository-generator');
		if (config('repository-generator.auto_bind_interfaces')) {
			$this->bindInterfaces();
        }
		// Repository Pattern End
	}
	// Repository Pattern Start
	protected function bindInterfaces()
    {
        $path = app_path('Repositories/Eloquent');
        $files = (file_exists($path)) ? File::files($path) : [];
		foreach ($files as $file) {
            // todo: this can use some improvement
            $repository = 'App\Repositories\Eloquent\\' . $file->getFilenameWithoutExtension();
            $repositoryInterface = 'App\Repositories\\' . $file->getFilenameWithoutExtension() . 'Interface';

            $this->app->bind($repositoryInterface, $repository);
        }
    }
	// Repository Pattern End
}

?>

<?php 

namespace RajTechnologies\Tools;

use Illuminate\Support\ServiceProvider;

class ToolServiceProvider extends ServiceProvider
{
	public function boot(){
		
		//database/migrations
	    //$this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
		$this->loadViewsFrom(__DIR__.'/../resources/views', 'Tool');

	}
	public function register(){
		
	}
}

?>
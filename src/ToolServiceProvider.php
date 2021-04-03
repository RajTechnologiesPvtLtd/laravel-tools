<?php 

namespace RajTechnologies\Tools;

use Illuminate\Support\ServiceProvider;

class ToolServiceProvider extends ServiceProvider
{
	public function boot(){
		$this->mergeConfigFrom(__DIR__.'/../config/http_status_codes.php', 'Tool');
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
		$this->loadViewsFrom(__DIR__.'/../resources/views', 'Tool');
	}
	public function register(){
	
	}
}

?>
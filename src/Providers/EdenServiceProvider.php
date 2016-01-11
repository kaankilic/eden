<?php 
namespace Kaankilic\Eden\src\Providers;
use Illuminate\Support\ServiceProvider;
class EdenServiceProvider extends ServiceProvider {
  
   /**
     * Bootstrap the application services.
     *
     * @return void
    */
  public function boot(){
    $this->app->make('\Kaankilic\Eden\src\Http\Controllers\EdenController');
    $this->publishes([__DIR__.'/config/eden.php' => config_path('eden.php')]);
  }
 
  /**
    * Register the application services.
    *
    * @return void
  */
  public function register()
  {
   //
  }
 
}

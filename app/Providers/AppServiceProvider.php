<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('*', function($view){
            view()->share('view_name', $view->getName());
        });
        \Blade::directive('svg', function($arguments) {
            libxml_disable_entity_loader(false);
            // Funky madness to accept multiple arguments into the directive
            list($path, $class) = array_pad(explode(',', trim($arguments, "() ")), 2, '');
            $path = trim($path, "' ");
            $class = trim($class, "' ");
    
            // Create the dom document as per the other answers
            $svg = new \DOMDocument();
            libxml_use_internal_errors(true);
            $svg->load(public_path($path));
            if ($class) $svg->documentElement->setAttribute("class", $class);
            $output = $svg->saveXML($svg->documentElement);
    
            return $output;
        });
        \Blade::directive('css', function($view_name) {
            return \Route::current()->uri;
            return file_get_contents(public_path() . "/css/$view_name.css");
        });
        \Blade::directive('js', function($view_name) {
            return file_get_contents( public_path() . "/js/$view_name.js");
        });
          
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}

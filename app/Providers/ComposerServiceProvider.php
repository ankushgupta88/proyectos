<?php 
namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Models\Course;

class ComposerServiceProvider extends ServiceProvider {

    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function boot()
    {
        // Using Closure based composers...
         view()->composer(
            'includes.header', 
            function ($view) {
                $view->with('courses', Course::all());
            }
        );
    }

    /**
     * Register
     *
     * @return void
     */
    public function register()
    {
        //
    }

}
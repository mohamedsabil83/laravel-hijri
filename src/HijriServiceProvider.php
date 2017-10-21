<?php
/**
 * Created by PhpStorm.
 * User: mohamedsabil83
 * Date: 13/09/16
 * Time: 01:06 ص
 */

namespace Mohamedsabil83\Hijri;

use Illuminate\Support\ServiceProvider;

class HijriServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {

    }

    /**
     * Register the service provider.
     */
    public function register()
    {
        $this->app->singleton('hijri', function () {
            return new Hijri();
        });
    }

    /**
     * @return array
     */
    public function provides()
    {
        return ['hijri'];
    }
}

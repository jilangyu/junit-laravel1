<?php
/**
 * Created by PhpStorm.
 * User: chenygd
 * Date: 2019/7/24
 * Time: 10:23
 */

namespace Jilang\JunitLaravel\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
class JunitServiceProvide extends ServiceProvider
{

    public function boot()
    {
        $this->registerRoutes();
        $this->loadViewsFrom(
            __DIR__.'/../resources/views', 'junit'
        );
    }
    private function routeConfiguration()
    {
        return [
            'namespace' => 'Jilang\JunitLaravel\Http\Controllers',
            'prefix' => 'junit',
        ];
    }
    private function registerRoutes()
    {
        Route::group($this->routeConfiguration(), function () {
            $this->loadRoutesFrom(__DIR__.'/../Http/routes.php');
        });
    }


}
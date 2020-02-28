<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }

    private function bootOctopusSocialite(){
        $socialite = $this->app->make('Laravel\Socialite\Contracts\Factory');
        $socialite->extend(
            'octopusx',
            function ($app) use ($socialite) {
                $config = $app['config']['services.octopusx'];
                return $socialite->buildProvider(OctopusXSocialiteProvider::class, $config);
            }
        );
    }
}

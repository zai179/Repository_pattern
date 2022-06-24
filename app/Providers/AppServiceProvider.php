<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Interface\RespositoreisInterface;
use App\Repositories\NameRepository;
use Illuminate\Support\Str;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(RespositoreisInterface::class,NameRepository::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Str::macro('arrayToSlug', function(Array $array){
            $string = implode("", $array);
            $slug = Str::slug($string);
            return $slug;
        });
    }
}

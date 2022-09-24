<?php
namespace kerodev\ShortLink;

use Illuminate\Support\ServiceProvider;

class ShorterLinkServiceProvider extends ServiceProvider {


    public function boot()
    {
        $this->publishes([
            __DIR__.'/config/shortlink.php' => config_path('shortlink.php')
        ],'shortconfig');
    }

    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/config/shortlink.php', 'shortlink'
        );
    }


}

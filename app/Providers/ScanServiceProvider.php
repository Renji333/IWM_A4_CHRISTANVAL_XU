<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class ScanServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {

        $url = 'http://lelscanz.me/mangas/';
        $content = file_get_contents($url);
        $mangas = [];
        $re = '/a href="(.*?)">(.*?)\/</mi';
        preg_match_all($re, $content, $matches, PREG_SET_ORDER, 0);

        foreach ($matches as $manga){
            $mangas[] = str_replace('-'," ",$manga[2]);
        }

        View::share('mangas', $mangas);

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

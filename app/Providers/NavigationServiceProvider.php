<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Spatie\Menu\Laravel\Menu;
use Spatie\Menu\Laravel\View;

class NavigationServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Menu::macro('main', function () {
            return Menu::new()
                ->addClass('list-reset lg:flex justify-end items-center')
                ->addItemClass('block border-b-2 border-transparent py-2 px-4 text-center align-content-center lg:mx-2')
                ->action('HomeController@index', 'Home')
                ->action('OriginalsController@index', 'Originals')
                ->action('NewsletterController@index', 'Newsletter')
                ->url('/advertising', 'Advertising')
                ->action('MeController@index', 'Me')
                ->add(View::create('front.layouts._partials.search')->addParentClass('w-full items-center mt-4 lg:mt-0'))
                ->setActiveFromRequest('/');
        });
    }
}

<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Game;
use App\Models\CategoryList;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer('layouts.dbgames', function($view) {
            $games = Game::all();
            $view->with('games', $games);
        });

        View::composer('layouts.dbselectedgames', function($view) {
            $category_lists = CategoryList::all();
            $view->with('category_lists', $category_lists);
        });
    }
}

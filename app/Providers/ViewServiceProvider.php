<?php

namespace App\Providers;

use App\Models\Article;
use App\Models\Feedback;
use App\Models\File;
use App\Models\Lapor;
use App\Models\Profile;
use App\Models\Siap;
use App\View\Composers\ProfileComposer;
use Illuminate\Support\Facades;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\View;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // ...
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {

        Facades\View::composer('homepage.*', function (View $view) {
            // $navbarProfile = Profile::select('title', 'slug',)->orderBy('created_at', 'asc')->get();
            // $navbarDownload = File::select('file_name', 'url')->orderBy('created_at', 'asc')->get();
            // $navbarLayanan = Lapor::select('title', 'link')->isActive()->orderBy('created_at', 'asc')->get();
            // $navbarSiap = Siap::select('title', 'link', 'logo', 'description')->orderBy('created_at', 'asc')->get();
            // $view->with(['navbarProfile' => $navbarProfile, 'navbarDownload' => $navbarDownload, 'navbarSiap' => $navbarSiap, 'navbarLayanan' => $navbarLayanan]);

            $feedbacks = Feedback::all();
            $view->with(['feedbacks' => $feedbacks]);
        });

        // Facades\View::composer('guest.layouts.index', function (View $view) {
        //     $navbarProfile = Profile::select('title', 'slug')->orderBy('created_at', 'asc')->get();
        //     $navbarDownload = File::select('file_name', 'url')->orderBy('created_at', 'asc')->get();
        //     $siaps = Siap::orderBy('created_at', 'asc')->get();
        //     $view->with(['siaps' => $siaps]);
        // });
    }
}

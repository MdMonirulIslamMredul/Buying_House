<?php

namespace App\Providers;

use App\Models\ContactMessage;
use App\Models\FooterDetail;
use App\Models\WebsiteLinks;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Paginator::useBootstrap();
        View::composer('*', function ($view) {
            $view->with('links', WebsiteLinks::latest()->first());
        });
        View::composer('frontend.includes.footer', function ($view) {
            $view->with('footer', FooterDetail::latest()->first());
        });

        // Share unread contact messages count with admin views
        View::composer('admin.*', function ($view) {
            if (Auth::check() && Auth::user()->is_admin == 1) {
                $unreadMessagesCount = ContactMessage::where('status', ContactMessage::STATUS_UNREAD)->count();
                $view->with('unreadMessagesCount', $unreadMessagesCount);
            }
        });
    }
}

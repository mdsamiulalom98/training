<?php

namespace App\Providers;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\ServiceProvider;
use App\Models\GeneralSetting;
use App\Models\Service;
use App\Models\SocialMedia;
use App\Models\Contact;
use App\Models\CreatePage;

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

        view()->composer('*', function ($view) {

            $generalsetting = Cache::remember('generalsetting', now()->addDays(7), function () {
                return GeneralSetting::where('status', 1)->first();
            });


            $contact = Cache::remember('contact', now()->addDays(7), function () {
                return Contact::where('status', 1)->first();
            });

            $socialicons = Cache::remember('socialicons', now()->addDays(7), function () {
                return SocialMedia::where('status', 1)->get();
            });

            $pages = Cache::remember('pages', now()->addDays(7), function () {
                return CreatePage::where('status', 1)->get();
            });


            $services = Service::where('status', 1)->select('id', 'title', 'slug', 'status')->get();

            $view->with([
                'generalsetting' => $generalsetting,
                'services' => $services,
                'contact' => $contact,
                'socialicons' => $socialicons,
                'pages' => $pages
            ]);
        });
    }
}

<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Localgovernment;

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
        $tbl_lga = Localgovernment::select('id', 'descrp')->get();

        // dd($tbl_lga);
        View::share('tbl_lga', $tbl_lga);
    }
}

<?php

namespace App\Providers;
use App\AlertNotice;
use Illuminate\Support\ServiceProvider;

class warningNotice extends ServiceProvider
{
    public function boot()
    {
       view()->composer('*',function($view){
         $view->with('warning',AlertNotice::all());

       });

    }





}
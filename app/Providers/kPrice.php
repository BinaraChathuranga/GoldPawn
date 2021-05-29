<?php

namespace App\Providers;
use App\kPrices;
use Illuminate\Support\ServiceProvider;

class kPrice extends ServiceProvider
{
    public function boot()
    {
       view()->composer('*',function($view){
         $view->with('kValArray',kPrices::where('status','=','active')->get());

       });

    }





}
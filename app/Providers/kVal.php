<?php

namespace App\Providers;
use App\kValues;
use Illuminate\Support\ServiceProvider;

class kVal extends ServiceProvider
{
    public function boot()
    {
       view()->composer('*',function($view){
         $view->with('kVal',kValues::where('status','=','active')->get());

       });

    }





}
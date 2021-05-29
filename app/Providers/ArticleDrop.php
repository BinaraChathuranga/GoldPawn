<?php

namespace App\Providers;
use App\articles;
use Illuminate\Support\ServiceProvider;

class ArticleDrop extends ServiceProvider
{
    public function boot()
    {
       view()->composer('*',function($view){
         $view->with('artArray',articles::where('status','=','active')->get());

       });

    }





}
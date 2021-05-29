<?php

namespace App\Providers;
use App\transactions;
use Illuminate\Support\ServiceProvider;

class transactionDetails extends ServiceProvider
{
    public function boot()
    {
       view()->composer('*',function($view){
         $view->with('transArray',transactions::all());

       });

    }





}
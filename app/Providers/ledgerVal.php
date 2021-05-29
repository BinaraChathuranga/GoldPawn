<?php

namespace App\Providers;
use App\ledger;
use Illuminate\Support\ServiceProvider;

class ledgerVal extends ServiceProvider
{
    public function boot()
    {
       view()->composer('*',function($view){
         $view->with('ledger',ledger::where('avaBal','!=','null')->latest()->first());

       });


    }





}
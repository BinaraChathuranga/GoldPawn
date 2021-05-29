<?php

namespace App\Providers;
use App\ledger;
use Illuminate\Support\ServiceProvider;

class ledgerIncome extends ServiceProvider
{
    public function boot()
    {
       view()->composer('*',function($view){
         $view->with('income',ledger::where('updated',0)->latest()->first());

       });


    }





}
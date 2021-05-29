<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kPrices extends Model

{

    protected $table='kprices';
    public function marketPrice()
    {
        // return $this->belongsTo('App\kValues');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kValues extends Model
{

    protected $table='kvalues';
    public function kValue()
    {
        // return $this->has('App\kPrices');
    }
}

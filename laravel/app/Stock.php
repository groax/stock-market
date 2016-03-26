<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    /**
     * Indicates if the model should be timestamped.
     */
    public $timestamps = false;

    public function inventories()
    {
        return $this->hasMany('App\Inventory', 'stock_id', 'id');
    }

    public function transactions()
    {
        return $this->hasMany('App\Transaction', 'stock_id', 'id');
    }
}
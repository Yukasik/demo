<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pay extends Model
{
    protected $guarded = [];

    public function orders() {
        return $this -> hasMany(Order::class); // M
    }
}

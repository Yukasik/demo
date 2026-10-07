<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $guarded = [];

    public function user() {
        return $this -> belongsTo(User::class); // 1
    }

    public function status() {
        return $this -> belongsTo(Status::class); // 1
    }

    public function pay() {
        return $this -> belongsTo(Pay::class); // 1
    }
}

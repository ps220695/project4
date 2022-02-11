<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class winkelwagen extends Model
{
    use HasFactory;

    protected $table = 'order_pizza';

    //protected $casts = ['pizza_id' => 'string'];

    public function Pizza()
    {
        return $this->belongsToMany(Pizza::class);
    }
}

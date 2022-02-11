<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'order';
    public $timestamps = false;
    protected $fillable = [
        'name',
        'email',
        'address',
        'zipcode',
        'phone',
        'status_id'
        ];


    public function pizzas()
    {
        return $this->belongsToMany(Pizza::class);
    }
    public function states()
    {
        return $this->belongsTo(States::class);
    }
    public function users()
    {
        return $this->belongsTo(User::class);
    }
}

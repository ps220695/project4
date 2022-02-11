<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'pizza';
    public $timestamps = false;
    protected $fillable =
        [
            'id',
            'name',
        ];

    public function ingredienten()
    {
        return $this->belongsToMany(Ingredient::class);
    }
    public function orders()
    {
        return $this->belongsToMany(Order::class);
    }

}

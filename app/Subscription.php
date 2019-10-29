<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    protected $fillable = [
        'name',
        'price',
        'description',
    ];

    protected $casts = [
        'price' => 'integer',
    ];

    protected $appends = [
        'real_price',
    ];

    public function getRealPriceAttribute()
    {
        return $this->price / 100;
    }

    public function getRealPriceFormattedAttribute()
    {
        return \money_format('%.2n', $this->real_price);
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }
}

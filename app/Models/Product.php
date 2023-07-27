<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Product extends Model
{
    use HasFactory, HasUuids;

    protected $keyType = 'string';

    protected $fillable = [
        'code',
        'name',
        'bar_code',
        'sku',
        'price'
    ];

    protected function price(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => '$'.number_format($value, 2),
        );
    }

    
}

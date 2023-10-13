<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\AsArrayObject;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'products';
    protected $guarded = false;

    protected $casts = [
      'attributes'  => 'array',
    ];

    public function scopeAllowed($query)
    {
        return $query->where('status', 'available');
    }

    public function attributes(): Attribute
    {
        return Attribute::make(
            get: fn($attributes) => json_decode($attributes, true),
        );
    }

}

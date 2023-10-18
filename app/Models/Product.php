<?php

namespace App\Models;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model implements ShouldQueue
{
    use HasFactory, SoftDeletes;

    protected $table = 'products';
    protected $guarded = false;


    public function scopeAllowed($query)
    {
        return $query->where('status', 'available');
    }


    protected function attributes(): Attribute
    {

        return Attribute::make(
            get: fn (string $value) => json_decode($value, true),
            set: fn (array $value) => json_encode($value),
        );
    }



}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';

    // Tratamiento de "title" Guarda en minúsculas y muestra la primera letra en mayúscula
    protected function title(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => ucfirst($value),
            set: function ($value) {
                return strtolower($value);
            }
        );
    }

    protected function casts(): array
    {
        return [
            'published_at' => 'datetime',
            'is_active' => 'boolean',
        ];
    }
}

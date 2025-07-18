<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Category extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'name',
        'description',
        'image'
    ];

    public function movies(){
        return $this->hasMany(Movie::class);
    }




    protected function image(): Attribute
    {
        return Attribute::make(
            get: fn ($image) => $image ? $image : 'images/no-photo.png',
        );
    }

    protected function shortDescription(): Attribute
    {
        return Attribute::make(
            get: fn($value, $attributes) => Str::words($attributes['description'], 5, '...'),
        );
    }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $with = ['category', 'actors:fullname'];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function actors(){
        return $this->belongsToMany(Actor::class);
    }

    protected function image(): Attribute
    {
        return Attribute::make(
            get: fn($image) => $image ? $image : 'images/no-image.png',
        );
    }
}

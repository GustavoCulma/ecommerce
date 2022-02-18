<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    use HasFactory;
    protected $fillable = ['name'];


    //muchos a muchos con la tabla color
    public function products()
    {
        return $this->belongsToMany(Product::class);
    }

    //muchos a muchos con la tabla color
    public function sizes()
    {
        return $this->belongsToMany(Size::class);
    }
}

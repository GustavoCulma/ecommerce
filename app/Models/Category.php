<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'slug', 'image', 'icon'];

    //relación uno a muchos

    public function subcategories()
    {
        return $this->hasMany(Subcategory::class);
    }

    //relacion de muchos a muchos con la tabla brands
    
    public function brands()
    {
        return $this->belongsToMany(Brand::class);
    }

    //relación uno a muchos a traves de
    public function products()
    {
        return $this->hasManyThrough(Product::class, Subcategory::class);
    }

    //URL AMIGABLES
    public function getRouteKeyName()
    {
        return 'slug';
    }
}

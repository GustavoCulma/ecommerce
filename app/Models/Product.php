<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    const BORRADOR =1;
    const PUBLICADO =2;

    //asignacion masiva inversa
    protected $guarded = ['id','create_at','update_at'];

    //relación uno a muchos
    public function sizes()
    {
        return $this->hasmany(Size::class);
    }


    //relación uno a muchos inversa
    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    //relación uno a muchos inversa
    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class);
    }

    //relación muchos a muchos
    public function colors()
    {
        return $this->belongsToMany(Color::class);
    }

    //relacion uno a muchos polimorfica

    public function images()
    {
        return $this->morphMany(Image::class, "imageable");
    }

    //URL AMIGABLES
    public function getRouteKeyName()
    {
        return 'slug';
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    const BORRADOR =1;
    const PUBLICADO =2;

    //asignacion masiva inversa
    protected $guarded = ['id','create_at','update_at'];

    //accesores

    public function getStockAttribute(){
        if ($this->subcategory->size) {
            return  ColorSize::whereHas('size.product', function(Builder $query){
                        $query->where('id', $this->id);
                    })->sum('quantity');
        } elseif($this->subcategory->color) {
            return  ColorProduct::whereHas('product', function(Builder $query){
                        $query->where('id', $this->id);
                    })->sum('quantity');
        }else{

            return $this->quantity;

        }
        
    }

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

    //Relacion muchos a muchos
    public function colors()
    {
        // se agrega el metodo  withPivotpara que cargue la informacion de la tabla intermedia
        return $this->belongsToMany(Color::class)->withPivot('quantity', 'id');
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

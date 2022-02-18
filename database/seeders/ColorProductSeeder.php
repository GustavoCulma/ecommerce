<?php
//este seeder se ha creado para almacenar datos en la tavla intermedia
namespace Database\Seeders;

use Illuminate\Database\Seeder;
//consultas en los campos de una relacion
use Illuminate\Database\Eloquent\Builder;
//el modelo segun el cual queremos traer los datos
use App\Models\Product;

class ColorProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //filtro para consultar los campos de la subcategoria
        $products= Product::whereHas('subcategory', function (Builder $query) {
            $query->where('color', true)
                    ->where('size', false);
        })->get();

        foreach ($products as $product) {
            $product->colors()->attach([
                1=>['quantity'=>10],
                2=>['quantity'=>10],
                3=>['quantity'=>10],
                4=>['quantity'=>10]
            ]);
        }
    }
}

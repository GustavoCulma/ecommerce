<?php

namespace Database\Seeders;

//a traves de este seeder vanos a crear los registros de tallas para cierta cantidad de productos
use Illuminate\Database\Seeder;

//consultas a traves de
use Illuminate\Database\Eloquent\Builder;
use App\Models\Product;

class SizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products= Product::whereHas('subcategory', function (Builder $query) {
            $query->where('color', true)
                    ->where('size', true);
        })->get();

        //si los dos campos estan en true les agregamos talla
        $sizes =['Talla S','Talla M','Talla L',];
        foreach ($products as $product) {
            foreach ($sizes as $size) {
                $product->sizes()->create([
                    'name'=>$size
                ]);
            }
        }
    }
}

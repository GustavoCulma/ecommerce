<?php

namespace Database\Seeders;

use App\Models\Subcategory;
use Illuminate\Support\Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subcategories = [

            [
                'category_id' => 1,
                'name' =>'Celulares y smartphones',
                'slug'=> Str::slug('Celulares y smartphones'),
                'color' =>true

            ],
            [
                'category_id' => 1,
                'name' =>'Acessorios para celulares',
                'slug'=> Str::slug('Acessorios para celulares'),

            ],
            [
                'category_id' => 1,
                'name' =>'Smartwatches',
                'slug'=> Str::slug('Smartwatches'),
            ],

            /*TV y audio */

            [
                'category_id' => 2,
                'name' =>'TV y audio',
                'slug'=> Str::slug('TV y audio'),
            ],
            [
                'category_id' => 2,
                'name' =>'Audios',
                'slug'=> Str::slug('Audios'),
            ],
            [
                'category_id' => 2,
                'name' =>'Audio para autos',
                'slug'=> Str::slug('Audio para autos'),
            ],

            /*Consola y videojuegos*/

            [
                'category_id' => 3,
                'name' =>'xbox',
                'slug'=> Str::slug('xbox'),
            ],
            [
                'category_id' => 3,
                'name' =>'Play Station',
                'slug'=> Str::slug('Play Station'),
            ],
            [
                'category_id' => 3,
                'name' =>'Video Juegos para PC',
                'slug'=> Str::slug('Video Juegos para PC'),
            ],
            [
                'category_id' => 3,
                'name' =>'Nintendo',
                'slug'=> Str::slug('Nintendo'),
            ],
            /*Computación*/
            [
                'category_id' => 4,
                'name' =>'Portatiles',
                'slug'=> Str::slug('Portatiles'),
            ],
            [
                'category_id' => 4,
                'name' =>'PC escritorio',
                'slug'=> Str::slug('PC escritorio'),
            ],
            [
                'category_id' => 4,
                'name' =>'Almacenamiento',
                'slug'=> Str::slug('Almacenamiento'),
            ],
            [
                'category_id' => 4,
                'name' =>'Accesorios Computadoras',
                'slug'=> Str::slug('Accesorios Computadoras'),
            ],
            /*Moda*/
            [
                'category_id' => 5,
                'name' =>'Mujeres',
                'slug'=> Str::slug('Mujeres'),
                'color' =>true,
                'size' =>true
            ],
            [
                'category_id' => 5,
                'name' =>'Hombres',
                'slug'=> Str::slug('Hombres'),
                'color' =>true,
                'size' =>true
            ],
            [
                'category_id' => 5,
                'name' =>'Lentes',
                'slug'=> Str::slug('Lentes'),
            ],
            [
                'category_id' => 5,
                'name' =>'Relojes',
                'slug'=> Str::slug('Relojes'),
            ],
        ];
        foreach ($subcategories as $subcategory) {
            Subcategory::factory(1)->create($subcategory);
        }
    }
}

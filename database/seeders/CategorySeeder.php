<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [

            [
                'name' => 'Celulares y tablets',
                'slug'=> Str::slug('Celulares y tablets'),
                'icon' =>'<i class="fas fa-tablet-alt"></i>'
            ],

            [
                'name' => 'TV, audio y video',
                'slug' => Str::slug('TV, audio y video'),
                'icon' => '<i class="fas fa-tv"></i>'
            ],

            [
                'name' => 'Cosoloa y video juegos',
                'slug' => Str::slug('Cosoloa y video juegos'),
                'icon' => '<i class="fas fa-gamepad"></i>'
            ],
            [
                'name' => 'Computadores',
                'slug' => Str::slug('Computadores'),
                'icon' =>'<i class="fas fa-desktop"></i>'
            ],
            
            [
                'name' => 'moda',
                'slug' => Str::slug('moda'),
                'icon' =>'<i class="fas fa-tshirt"></i>'
            ],
           
        ];

        foreach ($categories as $category) {
            //con el metodo first recuperamos el primer registro, recuperamos el id 
            $category=Category::factory(1)->create($category)->first();

            //generando 4 registro de marcas
            $brands =Brand::factory(4)->create();
            //para que el metodo attach lo pueda introducir en la tabla itermedia.
            foreach ($brands as $brand) {
                $brand->categories()->attach($category->id);
            }
        }
    }
}

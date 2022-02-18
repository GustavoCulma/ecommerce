<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Subcategory;
use Illuminate\Database\Eloquent\Factories\Factory;
//para generar el metodo slug
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        //nombre con un rango maximo de dos palabras
        $name = $this->faker->sentence(2);
        //recuperar todas las subcategorias y ebniar una al azar
        $subcategory = Subcategory::all()->random();
        //recuperar la categoria relacionadas con esta subcategoria
        $category = $subcategory->category;
        //recuperar todas las marcas asociadas a esta categoria
        $brand =  $category->brands->random();
        //quantity
        if ($subcategory->color) {
            $quantity =null;
        } else {
            $quantity=15;
        }
        return [
            'name'=>$name,
            'slug'=> Str::slug($name),
            'description' => $this->faker->text(),
            //3 tipos de precio
            'price' => $this->faker->randomElement([19.99,49.99,99.99]),
            //recuperando el id
            'subcategory_id' => $subcategory->id,
            'brand_id'=> $brand ->id,
            'quantity'=>$quantity,
            //publicado
            'status'=>2,
        ];
    }
}

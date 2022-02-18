<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = Category::class;
    public function definition()
    {
        return [
            'image'=> 'categories/'.$this->faker->image('public/storage/categories', 640, 480, null, false)//image1.jpg
         ];
    }
}

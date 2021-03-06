<?php

namespace Database\Factories;

use App\Models\ShopList;
use Illuminate\Database\Eloquent\Factories\Factory;

class ShopListFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ShopList::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(),
            'content' => $this->faker->paragraph(),            
        ];
    }
}

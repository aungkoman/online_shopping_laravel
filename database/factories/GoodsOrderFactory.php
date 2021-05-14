<?php

namespace Database\Factories;

use App\Models\GoodsOrder;
use Illuminate\Database\Eloquent\Factories\Factory;

class GoodsOrderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = GoodsOrder::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'mmuser_id' => rand(1,5),
            'payment_address' => $this->faker->userName,
            'order_status_id' => rand(1,5)
        ];
    }
}

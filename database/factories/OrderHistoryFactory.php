<?php

namespace Database\Factories;

use App\Models\OrderHistory;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderHistoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = OrderHistory::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'goods_order_id' => rand(1,5),
            'order_status' => rand(1,5)
        ];
        /*
            $table->integer('order_id');
            $table->integer('order_status');
        */
    }
}

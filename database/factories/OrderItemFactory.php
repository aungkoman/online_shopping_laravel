<?php

namespace Database\Factories;

use App\Models\OrderItem;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderItemFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = OrderItem::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'goods_id' => rand(1,5),
            'color_id' => rand(1,5),
            'size_id' => rand(1,5),
            'quantity' => rand(1,5),
            'price' => rand(1,5),
            'cost' => rand(1,5),
            'goods_order_id' => rand(1,5),
        ];
        /*
            $table->integer('goods_id');
            $table->integer('color_id');
            $table->integer('size_id');
            $table->integer('quantity');
            $table->integer('price');
            $table->integer('cost');
            $table->integer('goods_order_id');
        */
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        

        \App\Models\Goods::factory(10)->create();
        \App\Models\Color::factory(10)->create();
        \App\Models\Size::factory(10)->create();
        \App\Models\Category::factory(10)->create();
        \App\Models\Photo::factory(10)->create();
        \App\Models\MmUser::factory(10)->create();
        \App\Models\Role::factory(3)->create();
        \App\Models\GoodsOrder::factory(3)->create();
        \App\Models\OrderItem::factory(10)->create();
        \App\Models\OrderHistory::factory(10)->create();
        \App\Models\OrderStatus::factory(10)->create();
        \App\Models\Brand::factory(10)->create();
        
        
    }
}

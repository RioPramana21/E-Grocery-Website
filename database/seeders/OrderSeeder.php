<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Order::factory()
        ->createMany([
        [
            'user_id' => 1,
            'item_id' => 1,
            'price' => 0
        ],
        [
            'user_id' => 2,
            'item_id' => 2,
            'price' => 0
        ],
        [
            'user_id' => 1,
            'item_id' => 3,
            'price' => 0
        ],
        [
            'user_id' => 2,
            'item_id' => 4,
            'price' => 0
        ],
      ]);
    }
}

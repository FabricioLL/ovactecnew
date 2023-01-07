<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'code' => '1',
            'name' => 'MEMORIA 64GB (32*2) DDR5 BUS 5600MHZ G.SKILL TRIDENT Z5 RGB',
            'stock' => '12',
            'sell_price' => '1659.80',
            'status' => 'ACTIVE',
            'category_id' => '2',
        ]);

        Product::create([
            'code' => '2',
            'name' => 'CPU INTEL CORE I9-13900K 24-CORE (8P+16E) 36MB',
            'stock' => '6',
            'sell_price' => '2779.20',
            'status' => 'ACTIVE',
            'category_id' => '1',
        ]);

        Product::create([
            'code' => '3',
            'name' => 'Razer Viper Mini negro',
            'stock' => '30',
            'sell_price' => '118.20',
            'status' => 'ACTIVE',
            'category_id' => '3',
        ]);

        Product::create([
            'code' => '4',
            'name' => 'Logitech G G333 K/DA',
            'stock' => '24',
            'sell_price' => '195.00',
            'status' => 'ACTIVE',
            'category_id' => '4',
        ]);
    }
}

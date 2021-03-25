<?php

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
     {
         $items = [
             [
                 'name' => 'Phones',
             ],
             [
                 'name' => 'Laptops',
             ],
             [
                 'name' => 'Vegetables',
             ],
             [
                 'name' => 'Clothes',
             ],
             [
                 'name' => 'Books',
             ],
             [
                 'name' => 'Cars',
             ]
         ];

         foreach ($items as $item) {
             \App\Models\Product::create($item);
         }
     }
}

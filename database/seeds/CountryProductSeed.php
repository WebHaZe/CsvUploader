<?php

use Illuminate\Database\Seeder;
use App\Models\CountryProduct;

class CountryProductSeed extends Seeder
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
                 'country_id' => 1,
                 'product_id' => 2,
                 'sales_channel' => 'rfrgeeg',
                 'order_priority' => 'ergg',
                 'order_date' => '2021-03-26',
                 'order_id' => 3434,
                 'ship_date' => '2021-03-19',
                 'units_sold' => 444,
                 'unit_price' => 5151,
                 'unit_cost' => 515155.515,
                 'total_revenue' => 151.155,
                 'total_cost' => 5.15,
                 'total_profit' => 15151.11
             ],
             [
                 'country_id' => 1,
                 'product_id' => 1,
                 'sales_channel' => 'rfrgeeg',
                 'order_priority' => 'ergg',
                 'order_date' => '2021-03-26',
                 'order_id' => 9999,
                 'ship_date' => '2021-03-19',
                 'units_sold' => 111,
                 'unit_price' => 5151,
                 'unit_cost' => 515155.515,
                 'total_revenue' => 151.155,
                 'total_cost' => 5.15,
                 'total_profit' => 15151.11
             ],
             [
                 'country_id' => 3,
                 'product_id' => 2,
                 'sales_channel' => 'rfrgeeg',
                 'order_priority' => 'ergg',
                 'order_date' => '2021-03-26',
                 'order_id' => 5678,
                 'ship_date' => '2021-03-19',
                 'units_sold' => 333,
                 'unit_price' => 5151,
                 'unit_cost' => 515155.515,
                 'total_revenue' => 151.155,
                 'total_cost' => 5.15,
                 'total_profit' => 15151.11
             ],
             [
                 'country_id' => 2,
                 'product_id' => 2,
                 'sales_channel' => 'rfrgeeg',
                 'order_priority' => 'ergg',
                 'order_date' => '2021-03-26',
                 'order_id' => 1234,
                 'ship_date' => '2021-03-19',
                 'units_sold' => 54752,
                 'unit_price' => 5151,
                 'unit_cost' => 515155.515,
                 'total_revenue' => 151.155,
                 'total_cost' => 5.15,
                 'total_profit' => 15151.11
             ],
         ];

         foreach ($items as $item) {
             \App\Models\CountryProduct::create($item);
         }
     }
}

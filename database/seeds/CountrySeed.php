<?php

use Illuminate\Database\Seeder;
use App\Models\Country;

class CountrySeed extends Seeder
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
                 'region_id' => 1,
                 'name' => 'Kyiv',
             ],
             [
                 'region_id' => 1,
                 'name' => 'Chernivtsi',
             ],
             [
                 'region_id' => 1,
                 'name' => 'London',
             ],
             [
                 'region_id' => 2,
                 'name' => 'New-York',
             ],
             [
                 'region_id' => 2,
                 'name' => 'Washington',
             ],
             [
                 'region_id' => 3,
                 'name' => 'Pekin',
             ],
         ];

         foreach ($items as $item) {
             \App\Models\Country::create($item);
         }
     }
}

<?php

use Illuminate\Database\Seeder;
use App\Models\Region;

class RegionSeed extends Seeder
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
                'name' => 'Europe',
            ],
            [
                'name' => 'America',
            ],
            [
                'name' => 'Asia',
            ]
        ];

        foreach ($items as $item) {
            \App\Models\Region::create($item);
        }
    }
}

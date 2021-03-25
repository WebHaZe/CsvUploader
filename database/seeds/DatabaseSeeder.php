<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $this->call(RegionSeed::class);
        $this->call(CountrySeed::class);
        $this->call(ProductSeed::class);
        $this->call(CountryProductSeed::class);
        
    }
}

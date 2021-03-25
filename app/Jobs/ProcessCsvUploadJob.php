<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Enum\CsvRules;
use App\Models\Country;
use App\Models\Region;
use App\Models\Product;
use App\Models\CountryProduct;

class ProcessCsvUploadJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $tries = 1;

    public $file;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(string $file)
    {
        $this->file = $file;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $data = file($this->file); //data from one file that was cutted

        foreach ($data as $index => $string) {
          $row = str_getcsv($string, CsvRules::SEPARATOR, CsvRules::ENCLOSURE, CsvRules::ESCAPE);

          //Check recorded or not this item in DB already
          $isRecorded = CountryProduct::where('order_id', $row[6])->get();
          if($isRecorded->isNotEmpty()){
            continue;
          }

          //Region
          $regionCheck = Region::where('name', $row[0])->get();
          if($regionCheck->isEmpty()){
            $newRegion = new Region();
            $newRegion->setName($row[0]);
            $newRegion->save();
          }

          //Country
          $countryCheck = Country::where('name', $row[1])->get();
          if($countryCheck->isEmpty()){
            $newCountry = new Country();
            $newCountry->setName($row[1]);
            $newCountry->setRegionId(Region::where('name', $row[0])->first()->getId());
            $newCountry->save();
          }

          //Product
          $productCheck = Product::where('name', $row[2])->get();
          if($productCheck->isEmpty()){
            $newProduct = new Product();
            $newProduct->setName($row[2]);
            $newProduct->save();
          }

          //CountryProduct
          $countryProduct = new CountryProduct();
          $countryProduct->setCountryId(Country::where('name', $row[1])->first()->getId());
          $countryProduct->setProductId(Product::where('name', $row[2])->first()->getId());
          $countryProduct->setSalesChannel($row[3]);
          $countryProduct->setOrderPriority($row[4]);
          $countryProduct->setOrderDate($row[5]);
          $countryProduct->setOrderId($row[6]);
          $countryProduct->setShipDate($row[7]);
          $countryProduct->setUnitsSold($row[8]);
          $countryProduct->setUnitPrice($row[9]);
          $countryProduct->setUnitCost($row[10]);
          $countryProduct->setTotalRevenue($row[11]);
          $countryProduct->setTotalCost($row[12]);
          $countryProduct->setTotalProfit($row[13]);
          $countryProduct->save();
        }
    }
}

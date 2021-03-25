<?php

namespace App\Models\Parser;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;
use App\Jobs\ProcessCsvUploadJob;

class CsvManager extends Model
{

  public static function titlesValidator(array $titles): bool
  {
    $confirmedTitles = [
      0 => "Region",
      1 => "Country",
      2 => "Item Type",
      3 => "Sales Channel",
      4 => "Order Priority",
      5 => "Order Date",
      6 => "Order ID",
      7 => "Ship Date",
      8 => "Units Sold",
      9 => "Unit Price",
      10 => "Unit Cost",
      11 => "Total Revenue",
      12 => "Total Cost",
      13 => "Total Profit"
    ];

    $diff = array_diff($confirmedTitles, $titles);

    if(!empty($diff)){
      foreach ($diff as $key => $name) {
        Log::error("Title of column №".($key + 1)." is not correct. Unexpected column name".
                  (array_key_exists($key, $titles) ? " \"".$titles[$key]."\"" : '. Column does not exist in uploaded file').". Expected ".
                  (array_key_exists($key, $confirmedTitles) ? "\"".$confirmedTitles[$key]."\"" : 'empty column name').
                  ".");
      }

      return false;
    }
    return true;
  }

  public static function importToDb()
  {
    $path = resource_path('pending-files/*.csv');
    $files = glob($path);

    foreach ($files as $file) {
      ProcessCsvUploadJob::dispatch($file);
    }
  }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Region;
use App\Models\Product;
use App\Models\CountryInterface;

class Country extends Model implements CountryInterface
{
    public $timestamps = false;

    public function region()
    {
      return $this->belongsTo(Region::class);
    }

    public function products()
    {
      return $this->belongsToMany(Product::class);
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getRegion(): Region
    {
        return $this->region;
    }

    public function setRegionId(int $id): void
    {
        $this->region_id = $id;
    }
}

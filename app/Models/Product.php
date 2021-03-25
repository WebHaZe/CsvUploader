<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;
use App\Models\Country;
use App\Models\ProductInterface;

class Product extends Model implements ProductInterface
{
    public $timestamps = false;

    public function countries()
    {
      return $this->belongsToMany(Country::class);
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

    public function getCountries(): ?Collection
    {
        return $this->countries;
    }
}

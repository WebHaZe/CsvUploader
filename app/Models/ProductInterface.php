<?php

namespace App\Models;
use App\Models\Region;
use Illuminate\Database\Eloquent\Collection;

interface ProductInterface
{
    public function getId(): int;

    public function setId(int $id): void;

    public function getName(): string;

    public function setName(string $name): void;

    public function getCountries(): ?Collection;
}

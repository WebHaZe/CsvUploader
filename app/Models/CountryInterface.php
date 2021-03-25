<?php

namespace App\Models;
use App\Models\Region;

interface CountryInterface
{
    public function getId(): int;

    public function setId(int $id): void;

    public function getName(): string;

    public function setName(string $name): void;

    public function getRegion(): Region;

    public function setRegionId(int $id): void;
}

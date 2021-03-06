<?php

namespace App\Models;

interface RegionInterface
{
    public function getId(): int;

    public function setId(int $id): void;

    public function getName(): string;

    public function setName(string $name): void;
}

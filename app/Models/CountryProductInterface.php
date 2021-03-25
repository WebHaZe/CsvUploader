<?php

namespace App\Models;

interface CountryProductInterface
{
    public function setCountryId(int $id): void;

    public function setProductId(int $id): void;

    public function getSalesChannel(): string;

    public function setSalesChannel(string $sales_channel): void;

    public function getOrderPriority(): string;

    public function setOrderPriority(string $order_priority): void;

    public function getOrderDate(): string;

    public function setOrderDate(string $order_date): void;

    public function getOrderId(): int;

    public function setOrderId(int $order_id): void;

    public function getShipDate(): string;

    public function setShipDate(string $ship_date): void;

    public function getUnitsSold(): int;

    public function setUnitsSold(int $units_sold): void;

    public function getUnitPrice(): float;

    public function setUnitPrice(float $unit_price): void;

    public function getUnitCost(): float;

    public function setUnitCost(float $unit_cost): void;

    public function getTotalRevenue(): float;

    public function setTotalRevenue(float $total_revenue): void;

    public function getTotalCost(): float;

    public function setTotalCost(float $total_cost): void;

    public function getTotalProfit(): float;

    public function setTotalProfit(float $total_profit): void;
}

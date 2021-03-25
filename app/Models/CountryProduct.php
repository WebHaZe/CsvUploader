<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\CountryProductInterface;

class CountryProduct extends Model implements CountryProductInterface
{
   public $table = 'country_product';

   public function setCountryId(int $id): void
   {
       $this->country_id = $id;
   }

   public function setProductId(int $id): void
   {
       $this->product_id = $id;
   }

   public function getSalesChannel(): string
   {
       return $this->sales_channel;
   }

   public function setSalesChannel(string $sales_channel): void
   {
       $this->sales_channel = $sales_channel;
   }

   public function getOrderPriority(): string
   {
       return $this->order_priority;
   }

   public function setOrderPriority(string $order_priority): void
   {
       $this->order_priority = $order_priority;
   }

   public function getOrderDate(): string
   {
       return $this->order_date;
   }

   public function setOrderDate(string $order_date): void
   {
       $this->order_date = $order_date;
   }

   public function getOrderId(): int
   {
       return $this->order_id;
   }

   public function setOrderId(int $order_id): void
   {
       $this->order_id = $order_id;
   }

   public function getShipDate(): string
   {
       return $this->ship_date;
   }

   public function setShipDate(string $ship_date): void
   {
       $this->ship_date = $ship_date;
   }

   public function getUnitsSold(): int
   {
       return $this->units_sold;
   }

   public function setUnitsSold(int $units_sold): void
   {
       $this->units_sold = $units_sold;
   }

   public function getUnitPrice(): float
   {
       return $this->unit_price;
   }

   public function setUnitPrice(float $unit_price): void
   {
       $this->unit_price = $unit_price;
   }

   public function getUnitCost(): float
   {
       return $this->unit_cost;
   }

   public function setUnitCost(float $unit_cost): void
   {
       $this->unit_cost = $unit_cost;
   }

   public function getTotalRevenue(): float
   {
       return $this->total_revenue;
   }

   public function setTotalRevenue(float $total_revenue): void
   {
       $this->total_revenue = $total_revenue;
   }

   public function getTotalCost(): float
   {
       return $this->total_cost;
   }

   public function setTotalCost(float $total_cost): void
   {
       $this->total_cost = $total_cost;
   }

   public function getTotalProfit(): float
   {
       return $this->total_profit;
   }

   public function setTotalProfit(float $total_profit): void
   {
       $this->total_profit = $total_profit;
   }
}

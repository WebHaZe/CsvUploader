<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCountryProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('country_product', function (Blueprint $table) {
            $table->smallInteger('country_id')->unsigned();
            $table->integer('product_id')->unsigned();
            $table->string('sales_channel', 20);
            $table->string('order_priority', 20);
            $table->string('order_date', 20);
            $table->integer('order_id')->unique()->unsigned();
            $table->string('ship_date', 20);
            $table->integer('units_sold')->unsigned();
            $table->double('unit_price', 10, 2)->unsigned();
            $table->double('unit_cost', 10, 2)->unsigned();
            $table->double('total_revenue', 10, 2)->unsigned();
            $table->double('total_cost', 10, 2)->unsigned();
            $table->double('total_profit', 10, 2)->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('country_product');
    }
}

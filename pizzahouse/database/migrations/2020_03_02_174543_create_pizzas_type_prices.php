<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePizzasTypePrices extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*
        | ALTER TABLE `pizzahouse`.`pizzas_type_prices` ADD INDEX (`name`);
        */

        Schema::create('pizzas_type_prices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            //$table->index('name');
            $table->float('price');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pizzas_type_prices');
    }
}

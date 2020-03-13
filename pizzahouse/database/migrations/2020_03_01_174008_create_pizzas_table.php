<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePizzasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*
        | ALTER TABLE `pizzas` ADD CONSTRAINT `pType` FOREIGN KEY (`type`) 
        REFERENCES `pizzas_type_prices` (`name`);
        */
        Schema::create('pizzas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('base');
            $table->string('type');
            //$table->foreign('type')->references('pizzas_type_prices')->on('name');
            $table->json('toppings');
            //$table->float('price');
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
        Schema::dropIfExists('pizzas');
    }
}

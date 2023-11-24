<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('card_details', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('sale_id')->unsigned(); // Corrección aquí
            $table->foreign('sale_id')->references('id')->on('sales')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('cardNumber');
            $table->date('expirationDate');
            $table->string('cvv');
            $table->bigInteger('type_id')->unsigned(); // Corrección aquí
            $table->foreign('type_id')->references('id')->on('card_types')->onDelete('cascade')->onUpdate('cascade');
            $table->string('holder');
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
        Schema::dropIfExists('card_details');
    }
};

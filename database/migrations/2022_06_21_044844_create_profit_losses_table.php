<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfitLossesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profit_losses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('month_year');
            $table->integer('Qty');
            $table->bigInteger('Total');
            $table->integer('Rate');
            $table->integer('Type');
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
        Schema::dropIfExists('profit_losses');
    }
}

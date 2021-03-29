<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionSubTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaction_sub', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('transaction_id');
            $table->string('subject');
            $table->string('standard');
            $table->smallInteger('quantity');
            $table->integer('unit_price');
            $table->integer('supply_price');
            $table->integer('tax_amount');
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
        Schema::dropIfExists('transaction_sub');
    }
}

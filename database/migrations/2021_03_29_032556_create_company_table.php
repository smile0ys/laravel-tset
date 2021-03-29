<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('ceo', 20);
            $table->tinyInteger('tel_1');
            $table->tinyInteger('tel_2');
            $table->tinyInteger('tel_3');
            $table->string('email');
            $table->tinyInteger('post');
            $table->string('addr_1');
            $table->string('addr_2');
            $table->string('addr_detail');
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
        Schema::dropIfExists('company');
    }
}

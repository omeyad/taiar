<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDelivariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('delivaries', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('phone')->unique();
            $table->string('address');
            $table->string('job');
            $table->string('nid');
            $table->string('delivary');
            $table->date('birthDate');
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('delivaries');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('direction');
            $table->time('allowedTime');
            $table->unsignedInteger('delivary_forginKey');
            $table->foreign('delivary_forginKey')->references('id')->on('delivaries');
            $table->unsignedInteger('supplier_forginKey');
            $table->foreign('supplier_forginKey')->references('id')->on('suppliers');
            $table->softDeletes();
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
        Schema::dropIfExists('orders');
    }
}

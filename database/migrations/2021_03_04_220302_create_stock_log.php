<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStockLog extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stock_log', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_stock')->constrained('stock');
            $table->integer('log_type')->default(0); // 0 IN 1 OUT
            $table->integer('stock_mov');
            $table->integer('stock_mov_type');
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
        Schema::dropIfExists('stock_log');
    }
}

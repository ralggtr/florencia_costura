<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->unsignedBigInteger('id_user')->nullable();

            $table->foreignId('customer_id')
                    ->constrained()
                    ->onDelete('cascade');

            $table->date('sent')->nullable();
            $table->date('delivered')->nullable();
            $table->integer('status')->default(0);  // 0:PREPARING 1:SENT 2:DELIVERED/PAID 3:DELIVERED/UNPAID 4:CANCELLED
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

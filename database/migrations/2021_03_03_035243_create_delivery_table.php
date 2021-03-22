<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeliveryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('delivery', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_order')->constrained('orders');
            $table->foreignId('id_customer')->constrained('customers');
            $table->bigInteger('items_amount')->nullable();
            $table->bigInteger('delivery_cost')->nullable();
            $table->bigInteger('amount_due')->nullable();
            $table->bigInteger('amount_paid')->nullable();
            $table->bigInteger('delivery_payment')->nullable();
            $table->integer('id_zone')->default(0);
            $table->integer('id_delivery_type');  // 0 NORMAL DELIVERY 1 CUSTOMER PICKUP 2 LOCAL SHIPPING 3 INTERNATIONAL SHIPPING 4 OTHER
            $table->string('delivery_address');
            $table->string('phone')->nullable();
            $table->string('comments')->nullable();
            $table->datetime('delivery_date')->nullable();
            $table->datetime('delivered_at')->nullable();
            $table->integer('status')->default(0); //0 PENDING 1 DELIVERED 3 NO ANSWER 4 RETURN 5 REJECTED BY CUSTOMER 6 MORE ITEMS PURCHASED
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
        Schema::dropIfExists('delivery');
    }
}

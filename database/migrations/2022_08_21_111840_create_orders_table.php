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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->integer('order_id')->unsigned()->index();
            $table->string('customers_name');
            $table->string('email');
            $table->text("customers_address");
            $table->string('state');
            $table->string("cart_items");
            $table->string("phone_no");
            $table->text('additional_info');
            $table->string("payment_status");
            $table->string("order_status");
            $table->string("payment_type");
            $table->string("transaction_ref");
            $table->integer("amount");
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
};

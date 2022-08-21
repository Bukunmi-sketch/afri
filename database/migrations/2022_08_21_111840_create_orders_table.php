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
            $table->integer('userid')->unsigned()->index();
            $table->string('customers_name');
            $table->string('email');
            $table->text("customers_address");
            $table->string('state');
            $table->string("cart_items");
            $table->integer("phone_no");
            $table->text('additional_info');
            $table->string("payment_status");
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

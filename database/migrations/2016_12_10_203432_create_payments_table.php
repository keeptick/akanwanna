<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->increments('id');
            $table->string("trans_ref");
            $table->string("description");
            $table->string("payment_ref");
            $table->string("return_ref");
            $table->string("card_num");
            $table->string("amount");
            $table->string("cust_id");
            //$table->string("")
            $table->string("payment_method");
            $table->enum("status",array("verified","initiated","processing","closed","pending","canceled"));
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
        Schema::drop('payments');
    }
}

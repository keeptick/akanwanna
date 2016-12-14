<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->increments('id');
            $table->string("trans_ref",25);
            $table->string("trans_type",225);
            $table->integer("item_id");
            $table->integer("member_id");
            $table->string("ip_address");
            $table->string("item_name",10,2);
            $table->string("description",500);
            $table->decimal("amount",10,2);
            $table->decimal("tax",10,2);
            $table->decimal("discount",10,2);
            $table->decimal("commission",10,2);
            $table->decimal("subtotal",10,2);
            $table->decimal("total",10,2);
            $table->enum("status",array("initiated","pending","processing","suspended","canceled","delivered","completed"));
            $table->string("view");
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
        Schema::drop('transactions');
    }
}

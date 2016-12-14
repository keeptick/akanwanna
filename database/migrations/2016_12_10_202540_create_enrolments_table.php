<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades;

class CreateEnrolmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create("enrolments",function(Blueprint $table){
            $table->increments('id');
            $table->string("member_id");
            $table->string("membership_id");
            $table->string("name_of_reporting_staff");
            $table->string("phone_of_reporting_staff");
            $table->string("email_of_reporting_staff");
            $table->string("narration");
            $table->string("cv");
            $table->string("cert1");
            $table->string("cert2");
            $table->string("cert3");
            $table->enum("status",array("enrolled","verified","disapproved"));
            $table->tinyInteger("view_status");
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
        //
        Schema::drop("members");
    }
}

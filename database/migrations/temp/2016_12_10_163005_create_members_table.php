<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('members', function (Blueprint $table) {
            //
            $table->increments('id');
            $table->string("first_name");
            $table->string("last_name");
            $table->string("other_name");
            $table->string("email");
            $table->string("password");
            $table->string("phone");
            $table->string("dob");
            $table->string("department");
            $table->string("gender");
            $table->string("sda_union");
            $table->string("sda_conference");
            $table->string("sda_district");
            $table->string("sda_church");
            $table->string("nationality");
            $table->string("address");
            $table->string("city");
            $table->string("state");
            $table->string("country");
            $table->string("company");
            $table->string("image");
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
            Schema::drop('members');
    }
}

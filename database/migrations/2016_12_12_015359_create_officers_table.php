<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOfficersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('officers', function(Blueprint $table){

            $table->increments('id');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('othername')->nullable();
            $table->string('email')->unique();
            $table->string('phone');
            $table->string('image')->nullable();
            $table->string('department');
            $table->string('position');
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
        Schema::drop('officers');
    }
}

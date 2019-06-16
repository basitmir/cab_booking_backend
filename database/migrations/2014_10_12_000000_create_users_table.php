<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id', 11);
            $table->string('email')->unique();
            $table->string('password',500);
            $table->string('userName',50); 
            $table->string('city',90)->nullable();
            $table->string('state',20)->nullable();
            $table->string('zip',12)->nullable();
            $table->string('phone',20);
            $table->string('whichUser')->nullable();
            $table->string('country',20)->nullable();
            $table->string('address',100)->nullable();
            $table->string('address2',50)->nullable();
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
        Schema::dropIfExists('users');
    }
}

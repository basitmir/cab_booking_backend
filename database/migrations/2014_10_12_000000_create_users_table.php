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
            $table->string('password',500)->nullable();
            $table->string('userName',50)->nullable();
            $table->string('city',90)->nullable();
            $table->string('state',20)->nullable();
            $table->string('zip',12)->nullable();
            $table->boolean('active')->default(false);
            $table->string('activation_token')->nullable();
            $table->string('phone',20)->nullable();
            $table->string('whichUser')->nullable();
            $table->string('image',20)->nullable();
            $table->boolean('isAvailable')->default(true);
            $table->string('country',20)->nullable();
            $table->string('address',100)->nullable();
            $table->string('address2',50)->nullable();
            $table->string('cabNumber',50)->nullable();
            $table->UnsignedInteger('age')->nullable();
            $table->float('experience')->nullable();
            $table->string('gender',50)->nullable();
            $table->UnsignedInteger('vacancy')->nullable();
            $table->timestamps();
            $table->softDeletes();
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

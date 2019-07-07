<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->increments('id', 11);
            $table->UnsignedInteger('bookingUserId');
            $table->foreign('bookingUserId')->references('id')->on('users');
            $table->UnsignedInteger('driverAssignedId');
            $table->foreign('driverAssignedId')->references('id')->on('users');
            $table->FLOAT('bookingAmount');
            $table->string('bookingName', 100);
            $table->string('bookingAddressFrom', 100);
            $table->string('bookingAddressTo', 100);
            $table->string('bookingCity', 50);
            $table->string('bookingState', 50);
            $table->string('bookingZip', 20);
            $table->string('bookingCountry', 50);
            $table->string('bookingPhone', 20);
            $table->string('bookingPaymentStatus', 100);
            $table->tinyinteger('bookingShipped');
            $table->string('bookingTrackingNumber', 80);
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
        Schema::dropIfExists('bookings');
    }
}

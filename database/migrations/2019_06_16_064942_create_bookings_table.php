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
            $table->FLOAT('bookingAmount')->nullable();
            $table->string('bookingName', 100)->nullable();
            $table->string('bookingLandmark', 200)->nullable();
            $table->string('bookingTripType', 50)->nullable();
            $table->string('date', 50)->nullable();
            $table->string('time', 50)->nullable();
            $table->string('bookingAddressFrom', 300)->nullable();
            $table->string('bookingAddressTo', 300)->nullable();
            $table->string('bookingCity', 50)->nullable();
            $table->string('bookingState', 50)->nullable();
            $table->string('bookingZip', 20)->nullable();
            $table->string('bookingCountry', 50)->nullable();
            $table->string('status', 50)->default('incomplete');
            $table->bigInteger('bookingPhone')->nullable();;
            $table->string('bookingPaymentStatus', 100)->nullable();
            $table->tinyinteger('bookingShipped')->nullable();
            $table->string('bookingTrackingNumber', 80)->nullable();
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

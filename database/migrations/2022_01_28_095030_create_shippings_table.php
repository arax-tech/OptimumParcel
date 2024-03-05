<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShippingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shippings', function (Blueprint $table) {
            $table->id();
            $table->string('trcaking_id')->nullable();
            $table->string('track_your_goods')->nullable();
            $table->string('track_your_transfer')->nullable();
            $table->string('track_your_transfer_by_region_lock_code')->nullable();
            $table->integer('user_id')->nullable();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('from_location')->nullable();
            $table->string('to_location')->nullable();
            $table->string('height')->nullable();
            $table->string('width')->nullable();
            $table->string('depth')->nullable();
            $table->string('weight')->nullable();
            $table->string('shipping_charges')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('shoippings');
    }
}

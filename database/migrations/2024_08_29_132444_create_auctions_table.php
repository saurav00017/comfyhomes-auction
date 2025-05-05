<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuctionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auctions', function (Blueprint $table) {
            $table->id();
            $table->string('state');
            $table->string('district');
            $table->string('taluka');
            $table->string('bank_name');
            $table->string('price');
            $table->string('property_price');
            $table->string('reserve_price');
            $table->string('emd_amount');
            $table->string('bid_increment');
            $table->string('emd_submission');
            $table->string('auction_start_datetime');
            $table->string('auction_end_datetime');
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
        Schema::dropIfExists('auctions');
    }
}

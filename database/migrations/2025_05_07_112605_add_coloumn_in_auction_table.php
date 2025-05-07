<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColoumnInAuctionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('auctions', function (Blueprint $table) {
            $table->string('borrower_name')->nullable()->after('bank_name');
            $table->text('branch_address')->nullable()->after('borrower_name');
            $table->string('bank_contact_name')->nullable()->after('branch_address');
            $table->string('bank_contact_email')->nullable()->after('bank_contact_name');
            $table->string('bank_contact_phone')->nullable()->after('bank_contact_email');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('auction', function (Blueprint $table) {
            //
        });
    }
}

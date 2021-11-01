<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblTransHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_trans_history', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('txn_hash', 100);
            $table->string('from_currency', 50)->nullable();
            $table->string('to_currency', 50)->nullable();
            $table->string('user_addr', 100)->nullable();
            $table->decimal('from_amt', 40, 8)->nullable();
            $table->decimal('to_amt', 40, 8)->nullable();
            $table->string('contract_type', 100)->nullable();
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
        Schema::dropIfExists('tbl_trans_history');
    }
}

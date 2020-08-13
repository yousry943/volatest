<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions_requests', function (Blueprint $table) {
            $table->increments('id');



            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->integer('from_user_bank_account_id')->unsigned();
            $table->foreign('from_user_bank_account_id')->references('id')->on('user_bank_accounts')->onDelete('cascade');
            $table->integer('to_user_bank_account_id')->unsigned();
            $table->foreign('to_user_bank_account_id')->references('id')->on('user_bank_accounts')->onDelete('cascade');
            $table->string('amount');
            $table->string('date');



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
        Schema::dropIfExists('transactions_requests');
    }
}

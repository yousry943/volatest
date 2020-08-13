<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserBankAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_bank_accounts', function (Blueprint $table) {
          $table->increments('id');

            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->integer('bank_id')->unsigned();
           $table->foreign('bank_id')->references('id')->on('banks')->onDelete('cascade');


           $table->integer('currency_id')->unsigned();
           $table->foreign('currency_id')->references('id')->on('currency_accounts')->onDelete('cascade');

           $table->integer('type_account_id')->unsigned();
           $table->foreign('type_account_id')->references('id')->on('type_accounts')->onDelete('cascade');

           $table->string('account_name');
           $table->string('status');
           $table->string('total_deposit');




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
        Schema::dropIfExists('user_bank_accounts');
    }
}

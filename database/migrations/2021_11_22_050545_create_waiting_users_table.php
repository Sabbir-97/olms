<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWaitingUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('waiting_users', function (Blueprint $table) {
            $table->id();
            $table->string('user_name');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('password');
            $table->string('contact_no');
            $table->string('email_address');
            $table->string('date_of_birth');
            $table->string('gender');
            $table->string('religion');
            $table->string('payment_method');
            $table->string('transaction_id');
            $table->string('approve');
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
        Schema::dropIfExists('waiting_users');
    }
}

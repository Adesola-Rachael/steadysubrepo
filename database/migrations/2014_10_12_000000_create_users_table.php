<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('type')->default('0');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('phone');
            $table->string('image', 225)->nullable();
            $table->float('account_no', 20, 4)->nullable();
            $table->string('pin', 225)->nullable();
            $table->float('balance', 20)->unsigned()->nullable()->default(0);
            $table->float('spent', 20)->nullable()->default(0);
            $table->string('referral_link', 225)->nullable();
            $table->string('referred_by', 225)->nullable();
            $table->string('bank_name1', 225)->nullable();
            $table->string('account_name1', 225)->nullable();
            $table->string('account_number1', 225)->nullable();
            $table->string('bank_name2', 225)->nullable();
            $table->string('account_name2', 225)->nullable();
            $table->string('account_number2', 225)->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};

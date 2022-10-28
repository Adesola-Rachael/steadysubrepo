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
        Schema::create('dataprices', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('plan_id')->nullable();
            $table->string('name');
            $table->string('network', 50)->nullable();
            $table->float('actual_price', 20)->nullable()->default(0);
            $table->float('set_price', 20)->nullable()->default(0);
            $table->integer('percent')->nullable();
            $table->boolean('status')->default(true);
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
        Schema::dropIfExists('dataprices');
    }
};

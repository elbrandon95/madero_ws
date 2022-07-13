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
        Schema::create('trips', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->string('currency_code');
            $table->string('timezone');
            $table->integer('starts_at');
            $table->integer('ends_at');
            $table->float('amount');
            $table->float('pu_latitude');
            $table->float('pu_longitude');
            $table->string('pu_address');
            $table->float('do_latitude');
            $table->float('do_longitude');
            $table->string('do_address');
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
        Schema::dropIfExists('trips');
    }
};

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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('company', 100)->default('Trenitalia');
            $table->string('from_station', 100);
            $table->string('to_station', 100);
            $table->dateTime('departure');
            $table->dateTime('arrival');
            $table->integer('train_code')->unique();
            $table->tinyInteger('coaches_number');
            $table->boolean('on_time')->nullable();
            $table->boolean('cancelled')->nullable();
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
        Schema::dropIfExists('train');
    }
};

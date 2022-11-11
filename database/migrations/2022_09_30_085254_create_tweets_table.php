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
        Schema::create('tweets', function (Blueprint $table) {
            $table->id();
            $table->string('gift');
            $table->string('present');
            $table->string('relation');
            $table->string('age');
            $table->string('situation');
            $table->string('detail')->nullable();
            $table->unsignedBigInteger('ratedata')->default(0);
            $table->unsignedBigInteger('rateParameter')->default(0);
            $table->string('rate')->default(0);
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
        Schema::dropIfExists('tweets');
    }
};

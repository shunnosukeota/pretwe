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
        Schema::create('ratings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('raterId');
            $table->string('raterSex')->nullable();
            $table->string('raterAge')->nullable();
            $table->unsignedBigInteger('raterRate');
            $table->string('comment')->nullable();
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
        Schema::dropIfExists('ratings');
        
        Schema::dropForeign('ratings_user_id_foreign');
        Schema::dropColumn('user_id');
        
    }
};

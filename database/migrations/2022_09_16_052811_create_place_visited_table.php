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
        Schema::create('place_visited', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('tourist_place_id');
            $table->date('visit_date');
            $table->timestamps();
            $table->foreign("user_id")
                ->references("id")
                ->on("user");
            $table->foreign("tourist_place_id")
                ->references("id")
                ->on("tourist_place");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('place_visited');
    }
};

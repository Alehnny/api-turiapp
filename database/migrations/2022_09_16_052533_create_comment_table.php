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
        Schema::create('comment', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tourist_place_id');
            $table->unsignedBigInteger('user_id');
            $table->string('description');
            $table->integer('value');
            $table->boolean('show');
            $table->timestamps();
            $table->foreign("tourist_place_id")
                ->references("id")
                ->on("tourist_place");
            $table->foreign("user_id")
                ->references("id")
                ->on("user");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comment');
    }
};

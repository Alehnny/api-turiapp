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
        Schema::create('tourist_place', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('department_id');
            $table->unsignedBigInteger('town_id');
            $table->string('tourist_place_name');
            $table->string('description');
            $table->string('adress');
            $table->boolean('is_active');
            $table->timestamps();
            $table->foreign("user_id")
                ->references("id")
                ->on("user");
            $table->foreign("department_id")
                ->references("id")
                ->on("department");
            $table->foreign("town_id")
                ->references("id")
                ->on("town");
        });

        Schema::table('price', function (Blueprint $table) {
            $table->foreign("tourist_place_id")
                ->references("id")
                ->on("tourist_place");
        });
        Schema::table('schedule', function (Blueprint $table) {
            $table->foreign("tourist_place_id")
                ->references("id")
                ->on("tourist_place");
        });
        Schema::table('tourist_place_pic', function (Blueprint $table) {
            $table->foreign("tourist_place_id")
                ->references("id")
                ->on("tourist_place");
        });
        Schema::table('favorite_place', function (Blueprint $table) {
            $table->foreign("tourist_place_id")
                ->references("id")
                ->on("favorite_place");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tourist_place');
    }
};

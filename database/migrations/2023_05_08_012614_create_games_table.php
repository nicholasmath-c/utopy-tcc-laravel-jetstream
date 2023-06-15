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
        Schema::create('games', function (Blueprint $table) {
            //------- PK & FK
            $table->id();
            $table->unsignedBigInteger('developer_id');
            $table
                ->foreign('developer_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

            $table->unsignedBigInteger('genre_game_id');
            $table
                ->foreign('genre_game_id')
                ->references('id')
                ->on('genre_games')
                ->onDelete('cascade');

            //------- Comuns
            $table->string('title');
            $table->string('short_description', 255);
            $table->text('long_description');
            $table->string('thumb', 100);
            $table->string('banner', 100);
            $table->double('price', 5, 2);
            $table->double('discount', 5, 2)->nullable()->default(0.00);
            $table->double('final_price', 5, 2)->nullable()->default(0.00);
            $table->date('release_date');
            $table->string('age_rating', 3);
            $table->boolean('status_game')->default(true);
            $table->string('game_file_path', 100);
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
        Schema::dropIfExists('games');
    }
};

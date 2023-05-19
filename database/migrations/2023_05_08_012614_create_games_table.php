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
                ->on('developers')
                ->onDelete('cascade');

            $table->unsignedBigInteger('genre_game_id');
            $table
                ->foreign('genre_game_id')
                ->references('id')
                ->on('genre_games')
                ->onDelete('cascade');

            //------- Comuns
            $table->string('title');
            $table->text('description');
            $table->string('image', 100);
            $table->double('price', 5, 2);
            $table->date('release_date');
            $table->string('age_rating', 3);
            $table->boolean('status_game')->default(true);
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

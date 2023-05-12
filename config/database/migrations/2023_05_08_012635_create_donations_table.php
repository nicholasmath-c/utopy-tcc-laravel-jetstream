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
        Schema::create('donations', function (Blueprint $table) {
            //------- PK & FK
            $table->id();
            $table->timestamps();
            $table->bigInteger('game_id')->unsigned();
            $table
                ->foreign('game_id')
                ->references('id')
                ->on('games')
                ->onDelete('cascade');

            //------- Comuns
            $table->text('message')->nulable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('donations');
    }
};

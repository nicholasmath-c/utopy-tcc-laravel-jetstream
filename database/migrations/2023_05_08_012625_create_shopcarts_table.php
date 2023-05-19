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
        // TODO: CRIAR MIGRATION
        Schema::create('shopcarts', function (Blueprint $table) {
            //------- PK & FK
            $table->id();

            //------- Comuns
            $table->unsignedBigInteger('user_id');
            $table->integer('game_id');
            $table->integer('quantity');
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
        Schema::dropIfExists('shopcarts');
    }
};

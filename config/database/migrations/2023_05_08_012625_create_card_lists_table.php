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
        Schema::create('card_lists', function (Blueprint $table) {
            //------- PK & FK
            $table->id();
            $table->timestamps();



            //------- Comuns
            $table->json('games');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('card_lists');
    }
};

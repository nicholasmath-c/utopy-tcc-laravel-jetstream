<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('order_items', function (Blueprint $table) {
           //------- PK & FK
           $table->id();
           $table->unsignedBigInteger('order_id');
           $table->foreign('order_id')->references('id')->on('orders');
           $table->unsignedBigInteger('game_id');
           $table->foreign('game_id')->references('id')->on('games');

           //------- Comuns
           $table->dateTime('data_item');
           $table->decimal('valor', 5, 2);
           $table->integer('quantidade');
           $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_items');
    }
};

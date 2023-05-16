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
        Schema::create('requeriments_recommended', function (Blueprint $table) {
             //------- PK & FK
             $table->id();
             $table->timestamps();
             $table->unsignedBigInteger('game_id');



             //------- Comuns
             $table->string('os', 30);
             $table->string('cpu', 30);
             $table->string('ram', 30);
             $table->string('gpu', 30);
             $table->string('storage', 30);

             $table
                 ->foreign('game_id')
                 ->references('id')
                 ->on('games')
                 ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('requeriments_recommended');
    }
};

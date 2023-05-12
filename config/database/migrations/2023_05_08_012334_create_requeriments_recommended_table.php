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
        // TODO: Criar a migration
        Schema::create('requeriments_recommended', function (Blueprint $table) {
            //------- PK & FK
            $table->id();
            $table->timestamps();


            //------- Comuns
            $table->string('os', 30);
            $table->string('cpu', 30);
            $table->string('ram', 30);
            $table->string('gpu', 30);
            $table->string('storage', 30);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('requeriments_recommended');
    }
};

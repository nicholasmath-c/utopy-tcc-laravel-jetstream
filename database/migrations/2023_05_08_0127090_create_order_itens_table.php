<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    public function up()
    {
        Schema::create('order_itens', function (Blueprint $table) {
            //------- PK & FK
            $table->id();
            $table->unsignedBigInteger('order_id');
            $table
                ->foreign('order_id')
                ->references('id')
                ->on('orders');
            $table->unsignedBigInteger('game_id');
            $table
                ->foreign('game_id')
                ->references('id')
                ->on('games');


            //------- Comuns
            $table->dateTime('data_item');
            $table->decimal('valor', 5, 2);
            $table->integer('quantidade', 3);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('order_itens');
    }
}

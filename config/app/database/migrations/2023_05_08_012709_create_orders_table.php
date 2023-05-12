<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            //------- PK & FK
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table
                ->foreign('user_id')
                ->references('id')
                ->on('users');


            //------- Comuns
            $table->decimal('total_amount', 10, 2);
            $table->string('status');
            $table->timestamps();

        });
    }

    public function down()
    {
        Schema::dropIfExists('orders');
    }
}

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
        Schema::create('payments', function (Blueprint $table) {
            //------- PK & FK
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table
            ->foreign('user_id')
            ->references('id')
            ->on('users');
            $table->unsignedBigInteger('order_id');
            $table
                ->foreign('order_id')
                ->references('id')
                ->on('orders');


            //------- Comuns
            $table->string('description')->nullable();
            $table->string('currency');
            $table->decimal('amount', 12, 4)->default(0);
            $table->string('payment_method');
            $table->string('status_payment')->nullable();
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
        Schema::dropIfExists('payments');
    }
};

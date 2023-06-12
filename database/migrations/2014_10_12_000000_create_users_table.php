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
        Schema::create('users', function (Blueprint $table) {
            //------- PK & FK
            $table->id();
            $table->foreignId('current_team_id')->nullable();

            //------- Comuns
            $table->string('firstname');
            $table->string('lastname');
            $table->string('nickname')->unique();
            $table->string('email')->unique();
            $table->char('cellphone', 11)->unique();
            $table->string('password');
            $table->boolean('is_adm')->default(false);
            $table->string('profile_photo_path', 248)->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
            //$table->text('biography')->nullable();
            //$table->string('origin_country', 150)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};

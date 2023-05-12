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
            $table->string('nickname');
            $table->string('email')->unique();
            $table->char('cellphone', 11)->unique();
            $table->string('password');
            $table->string('origin_country', 150)->nullable();
            $table->text('biography')->nullable()->default('text');
            $table->string('profile_photo_path', 248)->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};

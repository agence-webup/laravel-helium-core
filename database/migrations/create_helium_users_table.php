<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('helium_users', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->rememberToken();

            $table->string('email')->unique();
            $table->string('password');
        });
    }

    public function down()
    {
        Schema::dropIfExists('helium_users');
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserLoginsTable extends Migration
{
    public function up()
    {
        Schema::create('user_logins', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained(); // Assuming your users table is 'users'
            $table->string('ip_address')->nullable();
            $table->timestamp('login_at')->nullable();
            $table->timestamp('logout_at')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('user_logins');
    }
}
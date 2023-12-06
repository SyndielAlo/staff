<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('resolutions', function (Blueprint $table) {
            $table->id();
            $table->string('res_number');
            $table->string('agenda');
            $table->date('res_date');
            $table->string('status');
            $table->string('encoded_by');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('resolutions');
    }
};

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
        Schema::create('tourists', function (Blueprint $table) {
            $table->id();
            $table->string('psevdoname');
            $table->string('surname');
            $table->string('name');
            $table->string('patronymic');
            $table->string('date');
            $table->string('gender');
            $table->string('nation');
            $table->string('number');
            $table->string('email');
            $table->string('id_user');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tourists');
    }
};

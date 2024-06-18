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
        Schema::create('ships', function (Blueprint $table) {
            $table->id();
            $table->integer('id_company');
            $table->string('name');
            $table->string('reiting');
            $table->integer('eco_class');
            $table->integer('bus_class');
            $table->integer('first_class');
            $table->string('description');
            $table->string('img_one');
            $table->string('img_two');
            $table->string('img_three');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ships');
    }
};

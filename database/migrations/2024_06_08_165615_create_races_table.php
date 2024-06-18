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
        Schema::create('races', function (Blueprint $table) {
            $table->id();
            $table->string('otcuda');
            $table->string('cuda');
            $table->string('time_otb');
            $table->string('time_prib');
            $table->integer('company');
            $table->integer('ship');
            $table->string('cost_ec');
            $table->string('cost_bus');
            $table->string('cost_first');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('races');
    }
};

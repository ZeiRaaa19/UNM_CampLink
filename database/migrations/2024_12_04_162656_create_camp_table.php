<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('camp', function (Blueprint $table) {
        $table->id();
        $table->string('nama', 100);
        $table->integer('kapasitas');
        $table->enum('status', ['Tersedia', 'Tidak Tersedia'])->default('Tersedia');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('camp');
    }
};

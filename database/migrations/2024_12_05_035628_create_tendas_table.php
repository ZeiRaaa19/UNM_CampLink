<?php

// database/migrations/2024_12_05_000005_create_tendas_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTendasTable extends Migration
{
    public function up()
    {
        Schema::create('tendas', function (Blueprint $table) {
            $table->id();
            $table->string('nama_tipe');
            $table->decimal('harga', 10, 2);
            $table->text('deskripsi');
            $table->integer('jumlah_camp');
            $table->string('foto')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tendas');
    }
}
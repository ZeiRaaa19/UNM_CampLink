<?php

// database/migrations/2024_12_05_000007_create_reports_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportsTable extends Migration
{
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->foreignId('admin_id')->constrained()->onDelete('cascade');
            $table->string('report_type')->nullable();
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('reports');
    }
}
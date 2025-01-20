<?php

// database/migrations/2024_12_05_000006_create_transactions_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('booking_id')->constrained()->onDelete('cascade');
            $table->decimal('amount', 10, 2);
            $table->string('payment_method')->nullable();
            $table->enum('status', ['success', 'failed', 'pending'])->default('pending');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
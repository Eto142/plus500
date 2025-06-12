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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('currency_type'); // ETH, BTC, etc.
            $table->decimal('crypto_amount', 18, 10);
            $table->enum('transaction_type', ['ADD', 'SUBTRACT']);
            $table->decimal('usd_value', 18, 2)->nullable();
            $table->decimal('usdt_balance', 18, 8)->nullable();
            $table->decimal('btc_balance', 18, 8)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};

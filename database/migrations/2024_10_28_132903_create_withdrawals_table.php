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
        Schema::create('withdrawals', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('method');  // Stores the selected cryptocurrency
            $table->string('crypto');  // Stores the selected cryptocurrency
            $table->string('wallet');  // Stores the wallet address
            $table->decimal('amount', 15, 2);  // Withdrawal amount
            $table->string('status')->default('0');  // Withdrawal status
            $table->string('transaction_id')->nullable();  // Optional transaction ID for blockchain reference
            $table->timestamps();

            // Foreign key to the users table
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('withdrawals');
    }
};

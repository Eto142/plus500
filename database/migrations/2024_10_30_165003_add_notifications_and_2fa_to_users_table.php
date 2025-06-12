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
        Schema::table('users', function (Blueprint $table) {
            // Add a boolean column to track if notifications are enabled
            $table->boolean('user_notification')->default(0);

            // Add a boolean column to track if two-factor authentication is enabled
            $table->boolean('user_authentication')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Drop the columns if they exist during rollback
            $table->dropColumn('user_notification');
            $table->dropColumn('user_authentication');
        });
    }
};

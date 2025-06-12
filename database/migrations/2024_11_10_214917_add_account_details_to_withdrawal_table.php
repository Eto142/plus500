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
    Schema::table('withdrawals', function (Blueprint $table) {
        $table->string('method');  // Stores the method
        $table->string('account_name');  // Stores the account name
        $table->string('account_number');  // Stores the account number
        $table->string('branch_name'); 
        $table->string('ifsc_code'); 
        $table->string('bank_address'); 
        $table->string('bank_name');  // Stores the bank name
        $table->string('routing_number');  // Stores the routing number
    });
}

public function down()
{
    Schema::table('withdrawals', function (Blueprint $table) {
        $table->dropColumn(['account_name', 'method', 'account_number', 'branch_name', 'ifsc_code',  'bank_address','bank_name', 'routing_number']);
    });
}
};
